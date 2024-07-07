<?php
// Include your database configuration file
include('includes/config.php');

// Fetch only confirmed schedule information from the database
$query = "SELECT title, start_datetime, end_datetime FROM schedule_list WHERE confirmation_status = 'Confirmed'";
$result = $con->query($query);

// Prepare an array to hold the fetched data
$schedules = array();

if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Format the datetime strings as needed
        $row['startDateTime'] = date("F d, Y h:i A", strtotime($row['start_datetime']));
        $row['endDateTime'] = date("F d, Y h:i A", strtotime($row['end_datetime']));
        
        // Add the formatted row to the schedules array
        $schedules[] = $row;
    }
}

// Close the database connection
$con->close();

// Return the schedules array as JSON
echo json_encode(array('schedules' => $schedules));
?>

