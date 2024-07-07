<?php
// Include your database connection file
include('includes/config.php');

// Fetch post titles from the database
$query = mysqli_query($con, "SELECT PostTitle FROM tblposts WHERE Is_Active = 1"); // Adjust table and column names as per your schema
$postTitles = array();

while ($row = mysqli_fetch_assoc($query)) {
    $postTitles[] = $row['PostTitle'];
}

// Return post titles as JSON
header('Content-Type: application/json');
echo json_encode(array('postTitles' => $postTitles));
?>
