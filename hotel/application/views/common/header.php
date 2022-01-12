<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from rn53themes.net/themes/demo/travelz/hotels-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Nov 2020 06:58:44 GMT -->
<head>
    <title><?= $Title ?></title>
    <!--== META TAGS ==-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- FAV ICON -->
    <link rel="shortcut icon" href="<?=images?>/fav.ico">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Poppins%7CQuicksand:400,500,700" rel="stylesheet">
    <!-- FONT-AWESOME ICON CSS -->
    <link rel="stylesheet" href="<?= css ?>/font-awesome.min.css">
    <!--== ALL CSS FILES ==-->
    <link rel="stylesheet" href="<?= css ?>/style.css">
    <!-- <link rel="stylesheet" href="<?= css ?>/materialize.css"> -->
    <link rel="stylesheet" href="<?= css ?>/bootstrap.css">
    <link rel="stylesheet" href="<?= css ?>/mob.css">
    <link rel="stylesheet" href="<?= css ?>/animate.css">

    <script src="<?php echo js; ?>/jquery-latest.min.js"></script>
	<script src="<?php echo js; ?>/bootstrap.js"></script>
	<script src="<?php echo js; ?>/wow.min.js"></script>
	<!-- <script src="<?php echo js; ?>/materialize.min.js"></script> -->
	<script src="<?php echo js; ?>/custom.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
    <![endif]-->
    

    <!--start new -->
    <link href="<?php echo searchcss; ?>/main.css" rel="stylesheet" />

    <script src="<?php echo searchjs; ?>/extention/choices.js"></script>
    <script src="<?php echo searchjs; ?>/extention/flatpickr.js"></script>
    
   
    <!--end new -->
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
   
   
   <!-- MOBILE MENU -->

   <section>
        <div class="ed-mob-menu">
            <div class="ed-mob-menu-con">
                <div class="ed-mm-left">
                    <div class="wed-logo">
                        <a href="<?=base_url().'Home'?>"><img src="<?=images?>/stylelogo.png" alt="" />
						</a>
                    </div>
                </div>
                <div class="ed-mm-right">
                    <div class="ed-mm-menu">
                        <a href="#!" class="ed-micon"><i class="fa fa-bars"></i></a>
                        <div class="ed-mm-inn">
                            <a href="#!" class="ed-mi-close"><i class="fa fa-times"></i></a>
                           
                            <ul>
                                <li><a href="<?=base_url().'Home'?>">Home</a></li>
                                <li><a href="<?=base_url().'Careers'?>">Careers</a></li>
                                <li><a href="<?=base_url().'Aboutus'?>">About Us</a></li>
                                <li><a href="<?=base_url().'Contactus'?>">Contact Us</a></li>
                                <!-- <li><a href="booking-car-rentals.html">Home page 5</a></li>
                                <li><a href="booking-flight.html">Home page 6</a></li>
                                <li><a href="booking-slider.html">Home page 7</a></li> -->
                            </ul>
                            <!-- <h4>Tour Packages</h4>
                            <ul>
                                <li><a href="all-package.html">All Package</a></li><li><a href="family-package.html">Family Package</a></li>
                                <li><a href="honeymoon-package.html">Honeymoon Package</a></li>
                                <li><a href="group-package.html">Group Package</a></li>
                                <li><a href="weekend-package.html">WeekEnd Package</a></li>
                                <li><a href="regular-package.html">Regular Package</a></li>
                                <li><a href="custom-package.html">Custom Package</a></li>
                            </ul>
                            <h4>Sighe Seeings Pages</h4>
                            <ul>
                                <li><a href="places.html">Seight Seeing 1</a></li>
                                <li><a href="places-1.html">Seight Seeing 2</a></li>
                                <li><a href="places-2.html">Seight Seeing 3</a></li>
                            </ul>
                            <h4>User Dashboard</h4>
                            <ul>
                                <li><a href="dashboard.html">My Bookings</a></li>
                                <li><a href="db-my-profile.html">My Profile</a></li>
                                <li><a href="db-my-profile-edit.html">My Profile edit</a></li>
                                <li><a href="db-travel-hotel-details.html">Tour Packages</a></li>
                                <li><a href="db-hotel-hotel-details.html">Hotel Bookings</a></li>
                                <li><a href="db-event-hotel-details.html">Event bookings</a></li>
                                <li><a href="db-payment.html">Make Payment</a></li>
                                <li><a href="db-refund.html">Cancel Bookings</a></li>
                                <li><a href="db-all-payment.html">Prient E-Tickets</a></li>
                                <li><a href="db-event-details.html">Event booking details</a></li>
                                <li><a href="db-hotel-details.html">Hotel booking details</a></li>
                                <li><a href="db-travel-details.html">Travel booking details</a></li>
                            </ul>
                            <h4>Other pages:1</h4>
                            <ul>
                                <li><a href="tour-details.html">Travel details</a></li>
                                <li><a href="hotel-details.html">Hotel details</a></li>
                                <li><a href="all-package.html">All package</a></li><li><a href="hotels-list.html">All hotels</a></li>
                                <li><a href="hotel-details.html">Booking page</a></li>
                            </ul>
                            <h4 class="ed-dr-men-mar-top">User login pages</h4>
                            <ul>
                                <li><a href="register.html">Register</a></li>
                                <li><a href="login.html">Login and Sign in</a></li>
                                <li><a href="forgot-pass.html">Forgot pass</a></li>
                            </ul>
                            <h4>Other pages:2</h4>
                            <ul>
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="testimonials.html">Testimonials</a></li>
                                <li><a href="events.html">Events</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="tips.html">Tips Before Travel</a></li>
                                <li><a href="price-list.html">Price List</a></li>
                                <li><a href="discount.html">Discount</a></li>
                                <li><a href="faq.html">FAQ</a></li>
                                <li><a href="sitemap.html">Site map</a></li>
                                <li><a href="404.html">404 Page</a></li>
                                <li><a href="contact.html">Contact Us</a></li>
                            </ul> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--HEADER SECTION-->
    <section>
        <!-- TOP BAR -->
        <div class="ed-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ed-com-t1-left">
                            <ul>
                                <li><a href="#">Contact: Lake Road, Suite 180 Farmington Hills, U.S.A.</a>
                                </li>
                                <li><a href="#">Phone: +91 9067545291</a>
                                </li>
                            </ul>
                        </div>
                        <div class="ed-com-t1-right">

                        <?php  if($this->session->userdata('userdata')) {  ?>
                            <ul>
                                <li><a href="<?=base_url().'u/Profile'?>">Profile</a>
                                </li>
                                <li><a href="<?=base_url().'Login/Logout'?>">Logout</a>
                                </li>
                            </ul>
                        <?php } else { ?>
                            <ul>
                                <li><a href="<?=base_url().'Login'?>">Sign In</a>
                                </li>
                                <li><a href="<?=base_url().'Registration'?>">Sign Up</a>
                                </li>
                            </ul>
                        <?php } ?> 
                        </div>
                        <div class="ed-com-t1-social">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- LOGO AND MENU SECTION -->
        <div class="top-logo" data-spy="affix" data-offset-top="250">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wed-logo">
                            <a href="<?=base_url().'Home'?>"><img src="<?=images?>/stylelogo.png" alt="" />
                            </a>
                        </div>
                        <div class="main-menu">
                            <ul>
                                <li><a href="<?=base_url().'Home'?>">Home</a></li>
                                <li><a href="<?=base_url().'Careers'?>">Careers</a></li>
                                <li><a href="<?=base_url().'Aboutus'?>">About Us</a></li>
                                <li><a href="<?=base_url().'Contactus'?>">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		
        <?php  if($Title != 'Home') { ?>

		<!-- TOP SEARCH BOX -->
        <div class="search-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    <div class="s002 s002otherpages">
                        <form action="<?=base_url().'Hotel'?>" method="GET">
                            <div class="inner-form inner-formotherpage" style="padding:0px;">
                            <div class="input-field first-wrap">
                                <div class="icon-wrap">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"></path>
                                </svg>
                                </div>
                                <input id="countySel" type="text"  placeholder="What are you looking for?" name="city" required/>

                                <!-- <ul style="position:absolute">
                                    <li>sdfsdf</li>
                                    <li>sdfsdf</li>
                                    <li>sdfsdf</li>
                                    <li>sdfsdf</li>
                                    <li>sdfsdf</li>
                                </ul> -->
                            </div>
                            <div class="input-field second-wrap">
                                <div class="icon-wrap">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path d="M17 12h-5v5h5v-5zM16 1v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2h-1V1h-2zm3 18H5V8h14v11z"></path>
                                </svg>
                                </div>
                                <input class="datepicker" id="depart" type="text" placeholder="Check In" name="checkin" required />
                            </div>
                            <div class="input-field third-wrap">
                                <div class="icon-wrap">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path d="M17 12h-5v5h5v-5zM16 1v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2h-1V1h-2zm3 18H5V8h14v11z"></path>
                                </svg>
                                </div>
                                <input class="datepicker" id="return" type="text" placeholder="Check Out" name="checkout" required />
                            </div>
                            <div class="input-field fouth-wrap">
                                <div class="icon-wrap">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"></path>
                                </svg>
                                </div>
                                <select data-trigger="" name="guest">
                                <option placeholder="" value="2">2 Guest</option>
                                <option value="3">3 Guest</option>
                                <option value="4">4 Guest</option>
                                <option value="5">5 Guest</option>
                                </select >
                            </div>
                            <div class="input-field fifth-wrap">
                                <button class="btn-search" type="submit">SEARCH</button>
                            </div>
                            </div>

                        </form>
		            </div>
                    </div>
                </div>
            </div>
        </div>
		<!-- END TOP SEARCH BOX -->

        <?php  } ?>

    </section>
    <!--END HEADER SECTION-->
	