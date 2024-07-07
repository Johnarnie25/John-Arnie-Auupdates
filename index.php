<?php 
   session_start();
   include('includes/config.php');
   
       ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>Phinma Araullo University | Home Page</title>
      <!-- Bootstrap core CSS -->
      <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <!-- Custom styles for this template -->
      <link href="css/modern-business.css" rel="stylesheet">
      <link rel="stylesheet" href="css/icons.css">
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
   </head>
   <body>
      <!-- Navigation -->
      <?php include('includes/header.php');?>
      <!-- Page Content -->
      <div class="container-fluid">
         <div class="row" style="margin-top: 4%">
            <!-- Blog Entries Column -->
            <div class="col-md-2 mt-4">
               <!-- Categories Widget -->
               <div class="card my-4 border-0" >
                  <h5 class="card-header bg-white border-0">Categories</h5>
                  <div class="card-body">
                     <div class="row">
                        <div class="col-lg-12">
                           <ul class="list-unstyled mb-0">
                              <?php $query=mysqli_query($con,"select id,CategoryName from tblcategory");
                                 while($row=mysqli_fetch_array($query))
                                 {
                                 ?>
                              <li class=" mb-2">
                                 <a href="category.php?catid=<?php echo htmlentities($row['id'])?>" class="text-secondary"><?php echo htmlentities($row['CategoryName']);?></a>
                              </li>
                              <?php } ?>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-7">
            <h4 class="widget-title mb-4">Today Highlight</span></h4>
               <!-- Blog Post -->
               <div class="row">
                  <div class="owl-carousel owl-theme" id="slider">
                     <div class="card mb-4 border-0">
                     <img class="card-img-top" src="admin/postimages/10.jpg" alt="" width="200" height="700">
                        <div class="card-body">
                           <p class="m-0">
                              <!--category-->
                              <a class="badge bg-success text-decoration-none link-light" href="#" style="color:#fff">Phinma Araullo University Facilities</a>
                              <!--Subcategory--->
                           </p>
                           <p class="m-0"><small> Posted Today</small></p>
                           <a href="#" class="card-title text-decoration-none text-dark">
                              <h5 class="card-title">Welcome to Phinma Araullo University</h5>
                           </a>
                           <!-- <a href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>" class="">Read More &rarr;</a> -->
                        </div>
                     </div>
                     <div class="card mb-4 border-0">
                     <img class="card-img-top" src="admin/postimages/11.jpg" alt="" width="200" height="700">
                        <div class="card-body">
                           <p class="m-0">
                              <!--category-->
                              <a class="badge bg-success text-decoration-none link-light" href="#" style="color:#fff">Phinma Araullo University Facilities</a>
                              <!--Subcategory--->
                           </p>
                           <p class="m-0"><small> Posted Today</small></p>
                           <a href="#" class="card-title text-decoration-none text-dark">
                              <h5 class="card-title">Welcome to Phinma Araullo University</h5>
                           </a>
                           <!-- <a href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>" class="">Read More &rarr;</a> -->
                        </div>
                     </div>
                     <div class="card mb-4 border-0">
                     <img class="card-img-top" src="admin/postimages/12.jpg" alt="" width="200" height="700">
                        <div class="card-body">
                           <p class="m-0">
                              <!--category-->
                              <a class="badge bg-success text-decoration-none link-light" href="#" style="color:#fff">Phinma Araullo University Facilities</a>
                              <!--Subcategory--->
                           </p>
                           <p class="m-0"><small> Posted Today</small></p>
                           <a href="#" class="card-title text-decoration-none text-dark">
                              <h5 class="card-title">Welcome to Phinma Araullo University</h5>
                           </a>
                           <!-- <a href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>" class="">Read More &rarr;</a> -->
                        </div>
                     </div>
                     <div class="card mb-4 border-0">
                     <img class="card-img-top" src="admin/postimages/13.jpg" alt="" width="200" height="700">
                        <div class="card-body">
                           <p class="m-0">
                              <!--category-->
                              <a class="badge bg-success text-decoration-none link-light" href="#" style="color:#fff">Phinma Araullo University Facilities</a>
                              <!--Subcategory--->
                           </p>
                           <p class="m-0"><small> Posted Today</small></p>
                           <a href="#" class="card-title text-decoration-none text-dark">
                              <h5 class="card-title">Welcome to Phinma Araullo University</h5>
                           </a>
                           <!-- <a href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>" class="">Read More &rarr;</a> -->
                        </div>
                     </div>
                     <div class="card mb-4 border-0">
                     <img class="card-img-top" src="admin/postimages/14.jpg" alt="" width="200" height="700">
                        <div class="card-body">
                           <p class="m-0">
                              <!--category-->
                              <a class="badge bg-success text-decoration-none link-light" href="#" style="color:#fff">Phinma Araullo University Facilities</a>
                              <!--Subcategory--->
                           </p>
                           <p class="m-0"><small> Posted Today</small></p>
                           <a href="#" class="card-title text-decoration-none text-dark">
                              <h5 class="card-title">Welcome to Phinma Araullo University</h5>
                           </a>
                           <!-- <a href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>" class="">Read More &rarr;</a> -->
                        </div>
                     </div>
                     <div class="card mb-4 border-0">
                     <img class="card-img-top" src="admin/postimages/15.jpg" alt="" width="200" height="700">
                        <div class="card-body">
                           <p class="m-0">
                              <!--category-->
                              <a class="badge bg-success text-decoration-none link-light" href="#" style="color:#fff">Phinma Araullo University Facilities</a>
                              <!--Subcategory--->
                           </p>
                           <p class="m-0"><small> Posted Today</small></p>
                           <a href="#" class="card-title text-decoration-none text-dark">
                              <h5 class="card-title">Welcome to Phinma Araullo University</h5>
                           </a>
                           <!-- <a href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>" class="">Read More &rarr;</a> -->
                        </div>
                     </div>
                     <div class="card mb-4 border-0">
                     <img class="card-img-top" src="admin/postimages/16.jpg" alt="" width="200" height="700">
                        <div class="card-body">
                           <p class="m-0">
                              <!--category-->
                              <a class="badge bg-success text-decoration-none link-light" href="#" style="color:#fff">Phinma Araullo University Facilities</a>
                              <!--Subcategory--->
                           </p>
                           <p class="m-0"><small> Posted Today</small></p>
                           <a href="#" class="card-title text-decoration-none text-dark">
                              <h5 class="card-title">Welcome to Phinma Araullo University</h5>
                           </a>
                           <!-- <a href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>" class="">Read More &rarr;</a> -->
                        </div>
                     </div>
                     <div class="card mb-4 border-0">
                     <img class="card-img-top" src="admin/postimages/17.jpg" alt="" width="200" height="700">
                        <div class="card-body">
                           <p class="m-0">
                              <!--category-->
                              <a class="badge bg-success text-decoration-none link-light" href="#" style="color:#fff">Phinma Araullo University Facilities</a>
                              <!--Subcategory--->
                           </p>
                           <p class="m-0"><small> Posted Today</small></p>
                           <a href="#" class="card-title text-decoration-none text-dark">
                              <h5 class="card-title">Welcome to Phinma Araullo University</h5>
                           </a>
                           <!-- <a href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>" class="">Read More &rarr;</a> -->
                        </div>
                     </div>
                     <div class="card mb-4 border-0">
                     <img class="card-img-top" src="admin/postimages/18.jpg" alt="" width="200" height="700">
                        <div class="card-body">
                           <p class="m-0">
                              <!--category-->
                              <a class="badge bg-success text-decoration-none link-light" href="#" style="color:#fff">Phinma Araullo University Facilities</a>
                              <!--Subcategory--->
                           </p>
                           <p class="m-0"><small> Posted Today</small></p>
                           <a href="#" class="card-title text-decoration-none text-dark">
                              <h5 class="card-title">Welcome to Phinma Araullo University</h5>
                           </a>
                           <!-- <a href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>" class="">Read More &rarr;</a> -->
                        </div>
                     </div>
                     <div class="card mb-4 border-0">
                     <img class="card-img-top" src="admin/postimages/19.jpg" alt="" width="200" height="700">
                        <div class="card-body">
                           <p class="m-0">
                              <!--category-->
                              <a class="badge bg-success text-decoration-none link-light" href="#" style="color:#fff">Phinma Araullo University Facilities</a>
                              <!--Subcategory--->
                           </p>
                           <p class="m-0"><small> Posted Today</small></p>
                           <a href="#" class="card-title text-decoration-none text-dark">
                              <h5 class="card-title">Welcome to Phinma Araullo University</h5>
                           </a>
                           <!-- <a href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>" class="">Read More &rarr;</a> -->
                        </div>
                     </div>
                     <div class="card mb-4 border-0">
                     <img class="card-img-top" src="admin/postimages/20.jpg" alt="" width="200" height="700">
                        <div class="card-body">
                           <p class="m-0">
                              <!--category-->
                              <a class="badge bg-success text-decoration-none link-light" href="#" style="color:#fff">Phinma Araullo University Facilities</a>
                              <!--Subcategory--->
                           </p>
                           <p class="m-0"><small> Posted Today</small></p>
                           <a href="#" class="card-title text-decoration-none text-dark">
                              <h5 class="card-title">Welcome to Phinma Araullo University</h5>
                           </a>
                           <!-- <a href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>" class="">Read More &rarr;</a> -->
                        </div>
                     </div>
                     <div class="card mb-4 border-0">
                     <img class="card-img-top" src="admin/postimages/21.jpg" alt="" width="200" height="700">
                        <div class="card-body">
                           <p class="m-0">
                              <!--category-->
                              <a class="badge bg-success text-decoration-none link-light" href="#" style="color:#fff">Phinma Araullo University Facilities</a>
                              <!--Subcategory--->
                           </p>
                           <p class="m-0"><small> Posted Today</small></p>
                           <a href="#" class="card-title text-decoration-none text-dark">
                              <h5 class="card-title">Welcome to Phinma Araullo University</h5>
                           </a>
                           <!-- <a href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>" class="">Read More &rarr;</a> -->
                        </div>
                     </div>
                     <div class="card mb-4 border-0">
                     <img class="card-img-top" src="admin/postimages/22.jpg" alt="" width="200" height="700">
                        <div class="card-body">
                           <p class="m-0">
                              <!--category-->
                              <a class="badge bg-success text-decoration-none link-light" href="#" style="color:#fff">Phinma Araullo University Facilities</a>
                              <!--Subcategory--->
                             
                           </p>
                           <p class="m-0"><small> Posted Today</small></p>
                           <a href="#" class="card-title text-decoration-none text-dark">
                           <h5 class="card-title">Welcome to Phinma Araullo University</h5>
                           </a>
                           <!-- <a href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>" class="">Read More &rarr;</a> -->
                        </div>
                     </div>
                  </div>
                 
                  <!-- Static -->
                  <div class="">
                     <div class="">
                      
                        <div class="">
                        
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Sidebar Widgets Column -->
            <?php include('includes/sidebar1.php');?>
         </div>
         
      </div>
      <!-- /.row -->
      </div>
      <!-- /.container -->
      <!-- Footer -->
      <?php include('includes/footer.php');?>
<!--  Author Name: Mayuri K. 
 for any PHP, Codeignitor, Laravel OR Python work contact me at mayuri.infospace@gmail.com  
 Visit website : www.mayurik.com -->  
      <script src="js/foot.js"></script>
      <!-- Bootstrap core JavaScript -->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="js/owl.carousel.min.js"></script>
      <script>
         $('#slider').owlCarousel({
           loop:true,
           margin:10,
           nav:false,
           dots:false,
           autoplay:true,
           animateOut: 'fadeOut',
           responsive:{
               0:{
                   items:1
               },
               600:{
                   items:1
               },
               1000:{
                   items:1
               }
           }
         });
         $('#slider2').owlCarousel({
           loop:true,
           margin:10,
           nav:false,
           dots:false,
           autoplay:true,
           animateOut: 'fadeOut',
           responsive:{
               0:{
                   items:1
               },
               600:{
                   items:1
               },
               1000:{
                   items:4
               }
           }
         });
      </script>
   </body>
</html>