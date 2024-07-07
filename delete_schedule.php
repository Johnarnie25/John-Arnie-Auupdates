<?php 
require_once('includes/config.php');
if(!isset($_GET['id'])){
    echo "<script> alert('Undefined Schedule ID.'); location.replace('./') </script>";
    $con->close(); // Change $conn to $con
    exit;
}

$delete = $con->query("DELETE FROM `schedule_list` where id = '{$_GET['id']}'"); // Change $conn to $con
if($delete){
    echo "<script> alert('Event has deleted successfully.'); location.replace('./') </script>";
}else{
    echo "<pre>";
    echo "An Error occurred.<br>";
    echo "Error: ".$con->error."<br>"; // Change $conn to $con
    echo "SQL: ".$sql."<br>";
    echo "</pre>";
}
$con->close(); // Change $conn to $con
?>
