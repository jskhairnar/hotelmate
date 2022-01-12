<!DOCTYPE HTML>
<html lang="en">
  
<!-- Mirrored from remtsoy.com/tf_templates/tf-bookify-demo/hotel-results-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Jan 2020 15:47:01 GMT -->
<head>
    <title>Hotelmate</title>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet"/>
    <link rel="stylesheet" href="<?=new_ass?>css/font-awesome.css"/>
    <link rel="stylesheet" href="<?=new_ass?>css/lineicons.css"/>
    <link rel="stylesheet" href="<?=new_ass?>css/weather-icons.css"/>
    <link rel="stylesheet" href="<?=new_ass?>css/bootstrap.css"/>
    <link rel="stylesheet" href="<?=new_ass?>css/styles.css"/>


   

    <style>
    .navbar-brand {
    float: left;
    height: 50px;
    padding: 2px 23px;
    font-size: 18px;
    line-height: 20px;
    margin-top: 7px;
}

@media (min-width: 768px){
.navbar-right {
    float: right !important;
    margin-right: -15px;
    margin: 6px 0px;
}


}

@media (max-width: 768px){
  .navbar-brand {
    margin-top: 0px;
}
}
    </style>
  </head>
  <body>
    <nav class="navbar navbar-default navbar-theme" id="main-nav">
      <div class="container">
        <div class="navbar-inner nav">
          <div class="navbar-header">
            <button class="navbar-toggle collapsed" data-target="#navbar-main" data-toggle="collapse" type="button" area-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?=base_url().'Home'?>">
              <img src="<?=new_ass?>stylelogo.png" alt="Image Alternative text" title="Image Title"/>
            </a>
          </div>
          <div class="collapse navbar-collapse" id="navbar-main">
            <!-- <ul class="nav navbar-nav">
              <li class="dropdown">
                <a class="dropdown-toggle" href="index.html" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
                <div class="dropdown-menu dropdown-menu-lg">
                  <div class="row">
                    <div class="col-md-4">
                      <h5 class="dropdown-meganav-list-title">Homepages</h5>
                      <ul class="dropdown-meganav-list-items">
                        <li>
                          <a href="index.html">Index 1</a>
                        </li>
                        <li>
                          <a href="index-2.html">Index 2</a>
                        </li>
                        <li>
                          <a href="index-3.html">Index 3</a>
                        </li>
                        <li>
                          <a href="index-4.html">Index 4</a>
                        </li>
                        <li>
                          <a href="index-5.html">Index 5</a>
                        </li>
                        <li>
                          <a href="index-6.html">Index 6</a>
                        </li>
                        <li>
                          <a href="index-7.html">Index 7</a>
                        </li>
                        <li>
                          <a href="index-8.html">Index 8</a>
                        </li>
                        <li>
                          <a href="index-9.html">Index 9</a>
                        </li>
                        <li>
                          <a href="index-10.html">Index 10</a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-md-4">
                      <h5 class="dropdown-meganav-list-title">Misc</h5>
                      <ul class="dropdown-meganav-list-items">
                        <li>
                          <a href="blog.html">Blog</a>
                        </li>
                        <li>
                          <a href="blog-post.html">Blog Post</a>
                        </li>
                        <li>
                          <a href="404.html">404</a>
                        </li>
                        <li>
                          <a href="about-us.html">About Us</a>
                        </li>
                        <li>
                          <a href="contact.html">Contact</a>
                        </li>
                        <li>
                          <a href="login.html">Login</a>
                        </li>
                        <li>
                          <a href="login-2.html">Login 2</a>
                        </li>
                        <li>
                          <a href="register.html">Register</a>
                        </li>
                        <li>
                          <a href="pwd-reset.html">Reset password</a>
                        </li>
                        <li>
                          <a href="payment-success.html">Sucess Payment</a>
                        </li>
                        <li>
                          <a href="coming-soon.html">Coming Soon</a>
                        </li>
                        <li>
                          <a href="loading.html">Loading</a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-md-4">
                      <h5 class="dropdown-meganav-list-title">Country/City</h5>
                      <ul class="dropdown-meganav-list-items">
                        <li>
                          <a href="index-city-1.html">Index City 1</a>
                        </li>
                        <li>
                          <a href="index-city-2.html">Index City 2</a>
                        </li>
                        <li>
                          <a href="index-city-3.html">Index City 3</a>
                        </li>
                        <li>
                          <a href="index-country-1.html">Index Country 1</a>
                        </li>
                        <li>
                          <a href="index-country-2.html">Index Country 2</a>
                        </li>
                        <li>
                          <a href="index-country-3.html">Index Country 3</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </li>
              <li class="active dropdown">
                <a class="dropdown-toggle" href="hotel-index-1.html" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hotels</a>
                <div class="dropdown-menu dropdown-menu-xl">
                  <div class="row">
                    <div class="col-md-3">
                      <h5 class="dropdown-meganav-list-title">Homepages</h5>
                      <ul class="dropdown-meganav-list-items">
                        <li>
                          <a href="hotel-index-1.html">Layout 1</a>
                        </li>
                        <li>
                          <a href="hotel-index-2.html">Layout 2</a>
                        </li>
                        <li>
                          <a href="hotel-index-3.html">Layout 3</a>
                        </li>
                        <li>
                          <a href="hotel-index-4.html">Layout 4</a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-md-3">
                      <h5 class="dropdown-meganav-list-title">Search Results</h5>
                      <ul class="dropdown-meganav-list-items">
                        <li>
                          <a href="hotel-results-1.html">Layout 1</a>
                        </li>
                        <li>
                          <a href="hotel-results-2.html">Layout 2</a>
                        </li>
                        <li>
                          <a href="hotel-results-3.html">Layout 3</a>
                        </li>
                        <li>
                          <a href="hotel-results-4.html">Layout 4</a>
                        </li>
                        <li>
                          <a href="hotel-results-5.html">Layout 5</a>
                        </li>
                        <li>
                          <a href="hotel-results-6.html">Layout 6</a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-md-3">
                      <h5 class="dropdown-meganav-list-title">Hotel Pages</h5>
                      <ul class="dropdown-meganav-list-items">
                        <li>
                          <a href="hotel-page-1.html">Layout 1</a>
                        </li>
                        <li>
                          <a href="hotel-page-2.html">Layout 2</a>
                        </li>
                        <li>
                          <a href="hotel-page-3.html">Layout 3</a>
                        </li>
                        <li>
                          <a href="hotel-page-4.html">Layout 4</a>
                        </li>
                        <li>
                          <a href="hotel-page-5.html">Layout 5</a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-md-3">
                      <h5 class="dropdown-meganav-list-title">Payment</h5>
                      <ul class="dropdown-meganav-list-items">
                        <li>
                          <a href="hotel-payment-1.html">Layout 1</a>
                        </li>
                        <li>
                          <a href="hotel-payment-2.html">Layout 2</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </li>
              <li class="dropdown">
                <a class="dropdown-toggle" href="room-index-1.html" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Rooms</a>
                <div class="dropdown-menu dropdown-menu-xl">
                  <div class="row">
                    <div class="col-md-3">
                      <h5 class="dropdown-meganav-list-title">Homepages</h5>
                      <ul class="dropdown-meganav-list-items">
                        <li>
                          <a href="room-index-1.html">Layout 1</a>
                        </li>
                        <li>
                          <a href="room-index-2.html">Layout 2</a>
                        </li>
                        <li>
                          <a href="room-index-3.html">Layout 3</a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-md-3">
                      <h5 class="dropdown-meganav-list-title">Search Results</h5>
                      <ul class="dropdown-meganav-list-items">
                        <li>
                          <a href="room-results-1.html">Layout 1</a>
                        </li>
                        <li>
                          <a href="room-results-2.html">Layout 2</a>
                        </li>
                        <li>
                          <a href="room-results-3.html">Layout 3</a>
                        </li>
                        <li>
                          <a href="room-results-4.html">Layout 4</a>
                        </li>
                        <li>
                          <a href="room-results-5.html">Layout 5</a>
                        </li>
                        <li>
                          <a href="room-results-6.html">Layout 6</a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-md-3">
                      <h5 class="dropdown-meganav-list-title">Room Pages</h5>
                      <ul class="dropdown-meganav-list-items">
                        <li>
                          <a href="room-page-1.html">Layout 1</a>
                        </li>
                        <li>
                          <a href="room-page-2.html">Layout 2</a>
                        </li>
                        <li>
                          <a href="room-page-3.html">Layout 3</a>
                        </li>
                        <li>
                          <a href="room-page-4.html">Layout 4</a>
                        </li>
                        <li>
                          <a href="room-page-5.html">Layout 5</a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-md-3">
                      <h5 class="dropdown-meganav-list-title">Payment</h5>
                      <ul class="dropdown-meganav-list-items">
                        <li>
                          <a href="room-payment-1.html">Layout 1</a>
                        </li>
                        <li>
                          <a href="room-payment-2.html">Layout 2</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </li>
              <li class="dropdown">
                <a class="dropdown-toggle" href="flight-index-1.html" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Flights</a>
                <div class="dropdown-menu dropdown-menu-lg">
                  <div class="row">
                    <div class="col-md-4">
                      <h5 class="dropdown-meganav-list-title">Homepages</h5>
                      <ul class="dropdown-meganav-list-items">
                        <li>
                          <a href="flight-index-1.html">Layout 1</a>
                        </li>
                        <li>
                          <a href="flight-index-2.html">Layout 2</a>
                        </li>
                        <li>
                          <a href="flight-index-3.html">Layout 3</a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-md-4">
                      <h5 class="dropdown-meganav-list-title">Search Results</h5>
                      <ul class="dropdown-meganav-list-items">
                        <li>
                          <a href="flight-results-1.html">Layout 1</a>
                        </li>
                        <li>
                          <a href="flight-results-2.html">Layout 2</a>
                        </li>
                        <li>
                          <a href="flight-results-3.html">Layout 3</a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-md-4">
                      <h5 class="dropdown-meganav-list-title">Payment</h5>
                      <ul class="dropdown-meganav-list-items">
                        <li>
                          <a href="flight-payment-1.html">Layout 1</a>
                        </li>
                        <li>
                          <a href="flight-payment-2.html">Layout 2</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </li>
              <li class="dropdown">
                <a class="dropdown-toggle" href="car-index-1.html" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cars</a>
                <div class="dropdown-menu dropdown-menu-lg">
                  <div class="row">
                    <div class="col-md-4">
                      <h5 class="dropdown-meganav-list-title">Homepages</h5>
                      <ul class="dropdown-meganav-list-items">
                        <li>
                          <a href="car-index-1.html">Layout 1</a>
                        </li>
                        <li>
                          <a href="car-index-2.html">Layout 2</a>
                        </li>
                        <li>
                          <a href="car-index-3.html">Layout 3</a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-md-4">
                      <h5 class="dropdown-meganav-list-title">Search Results</h5>
                      <ul class="dropdown-meganav-list-items">
                        <li>
                          <a href="car-results-1.html">Layout 1</a>
                        </li>
                        <li>
                          <a href="car-results-2.html">Layout 2</a>
                        </li>
                        <li>
                          <a href="car-results-3.html">Layout 3</a>
                        </li>
                        <li>
                          <a href="car-results-4.html">Layout 4</a>
                        </li>
                        <li>
                          <a href="car-results-5.html">Layout 5</a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-md-4">
                      <h5 class="dropdown-meganav-list-title">Payment</h5>
                      <ul class="dropdown-meganav-list-items">
                        <li>
                          <a href="car-payment-1.html">Layout 1</a>
                        </li>
                        <li>
                          <a href="car-payment-2.html">Layout 2</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </li>
              <li class="dropdown">
                <a class="dropdown-toggle" href="exp-index-1.html" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Experiences</a>
                <div class="dropdown-menu dropdown-menu-xl">
                  <div class="row">
                    <div class="col-md-3">
                      <h5 class="dropdown-meganav-list-title">Homepages</h5>
                      <ul class="dropdown-meganav-list-items">
                        <li>
                          <a href="exp-index-1.html">Layout 1</a>
                        </li>
                        <li>
                          <a href="exp-index-2.html">Layout 2</a>
                        </li>
                        <li>
                          <a href="exp-index-3.html">Layout 3</a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-md-3">
                      <h5 class="dropdown-meganav-list-title">Search Results</h5>
                      <ul class="dropdown-meganav-list-items">
                        <li>
                          <a href="exp-results-1.html">Layout 1</a>
                        </li>
                        <li>
                          <a href="exp-results-2.html">Layout 2</a>
                        </li>
                        <li>
                          <a href="exp-results-3.html">Layout 3</a>
                        </li>
                        <li>
                          <a href="exp-results-4.html">Layout 4</a>
                        </li>
                        <li>
                          <a href="exp-results-5.html">Layout 5</a>
                        </li>
                        <li>
                          <a href="exp-results-6.html">Layout 6</a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-md-3">
                      <h5 class="dropdown-meganav-list-title">Event Pages</h5>
                      <ul class="dropdown-meganav-list-items">
                        <li>
                          <a href="exp-page-1.html">Layout 1</a>
                        </li>
                        <li>
                          <a href="exp-page-2.html">Layout 2</a>
                        </li>
                        <li>
                          <a href="exp-page-3.html">Layout 3</a>
                        </li>
                        <li>
                          <a href="exp-page-4.html">Layout 4</a>
                        </li>
                        <li>
                          <a href="exp-page-5.html">Layout 5</a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-md-3">
                      <h5 class="dropdown-meganav-list-title">Payment</h5>
                      <ul class="dropdown-meganav-list-items">
                        <li>
                          <a href="exp-payment-1.html">Layout 1</a>
                        </li>
                        <li>
                          <a href="exp-payment-2.html">Layout 2</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </li>
            </ul> -->
            <ul class="nav navbar-nav navbar-right">

              <li class="dropdown">
                <a class="" href="<?=base_url()?>Home" >
                  Home
                </a>
              </li>
              <li class="dropdown">
                <a class="" href="#" >
                  Careers
                </a>
              </li>
              <li class="dropdown">
                <a class="" href="#" >
                  About Us
                </a>
              </li>
              <li class="dropdown">
                <a class="" href="#" >
                  Contact Us
                </a>
              </li>
               
              
              <?php  if($this->session->userdata('userdata')) {  ?>
                <li class="navbar-nav-item-user dropdown">
                  <a class="dropdown-toggle" href="account.html" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-user-circle-o navbar-nav-item-user-icon"></i>My Account
                  </a>
                  <ul class="dropdown-menu">
                    <li>
                      <a href="<?=base_url()?>Profile">Profile</a>
                    </li>

                    <li>
                      <a href="<?=base_url()?>booking_list">Booking History</a>
                    </li>
                    

                    <li>
                      <a href="<?=base_url().'Login/Logout'?>">Logout</a>
                    </li>
                  </ul>
                </li>
              <?php } else { ?>
                <li class="navbar-nav-item-user dropdown">
                  <a class="dropdown-toggle" href="<?=base_url().'Login'?>">
                    <i class="fa fa-user-circle-o navbar-nav-item-user-icon"></i>Login
                  </a>
              </li>
              <?php } ?> 



             
            </ul>
          </div>
        </div>
      </div>
    </nav>
