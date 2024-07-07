<?php
include('includes/config.php');

?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Phinma Araullo University | About</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link rel="stylesheet" href="css/icons.css">
  </head>
<style>
 

/*===== Vertical Timeline =====*/
#conference-timeline {
  position: relative;
  max-width: 920px;
  width: 100%;
  margin: 0 auto;
}
#conference-timeline .timeline-start,
#conference-timeline .timeline-end {
  display: table;
  font-family: chaparral-pro, serif;
  font-size: 24px;
  font-weight: 900;
  background: #211C6A;
  padding: 15px 23px;
  color: #fff;
  max-width: 50%;
  width: 100%;
  text-align: center;
  margin: 0 auto;
}
#conference-timeline .conference-center-line {
  position: absolute;
  width: 5px;
  height: 100%;
  top: 0;
  left: 50%;
  margin-left: -2px;
  background: #2D3250;
  z-index: -1;
}
#conference-timeline .conference-timeline-content {
  padding-top: 67px;
  padding-bottom: 67px;
}
.timeline-article {
  width: 100%;
  height: 100%;
  position: relative;
  overflow: hidden;
  margin: 20px 0;
}
.timeline-article .content-left-container,
.timeline-article .content-right-container {
  max-width: 44%;
  width: 100%;
  padding-bottom: 20px;
}
.timeline-article .timeline-author {
  display: block;
  font-weight: 400;
  font-size: 14px;
  line-height: 24px;
  color: #211C6A;
  text-align: right;
}
.timeline-article .content-left,
.timeline-article .content-right {
  position: relative;
  width: auto;
  border: 1px solid #211C6A;
  background-color: #211C6A;
  box-shadow: 0 1px 3px rgba(0,0,0,.03);
  padding: 27px 29px;
}
.timeline-article p {
  margin: 0 0 0 60px;
  padding: 0;
  font-weight: 400;
  color: #211C6A;
  font-size: 14px;
  line-height: 24px;
  position: relative;
}
.timeline-article p span.article-number {
  position: absolute;
  font-weight: 300;
  font-size: 30px;
  top: 10px;
  left: -67px;
  color: #211C6A;
}
.timeline-article .content-left-container {
  float: left;
}
.timeline-article .content-right-container {
  float: right;
}
.timeline-article .content-left:before,
.timeline-article .content-right:before{
  position: absolute;
  top: 20px;
  font-size: 23px;
  font-family: "FontAwesome";
  color: #fff;
}
.timeline-article .content-left:before {
  content: "\f0da";
  right: -8px;
}
.timeline-article .content-right:before {
  content: "\f0d9";
  left: -8px;
}

.timeline-article .across {
  position: absolute;
  top: 0;
  left: 10%;
  width: 800px;
  height: 80px;
  background: #88b04b;
}

.timeline-article .meta-date {
  position: absolute;
  top: 0;
  left: 49.5%;
  width: 80px;
  height: 80px;
  margin-left: -34px;
  color: #fff;
  border-radius: 100%;
  font-family: ingra-2, sans-serif;
  background: #272829;
}
.timeline-article .meta-date .date,
.timeline-article .meta-date .month {
  padding-top: 5px;
  display: block;
  text-align: center;
  font-weight: 900;
}
.timeline-article .meta-date .date {
  font-size: 18px;
  line-height: 40px;
  font-family: ingra-2, sans-serif;
}
.timeline-article .meta-date .month {
  font-size: 18px;
  line-height: 10px;
  font-family: ingra-2, sans-serif;
}
/*===== // Vertical Timeline =====*/

/*===== Resonsive Vertical Timeline =====*/
@media only screen and (max-width: 830px) {
  #conference-timeline .timeline-start,
  #conference-timeline .timeline-end {
    margin: 0;
  }
  #conference-timeline .conference-center-line {
    margin-left: 0;
    left: 50px;
  }
  .timeline-article .meta-date {
    margin-left: 0;
    left: 20px;
  }
  .timeline-article .content-left-container,
  .timeline-article .content-right-container {
    max-width: 100%;
    width: auto;
    float: none;
    margin-left: 110px;
    min-height: 53px;
  }
  .timeline-article .content-left-container {
    margin-bottom: 20px;
  }
  .timeline-article .content-left,
  .timeline-article .content-right {
    padding: 10px 25px;
    min-height: 65px;
  }
  .timeline-article .content-left:before {
    content: "\f0d9";
    right: auto;
    left: -8px;
  }
  .timeline-article .content-right:before {
    display: none;
  }
}
@media only screen and (max-width: 400px) {
  .timeline-article p {
    margin: 0;
  }
  .timeline-article p span.article-number {
    display: none;
  }
  
}
/*===== // Resonsive Vertical Timeline =====*/
  </style>
  <body>

    <!-- Navigation -->
    <?php include('includes/header.php');?>
    <!-- Page Content -->
    <div class="container">


     
  
    

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">About</li>
      </ol>

      <!-- Intro Content -->
      <div class="row">

        <div class="col-lg-12">

         
        </div>
      </div>
      <!-- /.row -->
      <section id="conference-timeline">
    <div class="timeline-start">Phinma Education Timeline</div>
    <div class="conference-center-line"></div>
    <div class="conference-timeline-content">
      
            <!-- Article -->
     
      
      <!-- Article -->
      <div class="timeline-article">
        <div class="content-left-container">
          <div class="content-left">
          <img src="images/image13.png" alt="">
          </div>
        </div>
       
        <div class="meta-date">
          <center>
          <span class="date">2021</span>
</center>
        </div>
      </div>
      <!-- // Article -->
      
      <!-- Article -->
      <div class="timeline-article">
        <div class="content-left-container">
          <div class="content-left">
          <img src="images/image12.png" alt="">
          </div>
        </div>
        <div class="content-right-container">
          <div class="content-right">
          <img src="images/image11.png" alt="">
          </div>
        </div>
        <div class="meta-date">
          <span class="date">2019 -</span>
          <span class="month">2020</span>
        </div>
      </div>
      <!-- // Article -->
      
            <!-- Article -->
      <div class="timeline-article">
        <div class="content-left-container">
          <div class="content-left">
          <img src="images/image10.png" alt="">
          </div>
        </div>
        <div class="content-right-container">
          <div class="content-right">
          <img src="images/image9.png" alt="">
          </div>
        </div>
        <div class="meta-date">
          <span class="date">2017-</span>
          <span class="month">2019</span>
        </div>
      </div>
      <!-- // Article -->
      
                  <!-- Article -->
      <div class="timeline-article">
        <div class="content-left-container">
          <div class="content-left">
          <img src="images/image8.png" alt="">
          </div>
        </div>
        <div class="content-right-container">
          <div class="content-right">
          <img src="images/image7.png" alt="">
          </div>
        </div>
        <div class="meta-date">
          <span class="date">2015-</span>
          <span class="month">2015</span>
        </div>
      </div>
      <!-- // Article -->
      
                        <!-- Article -->
      <div class="timeline-article">
        <div class="content-left-container">
          <div class="content-left">
          <img src="images/image6.png" alt="">
          </div>
        </div>
        <div class="content-right-container">
          <div class="content-right">
          <img src="images/image5.png" alt="">
          </div>
        </div>
        <div class="meta-date">
          <span class="date">2012 -</span>
          <span class="month">2014</span>
        </div>
      </div>
      <!-- // Article -->
      
                              <!-- Article -->
      <div class="timeline-article">
        <div class="content-left-container">
          <div class="content-left">
          <img src="images/image4.png" alt="">
          </div>
        </div>
        
        <div class="content-right-container">
          <div class="content-right">
          <img src="images/image3.png" alt="">
          </div>
        </div>
        <div class="meta-date">
          <span class="date">2009 -</span>
          <span class="month">2009</span>
        </div>
      </div>
      <!-- // Article -->
      
                              <!-- Article -->
      <div class="timeline-article">
        <div class="content-left-container">
          <div class="content-left">
          <img src="images/image2.png" alt="">
          </div>
        </div>
        
        <div class="content-right-container">
    <div class="content-right">
        <img src="images/image1.png" alt="">
    </div>
</div>

        <div class="meta-date">
          <span class="date">2004 -</span>
          <span class="month">2005</span>
        </div>
      </div>
      <!-- // Article -->
      
      
      
    </div>
  
  </section>
    
    </div>
    <!-- /.container -->
    </div>
   
    <!-- Footer -->
 <?php include('includes/footer.php');?>
<!--  Author Name: Mayuri K. 
 for any PHP, Codeignitor, Laravel OR Python work contact me at mayuri.infospace@gmail.com  
 Visit website : www.mayurik.com -->  

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
