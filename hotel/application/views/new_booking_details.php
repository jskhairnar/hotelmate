<?php  

// print_r($booking_d);

?>

<style>

html {
  scroll-behavior: smooth;
}

.error {
  color: red;
}
.overlay {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  right: 0;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.9);
  overflow-x: hidden;
  transition: 0.5s;
}

.overlay-content {
  position: relative;
  top: 25%;
  width: 100%;
  text-align: center;
  margin-top: 30px;
}

.overlay a {
  padding: 8px;
  text-decoration: none;
  font-size: 36px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.overlay a:hover, .overlay a:focus {
  color: #f1f1f1;
}

.overlay .closebtn {

  position: absolute;
    top: -3px;
    right: 17px;
    font-size: 39px;
}
.theme-payment-page-form-item .form-control:before {
    content: 'foo';
    display:none;
}

@media screen and (max-height: 450px) {
  .overlay a {font-size: 20px}
  .overlay .closebtn {
  font-size: 40px;
  top: 15px;
  right: 35px;
  }
}
</style>

<style>

	.coupon-applied {
    font-size: 12px;
    line-height: 20px;
    letter-spacing: 0.1px;
    text-align: left;
    color: #4a4a4a;
    padding: 9px 9px 9px;
    border: 1px dashed #858585;
    cursor: pointer;
    border-radius: 2px;
    margin-bottom: 8px;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-pack: justify;
    justify-content: space-between;
}
	.redeem-fab-points input[type="checkbox"] {
    border: 1px solid white;
    background: #00b96e;
    color: #b2b2b2;
    clear: none;
    cursor: pointer;
    display: inline-block;
    line-height: 0;
    height: 22px;
    margin: 0;
    outline: 0;
    padding: 0 !important;
    text-align: center;
    vertical-align: middle;
    width: 22px;
    min-width: 22px;
    -webkit-appearance: none;
    box-shadow: 0 1px 2px rgba(0, 0, 0, .1);
    transition: .05s border-color ease-in-out;
    border-radius: 50%;
    -webkit-border-radius: 50%;
    float: right;
	margin-left:10px;
}

.redeem-fab-points input[type="checkbox"]:after {
    content: '';
    display: block;
    width: 10px;
    height: 5px;
    border-left: 1px solid white;
    border-bottom: 1px solid white;
    transform: rotate(-45deg);
    -webkit-transform: rotate(-45deg);
    -moz-transform: rotate(-45deg);
    margin: 6px 0 0px 5px;
}

.redeem-fab-points input[type="checkbox"]:checked {
    background: #00b96e;
    border-color: #00b96e;
}

[type="checkbox"]:not(:checked), [type="checkbox"]:checked {
    position: relative; 
    left: 0;
     opacity: 1;
}

.redeem-fab-points input[type="checkbox"]:checked:after {
    border-color: #fff;
}


.view_offer {
    font-size: 12px;
    color: #379aff;
    width: auto;
    line-height: 14px;
}


/* ------------------- */



.coupon-applied1 {
    font-size: 12px;
    line-height: 20px;
    letter-spacing: 0.1px;
    text-align: left;
    color: #4a4a4a;
    padding: 9px 9px 9px;
    border: 1px dashed #858585;
    cursor: pointer;
    border-radius: 2px;
    margin-bottom: 8px;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-pack: justify;
    justify-content: space-between;
}
	.redeem-fab-points1 input[type="checkbox"] {
    border: 1px solid #b2b2b2;
    background: #fff;
    color: #b2b2b2;
    clear: none;
    cursor: pointer;
    display: inline-block;
    line-height: 0;
    height: 22px;
    margin: 0;
    outline: 0;
    padding: 0 !important;
    text-align: center;
    vertical-align: middle;
    width: 22px;
    min-width: 22px;
    -webkit-appearance: none;
    box-shadow: 0 1px 2px rgba(0, 0, 0, .1);
    transition: .05s border-color ease-in-out;
    border-radius: 50%;
    -webkit-border-radius: 50%;
    float: right;
	margin-left:10px;
}

.redeem-fab-points1 input[type="checkbox"]:after {
    content: '';
    display: block;
    width: 10px;
    height: 5px;
    border-left: 1px solid #b2b2b2;
    border-bottom: 1px solid #b2b2b2;
    transform: rotate(-45deg);
    -webkit-transform: rotate(-45deg);
    -moz-transform: rotate(-45deg);
    margin: 6px 0 0px 5px;
}

.redeem-fab-points1 input[type="checkbox"]:checked {
    background: #00b96e;
    border-color: #00b96e;
}

[type="checkbox"]:not(:checked), [type="checkbox"]:checked {
    position: relative; 
    left: 0;
     opacity: 1;
}

.redeem-fab-points1 input[type="checkbox"]:checked:after {
    border-color: #fff;
}



/* -------------- */



span.points_container1 {
    font-size: 11px;
}
span.points_container {
    font-size: 11px;
}


li.theme-sidebar-section-charges-item {
    position: relative;
    margin-top: 10px;
    padding-top: 10px;
    border-top: 1px dashed #e6e6e6;
}



a.view_applybutton {
    background: #ff6c2d;
    border-color: #ff570f;
    color: #fff;
    font-size: 13px;
    padding: 5px 20px;
}

/* .mobile_div_nav{
  display:none;
}

.desk_div_nav{
  display:block;
}

@media screen and (max-height: 700px) {

  .mobile_div_nav{
  display:block;
}

.desk_div_nav{
  display:none;
}

} */
label {
    display: inline-block;
    max-width: 100%;
    margin-bottom: 5px;
    font-weight: normal;
}

#registration_form{
display:none;
}

	</style>

<?php


$s=$this->session->set_userdata('get_bookingdata',$booking_d);

// print($s);

$taxprice = 18;



$display_troom=json_decode($booking_d['total_room']);
$display_tguest=json_decode($booking_d['total_guest']);

$d_troom;

for($i=0;$i<count($display_troom);$i++)
{
	$d_troom = $d_troom + $display_troom[$i];
}

$d_tguest;

for($i=0;$i<count($display_tguest);$i++)
{
	$d_tguest = $d_tguest + $display_tguest[$i];
}




?>
<div class="theme-page-section theme-page-section-lg">
      <div class="container">
        <div class="row row-col-static row-col-mob-gap" id="sticky-parent" data-gutter="60">
          <div class="col-md-8 ">
            <div class="theme-payment-page-sections">
             
              <!-- <div class="theme-payment-page-sections-item">
                <div class="theme-search-results-item theme-payment-page-item-thumb">
                  <h5 class="theme-search-results-item-title"><?=$booking_d['hotel_name']?></h5>
                  <div class="row" data-gutter="20">
                    <div class="col-md-9 ">
                      <div class="row" data-gutter="20">
                        <div class="col-md-5 ">
                          <ul class="theme-search-results-item-hotel-room-features">
                            <li>
                              <i class="fa fa-bed"></i>1 King bed
                            </li>
                            <li>
                              <i class="fa fa-arrows-h"></i>250 squre feet
                            </li>
                            <li>
                              <i class="fa fa-shower"></i>Private bathroom
                            </li>
                            <li>
                              <i class="fa fa-wifi"></i>Free wifi
                            </li>
                            <li>
                              <i class="fa fa-male"></i>2 Guests max
                            </li>
                          </ul>
                        </div>
                        <div class="col-md-5 ">
                          <ul class="theme-search-results-item-hotel-room-options">
                            <li>Special conditions,
                              <br/>pay when you stay
                            </li>
                            <li>Breakfast $30</li>
                            <li>Free cancellation</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3 ">
                      <div class="theme-search-results-item-img-wrap">
                        <img class="theme-search-results-item-img" src="<?=new_ass?>img/hotel-page/rooms/1.jpg" alt="Image Alternative text" title="Image Title"/>
                      </div>
                    </div>
                  </div>
                </div>
              </div> -->
              <div id="LoginSection"></div>
            <?php 
            
            if($this->session->userdata('userdata'))
            {  // print_r($this->session->userdata('userdata'));?>

                <!-- Guest Details -->
                <div class="theme-payment-page-sections-item">
                  <h3 class="theme-payment-page-sections-item-title">Guest Details</h3>
                  <div class="theme-payment-page-form">
                    <div class="row row-col-gap" data-gutter="20">
                      <div class="col-md-6 ">
                        <div class="theme-payment-page-form-item form-group">
                          <input class="form-control" type="text" placeholder="First Name" value="<?=$u_fname?>" disabled/>
                        </div>
                      </div>
                      <div class="col-md-6 ">
                        <div class="theme-payment-page-form-item form-group">
                          <input class="form-control" type="text" placeholder="Last Name" value="<?=$u_lname?>" disabled/>
                        </div>
                      </div>
                      <div class="col-md-6 ">
                        <div class="theme-payment-page-form-item form-group">
                          <input class="form-control" type="text" placeholder="Email Address" value="<?=$u_email?>" disabled/>
                        </div>
                      </div>
                      <div class="col-md-6 ">
                        <div class="theme-payment-page-form-item form-group">
                          <input class="form-control" type="text" placeholder="Phone Number" value="<?=$u_mobile?>" disabled/>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
             
            <?php } else{ ?>
              <!-- Login form -->
              <form  method="post" action="javascript:void(0)" id="login_form_s">
              <div class="theme-payment-page-sections-item" >
                <h3 class="theme-payment-page-sections-item-title"> Login <img src="<?=jksearchjs?>720.gif" id="show_login_gif" style="margin-left:10px;display:none;"></h3>
                <p id="login_error_show" style="color:red;display:none;font-size: 13px;font-weight: 600;">
                  Please Enter Valid Email & Password
                </p>
                <div class="theme-payment-page-form">
                  <div class="row row-col-gap" data-gutter="20">
                    <div class="col-md-6 ">
                      <div class="theme-payment-page-form-item form-group">
                        <label>Email</label>
                        <input class="form-control" type="text" placeholder="Email Address" name="u_email" id ="u_email" required/>
                      </div>
                    </div>
                    <div class="col-md-6 ">
                      <label>Password</label>
                      <div class="theme-payment-page-form-item form-group">
                        <input class="form-control" type="Password" placeholder="Password" name="u_password" id ="u_password" required/>
                      </div>
                    </div>
                    <div class="col-md-12 ">
                        <div class="col-md-6 ">
                            <p style="margin-top:23px;">Don't have a account ? <a href="#" onclick="registration_show()">Registration here</a></p>
                        </div>
                        <div class="col-md-6 ">
                          <div class="row">
                          <div class="col-md-6 ">
                          </div>
                            <div class="col-md-6 ">
                              <button type="submit" id="submit_login" class="btn _tt-uc btn-primary-inverse btn-md btn-block _mt-20">Login</button>
                            </div>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
              </form>
              
              <!-- Registration Form -->
              <form  method="post" action="javascript:void(0)" id="registration_form">
                <div class="theme-payment-page-sections-item">
                  <h3 class="theme-payment-page-sections-item-title"> Registration <img src="<?=jksearchjs?>720.gif" id="show_login_gif1" style="margin-left:10px;display:none;"></h3>
                  <p id="reg_error_show" style="color:red;font-size: 15px;font-weight: 600;"></p>
                  <p id="reg_create_show" style="color:#5BB95B;font-size: 15px;font-weight: 600;"></p>
                  
                
                  <div class="theme-payment-page-form">
                    <div class="row row-col-gap" data-gutter="20">
                      <div class="col-md-6 ">
                        <div class="theme-payment-page-form-item form-group">
                          <label>First Name</label>
                          <input class="form-control" type="text" placeholder="First Name" name="reg_first_name" id="reg_first_name" value=""/>
                        </div>
                      </div>
                      <div class="col-md-6 ">
                      <label>Last Name</label>
                        <div class="theme-payment-page-form-item form-group">
                          <input class="form-control" type="text" placeholder="Last Name" name="reg_last_name" id="reg_last_name"  value=""/>
                        </div>
                      </div>
                      <div class="col-md-6 ">
                      <label>Email</label>
                        <div class="theme-payment-page-form-item form-group">
                          <input class="form-control" type="text" placeholder="Email Address" name="reg_email" id="reg_email" value=""/>
                        </div>
                      </div>
                      <div class="col-md-6 ">
                      <label>Phone Number</label>
                        <div class="theme-payment-page-form-item form-group">
                          <input class="form-control" type="number" placeholder="Phone Number" name="reg_phone" id="reg_phone"  maxlength="10"/>
                        </div>
                      </div>

                      <div class="col-md-6 ">
                      <label>Birth of Date</label>
                        <div class="theme-payment-page-form-item form-group">
                          <input class="form-control" type="date" name="reg_bod" id="reg_bod"/>
                        </div>
                      </div>

                      <div class="col-md-6 ">
                        <label>Password</label>
                        <div class="theme-payment-page-form-item form-group">
                          <input class="form-control" type="password" name="reg_pass" id="reg_pass" placeholder="Password"/>
                        </div>
                      </div>

                      <div class="col-md-12 ">
                          <div class="col-md-6 ">
                              <p style="margin-top:23px;">Have already an account ? <a href="#" onclick="login_show()">Login here</a></p>
                          </div>
                          <div class="col-md-6 ">
                            <div class="row">
                            <div class="col-md-6 ">
                            </div>
                              <div class="col-md-6 ">
                                <button type="submit" class="btn _tt-uc btn-primary-inverse btn-md btn-block _mt-20">Registration</button>
                              </div>
                            </div>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
              <form>
              
            <?php   } ?>
              <div class="theme-payment-page-sections-item">
                <div class="theme-payment-page-booking">
                  <!-- <div class="theme-payment-page-booking-header">

				  	
                    <h3 class="theme-payment-page-booking-title">Total Price for 6 nights</h3>
                    <p class="theme-payment-page-booking-subtitle">By clicking book now button you agree with terms and conditionals and money back gurantee. Thank you for trusting our service.</p>
                    <p class="theme-payment-page-booking-price">$739.00</p>
                  </div> -->
                  <!-- <a class="btn _tt-uc btn-primary-inverse btn-lg btn-block" href="#">Book Now</a> -->
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 ">
            <div class="sticky-col">
              <!-- <div class="theme-sidebar-section _mb-10">
                <h5 class="theme-sidebar-section-title">Hotel Pennsylvania</h5>
                <img class="theme-sidebar-section-hotel-thumbnail-img" src="<?=new_ass?>img/hotel-page/sidebar/hotel-thumbnail-1.jpg" alt="Image Alternative text" title="Image Title"/>
                <div class="theme-sidebar-section-hotel-thumbnail-caption">
                  <p class="theme-sidebar-section-hotel-thumbnail-rating">
                    <b>8.5 exellent</b>(2889 reviews)
                  </p>
                  <p class="theme-sidebar-section-hotel-thumbnail-address">401 7th Avenue, Chelsea, New York, NY 10001, USA</p>
                </div>
              </div> -->
              <!-- <div class="theme-sidebar-section _mb-10">
                <h5 class="theme-sidebar-section-title">Booking Summary</h5>
                <ul class="theme-sidebar-section-summary-list">
                  <li>1 room, 2 adults, 6 nights</li>
                  <li>Check-in: Wed, Jun 27, 2018</li>
                  <li>Check-out: Tue, Jul 03, 2018</li>
                </ul>
              </div> -->
              <div class="theme-sidebar-section _mb-10">
                <h4 class="theme-sidebar-section-title">Payable Amount</h4>
                <div class="theme-sidebar-section-charges">
                  <ul class="theme-sidebar-section-charges-list">
                    <li class="theme-sidebar-section-charges-item">

                    <?php
                     $h_name123=json_decode($booking_d['room_type']); 

                      
                      for($i=0;$i<count($h_name123);$i++)
                      { ?>
                        <h6>  <?= ucfirst($h_name123[$i] )?></h6> 
                        <?php    }                     
                          ?>
                    
                    </li>

                    <li class="theme-sidebar-section-charges-item">
                      <h6> Check In  <span style="float:right;margin-top:5px;">  <?= $booking_d['checkin_date']?>  </span></h6>  
                      <h6> Check Out  <span style="float:right;margin-top:5px;"> <?= $booking_d['checkout_date']?> </span> </h6> 
                      <h6> Total Days  <span style="float:right;margin-top:5px;"> <?= $booking_d['total_days']?> Days</span> </h6> 
                    </li>

                    <li class="theme-sidebar-section-charges-item">

                      <?php  if($this->session->userdata('search_details')['type'] == 'weekend') { } 

                            elseif($this->session->userdata('search_details')['type'] == 'sightseeing') { ?>

                            <h6> Total Guest  <span style="float:right;margin-top:5px;"> <?= $d_tguest  ?> Guests </span> </h6> 

                            <?php  }else { ?>

                        <h6> Total Room   <span style="float:right;"> <?= $d_troom ?> Rooms </span></h6>  
                        <h6> Total Guest  <span style="float:right;margin-top:5px;"> <?= $d_tguest  ?> Guests </span> </h6> 

                      <?php  } ?>
                     
                      <h6> Total Price   <span style="float:right;margin-top:5px; margin-bottom:5px;">  Rs. <?=$booking_d['final_price'] ?> </span> </h6> 
                    </li>


                    <form action="<?=base_url().'Hotel/payment_new'?>" method="post" target="_blank">
                    
                      <li class="theme-sidebar-section-charges-item">
                        <?php  if($this->session->userdata("bod_coupon_applied") == True)
                        { ?>
                          <span style="font-size:12px;text-shadow: -1px 0px 7px rgba(150, 150, 152, 1);">Congrates! You got birthday coupon.</span>
                          <!-- <label for="redeem-points" class="coupon-applied redeem-fab-points redeem_selection" style="margin-top:10px"> -->
                            <br><span>
                              <small><span class="points_container">Birthday Redeem (1 night free)</span></small>
                            </span>
                            <input type="checkbox" id="birthday_coupon_price"  value="<?= $booking_d['birthday_coupon_price'] ?>" onclick ="appy_birthday_coupon()"> 
                            <!-- <input type="checkbox" name="redeem-points" class="apply_fab_points" id="redeem-points" value="0">-->
                            <input type = "hidden" name="birthday" id="birthday_status" value="0"> 
                            <input type = "hidden" name="birthday_coupon_nightprice" id="birthday_coupon_nightprice" value="0"> 


                          <!-- </label> -->
                        <?php  } else { ?>
                              <input type = "hidden" name="birthday" value="0">
                              <input type="checkbox" id="birthday_coupon_price" style="display:none"> 

                        <?php  }?>
                      
                        

                        

                        <label for="redeem-points1" class="coupon-applied1 redeem-fab-points1 redeem_selection1">
                          <!-- <span>
                            <small><span class="points_container1">Birthday Redeem ₹150</span></small>
                          </span> -->
                          <strong class="coupon_name">RTMT </strong>
                          <small>coupon apply</small>
                       <?php    if($this->session->userdata('userdata'))
                        {  ?>
                          <a href="javascript:void(0);" class="view_offer mobile_123" onclick="openNav()">View Offers</a>
                          
                          <?php } else { ?>
                          
                           <a href="javascript:void(0);" class="view_offer mobile_123" onclick="plslogin()">View Offers</a>
                           
                          <?php } ?>
                        </label>

                       
                    </li>


                    <!-- c -->
                    <li class="theme-sidebar-section-charges-item">
                      <h6> <input type="radio" id="half" name="pay_without_gst_coupon" value="h-<?=$booking_d['15per'] ?> " onclick ="pay_amot(this.value)"  checked> Token Payment  <span style="float:right;margin-top:5px;"> Rs. <?=$booking_d['15per'] ?>  </span></h6>  
                      <h6> <input type="radio" id="full" name="pay_without_gst_coupon"  value="f-<?=$booking_d['final_price'] ?>"  onclick ="pay_amot(this.value)" > 	Pay Full Amount (100%)     <span style="float:right;margin-top:5px;"> Rs. <?=$booking_d['final_price'] ?> </span> </h6> 	
                    </li>

                    <li class="theme-sidebar-section-charges-item">
                      <h5 class="theme-sidebar-section-charges-item-title">Total Price </h5>
                      <!-- <p class="theme-sidebar-section-charges-item-subtitle">2 Guests</p> -->
                      <p class="theme-sidebar-section-charges-item-price">Rs.<span id="total_priceq" class="sizechange"> <?=$booking_d['15per'] ?>  </span></p>
                    </li>
                    
                    <!-- ----------------------------- credits --------------------- -->
                  <?php  if($this->session->userdata('userdata'))
                  {  ?>
                    <li class="theme-sidebar-section-charges-item">
                      <img src="<?=base_url()?>assets/coin.png" style="float:left;margin-right:4px; height: 14px;">
                      <h5 class="theme-sidebar-section-charges-item-title">Credit points <span style="font-size:12px;"> <?php if($u_credits == 0) { echo 'not available';} else{ echo $u_credits; }  ?></span></h5>
                      <p class="theme-sidebar-section-charges-item-subtitle"></p>
                      <p class="theme-sidebar-section-charges-item-price"> 
                        <span id=""> Rs.<span  class="sizechange" id="credit_price_update"> 0 </span> </span>
                        <!-- <span id="show_notappy"> Not apply  </span> </span> -->
                      </p>

                      <?php if($u_credits == 0) { ?>

                        <p class="theme-sidebar-section-charges-item-subtitle"  style="color:red;">credit points not available</p>
                        <p id="show_credit_error"></p>
                      <?php } else { ?>
                        <p class="theme-sidebar-section-charges-item-subtitle" id="show_credit_error" style="color:red;">If you pay full amt. then apply </p>
                     <?php } ?>
                     
                      <input type="hidden" name="credit_price_v" id="input_credit_price_v" value="<?= $u_credits/100 ?>">
                      <input type="hidden" name="credit_points" id="credit_points_v" value="0">

					            <!-- <p class="theme-sidebar-section-charges-item-price">$115.00</p> -->
                    </li>
                    <?php } ?>
                    <!-- ----------------------------- / credits --------------------- -->

                    <li class="theme-sidebar-section-charges-item">
                      <h5 class="theme-sidebar-section-charges-item-title">Coupon code</h5>
                      <p class="theme-sidebar-section-charges-item-subtitle"></p>
                      <p class="theme-sidebar-section-charges-item-price"> 
                        <span id="show_apply" style="display:none"> Rs.<span id="coupenprice" class="sizechange"> 0  </span> </span>
                        <span id="show_notappy"> Not apply  </span> </span>
                      </p>
                      <input type="hidden" name="coupon_id" id="input_coupon_id" value="0"> 
					            <!-- <p class="theme-sidebar-section-charges-item-price">$115.00</p> -->
                    </li>


                   


                    
                    <?php 
                        $final =  ($booking_d['15per'] * $taxprice)/100;
                        // $credits = $this->session->userdata('userdata')['u_credits']/100;
                        $gstpricetotal = $booking_d['15per'] + $final;
							        ?>

                    <input type="hidden" id="taxtotal" value="<?=$taxprice?>" >
                    <li class="theme-sidebar-section-charges-item">
                      <h5 class="theme-sidebar-section-charges-item-title">Taxes & Fees </h5>
                      <p class="theme-sidebar-section-charges-item-price">Rs. <span id="taxprice" class="sizechange"> <?=$final?>  </span></p>
                      <input type="hidden" name="gst" id="input_gst" value="<?=$taxprice?>"> </span>
                    </li>

                  </ul>
                  <p class="theme-sidebar-section-charges-total">Total Payable 
                     <span>Rs.<span id="totalpay">  <?=$gstpricetotal?> </span></span>
                    <input type="hidden" name="pay_with_gst_coupon" id="input_pfinal" value="<?=$gstpricetotal?>">
                  </p>
                  <input type="hidden" name="final_price" id="input_remaining" value="<?=$booking_d['final_price']?>">
                  <?php 
                  if($this->session->userdata('userdata'))
                  {  ?>
                    <button type ="submit" class="btn _tt-uc btn-primary-inverse btn-md btn-block _mt-20" >Book Now</button>
                  <?php } else { ?>

                    <a href="#LoginSection" class="btn _tt-uc btn-primary-inverse btn-md btn-block _mt-20" onclick="login_show()">Please Login ! </a>
                    
                  <?php } ?>
                  </form>
                </div>
              </div>
              <div class="theme-sidebar-section _mb-10">
                <ul class="theme-sidebar-section-features-list">
                  <li>
                    <h5 class="theme-sidebar-section-features-list-title">Manage your bookings!</h5>
                    <!-- <p class="theme-sidebar-section-features-list-body">You're in control of your booking - no registration required.</p> -->
                  </li>
                  <li>
                    <h5 class="theme-sidebar-section-features-list-title">Customer support available 24/7 worldwide!</h5>
                    <!-- <p class="theme-sidebar-section-features-list-body">Website and customer support in English and 41 other languages.</p> -->
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


   

      <div id="myNav" class="overlay mobile_div_nav">

                <div class="theme-sidebar-section _mb-10">
                  <!-- Coupon -->
                  <h4 class="theme-sidebar-section-title" style="display:flex">Coupons <a href="javascript:void(0);" onclick="add_voucher()"  class="view_offer view_applybutton" style="margin-left:10px;">Apply</a></h4>
                  <div class="theme-sidebar-section-charges">
                    <ul class="theme-sidebar-section-charges-list">
                    <?php
                      foreach($voucher as $v) { ?>

                      <li class="theme-sidebar-section-charges-item" id="voucher_<?= $v->id ?>">
                        <input type="hidden" name="birthday" value="0">
                          <label for="redeem-points1" class="coupon-applied1 redeem-fab-points1 redeem_selection1">
                            <strong class="coupon_name"><?= $v->coupen_code?> </strong>
                            <small><?= $v->voucher_name ?></small>

                            <input type="radio" name="v" id="radio_voucher" onclick="inputa('<?= $v->pay_type ?>','<?= $v->discount ?>','<?= $v->id ?>')">
                            <!-- <a href="javascript:void(0);" id="voucher_btn_<?= $v->id ?>" onclick="voucher_add('<?= $v->pay_type ?>','<?= $v->discount ?>','<?= $v->id ?>' )"  class="view_offer view_applybutton" >Apply</a>

                            <a href="javascript:void(0);" id="voucher_btn1_<?= $v->id ?>" class="view_offer view_applybutton" style="background-color:#c90059;display:none">Applied</a> -->
                          </label>
                      </li>

                      <?php	}  ?>
                    

                    </ul>
                  </div>
                </div>
      	      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
              <!-- <div class="overlay-content" style="color:white">
                  <?php
                    foreach($voucher as $v) { ?>

                      <a href="#" onclick="voucher_add('<?= $v->pay_type ?>','<?= $v->discount ?>','<?= $v->id ?>' )"><?= $v->voucher_name ?></a>

                    <?php	}  ?>
          
              </div> -->
      </div>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
    
    <script>

// Login form
  if ($("#login_form_s").length > 0) {
    $("#login_form_s").validate({
      
    rules: {
      u_email: {

        required: true,
              maxlength: 50,
              email: true,
        
      },
  
      u_password: {
        required: true,
        maxlength: 20
      },    
    },
    messages: {
        
      u_email: {
          required: "Please enter valid email",
          email: "Please enter valid email",
          maxlength: "The email name should less than or equal to 50 characters",
       
      },
      u_password: {
        required: "Please enter Password",
        maxlength: "Your Password maxlength should be 20 characters long."
      },
         
    },

    submitHandler: function(form) {
      // $('#send_form').html('Sending..');
      $('#show_login_gif').show();
      $.ajax({
        url: "<?php echo base_url(); ?>" + "Login/booking_check_login",
        type: "POST",
        data: $('#login_form_s').serialize(),
        dataType: "json",
        success: function( response ) {
            //  alert(response);
            if(response!=0){
            // alert("sdf");
            //  On success redirect.  
              window.location.reload();
              $('#show_login_gif').hide();

            }else{
              $("#login_error_show").show();
             $('#show_login_gif').hide();
            }
        }
      });
    }
  })
}


// Registration form
if ($("#registration_form").length > 0) {
    $("#registration_form").validate({
      
    rules: {

        reg_first_name: {
          required: true,
          maxlength: 20
        },

        reg_last_name: {
          required: true,
          maxlength: 20
        },

        reg_email: {
          required: true,
          maxlength: 50,
          email: true,
        },

        reg_phone: {
              required: true,
              digits:true,
              minlength: 10,
              maxlength:10,
        },

        reg_bod: {
        required: true
        },
  
        reg_pass: {
          required: true,
          maxlength: 20
        },  

    },
    messages: {
        
      reg_first_name: {
        required: "Please enter first name",
        maxlength: "Your first name maxlength should be 20 characters long."
      },

      reg_last_name: {
        required: "Please enter last name",
        maxlength: "Your last name maxlength should be 20 characters long."
      },
         
      u_email: {
          required: "Please enter valid email",
          email: "Please enter valid email",
          maxlength: "The email name should less than or equal to 50 characters",
       
      },

      reg_phone: {
        required: "Please enter phone",
        maxlength: "Your Password maxlength should be 10 digit."
      },


      
      reg_bod: {
           required: "Please select birth of date",
        },

        reg_pass: {
        required: "Please enter Password",
        maxlength: "Your Password maxlength should be 20 characters long."
      },
         
    },

    submitHandler: function(form) {
      // $('#send_form').html('Sending..');
      $('#show_login_gif1').show();

      $.ajax({
        url: "<?php echo base_url(); ?>" + "Registration/booking_check_registration",
        type: "POST",
        data: $('#registration_form').serialize(),
        dataType: "json",
        success: function( response ) {


          setTimeout(function(){ 
            
            var msg="";
            if(response == 0){ 
              msg = "Email already exit !";
              // alert("email Already")
              // $('#show_login_gif').hide();
              // $('#registration_complete_show').show();
            }else if(response==1){
              // alert("phone Already")
              msg = "Phone number already exit !";
              // $("#registration_error_show").show();
              // $('#show_login_gif').hide();

            }else if(response==2){

              // alert("Account create")
              // $("#registration_error_show").show();
              // $('#show_login_gif').hide();
              
              done = "Account Created Successfully !";
              
              $('#reg_create_show').text(done); 
              $('#show_login_gif1').hide();
              
            //   setTimeout(function(){ 
            //          window.location.reload();
            //   }, 3000);
              
            }else if(response==3){
              // alert("Something")
              msg = "Something wents wrong !";

              // $("#registration_error_show").show();
              // $('#show_login_gif').hide();
            }
            $('#reg_error_show').text(msg); 
            $('#show_login_gif1').hide();
            
            
            }, 3000);

          
        }
      });
    }
  })
}




window.onload = function() {
	document.getElementById("half").checked = true;
};



function registration_show()
{
  document.getElementById("login_form_s").style.display="none";
  document.getElementById("registration_form").style.display="block";
}


function login_show()
{
  document.getElementById("registration_form").style.display="none";
  document.getElementById("login_form_s").style.display="block";
}



function pay_amot(price,birthday_coupon_price=0)
{
	// alert(birthday_coupon_price);

	split = price.split("-");

//   alert(split[0]);

	// alert(split[1]);

	var total_priceq = document.getElementById('total_priceq').innerHTML = split[1];

	// alert(Number(total_priceq));

	var taxprice = document.getElementById('taxtotal').value;

	// alert(Number(taxprice));

	// $final =  ($booking_d['15per'] * $taxprice)/100;
	// $gstpricetotal = $booking_d['15per'] + $final;


	var gst = (Number(total_priceq) * Number(taxprice)) /100;

	
	var p = (Number(total_priceq) + gst).toFixed(2);
  
  document.getElementById('taxprice').innerHTML = gst;

	var coupenprice = document.getElementById('coupenprice').innerHTML;

  var total_pay_new = (p - Number(coupenprice)) - birthday_coupon_price;

 //start credits
  var input_credit_price_v;

  if(split[0] == 'h')
  {
    input_credit_price_v = 0;
    document.getElementById('credit_price_update').innerHTML = input_credit_price_v;
    document.getElementById('show_credit_error').style.display = "block";
    document.getElementById('credit_points_v').value = input_credit_price_v;
    

  }else{

    input_credit_price_v = document.getElementById('input_credit_price_v').value;
    document.getElementById('credit_price_update').innerHTML = input_credit_price_v;
    document.getElementById('show_credit_error').style.display = "none";
    document.getElementById('credit_points_v').value = input_credit_price_v * 100;

    // show_credit_error
  }
  
	document.getElementById('totalpay').innerHTML= (total_pay_new - input_credit_price_v).toFixed(2);


  // creadits system
  
  

  // coupenprice = Number(coupenprice) - input_credit_price_v;

  
  // alert("Jayesh1"+input_credit_price_v);
  // creadits system
  


  if(birthday_coupon_price != 0)
  {
    
    var n = p - Number(coupenprice).toFixed(2);

    // alert(`n : ${n} birthday_coupon_price : ${birthday_coupon_price}`);


    if(document.getElementById('birthday_coupon_price').checked)
    {
      document.getElementById('input_pfinal').value = (n - Number(birthday_coupon_price)) - input_credit_price_v;	

    }else{

      document.getElementById('input_pfinal').value = (n + Number(birthday_coupon_price)) - input_credit_price_v;

    }
  }else{

    // alert("jayesh");
    
	  document.getElementById('input_pfinal').value=(p-Number(coupenprice) - input_credit_price_v).toFixed(2);	


  }



}

</script>



<script>


function openNav() {
  document.getElementById("myNav").style.width = "50%";
}


function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}


var pay_typea123= "";
var discounta123= "";
var voucherida123= "";


function inputa(pay_type,discount,voucherid)
{
  pay_typea123 = pay_type;
  discounta123 =discount;
  voucherida123 =voucherid;
}

function add_voucher()
{
  
  if(pay_typea123 == "" && discounta123=="" && voucherida123=="")
  {
    alert("Please Select coupon");
    
  }else{

   this.voucher_add(pay_typea123,discounta123,voucherida123);

  }
}



// voucher_add('<?= $v->pay_type ?>','<?= $v->discount ?>','<?= $v->id ?>' )"







//voucher

function voucher_add(pay_type,discount,voucherid)
{


	var fprice;

	if (document.getElementById('half').checked) {

		fprice=document.getElementById('half').value;

  } else if (document.getElementById('full').checked) {

    	fprice=document.getElementById('full').value;

  }

  

  document.getElementById('show_apply').style.display = "block";
  document.getElementById('show_notappy').style.display = "none";

    


	// alert(`${pay_type} || ${discount}`)


	var pap = fprice.split("-");

	if(pay_type === 'percentage') {

		d = discount.slice(0, -1)
		
		var c = Math.round( (Number(d) / 100) * Number(pap[1])) ;

		document.getElementById('coupenprice').innerHTML = c;

		document.getElementById('input_coupon_id').value = voucherid;
		
		this.pay_amot(fprice);
		
        alert("Coupon Added Successfully..!");
        
        this.closeNav();

	} else{

		document.getElementById('coupenprice').innerHTML = Number(discount);
		document.getElementById('input_coupon_id').value = voucherid;

    var birthday_coupon_price = 0;
    
    if(document.getElementById('birthday_coupon_price').checked)
    {
      birthday_coupon_price = document.getElementById('birthday_coupon_price').value;
    }
    //fdsf

		this.pay_amot(fprice,birthday_coupon_price);
    alert("Coupon Added Successfully..!");
    this.closeNav();

	}


 

}


function appy_birthday_coupon(birthday_coupon)
{
  //fprice
  var fprice;

  if (document.getElementById('half').checked) {

    alert("when you select full payment then apply birthday coupon...!");
    document.getElementById('birthday_coupon_price').checked = false;
    

  } else if (document.getElementById('full').checked) {

      fprice=document.getElementById('full').value;

    
    // birthday coupon price
    var birthday_coupon_price;

    if (document.getElementById('birthday_coupon_price').checked) {

      birthday_coupon_price = document.getElementById('birthday_coupon_price').value;
      // alert(birthday_coupon_price);

      

      document.getElementById('birthday_coupon_nightprice').value = birthday_coupon_price;
      document.getElementById('birthday_status').value = 1;

      this.pay_amot(fprice,birthday_coupon_price);

    } else{

      document.getElementById('birthday_coupon_nightprice').value = 0;
      document.getElementById('birthday_status').value = 0;

      birthday_coupon_price = 0;
      // window.location.reload();
      this.pay_amot(fprice,birthday_coupon_price);

    }



  }


  


    // alert(couponprice);


}

function plslogin(){
    alert("Please Login !");
}




</script>

