<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include your database configuration file
    include('includes/config.php');

    // Retrieve form data
    $title = $_POST['title'];
    $description = $_POST['description'];
    $start_datetime = $_POST['start_datetime'];
    $end_datetime = $_POST['end_datetime'];

    // File upload handling
    $targetDir = "images/"; // Update the target directory
    $allowTypes = array('jpg', 'jpeg', 'png', 'gif', 'mp4');

    // Initialize an array to store uploaded file names
    $uploadedFiles = array();

    // Loop through each uploaded file
    foreach ($_FILES as $key => $value) {
        $fileName = basename($_FILES[$key]["name"]);
        $targetFilePath = $targetDir . $fileName;
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

        // Generate a unique file name to avoid conflicts
        $uniqueFileName = uniqid() . '.' . $fileType;
        $targetFilePath = $targetDir . $uniqueFileName;

        // Check if file type is allowed
        if (in_array($fileType, $allowTypes)) {
            // Upload file to server
            if (move_uploaded_file($_FILES[$key]["tmp_name"], $targetFilePath)) {
                $uploadedFiles[$key] = $uniqueFileName; // Store the unique file name
            }
        }
    }

    // Set confirmation status
    $confirmation_status = 'confirmed';

    // Insert data into the database
    $query = $con->prepare("INSERT INTO schedule_list (title, description, start_datetime, end_datetime, image1, image2, image3, video, confirmation_status) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $query->bind_param("sssssssss", $title, $description, $start_datetime, $end_datetime, $uploadedFiles['image1'], $uploadedFiles['image2'], $uploadedFiles['image3'], $uploadedFiles['video'], $confirmation_status);

    if ($query->execute()) {
        // Success message
        echo "Schedule saved successfully.";
        
        // Redirect to schedule.php
        header("Location: schedule.php");
        exit(); // Ensure no further execution
    } else {
        // Error message
        echo "Error: Unable to save schedule.";
    }

    // Close prepared statement
    $query->close();

    // Close database connection
    $con->close();
}
?>
