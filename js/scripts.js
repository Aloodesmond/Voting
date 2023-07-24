document.addEventListener("DOMContentLoaded", function () {
    const voteButtons = document.querySelectorAll(".vote-btn");
    const voteResults = document.getElementById("vote-results");
    const prevButton = document.querySelector(".prev-btn");
    const nextButton = document.querySelector(".next-btn");
  
    let currentCandidate = 1;
  
    // Function to update vote count
    function updateVoteCount() {
      fetch("get_votes.php")
        .then((response) => response.json())
        .then((data) => {
          voteResults.innerHTML = "";
          data.forEach((result) => {
            const candidateElement = document.createElement("p");
            candidateElement.textContent =
              "Candidate " + result.candidate + ": " + result.count + " votes";
            voteResults.appendChild(candidateElement);
          });
        });
    }
  
    // Initial vote count update
    updateVoteCount();
  
    // Add event listeners to vote buttons
    voteButtons.forEach((button) => {
      button.addEventListener("click", function () {
        const candidateNumber = this.dataset.candidate;
        voteCandidate(candidateNumber);
      });
    });
  
    // Function to handle vote submission
    function voteCandidate(candidate) {
      fetch("vote.php", {
        method: "POST",
        headers: {
          "Content-Type": "application/x-www-form-urlencoded",
        },
        body: "candidate=" + candidate,
      })
        .then((response) => response.text())
        .then((data) => {
          console.log(data);
          updateVoteCount();
        });
    }
  
    // Update navigation buttons
    function updateNavigationButtons() {
      prevButton.disabled = currentCandidate === 1;
      nextButton.disabled = currentCandidate === 3;
    }
  
    // Add event listeners to navigation buttons
    prevButton.addEventListener("click", function () {
      if (currentCandidate > 1) {
        currentCandidate--;
        updateNavigationButtons();
      }
    });
  
    nextButton.addEventListener("click", function () {
      if (currentCandidate < 3) {
        currentCandidate++;
        updateNavigationButtons();
      }
    });
  
    updateNavigationButtons();
  });
  