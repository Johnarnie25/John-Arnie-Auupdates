<?php
// Include your database configuration file
include('includes/config.php');

// Fetch data for image1, image2, image3, description, start_datetime, and end_datetime
$query = "SELECT image1, image2, image3, description, start_datetime, end_datetime FROM schedule_list WHERE start_datetime <= NOW() AND end_datetime >= NOW() LIMIT 1";
$result = $con->query($query);

$data = [];
if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    // Assuming 'admin/images/' is the directory where your images are stored
    $data['imageUrls'] = [
        'admin/images/' . $row['image1'],
        'admin/images/' . $row['image2'],
        'admin/images/' . $row['image3']
    ];
    $data['description'] = $row['description'];
}

echo json_encode($data);
?>
