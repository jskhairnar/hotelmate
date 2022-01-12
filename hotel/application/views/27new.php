<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hotelmate</title>
    <!-- favicon -->
    <link rel=icon href=favicon.ico sizes="20x20" type="image/png">
    <!-- animate -->
    <!-- <link rel="stylesheet" href="<?=jkcss;?>assets/css/animate.css"> -->
    <!-- bootstrap -->
    <link rel="stylesheet" href="<?=jkcss?>assets/css/bootstrap.min.css">
    <!-- magnific popup -->
    <link rel="stylesheet" href="<?=jkcss?>assets/css/magnific-popup.css">
    <!-- owl carousel -->
    <link rel="stylesheet" href="<?=jkcss?>assets/css/owl.carousel.min.css">
    <!-- fontawesome -->
    <link rel="stylesheet" href="<?=jkcss?>assets/css/font-awesome.min.css">
    <!-- flaticon -->
    <link rel="stylesheet" href="<?=jkcss?>assets/css/flaticon.css">
    <!-- Hover CSS -->
    <link rel="stylesheet" href="<?=jkcss?>assets/css/hover-min.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="<?=jkcss?>assets/css/style.css">
    <!-- responsive Stylesheet -->
    <link rel="stylesheet" href="<?=jkcss?>assets/css/responsive.css">

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
        <!--start new -->
    <link href="<?=jksearchcss?>homeasset/css/main.css" rel="stylesheet" />

    
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  

    <style>
    .color_active{
        background: #f4364f!important;
    background: linear-gradient(to bottom,#f4364f,#dc2039)!important;
    }

    ul.typeahead.dropdown-menu {
    width: 100%;
}

.navbar-nav>li {
    float: none;
}

    @media only screen and (max-width: 414px){
    .tourz-hom-ser ul li a {
    width: 64px;
    }
    .tourz-hom-ser ul li a img {
    display: table;
    text-align: center;
    margin: 0 auto;
    padding-bottom: 5px;
    width: 32px;
}
    }


    </style>

</head>

<body>
      <!-- preloader area start -->
      <div class="preloader" id="preloader">
        <div class="preloader-inner">
            <div></div>
            <hr/>
        </div>
    </div>
    <!-- preloader area end -->
    <div class="header-style-01">
        <!-- support bar area end -->
        <nav class="navbar navbar-area navbar-expand-lg nav-style-02">
            <div class="container nav-container political-02">
                <div class="responsive-mobile-menu">
                    <div class="logo-wrapper">
                        <a href="<?=base_url()?>home" class="logo">
                            <img src="<?=jkcss?>assets/stylelogo.png" alt="">
                        </a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bizcoxx_main_menu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="bizcoxx_main_menu">
                    <ul class="navbar-nav">
                       
                        <li><a href="#packages">Careers</a></li>
                        <li><a href="#why">About Us</a></li>
                        <li><a href="#contact">Contact Us</a></li>
                    </ul>
                </div>
                <div class="nav-right-content">
                    <div class="btn-wrapper">
                       


                        <?php  if($this->session->userdata('userdata')) {  ?>
                            
                            <a href="<?=base_url()?>Profile" class="boxed-btn reverse-color">My Account</a>
                                
                        <?php } else { ?>
                            <a href="<?=base_url()?>Login" class="boxed-btn reverse-color">Login</a>
                               
                            </ul>
                        <?php } ?> 
                    </div>
                </div>
            </div>
        </nav>
        <!-- navbar area end -->
    </div>
    <div class="header-area header-bg" style="background-image:url(<?=jkcss?>assets/img/header-slider/01.png);">
        <div class="bg-img" style="background-image:url(<?=jkcss?>assets/img/balloon/bike.png);"></div>
        <div class="bg-img-02" style="background-image:url(<?=jkcss?>assets/img/balloon/balloon.png);"></div>
        <div class="bg-img-03" style="background-image:url(<?=jkcss?>assets/img/balloon/balloon-03.png);"></div>
        <div class="bg-img-04" style="background-image:url(<?=jkcss?>assets/img/balloon/balloon-02.png);"></div>
        <div class="bg-img-05" style="background-image:url(<?=jkcss?>assets/img/leaf/leaf-01.png);"></div>
        <div class="bg-img-06" style="background-image:url(<?=jkcss?>assets/img/leaf/leaf-02.png);"></div>
        <div class="bg-img-07" style="background-image:url(<?=jkcss?>assets/img/leaf/leaf-04.png);"></div>
        <div class="bg-img-08" style="background-image:url(<?=jkcss?>assets/img/leaf/leaf-03.png);"></div>
        <div class="bg-img-09" style="background-image:url(<?=jkcss?>assets/img/leaf/leaf-05.png);"></div>
        <div class="bg-img-10" style="background-image:url(<?=jkcss?>assets/img/leaf/leaf-06.png);"></div>
        <div class="bg-img-11" style="background-image:url(<?=jkcss?>assets/img/balloon/cercle.png);"></div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="tourz-hom-ser">
                        <ul>
                            <li>
                                <a href="javascript:;" class=" tablinks waves-effect waves-light btn-large tourz-pop-ser-btn wow fadeInUp animated animated color_active" id="defaultOpen" onclick="openCity(event, 'Hotel')" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s;"><img src="<?=jksearchcss?>assets/download.png" alt="">Hotel</a>
                            </li>
                           <li>
                                <a href="javascript:;" class=" tablinks waves-effect waves-light btn-large tourz-pop-ser-btn wow fadeInUp animated animated" onclick="openCity(event, 'Res')" data-wow-duration="1.5s" style="visibility: visible; animation-duration: 1.5s;"><img src="<?=jksearchcss?>assets/beach-umbrella-and-hammock.png" alt="">Resorts </a>
                            </li>
                            <li>
                                <a href="javascript:;" class="tablinks waves-effect waves-light btn-large tourz-pop-ser-btn wow fadeInUp animated animated" onclick="openCity(event, 'Camp')" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s;"><img src="<?=jksearchcss?>assets/camping.png" alt=""> Camp</a>
                            </li>
                            <li>
                                <a href="javascript:;" class=" tablinks waves-effect waves-light btn-large tourz-pop-ser-btn wow fadeInUp animated active animated" onclick="openCity(event, 'Weekend')" id="defaultOpen" data-wow-duration="0.5s" style="visibility: visible; animation-duration: 0.5s;"><img src="<?=jksearchcss?>assets/calendar.png" alt="">Weekend</a>
                            </li>
                            <li>
                                <a href="javascript:;" class=" tablinks waves-effect waves-light btn-large tourz-pop-ser-btn wow fadeInUp animated active animated" onclick="openCity(event, 'Siteseen')" id="defaultOpen" data-wow-duration="0.5s" style="visibility: visible; animation-duration: 0.5s;"><img src="<?=jksearchcss?>assets/bus.png" alt="">Sightseeing</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Hotel -->
                    <div class=" tabcontent s002" id="Hotel" >
                        <form action="<?=base_url().'Hotel'?>" method="GET">
                        
                            <div class="inner-form">
                            <div class="input-field first-wrap">
                                <div class="icon-wrap">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"></path>
                                </svg>
                                </div>
                                <input  type="text"  placeholder="Search City For Hotel?" name="location" id="hotel" autocomplete="off" required/>

                               
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
                            <input type="hidden" name="type" value="hotel">
                            <div class="input-field fifth-wrap">
                                <button class="btn-search" type="submit">SEARCH</button>
                            </div>
                            </div>

                        </form>
                    </div>


                     <!-- Resorts -->
                     <div class="tabcontent s002 " id="Res">
                        <form action="<?=base_url().'Hotel'?>" method="GET">
                        
                            <div class="inner-form">
                            <div class="input-field first-wrap">
                                <div class="icon-wrap">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"></path>
                                </svg>
                                </div>
                                <input  type="text"  placeholder="Search City For Resorts?" name="location" id="resort" autocomplete="off" required/>

                               
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
                            <input type="hidden" name="type" value="resort">
                            <div class="input-field fifth-wrap">
                                <button class="btn-search" type="submit">SEARCH</button>
                            </div>
                            </div>

                        </form>
                    </div>

                    <!-- Camps -->
                    <div class="tabcontent s002 " id="Camp">
                        <form action="<?=base_url().'Hotel'?>" method="GET">
                        
                            <div class="inner-form">
                            <div class="input-field first-wrap">
                                <div class="icon-wrap">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"></path>
                                </svg>
                                </div>
                                <input  type="text"  placeholder="Search City For Camp ?" name="location" id="camp" autocomplete="off" required/>

                              
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
                            <input type="hidden" name="type" value="camp">
                            <div class="input-field fifth-wrap">
                                <button class="btn-search" type="submit">SEARCH</button>
                            </div>
                            </div>

                        </form>
                    </div>


                    <!-- Weekends -->
                    <div class="tabcontent s002 " id="Weekend">
                        <form action="<?=base_url().'Hotel'?>" method="GET">
                        
                            <div class="inner-form">
                            <div class="input-field first-wrap">
                                <div class="icon-wrap">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"></path>
                                </svg>
                                </div>
                                <input  type="text"  placeholder="Search City For Weekend ?" name="location" id="weekend" autocomplete="off" required/>

                               
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
                            <input type="hidden" name="type" value="weekend">
                            <div class="input-field fifth-wrap">
                                <button class="btn-search" type="submit">SEARCH</button>
                            </div>
                            </div>

                        </form>
                    </div>

                     <!-- Siteseen -->
                    <div class="tabcontent s002 " id="Siteseen">
                        <form action="<?=base_url().'Hotel'?>" method="GET">
                        
                            <div class="inner-form">
                            <div class="input-field first-wrap">
                                <div class="icon-wrap">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"></path>
                                </svg>
                                </div>
                                <input  type="text"  placeholder="Search City For Sightseeing ?" name="location" id="sightseeing" autocomplete="off" required/>

                                
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
                            <input type="hidden" name="type" value="sightseeing">
                            <div class="input-field fifth-wrap">
                                <button class="btn-search" type="submit">SEARCH</button>
                            </div>
                            </div>

                        </form>
                    </div>

                   

                    <div class="header-inner">
                       
                        <!-- header inner -->
                        <!-- <h1 class="title">Lets pack for your next adventure</h1>
                        <div class="btn-wrapper  desktop-left padding-top-30">
                            <a href="#" class="boxed-btn">Send App to Your Phone</a>
                        </div> -->
                    </div>
                    <!-- //.header inner -->
                </div>
            </div>
        </div>
    </div>




    <!-- back to top area start -->
    <div class="back-to-top">
        <span class="back-top"><i class="fa fa-angle-up"></i></span>
    </div>
    <!-- back to top area end -->


    <!-- jquery -->
    <script src="<?=jkjs?>assets/js/jquery-2.2.4.min.js"></script>
    <!-- bootstrap -->
    <script src="<?=jkjs?>assets/js/bootstrap.min.js"></script>
    <!-- magnific popup -->
    <script src="<?=jkjs?>assets/js/jquery.magnific-popup.js"></script>
    <!-- wow -->
    <script src="<?=jkjs?>assets/js/wow.min.js"></script>
    <!-- owl carousel -->
    <script src="<?=jkjs?>assets/js/owl.carousel.min.js"></script>
    <!-- waypoint -->
    <script src="<?=jkjs?>assets/js/waypoints.min.js"></script>
    <!-- counterup -->
    <script src="<?=jkjs?>assets/js/jquery.counterup.min.js"></script>
    <!-- Water effect -->
    <script src="<?=jkjs?>assets/js/jquery.ripples-min.js"></script>
    <!-- imageloaded -->
    <script src="<?=jkjs?>assets/js/imagesloaded.pkgd.min.js"></script>
    <!-- isotope -->
    <script src="<?=jkjs?>assets/js/isotope.pkgd.min.js"></script>
    <!-- Parallax Js -->
    <script src="<?=jkjs?>assets/js/parallax.js"></script>
    <!-- main js -->
    <script src="<?=jkjs?>assets/js/main.js"></script>

    <script src="<?=jksearchjs?>homeasset/js/extention/choices.js"></script>
    <script src="<?=jksearchjs?>homeasset/js/extention/flatpickr.js"></script>
    <script src="<?=jksearchjs?>homeasset/js/main.js"></script>


    <script>
         flatpickr(".datepicker",
      {
          minDate: "today",
          dateFormat: "d-m-Y",
      });

   
      const choices = new Choices('[data-trigger]',
      {
        searchEnabled: false,
        itemSelectText: '',
      });

   
    </script>
    <script>
        function openCity(evt, cityName) {
          var i, tabcontent, tablinks;
          tabcontent = document.getElementsByClassName("tabcontent");
          for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
          }
          tablinks = document.getElementsByClassName("tablinks");
          for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace("color_active", "");
          }
          document.getElementById(cityName).style.display = "block";
          evt.currentTarget.className += " color_active";
        }
        
        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
        </script>


<script>
$(document).ready(function(){
 
 $('#hotel').typeahead({
  source: function(query, result)
  {
   $.ajax({
    url:'<?= fetch_cities ?>fetch.php',
    method:"POST",
    data:{query:query},
    dataType:"json",
    success:function(data)
    {
     result($.map(data, function(item){
      return item;
     }));
    }
   })
  }
 });


 
});
</script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>  
</body>


<!-- Mirrored from irtech.biz/tf/oxo/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, jk Nov 2020 07:30:49 GMT -->
</html>