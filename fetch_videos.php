<?php
// Include your database configuration file
include('includes/config.php');

// Fetch data for video column
$query = "SELECT video FROM schedule_list WHERE start_datetime <= NOW() AND end_datetime >= NOW() LIMIT 1";
$result = $con->query($query);

$videoUrls = [];
if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    // Assuming the videos are stored in the 'admin/images/' directory
    $videoUrls[] = 'admin/images/' . $row['video']; // Update the directory if needed
}

echo json_encode($videoUrls);
?>
