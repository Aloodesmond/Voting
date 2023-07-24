<!DOCTYPE html>
<html>
<head>
  <title>School Voting System</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="container">
    <h1>School Voting System</h1>

    <div class="candidates row">
      <div class="candidate col-md-4">
        <img src="images/teen.jpg" alt="Candidate 1">
        <h2>Mary Joseph</h2>
        <p>University President Candidate</p>
        <button class="btn btn-primary vote-btn" data-candidate="1">Vote</button>
      </div>
      <div class="candidate col-md-4">
        <img src="images/images.jpg" alt="Candidate 2">
        <h2>Victor John</h2>
        <p>University President Candidate</p>
        <button class="btn btn-primary vote-btn" data-candidate="2">Vote</button>
      </div>
      <div class="candidate col-md-4">
        <img src="images/download.png" alt="Candidate 3">
        <h2>David </h2>
        <p>University President Candidate</p>
        <button class="btn btn-primary vote-btn" data-candidate="3">Vote</button>
      </div>
    </div>

    <div class="vote-count">
      <h2>Vote Count</h2>
      <div id="vote-results">
        <!-- The vote count will be loaded here -->
      </div>
    </div>

    <div class="navigation">
      <button class="btn btn-primary prev-btn">Previous</button>
      <button class="btn btn-primary next-btn">Next</button>
    </div>
  </div>

  <script src="js/scripts.js"></script>
</body>
</html>
