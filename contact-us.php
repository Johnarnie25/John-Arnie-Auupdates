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

    <title>Phinma Araullo University | Contact Us</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link rel="stylesheet" href="css/icons.css">
  </head>
<style>
  .contact {
    padding: 130px 0;
}

.contact .heading h2 {
    font-size: 30px;
    font-weight: 700;
    margin: 0;
    padding: 0;

}

.contact .heading h2 span {
    color: #211C6A;
}

.contact .heading p {
    font-size: 15px;
    font-weight: 400;
    line-height: 1.7;
    color: #999999;
    margin: 20px 0 60px;
    padding: 0;
}

.contact .form-control {
    padding: 25px;
    font-size: 13px;
    margin-bottom: 10px;
    background: #f9f9f9;
    border: 0;
    border-radius: 10px;
}

.contact button.btn {
    padding: 10px;
    border-radius: 10px;
    font-size: 15px;
    background: #ff9100;
    color: #ffffff;
}

.contact .title h3 {
    font-size: 18px;
    font-weight: 600;
}

.contact .title p {
    font-size: 14px;
    font-weight: 400;
    color: #999;
    line-height: 1.6;
    margin: 0 0 40px;
}

.contact .content .info {
    margin-top: 30px;
}
.contact .content .info i {
    font-size: 30px;
    padding: 0;
    margin: 0;
    color: #02434b;
    margin-right: 20px;
    text-align: center;
    width: 20px;
}
.contact .content .info h4 {
    font-size: 13px;
    line-height: 1.4;
}

.contact .content .info h4 span {
    font-size: 13px;
    font-weight: 300;
    color: #999999;
}
  </style>
  <body>

    <!-- Navigation -->
    <?php include('includes/header.php');?>
    <!-- Page Content -->
  
    <section class="contact" id="contact">
        <div class="container">
            <div class="heading text-center">
                <h2>Contact
                    <span> Us </span></h2>
                <p>Welcome to Phinma Araullo University's Contact Us page! We value communication and are here to assist you with any inquiries you may have. Whether you're a prospective student, a parent, an alum, or a community member, we're dedicated to providing you with the information and support you need.</p>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="title">
                        <h3>Contact detail</h3>
                        <p>PHINMA Araullo University
(Main Campus) 
<br>PHINMA Araullo University
(South Campus) 
<br>PHINMA Araullo University
(San Jose Campus) </p>
                    </div>
                    <div class="content">
                        <!-- Info-1 -->
                        <div class="info">
                            <i class="fas fa-mobile-alt"></i>
                            <h4 class="d-inline-block">PHONE :
                                <br>
                                <span>+63 915-769-0106 / +63 961-135-3775<br>+63 926-952-3812 / +63 999-565-3180<br>+63 945-721-1117 / +63 928-303-3451</span></h4>
                        </div>
                        <!-- Info-2 -->
                        <div class="info">
                            <i class="far fa-envelope"></i>
                            <h4 class="d-inline-block">EMAIL :
                                <br>
                                <span>info.au@phinmaed.com</span></h4>
                        </div>
                        <!-- Info-3 -->
                        <div class="info">
                            <i class="fas fa-map-marker-alt"></i>
                            <h4 class="d-inline-block">ADDRESS :<br>
                                <span>Maharlika Highway, Barangay Bitas, Cabanatuan City, 3100, Nueva Ecija<br>Maharlika Highway, Barangay H. Concepcion Sr., Cabanatuan City, 3100, Nueva Ecija<br>112 Rizal St., Barangay Canuto Ramos, San Jose City, 3121, Nueva Ecija</span></h4>
                        </div>
                    </div>
                </div>

                <div class="col-md-7">

                <form id="contactForm">
    <div class="row">
        <div class="col-sm-6">
            <input type="text" class="form-control" id="name" placeholder="Name"required>
        </div>
        <div class="col-sm-6">
            <input type="email" class="form-control" id="email" placeholder="Email"required>
        </div>
        <div class="col-sm-12">
            <input type="tel" class="form-control" id="phone" placeholder="Phone No."required>
        </div>
    </div>
    <div class="form-group">
        <textarea class="form-control" rows="5" id="message" placeholder="Message"></textarea>
    </div>
    <button class="btn btn-block" type="button" onclick="sendEmail()" style="background-color: #211C6A;">Send Now!</button>
</form>

                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
 <?php include('includes/footer.php');?>
<!--  Author Name: Mayuri K. 
 for any PHP, Codeignitor, Laravel OR Python work contact me at mayuri.infospace@gmail.com  
 Visit website : www.mayurik.com -->  
 <script src="js/foot.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
<!-- Include jQuery and Bootstrap -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.emailjs.com/dist/email.min.js"></script>
<script>
    // Initialize EmailJS with your user ID and service ID
    emailjs.init("PR0jyQtH73dx1kDCV");

    // Wait for the DOM to be ready
    $(document).ready(function() {
        // Attach a submit handler to the form
        $("#contactForm").submit(function(event) {
            // Prevent the default form submission
            event.preventDefault();

            // Call the sendEmail function
            sendEmail();
        });
    });

    function sendEmail() {
        // Get form data
        var name = $("#name").val();
        var email = $("#email").val();
        var phone = $("#phone").val();
        var message = $("#message").val();

        // Use the 'emailjs' library to send the email
        emailjs.send("service_vbwlx8d", "template_ls72ajw", {
            to_email: "auupdates123@gmail.com",
            name: name,
            email: email,
            phone: phone,
            message: message
        })
        .then(function(response) {
            console.log('Email sent successfully:', response);
            alert('Your message has been sent successfully!');
            
            // Clear the form fields
            $("#name, #email, #phone, #message").val('');
        }, function(error) {
            console.log('Failed to send email. Error:', error);
            alert('Failed to send your message. Please try again later.');
        });
    }
</script>
