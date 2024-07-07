<?php
   session_start();
   include('includes/config.php');
   error_reporting(0);
   if(strlen($_SESSION['login'])==0)
     { 
   header('location:schedule.php');
   }
   else{
       ?>
<?php include('includes/topheader1.php');?>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
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
         
               </div>
            </div>
         </div>

         <!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Phinma Araullo University | Bulletin</title>

    <!-- Bootstrap core CSS -->
   
    <link rel="stylesheet" href="./css1/bootstrap.min.css">
    <link rel="stylesheet" href="./fullcalendar1/lib/main.min.css">
    <script src="./js1/jquery-3.6.0.min.js"></script>
    <script src="./js1/bootstrap.min.js"></script>
    <script src="./js1/bootstrap.min.js"></script>
    <script src="./fullcalendar1/lib/main.min.js"></script>
    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link rel="stylesheet" href="css/icons.css">
    <style>
        :root {
            --bs-success-rgb: 71, 222, 152 !important;
        }

        html,
        body {
            height: 100%;
            width: 100%;
           
        }

        .btn-info.text-light:hover,
        .btn-info.text-light:focus {
            background: #000;
        }
        table, tbody, td, tfoot, th, thead, tr {
            border-color: #ededed !important;
            border-style: solid;
            border-width: 2px !important;
        }
    </style>
  </head>
  <?php include('includes/header.php');?>
  <section>
  <body class="bg-light">
    
  <div class="container py-5" id="page-container">
    <div class="row">
        <div class="col-md-9">
            <div id="calendar"></div>
        </div>
        <div class="col-md-3">
            <div class="cardt rounded-0 shadow">
                <div class="card-header bg-gradient" style="background-color: #211C6A;">
                    <h5 class="card-title text-light">Add Events</h5>
                </div>
                <div class="card-body">
                    <div class="container-fluid">
                        <!-- Modify the form action attribute to point to schedule.php -->
                        <form action="save_schedule.php" method="post" id="schedule-form" enctype="multipart/form-data">

                            <input type="hidden" name="id" value="">
                            <div class="form-group mb-2">
                                <label for="title" class="control-label">Title</label>
                                <input type="text" class="form-control form-control-sm rounded-0" name="title" id="title" required>
                            </div>
                            <div class="form-group mb-2">
                                <label for="description" class="control-label">Description</label>
                                <textarea rows="3" class="form-control form-control-sm rounded-0" name="description" id="description" required></textarea>
                            </div>
                            <div class="form-group mb-2">
                                <label for="start_datetime" class="control-label">Start</label>
                                <input type="datetime-local" class="form-control form-control-sm rounded-0" name="start_datetime" id="start_datetime" required>
                            </div>
                            <div class="form-group mb-2">
                                <label for="end_datetime" class="control-label">End</label>
                                <input type="datetime-local" class="form-control form-control-sm rounded-0" name="end_datetime" id="end_datetime" required>
                            </div>
                            <!-- Input fields for uploading images -->
                            <div class="form-group mb-2">
                                <label for="image1" class="control-label">Image 1</label>
                                <input type="file" class="form-control-file" name="image1" id="image1">
                            </div>
                            <div class="form-group mb-2">
                                <label for="image2" class="control-label">Image 2</label>
                                <input type="file" class="form-control-file" name="image2" id="image2">
                            </div>
                            <div class="form-group mb-2">
                                <label for="image3" class="control-label">Image 3</label>
                                <input type="file" class="form-control-file" name="image3" id="image3">
                            </div>
                            <!-- Input field for uploading video -->
                            <div class="form-group mb-2">
                                <label for="video" class="control-label">Video</label>
                                <input type="file" class="form-control-file" name="video" id="video">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="text-center">
                        <button class="btn btn-primary btn-sm rounded-0" type="submit" form="schedule-form"><i class="fa fa-save"></i> Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Event Details Modal -->
    <div class="modal fade" tabindex="-1" data-bs-backdrop="static" id="event-details-modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-0">
                <div class="modal-header rounded-0">
                    <h5 class="modal-title">Schedule Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body rounded-0">
                    <div class="container-fluid">
                        <dl>
                            <dt class="text-muted">Title</dt>
                            <dd id="title" class="fw-bold fs-4"></dd>
                            <dt class="text-muted">Description</dt>
                            <dd id="description" class=""></dd>
                            <dt class="text-muted">Start</dt>
                            <dd id="start" class=""></dd>
                            <dt class="text-muted">End</dt>
                            <dd id="end" class=""></dd>
                        </dl>
                    </div>
                </div>
                <div class="modal-footer">
    <div class="text-right">
        <button type="button" class="btn btn-primary btn-sm" id="edit" data-id="">Edit</button>
        <button type="button" class="btn btn-danger btn-sm" id="delete" data-id="">Delete</button>
        
    </div>
</div>

                </div>
            </div>
        </div>
    </div>
    </section>

          
   <!-- content -->
   <?php include('includes/footer.php');?>

</div>
<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->
<!-- Right Sidebar -->

<!-- /Right-bar -->
</div>
<!-- END wrapper -->
<?php 
// Assuming $con is your database connection

// Prepare and execute the query to select confirmed schedules
$query = "SELECT * FROM `schedule_list` WHERE confirmation_status = 'Confirmed'";
$schedules = $con->query($query);

// Check if there are any schedules
if ($schedules && $schedules->num_rows > 0) {
    // Initialize an empty array to store the schedule data
    $sched_res = [];

    // Loop through the fetched rows
    while ($row = $schedules->fetch_assoc()) {
        // Format start and end dates
        $row['sdate'] = date("F d, Y h:i A", strtotime($row['start_datetime']));
        $row['edate'] = date("F d, Y h:i A", strtotime($row['end_datetime']));
        
        // Add the row to the result array
        $sched_res[$row['id']] = $row;
    }
} else {
    // If no confirmed schedules found, initialize an empty array
    $sched_res = [];
}
?>
</body>
<script>
    var scheds = $.parseJSON('<?= json_encode($sched_res) ?>')
</script>
<script src="./js1/script.js"></script>
  </body>
 

</html>

<?php } ?>
