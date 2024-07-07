<?php
include('includes/config.php');

// Assuming $title, $id, $startDateTime, and $endDateTime are already defined

?>


<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Phinma Araullo University | Bulletin</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
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
            border-width: 1px !important;
        }
        #calendar {
        width: 100%; /* Make the calendar occupy the full width of its container */
        height: 800px; /* Set a fixed height for the calendar */
        /* You can adjust the height value as needed */
    }
    </style>
  </head>
  <?php include('includes/header.php');?>

<body class="bg-light">

<div class="container py-5" id="page-container">
    <div class="row">
 
        <div class="col-md-3 order-md-1">
            <div class="card rounded-0 shadow">
                <div class="card-header bg-gradient" style="background-color: #211C6A;">
                    <h5 class="card-title text-light">Event Images</h5>
                </div>
                <div class="card-body">
                <div class="container-fluid" style="background-color: #211C6A;">
                        <!-- Carousel -->
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="width: 100%; height: 160px;">
    <div class="carousel-inner">
        <!-- Images will be dynamically added here -->
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="description-container" style="color: white;">
    <!-- Description will be dynamically added here -->
</div>


                        <!-- End Carousel -->
                    </div>
                </div>
            </div>
      
            


            <div class="card rounded-0 shadow mt-3">
    <div class="card-header bg-gradient" style="background-color: #211C6A;">
        <h5 class="card-title text-light">Event Videos</h5>
    </div>
    <div class="card-body">
    <div class="container-fluid" style="background-color: #211C6A;">
            <div id="video-container" style="width: 100%; height: 160px;">
                <!-- Videos will be dynamically added here -->
            </div>
    
    


                            </div>
                            </form>
                        </div>
                    </div>
                </div>
      
         
      
            <!-- Middle: Calendar -->
            <div class="col-md-6 order-md-2 text-center">
                <div id="calendar"></div>
                <ul class="nav navbar-nav" style="width: 100%; margin-top: 0px; color: #211C6A;">
    <marquee id="scheduleMarquee" behavior="scroll" direction="left" onmouseover="stopMarquee()" onmouseout="startMarquee()" scrollamount="3" scrolldelay="30">
        <b>New Announcement!</b>
        <img src="images/mege.png" alt="" style="margin-right: 10px; width: 20px; height: 20px;">
        <span id="scheduleInfo"></span>
    </marquee>
</ul>
            </div>

            <!-- Right side: Events and Schedule Form -->
            <div class="col-md-3 order-md-3">
                <div class="card rounded-0 shadow">
                <div class="card-header bg-gradient" style="background-color: #211C6A;">
                        <h5 class="card-title text-light">Add Events</h5>
                    </div>
                    <div class="card-body">
                        <div class="container-fluid">
                            <form action="save_schedule.php" method="post" id="schedule-form">
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
                                <div class="card-footer">
                                    <div class="text-center">
                                        <button class="btn btn-primary btn-sm rounded-0" type="submit" id="submitBtn"><i class="fa fa-save"></i> Save</button>
                                    </div>
                                </div>
                        </div>
</div>        
</div>   
                <div class="card rounded-0 shadow mt-3">
    <div class="card-header bg-gradient" style="background-color: #211C6A;">
                        <h5 class="card-title text-light">Events</h5>
                    </div>
                    <div class="card-body">
                        <div class="container-fluid">
                            <ul class="list-group">
                                <?php
                                // Assuming $con is your database connection
                                $result = $con->query("SELECT title, start_datetime FROM schedule_list WHERE confirmation_status = 'Confirmed' ORDER BY start_datetime");

                                if ($result && $result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        $title = $row['title'];
                                        $startDateTime = date("F d, Y", strtotime($row['start_datetime']));
                                        echo "<li class='list-group-item'>$title - Start: $startDateTime</li>";
                                    }
                                } else {
                                    echo "<li class='list-group-item'>No confirmed schedules found</li>";
                                }
                                ?>
                            </ul>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>


<script>
    document.addEventListener('DOMContentLoaded', function () {
        var submitBtn = document.getElementById('submitBtn');
        if (submitBtn) {
            submitBtn.addEventListener('click', function (event) {
                // Prompt the user for confirmation
                var confirmation = confirm('Do you want to add this event?');
                if (!confirmation) {
                    event.preventDefault(); // Prevent form submission if user cancels
                }
            });
        }
    });
</script>





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
                <div class="modal-footer rounded-0">
                    <div class="text-end">
                        
                        <button type="button" class="btn btn-secondary btn-sm rounded-0" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Event Details Modal -->





  
    <!-- Footer -->
 <?php include('includes/footer.php');?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
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
  <script>
function fetchScheduleInfo() {
    fetch('fetch_schedule_info.php') // Adjust the URL accordingly
    .then(response => response.json())
    .then(data => {
        const schedules = data.schedules;
        const scheduleMarquee = document.getElementById('scheduleMarquee');
        const scheduleInfoSpan = document.getElementById('scheduleInfo');

        if (schedules.length > 0) {
            let currentIndex = 0;

            scheduleInfoSpan.innerHTML = `${schedules[currentIndex].title} - Start: ${schedules[currentIndex].startDateTime} - End: ${schedules[currentIndex].endDateTime}`;

            setInterval(() => {
                currentIndex = (currentIndex + 1) % schedules.length;
                scheduleInfoSpan.innerHTML = `${schedules[currentIndex].title} - Start: ${schedules[currentIndex].startDateTime} - End: ${schedules[currentIndex].endDateTime}`;
            }, 30000); // 30 seconds
        } else {
            // If there are no confirmed schedules, display a message or handle it accordingly
            scheduleInfoSpan.innerHTML = "No confirmed schedules found";
        }
    })
    .catch(error => {
        console.error('Error fetching schedule info:', error);
    });
}

fetchScheduleInfo(); // Call the function to initiate fetching



</script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    // Fetch images and description
    fetch('fetch_images.php')
    .then(response => response.json())
    .then(data => {
        const carouselInner = document.querySelector('.carousel-inner');
        const descriptionContainer = document.querySelector('.description-container');

        // Clear existing carousel items and description
        carouselInner.innerHTML = '';
        descriptionContainer.innerHTML = '';

        // Add images to carousel
        data.imageUrls.forEach((imageUrl, index) => {
            const carouselItem = document.createElement('div');
            carouselItem.classList.add('carousel-item');
            if (index === 0) {
                carouselItem.classList.add('active');
            }
            const img = document.createElement('img');
            img.src = imageUrl;
            img.classList.add('d-block', 'w-100'); // Bootstrap 4 class for responsive images
            carouselItem.appendChild(img);
            carouselInner.appendChild(carouselItem);
        });

        // Add description
        const description = data.description;
        if (description) {
            const descriptionElement = document.createElement('div');
            descriptionElement.classList.add('description');
            descriptionElement.textContent = description;
            descriptionContainer.appendChild(descriptionElement);
        }
    })
    .catch(error => {
        console.error('Error fetching images:', error);
    });

    // Function to remove expired images and description
    setInterval(function () {
        const carouselItems = document.querySelectorAll('.carousel-item');
        const currentDateTime = new Date();
        carouselItems.forEach(carouselItem => {
            const endDateTimeString = carouselItem.dataset.enddatetime;
            const endDateTime = new Date(endDateTimeString);
            if (endDateTime < currentDateTime) {
                carouselItem.remove();
                const descriptionElement = document.querySelector('.description');
                if (descriptionElement) {
                    descriptionElement.remove();
                }
            }
        });
    }, 60000); // Check every minute for expired images
});

</script>
<script>
 document.addEventListener('DOMContentLoaded', function () {
    // Function to fetch videos
    function fetchVideos() {
        fetch('fetch_videos.php')
        .then(response => response.json())
        .then(videoUrls => {
            const videoContainer = document.getElementById('video-container');
            videoContainer.innerHTML = '';

            // Iterate over fetched video URLs
            videoUrls.forEach(videoUrl => {
                const videoElement = document.createElement('video');
                videoElement.src = videoUrl;
                videoElement.controls = true; // Enable video controls
                videoElement.autoplay = true; // Autoplay the video
                videoElement.loop = true; // Loop the video
                videoElement.classList.add('d-block', 'w-100'); // Bootstrap 4 class for responsive videos

                // Create video wrapper
                const videoWrapper = document.createElement('div');
                videoWrapper.classList.add('video-wrapper');
                videoWrapper.appendChild(videoElement);
                videoContainer.appendChild(videoWrapper);

                // Check if the video has reached its endDateTime
                setInterval(() => {
                    const currentDateTime = new Date();
                    const endDateTimeString = videoElement.dataset.enddatetime;
                    const endDateTime = new Date(endDateTimeString);
                    if (endDateTime < currentDateTime) {
                        // Remove the video
                        videoContainer.removeChild(videoWrapper);
                    }
                }, 60000); // Check every minute
            });
        })
        .catch(error => {
            console.error('Error fetching videos:', error);
        });
    }

    // Fetch videos initially
    fetchVideos();

    // Periodically fetch and update videos
    setInterval(fetchVideos, 60000); // Fetch every minute
});


</script>
</html>