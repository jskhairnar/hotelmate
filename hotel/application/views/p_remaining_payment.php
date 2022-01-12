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



// print_r($booking_details);


?>


<div class="theme-page-section theme-page-section-lg">
      <div class="container">
        <div class="row row-col-static row-col-mob-gap" id="sticky-parent" data-gutter="60">
          <div class="col-md-8 ">
            <div class="theme-payment-page-sections">
              <div id="LoginSection"></div>
            
                <!-- Guest Details -->
                <div class="theme-payment-page-sections-item">
                  <h3 class="theme-payment-page-sections-item-title">Guest Details</h3>
                  
                  <div class="theme-payment-page-form">
                    <div class="row row-col-gap" data-gutter="20">
                      <div class="col-md-6 ">
                        <div class="theme-payment-page-form-item form-group">
                          <input class="form-control" type="text" placeholder="First Name" value="<?=$this->session->userdata('userdata')['u_fname']?>" disabled="">
                        </div>
                      </div>
                      <div class="col-md-6 ">
                        <div class="theme-payment-page-form-item form-group">
                          <input class="form-control" type="text" placeholder="Last Name" value="<?=$this->session->userdata('userdata')['u_lname']?>" disabled="">
                        </div>
                      </div>
                      <div class="col-md-6 ">
                        <div class="theme-payment-page-form-item form-group">
                          <input class="form-control" type="text" placeholder="Email Address" value="<?=$this->session->userdata('userdata')['email']?>" disabled="">
                        </div>
                      </div>
                      <div class="col-md-6 ">
                        <div class="theme-payment-page-form-item form-group">
                          <input class="form-control" type="text" placeholder="Phone Number" value="<?=$this->session->userdata('userdata')['u_mobile']?>" disabled="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="theme-payment-page-sections-item">
                <div class="theme-payment-page-booking">
                  
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 ">
            <div class="sticky-col">
              <div class="theme-sidebar-section _mb-10">
                <h4 class="theme-sidebar-section-title">Payable Amount</h4>
                <div class="theme-sidebar-section-charges">
                  <?php 

                        $gst = ($booking_details->remaining_amt * $booking_details->gst) /100;


                        $pay_with_gst = $booking_details->remaining_amt + $gst;

                        

                  ?>

                  <ul class="theme-sidebar-section-charges-list">

                    <form action="<?=base_url()?>booking_list/payment_process" method="post">
                      <li class="theme-sidebar-section-charges-item">
                        <input type="hidden" name="bid" value="<?=$booking_details->id?>">
                        <input type ="hidden" name="previews_payment" value="<?=$booking_details->pay_with_gst_coupon?>">
                        <h6> Booking Id   <span style="float:right;"> <?=$booking_details->booking_id?> </span></h6>              
                        <input type="hidden" name="booking_id" value="<?=$booking_details->booking_id?>">
                      </li>

                      <li class="theme-sidebar-section-charges-item">
                        <h6> Remaining Amount  <span style="float:right;margin-top:px;"> Rs.<?=$booking_details->remaining_amt?> </span> </h6>                   
                        <input type="hidden" name="remaining_amt" value="<?=$booking_details->remaining_amt?>">
                        
                        <h6> Taxes & Fees <span style="float:right;margin-top:px; margin-bottom:5px;"> Rs.<?=$gst?> </span> </h6> 
                        <input type="hidden" name="gst" value="<?=$gst?>">

                      </li>
                      <p class="theme-sidebar-section-charges-total">Total Payable 
                        <span>Rs.<span id="totalpay"> <?=$pay_with_gst?> </span></span>
                        <input type="hidden" name="pay_with_gst" id="input_pfinal" value="<?=$pay_with_gst?>">
                      </p>

                      <button type="submit" class="btn _tt-uc btn-primary-inverse btn-md btn-block _mt-20">Pay Now</button>
                    </form>
                  </ul>
                 
                </div>
              </div>
              <div class="theme-sidebar-section _mb-10">
                <ul class="theme-sidebar-section-features-list">
                  <li>
                    <h5 class="theme-sidebar-section-features-list-title">Manage your bookings!</h5>
                  </li>
                  <li>
                    <h5 class="theme-sidebar-section-features-list-title">Customer support available 24/7 worldwide!</h5>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>