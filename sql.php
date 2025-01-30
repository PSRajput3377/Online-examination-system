<?php
$host = "localhost";
$user = "root";
$ps = ""; // Keep empty if no MySQL password is set
$project = "project_db"; // Ensure this matches the actual database name

$conn = mysqli_connect($host, $user, $ps, $project);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
