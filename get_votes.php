<?php
// Connect to your XAMPP server
$servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "candid1";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch the vote count for each candidate
$sql = "SELECT candidate, COUNT(*) as count FROM votes GROUP BY candidate";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $voteCounts = array();
    while ($row = $result->fetch_assoc()) {
        $voteCounts[] = array("candidate" => $row["candidate"], "count" => $row["count"]);
    }
    echo json_encode($voteCounts);
} else {
    echo json_encode(array());
}

$conn->close();
