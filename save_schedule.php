<?php
include('includes/config.php');

// Check if form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate input
    $title = $_POST['title'];
    $description = $_POST['description'];
    $start_datetime = $_POST['start_datetime'];
    $end_datetime = $_POST['end_datetime'];
    
    // Perform validation as needed...

    // Set confirmation status to Pending (unconfirmed)
    $confirmation_status = 'Pending'; 

    // Insert data into the database
    $stmt = $con->prepare("INSERT INTO schedule_list (title, description, start_datetime, end_datetime, confirmation_status) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $title, $description, $start_datetime, $end_datetime, $confirmation_status);
    
    // Execute the statement
    if($stmt->execute()){
        // Data inserted successfully
        // Redirect to a confirmation page or perform any other action
        header("Location: bulletin.php");
        exit();
    } else {
        // Error occurred
        echo "Error: " . $stmt->error;
    }

    // Close statement
    $stmt->close();
}

// Close connection
$con->close();
?>

