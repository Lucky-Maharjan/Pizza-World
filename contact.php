<!DOCTYPE html>
<html lang="en">

<head>
<?php session_start(); include("conn_db.php"); include('head.php');?>    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/main.css" rel="stylesheet">
    <style>
        html {
            height: 100%;
        }

  h6{
  color: Red !important;

  }

    </style>
    <title>Contact Us | Pizza World</title>
</head>

<body class="d-flex flex-column h-100">
    <?php include('nav_header.php')?>
<!-- Contact Starts -->
<section class="about py-5">
    <div class="container py-md-5">
        <h3 class="tittle-wthree text-center">Contact Us</h3>
        <p class="sub-tittle text-center mt-4 mb-sm-5 mb-4">Dear Users, You can directly contact to the admins for your any queries. Just fill up the form given below properly.</p>
        <div class="row">
            <div class="col-lg-6 contact-info-left">
                <ul class="list-unstyled w3ls-items">
                    <li>
                        <div class="row mt-5">
                            <div class="col-9">

                            <div class="col-9">
                                <h6>Pizza World</h6>
                                <p> 7 days without pizza makes one week.
    </p>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="row mt-5">
                            <div class="col-9">

                            <div class="col-9">
                                <h6>Email</h6>
                                <a href="mailto:luckymaharjan5@gmail.com">pizzaworldnp@gmail.com</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row mt-5">
                            <div class="col-9">

                            <div class="col-9">
                                <h6>Phone</h6>
                                <p>01 - 5000000</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-lg-6 contact-right-wthree-info login">
                <h5 class="text-center mb-4"></h5>
                <form action="admin/contact-action.php" method="post" name="contact">
                    <div class="form-group mt-4">
                        <label>Name</label>
                        <input type="text" name="contact-name" class="form-control name" id="validationDefault01" placeholder="" required="">
                    </div>
                    <div class="form-group mt-4">
                        <label>Email</label>
                        <input type="email" name="contact-email" class="form-control email" id="validationDefault02" placeholder="" required="">
                    </div>

                    <div class="form-group mt-4">
                        <label class="mb-2">Subject</label>
                        <input type="text" name="contact-subject" class="form-control subject" id="password1" placeholder="" required="">
                    </div>
                    <div class="form-group mt-4">
                        <label class="mb-2">Message</label>
                        <textarea class="form-control message" name="contact-message" name="Message" placeholder="" required=""></textarea>
                    </div>
                    <br>
                    <a class="btn btn-primary me-1" href="index.php">Submit</a>
                </form>

            </div>
        </div>


    </div>
</section>
    <!-- Contact Ends -->


<footer class="text-center text-white">
  <!-- Copyright -->
  <div class="text-center p-2 p-2 mb-1 bg-dark text-white">
    <p class="text-white">Copyright © 2022 Pizza World. All Rights Reserved.  </p>

  </div>
  <!-- Copyright -->
</footer>
</body>

</html>
