<?php
session_start();
include('includes/config.php');
error_reporting(0);

if (strlen($_SESSION['login']) == 0) {
    header('location: confirmationschedule.php');
} else {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Process form submission

        // Validate and sanitize form inputs
        $title = $_POST['title'];
        $description = $_POST['description'];
        $start_datetime = $_POST['start_datetime'];
        $end_datetime = $_POST['end_datetime'];

        // Confirmation logic
        // You can implement your own confirmation mechanism here

        // If confirmed, insert the schedule into the database
        $query = "INSERT INTO schedule_list (title, description, start_datetime, end_datetime, confirmed) VALUES (?, ?, ?, ?, ?)";
        $stmt = $con->prepare($query);
        $stmt->bind_param("ssssi", $title, $description, $start_datetime, $end_datetime, $confirmed);

        // Assign values to $confirmed based on confirmation logic

        if ($stmt->execute()) {
            $msg = "Schedule added and pending confirmation";
        } else {
            $error = "Error adding schedule";
        }

        // Close statement
        $stmt->close();
    }
    if ($_GET['disid']) {
        $id = intval($_GET['disid']);
        $query = mysqli_query($con, "UPDATE schedule_list SET confirmed='0' WHERE id='$id'");
        $msg = "Schedule unapproved";
    }
    // Code for restore
  // Code for restore
if ($_GET['appid']) {
    $id = intval($_GET['appid']);
    $query = mysqli_query($con, "UPDATE schedule_list SET confirmed='1' WHERE id='$id'");
    $msg = "Schedule approved";

    // Update the confirmation status directly in the database
    if ($query) {
        $update_query = mysqli_query($con, "UPDATE schedule_list SET confirmation_status='Confirmed' WHERE id='$id'");
        if ($update_query) {
            $msg .= " and confirmation status updated";
        } else {
            $error .= " Error updating confirmation status";
        }
    } else {
        $error .= " Error approving schedule";
    }

    header('Location: ' . $_SERVER['PHP_SELF']);
    exit();
}

    // Code for deletion
    if ($_GET['action'] == 'del' && $_GET['rid']) {
        $id = intval($_GET['rid']);
        $query = mysqli_query($con, "DELETE FROM schedule_list WHERE id='$id'");
        $delmsg = "Schedule deleted forever";
    }
?>

<?php include('includes/topheader.php');?>
<!-- ========== Left Sidebar Start ========== -->
<?php include('includes/leftsidebar.php');?>
<!-- Left Sidebar End -->
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Manage Post Schedule</h4>
                        <ol class="breadcrumb p-0 m-0">
                            <li>
                                <a href="#">Admin</a>
                            </li>
                            <li>
                                <a href="#"> Student</a>
                            </li>
                            <li class="active">
                                Confirmation Schedule
                            </li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->
            <div class="row">
                <div class="col-sm-6">
                    <?php if ($msg) { ?>
                    <div class="alert alert-success" role="alert">
                        <strong>Well done!</strong> <?php echo htmlentities($msg);?>
                    </div>
                    <?php } ?>
                    <?php if ($delmsg) { ?>
                    <div class="alert alert-danger" role="alert">
                        <strong>Oh snap!</strong> <?php echo htmlentities($delmsg);?>
                    </div>
                    <?php } ?>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="demo-box m-t-20">
                            <div class="table-responsive">
                                <table class="table m-0 table-bordered" id="example">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Start DateTime</th>
                                            <th>End DateTime</th>
                                            <th>Confirmation Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $query = mysqli_query($con, "SELECT * FROM schedule_list");
                                        $cnt = 1;
                                        while ($row = mysqli_fetch_array($query)) {
                                        ?>
                                        <tr>
                                            <th scope="row"><?php echo htmlentities($cnt);?></th>
                                            <td><?php echo htmlentities($row['title']);?></td>
                                            <td><?php echo htmlentities($row['description']);?></td>
                                            <td><?php echo htmlentities($row['start_datetime']);?></td>
                                            <td><?php echo htmlentities($row['end_datetime']);?></td>
                                            <td>
                                                <?php 
                                                if ($row['confirmed'] == '1') {
                                                    echo '<span class="badge badge-success">Confirmed</span>';
                                                } else {
                                                    echo '<span class="badge badge-secondary">Pending</span>';
                                                }
                                                ?>
                                            </td>
                                            <td width="100px">
                                                <?php if ($row['confirmed'] == '0') { ?>
                                                <a class="btn btn-primary btn-sm" href="?appid=<?php echo htmlentities($row['id']);?>" title="Approve Schedule"><i class="ion-arrow-return-right"></i></a>
                                                <?php } ?>
                                                <a class="btn btn-danger btn-sm" href="?rid=<?php echo htmlentities($row['id']);?>&action=del" title="Delete Schedule"><i class="fa fa-trash-o"></i></a> 
                                            </td>
                                        </tr>
                                        <?php
                                        $cnt++;
                                        } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!--- end row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="demo-box m-t-20">
                            <div class="m-b-30">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- container -->
        </div>
        <!-- content -->
        <?php include('includes/footer.php');?>
<?php } ?>
