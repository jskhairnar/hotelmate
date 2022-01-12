<!--HEADER SECTION-->
<section>
        <div class="tourz-search">
            <div class="container">
                <div class="row">
                    <div class="tourz-search-1">
                        <h1>Plan Your Travel Now!</h1>
                        <p>Experience the various exciting tour and travel packages and Make hotel reservations, find vacation packages, search cheap hotels and events</p>
                        
                        
                        <!-- <form class="tourz-search-form" action="<?=base_url().'Hotel'?>" method="GETs">
                            <div class="input-field">
                                <input type="text" id="select-city" class="autocomplete" list="citylist" name="city"> -->
                                <!-- <select id="select-city" class="autocomplete">
                                <option>sdfsdf</option>
                                    <option>sdfsdf</option>
                                    <option>sdfsdf</option>
                                </select>-->
                                <!-- <label for="select-city">Enter city</label>  -->

                                <!-- <datalist id="citylist">
                                    <option>pune</option>
                                    <option>mumbai</option>
                                </datalist>

                            </div>
                            <div class="input-field">
                                <input type="text" id="select-search" class="autocomplete" name="package" placeholder="Search over a million tour and travels, sight seeings, hotels and more"> -->
                                <!-- <label for="select-search" class="search-hotel-type"></label> -->
                            <!-- </div>

                            <div class="input-field" >
                                <input type="date" id="select-search1" class="autocomplete"> -->
                                <!-- <label for="select-search" class="search-hotel-type"></label> -->
                            <!-- </div>
                            
                            <div class="input-field">
                                <input type="submit" value="search" class="waves-effect waves-light tourz-sear-btn"> 
                            </div>

                        </form> -->
                        <div class="s002">
                            <form action="<?=base_url().'Hotel'?>" method="GET">
                            
                                <div class="inner-form">
                                <div class="input-field first-wrap">
                                    <div class="icon-wrap">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"></path>
                                    </svg>
                                    </div>
                                    <input id="countySel" type="text"  placeholder="What are you looking for?" name="city" required/>

                                    <!-- <ul style="position: absolute;
                                            background: white;
                                            width: 100%;
                                            /* list-style: none; */
                                            text-decoration: none;
                                            list-style-type: none;">
                                        <li style="background-color:red">sdfsdf</li>
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
                        <div class="tourz-hom-ser">
                            <!-- <ul>
                                <li>
                                    <a href="booking-tour-package.html" class="waves-effect waves-light btn-large tourz-pop-ser-btn wow fadeInUp" data-wow-duration="0.5s"><img src="<?=images?>/icon/2.png" alt=""> Tour</a>
                                </li>
                                <li>
                                    <a href="booking-flight.html" class="waves-effect waves-light btn-large tourz-pop-ser-btn wow fadeInUp" data-wow-duration="1s"><img src="<?=images?>/icon/31.png" alt=""> Flight</a>
                                </li>
                                <li>
                                    <a href="booking-car-rentals.html" class="waves-effect waves-light btn-large tourz-pop-ser-btn wow fadeInUp" data-wow-duration="1.5s"><img src="<?=images?>/icon/30.png" alt=""> Car Rentals</a>
                                </li>
                                <li>
                                    <a href="booking-hotel.html" class="waves-effect waves-light btn-large tourz-pop-ser-btn wow fadeInUp" data-wow-duration="2s"><img src="<?=images?>/icon/1.png" alt=""> Hotel</a>
                                </li>
                            </ul> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--END HEADER SECTION-->

    <section>
        <div class="rows pad-bot-redu tb-space">
            <div class="container">
                <!-- TITLE & DESCRIPTION -->
                <div class="spe-title">
                    <h2>Our <span>Top Hotels</span></h2>
                    <div class="title-line">
                        <div class="tl-1"></div>
                        <div class="tl-2"></div>
                        <div class="tl-3"></div>
                    </div>
                    <p>World's leading tour and travels Booking website,Over 30,000 packages worldwide.</p>
                </div>
                <div>
                    <!-- TOUR PLACE 1 -->
                    <div class="col-md-4 col-sm-6 col-xs-12 b_packages wow slideInUp" data-wow-duration="0.5s">
                        <!-- OFFER BRAND -->
                        <div class="band"> <img src="<?=images?>/band.png" alt="" /> </div>
                        <!-- IMAGE -->
                        <div class="v_place_img"> <img src="<?=images?>/t5.png" alt="Tour Booking" title="Tour Booking" /> </div>
                        <!-- TOUR TITLE & ICONS -->
                        <div class="b_pack rows">
                            <!-- TOUR TITLE -->
                            <div class="col-md-8 col-sm-8">
                                <h4><a href="tour-details.html">Rio de Janeiro<span class="v_pl_name">(Brazil)</span></a></h4>
                            </div>
                            <!-- TOUR ICONS -->
                            <div class="col-md-4 col-sm-4 pack_icon">
                                <ul>
                                    <li>
                                        <a href="#"><img src="<?=images?>/clock.png" alt="Date" title="Tour Timing" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="<?=images?>/info.png" alt="Details" title="View more details" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="<?=images?>/price.png" alt="Price" title="Price" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="<?=images?>/map.png" alt="Location" title="Location" /> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- TOUR PLACE 2 -->
                    <div class="col-md-4 col-sm-6 col-xs-12 b_packages wow fadeInUp" data-wow-duration="0.7s">
                        <!-- OFFER BRAND -->
                        <div class="band"> <img src="<?=images?>/band1.png" alt="" /> </div>
                        <!-- IMAGE -->
                        <div class="v_place_img"> <img src="<?=images?>/t1.png" alt="Tour Booking" title="Tour Booking" /> </div>
                        <!-- TOUR TITLE & ICONS -->
                        <div class="b_pack rows">
                            <!-- TOUR TITLE -->
                            <div class="col-md-8 col-sm-8">
                                <h4><a href="tour-details.html">Paris<span class="v_pl_name">(England)</span></a></h4>
                            </div>
                            <!-- TOUR ICONS -->
                            <div class="col-md-4 col-sm-4 pack_icon">
                                <ul>
                                    <li>
                                        <a href="#"><img src="<?=images?>/clock.png" alt="Date" title="Tour Timing" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="<?=images?>/info.png" alt="Details" title="View more details" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="<?=images?>/price.png" alt="Price" title="Price" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="<?=images?>/map.png" alt="Location" title="Location" /> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- TOUR PLACE 3 -->
                    <div class="col-md-4 col-sm-6 col-xs-12 b_packages wow fadeInUp" data-wow-duration="0.9s">
                        <div class="v_place_img"><img src="<?=images?>/t2.png" alt="Tour Booking" title="Tour Booking" /> </div>
                        <div class="b_pack rows">
                            <div class="col-md-8 col-sm-8">
                                <h4><a href="tour-details.html">South India<span class="v_pl_name">(India)</span></a></h4>
                            </div>
                            <div class="col-md-4 col-sm-4 pack_icon">
                                <ul>
                                    <li>
                                        <a href="#"><img src="<?=images?>/clock.png" alt="Date" title="Tour Timing" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="<?=images?>/info.png" alt="Details" title="View more details" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="<?=images?>/price.png" alt="Price" title="Price" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="<?=images?>/map.png" alt="Location" title="Location" /> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- TOUR PLACE 4 -->
                    <div class="col-md-4 col-sm-6 col-xs-12 b_packages wow fadeInUp" data-wow-duration="1.1s">
                        <div class="v_place_img"><img src="<?=images?>/t3.png" alt="Tour Booking" title="Tour Booking" /> </div>
                        <div class="b_pack rows">
                            <div class="col-md-8 col-sm-8">
                                <h4><a href="tour-details.html">The Great Wall<span class="v_pl_name">(China)</span></a></h4>
                            </div>
                            <div class="col-md-4 col-sm-4 pack_icon">
                                <ul>
                                    <li>
                                        <a href="#"><img src="<?=images?>/clock.png" alt="Date" title="Tour Timing" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="<?=images?>/info.png" alt="Details" title="View more details" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="<?=images?>/price.png" alt="Price" title="Price" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="<?=images?>/map.png" alt="Location" title="Location" /> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- TOUR PLACE 5 -->
                    <div class="col-md-4 col-sm-6 col-xs-12 b_packages wow fadeInUp" data-wow-duration="1.3s">
                        <div class="v_place_img"><img src="<?=images?>/t4.png" alt="Tour Booking" title="Tour Booking" /> </div>
                        <div class="b_pack rows">
                            <div class="col-md-8 col-sm-8">
                                <h4><a href="tour-details.html">Nail Island<span class="v_pl_name">(Andaman)</span></a></h4>
                            </div>
                            <div class="col-md-4 col-sm-4 pack_icon">
                                <ul>
                                    <li>
                                        <a href="#"><img src="<?=images?>/clock.png" alt="Date" title="Tour Timing" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="<?=images?>/info.png" alt="Details" title="View more details" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="<?=images?>/price.png" alt="Price" title="Price" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="<?=images?>/map.png" alt="Location" title="Location" /> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- TOUR PLACE 6 -->
                    <div class="col-md-4 col-sm-6 col-xs-12 b_packages wow fadeInUp" data-wow-duration="1.5s">
                        <div class="v_place_img"><img src="<?=images?>/t6.png" alt="Tour Booking" title="Tour Booking" /> </div>
                        <div class="b_pack rows">
                            <div class="col-md-8 col-sm-8">
                                <h4><a href="tour-details.html">Mauritius<span class="v_pl_name">(Indiana)</span></a></h4>
                            </div>
                            <div class="col-md-4 col-sm-4 pack_icon">
                                <ul>
                                    <li>
                                        <a href="#"><img src="<?=images?>/clock.png" alt="Date" title="Tour Timing" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="<?=images?>/info.png" alt="Details" title="View more details" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="<?=images?>/price.png" alt="Price" title="Price" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="<?=images?>/map.png" alt="Location" title="Location" /> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== HOME HOTELS ==========-->
    <section>
        <div class="rows tb-space pad-top-o pad-bot-redu">
            <div class="container">
                <!-- TITLE & DESCRIPTION -->
                <div class="spe-title">
                    <h2>Popular <span>Cities</span> </h2>
                    <div class="title-line">
                        <div class="tl-1"></div>
                        <div class="tl-2"></div>
                        <div class="tl-3"></div>
                    </div>
                    <p>World's leading Hotel Booking website,Over 30,000 Hotel rooms worldwide. Book Hotel rooms and enjoy your holidays with distinctive experience</p>
                </div>
                <!-- CITY -->
                <div class="col-md-6">
                    <a href="tour-details.html">
                        <div class="tour-mig-like-com">
                            <div class="tour-mig-lc-img"> <img src="<?=images?>/listing/home.jpg" alt=""> </div>
                            <div class="tour-mig-lc-con">
                                <h5>Europe</h5>
                                <p><span>12 Packages</span> Starting from Rs.2400</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="tour-details.html">
                        <div class="tour-mig-like-com">
                            <div class="tour-mig-lc-img"> <img src="<?=images?>/listing/home3.jpg" alt=""> </div>
                            <div class="tour-mig-lc-con tour-mig-lc-con2">
                                <h5>Dubai</h5>
                                <p>Starting from Rs.2400</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="tour-details.html">
                        <div class="tour-mig-like-com">
                            <div class="tour-mig-lc-img"> <img src="<?=images?>/listing/home2.jpg" alt=""> </div>
                            <div class="tour-mig-lc-con tour-mig-lc-con2">
                                <h5>India</h5>
                                <p>Starting from Rs.2400</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="tour-details.html">
                        <div class="tour-mig-like-com">
                            <div class="tour-mig-lc-img"> <img src="<?=images?>/listing/home1.jpg" alt=""> </div>
                            <div class="tour-mig-lc-con tour-mig-lc-con2">
                                <h5>Usa</h5>
                                <p>Starting from Rs.2400</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="tour-details.html">
                        <div class="tour-mig-like-com">
                            <div class="tour-mig-lc-img"> <img src="<?=images?>/listing/home4.jpg" alt=""> </div>
                            <div class="tour-mig-lc-con tour-mig-lc-con2">
                                <h5>London</h5>
                                <p>Starting from Rs.2400</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--====== HOME HOTELS ==========-->
    <section>
        <div class="rows tb-space pad-top-o pad-bot-redu">
            <div class="container">
                <!-- TITLE & DESCRIPTION -->
                <div class="spe-title">
                    <h2>Hotels <span>booking open now! </span> </h2>
                    <div class="title-line">
                        <div class="tl-1"></div>
                        <div class="tl-2"></div>
                        <div class="tl-3"></div>
                    </div>
                    <p>World's leading Hotel Booking website,Over 30,000 Hotel rooms worldwide. Book Hotel rooms and enjoy your holidays with distinctive experience</p>
                </div>
                <!-- HOTEL GRID -->
                <div class="to-ho-hotel">
                    <!-- HOTEL GRID -->
                    <div class="col-md-4">
                        <div class="to-ho-hotel-con">
                            <div class="to-ho-hotel-con-1">
                                <div class="hot-page2-hli-3"> <img src="<?=images?>/hci1.png" alt=""> </div>
                                <div class="hom-hot-av-tic"> Available Tickets: 42 </div> <img src="<?=images?>/hotels/1.jpg" alt=""> </div>
                            <div class="to-ho-hotel-con-23">
                                <div class="to-ho-hotel-con-2">
                                    <a href="hotel-details.html">
                                        <h4>GTC Grand Chola</h4>
                                    </a>
                                </div>
                                <div class="to-ho-hotel-con-3">
                                    <ul>
                                        <li>City: illunois,united states
                                            <div class="dir-rat-star ho-hot-rat-star"> Rating: <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o"
                                                    aria-hidden="true"></i> </div>
                                        </li>
                                        <li><span class="ho-hot-pri-dis">Rs.720</span><span class="ho-hot-pri">Rs.420</span> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- HOTEL GRID -->
                    <div class="col-md-4">
                        <div class="to-ho-hotel-con">
                            <div class="to-ho-hotel-con-1">
                                <div class="hot-page2-hli-3"> <img src="<?=images?>/hci1.png" alt=""> </div>
                                <div class="hom-hot-av-tic"> Available Tickets: 520 </div> <img src="<?=images?>/hotels/2.jpg" alt=""> </div>
                            <div class="to-ho-hotel-con-23">
                                <div class="to-ho-hotel-con-2">
                                    <a href="hotel-details.html">
                                        <h4>Taaj Grand Resorts</h4>
                                    </a>
                                </div>
                                <div class="to-ho-hotel-con-3">
                                    <ul>
                                        <li>City: illunois,united states
                                            <div class="dir-rat-star ho-hot-rat-star"> Rating: <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o"
                                                    aria-hidden="true"></i> </div>
                                        </li>
                                        <li><span class="ho-hot-pri-dis">Rs.840</span><span class="ho-hot-pri">Rs.540</span> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- HOTEL GRID -->
                    <div class="col-md-4">
                        <div class="to-ho-hotel-con">
                            <div class="to-ho-hotel-con-1">
                                <div class="hot-page2-hli-3"> <img src="<?=images?>/hci1.png" alt=""> </div>
                                <div class="hom-hot-av-tic"> Available Tickets: 92 </div> <img src="<?=images?>/hotels/3.jpg" alt=""> </div>
                            <div class="to-ho-hotel-con-23">
                                <div class="to-ho-hotel-con-2">
                                    <a href="hotel-details.html">
                                        <h4>Keep Grand Hotels</h4>
                                    </a>
                                </div>
                                <div class="to-ho-hotel-con-3">
                                    <ul>
                                        <li>City: illunois,united states
                                            <div class="dir-rat-star ho-hot-rat-star"> Rating: <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o"
                                                    aria-hidden="true"></i> </div>
                                        </li>
                                        <li><span class="ho-hot-pri-dis">Rs.680</span><span class="ho-hot-pri">Rs.380</span> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== SECTION: FREE CONSULTANT ==========-->
    <section>
        <div class="offer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="offer-l"> <span class="ol-1"></span> <span class="ol-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span> <span class="ol-4">Standardized Budget Rooms</span>                            <span class="ol-3"></span> <span class="ol-5">Rs.99/-</span>
                            <ul>
                                <li class="wow fadeInUp" data-wow-duration="0.5s">
                                    <a href="#!" class="waves-effect waves-light btn-large offer-btn"><img src="<?=images?>/icon/dis1.png" alt="">
									</a><span>Free WiFi</span>
                                </li>
                                <li class="wow fadeInUp" data-wow-duration="0.7s">
                                    <a href="#!" class="waves-effect waves-light btn-large offer-btn"><img src="<?=images?>/icon/dis2.png" alt=""> </a><span>Breakfast</span>
                                </li>
                                <li class="wow fadeInUp" data-wow-duration="0.9s">
                                    <a href="#!" class="waves-effect waves-light btn-large offer-btn"><img src="<?=images?>/icon/dis3.png" alt=""> </a><span>Pool</span>
                                </li>
                                <li class="wow fadeInUp" data-wow-duration="1.1s">
                                    <a href="#!" class="waves-effect waves-light btn-large offer-btn"><img src="<?=images?>/icon/dis4.png" alt=""> </a><span>Television</span>
                                </li>
                                <li class="wow fadeInUp" data-wow-duration="1.3s">
                                    <a href="#!" class="waves-effect waves-light btn-large offer-btn"><img src="<?=images?>/icon/dis5.png" alt=""> </a><span>GYM</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="offer-r">
                            <div class="or-1"> <span class="or-11">go</span> <span class="or-12">Stays</span> </div>
                            <div class="or-2"> <span class="or-21">Get</span> <span class="or-22">70%</span> <span class="or-23">Off</span> <span class="or-24">use code: RG5481WERQ</span> <span class="or-25"></span> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


 <!-- counters  -->
    <section class="tourb2-ab-p-3 com-colo-abou">
		<div class="container">
			<div class="row tourb2-ab-p3">
				<div class="col-md-3 col-sm-6">
					<div class="tourb2-ab-p3-1 tourb2-ab-p3-com"> <span>240</span>
						<h4>Packages</h4>
						<p>Vivamus nec tortor bibendum risus placerat vulputate at gravida ante</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="tourb2-ab-p3-1 tourb2-ab-p3-com"> <span>960</span>
						<h4>Places</h4>
						<p>Vivamus nec tortor bibendum risus placerat vulputate at gravida ante</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="tourb2-ab-p3-1 tourb2-ab-p3-com"> <span>400</span>
						<h4>Events</h4>
						<p>Vivamus nec tortor bibendum risus placerat vulputate at gravida ante</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="tourb2-ab-p3-1 tourb2-ab-p3-com"> <span>120</span>
						<h4>Hotels</h4>
						<p>Vivamus nec tortor bibendum risus placerat vulputate at gravida ante</p>
					</div>
				</div>
			</div>
		</div>
    </section>
    

    <!-- search bar js -->
    <script src="<?php echo searchjs; ?>/main.js"></script>



<script>
var countryStateInfo = {
"USA": {
"California": {
"Los Angeles": ["90001", "90002", "90003", "90004"],
"San Diego": ["92093", "92101"]
},
"Texas": {
"Dallas": ["75201", "75202"],
"Austin": ["73301", "73344"]
}
},
"India": {
"Assam": {
"Dispur": ["781005"],
"Guwahati" : ["781030", "781030"]
},
"Gujarat": {
"Vadodara" : ["390011", "390020"],
"Surat" : ["395006", "395002"]
}
}
}


window.onload = function () {

//Get html elements
var countySel = document.getElementById("countySel";
var stateSel = document.getElementById("stateSel";	
var citySel = document.getElementById("citySel";
var zipSel = document.getElementById("zipSel";

//Load countries
for (var country in countryStateInfo) {
countySel.options[countySel.options.length] = new Option(country, country);
}

//County Changed
countySel.onchange = function () {
 
 stateSel.length = 1; // remove all options bar first
 citySel.length = 1; // remove all options bar first
 zipSel.length = 1; // remove all options bar first
 
 if (this.selectedIndex < 1)
 return; // done
 
 for (var state in countryStateInfo[this.value]) {
 stateSel.options[stateSel.options.length] = new Option(state, state);
 }
}

//State Changed
stateSel.onchange = function () {	  
 
 citySel.length = 1; // remove all options bar first
 zipSel.length = 1; // remove all options bar first
 
 if (this.selectedIndex < 1)
 return; // done
 
 for (var city in countryStateInfo[countySel.value][this.value]) {
 citySel.options[citySel.options.length] = new Option(city, city);
 }
}

//City Changed
citySel.onchange = function () {
zipSel.length = 1; // remove all options bar first

if (this.selectedIndex < 1)
return; // done

var zips = countryStateInfo[countySel.value][stateSel.value][this.value];
for (var i = 0; i < zips.length; i++) {
zipSel.options[zipSel.options.length] = new Option(zips[i], zips[i]);
}
}	
}

</script>

