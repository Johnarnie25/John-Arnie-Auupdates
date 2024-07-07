<?php 
require_once('includes/config.php');

if (!isset($_GET['id'])) {
    echo "<script> alert('Undefined Schedule ID.'); location.replace('./schedule.php') </script>";
    $con->close();
    exit;
}

$id = $_GET['id'];
$delete = $con->query("DELETE FROM `schedule_list` where id = '$id'");
if ($delete) {
    echo "<script> alert('Event has been deleted successfully.'); location.replace('./schedule.php') </script>";
} else {
    echo "<pre>";
    echo "An Error occurred.<br>";
    echo "Error: ".$con->error."<br>";
    echo "SQL: DELETE FROM `schedule_list` WHERE id = '$id'<br>";
    echo "</pre>";
}
$con->close();
?>

