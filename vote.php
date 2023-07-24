<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["candidate"])) {
    $candidate = $_POST["candidate"];

    // Connect to your XAMPP server
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "candid1";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert the vote into the database
    $sql = "INSERT INTO votes (candidate) VALUES ('$candidate')";
    if ($conn->query($sql) === TRUE) {
        echo "Vote recorded successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
