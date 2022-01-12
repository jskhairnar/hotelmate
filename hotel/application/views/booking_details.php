
<?php 

$taxprice = 18;

?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from rn53themes.net/themes/demo/travelz/db-travel-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Nov 2020 06:56:49 GMT -->
<head>
    <title>The  - Tour Travel</title>
    <!--== META TAGS ==-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- FAV ICON -->
    <link rel="shortcut icon" href="images/fav.ico">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Poppins%7CQuicksand:400,500,700" rel="stylesheet">
    <!-- FONT-AWESOME ICON CSS -->
    <link rel="stylesheet" href="<?= css ?>/font-awesome.min.css">
    <!--== ALL CSS FILES ==-->
    <link rel="stylesheet" href="<?= css ?>/style.css">
    <link rel="stylesheet" href="<?= css ?>/materialize.css">
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
	<style>
body {
  font-family: 'Lato', sans-serif;
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
  top: 20px;
  right: 45px;
  font-size: 60px;
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

.redeem-fab-points input[type="checkbox"]:after {
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



	</style>



	<style>
	
	
.db-3 {
    float: left;
    width: 23%;
    position: relative;
    overflow: hidden;
    background: #fff;
    border: 1px solid #dadada;
    /* margin-bottom: 25px; */
    box-shadow: 0px 2px 4px rgba(224, 224, 224, 0.8);
    border-radius: 4px;
}

.db-2 {
    float: left;
    width: 55%;
    position: relative;
    overflow: hidden;
    background: #fff;
    border: 1px solid #dadada;
    /* margin-bottom: 25px; */
    box-shadow: 0px 2px 4px rgba(224, 224, 224, 0.8);
    border-radius: 4px;
    margin-left: 12px;
    margin-right: 12px;
}

@media screen and (max-width: 1330px){
		.db-3 {
			width: 100%;
			margin-top: 20px;
		}
		.db-2 {
			width: 100%;
			
		}
	}



	.pricehr {
    margin-top: 5px;
    margin-bottom: 5px;
    border: 0;
    border-top: 1px solid #eee;
}

.sizechange{
	float:right;line-height:22px
}
	
	</style>
</head>

<body>
    

<?php 


$s=$this->session->set_userdata('get_bookingdata',$booking_d);



print_r($this->session->userdata('get_bookingdata'));


?>






	<!--DASHBOARD-->
	<section>
		<div class="db justify-content-center">
		<div class="db-l">
				<div class="db-l-1">
					<ul>
						<li><img src="images/db-profile.jpg" alt="">
						</li>
						<li><span>80%</span> profile compl</li>
						<li><span>18</span> Notifications</li>
					</ul>
				</div>
				<div class="db-l-2">
					<ul>
						<li>
							<a href="dashboard.html"><img src="images/icon/dbl1.png" alt=""> All Bookings</a>
						</li>
						<li>
							<a href="db-travel-booking.html"><img src="images/icon/dbl2.png" alt=""> Travel Bookings</a>
						</li>
						<li>
							<a href="db-hotel-booking.html"><img src="images/icon/dbl3.png" alt=""> Hotel Bookings</a>
						</li>
						<li>
							<a href="db-event-booking.html"><img src="images/icon/dbl4.png" alt=""> Event Bookings</a>
						</li>
						<li>
							<a href="db-my-profile.html"><img src="images/icon/dbl6.png" alt=""> My Profile</a>
						</li>
						<li>
							<a href="db-all-payment.html"><img src="images/icon/dbl9.png" alt=""> Payments</a>
						</li>
						<li>
							<a href="db-refund.html"><img src="images/icon/dbl7.png" alt=""> Claim &amp; Refund</a>
						</li>
					</ul>
				</div>
			</div>
			<!--CENTER SECTION-->
			<div class="db-2">
				<div class="db-2-com db-2-main">
					<h4>Travel Details</h4>
					<form action="<?=base_url().'Hotel/payment'?>" method="post">
						<div class="db-2-main-com db-2-main-com-table">
							<table class="">
								<tbody>
									<tr>
										
										<td>Hotel Name</td>
										<td>:</td>
										<td><?= $booking_d['hotel_name'] ?></td>
									</tr>

									<tr>
										<td>Rooms</td>
										<td>:</td>
										<td>
											<?php 

												$room_t= json_decode($booking_d['room_type']);
												$total_r= json_decode($booking_d['total_room']);

												foreach($room_t as $key => $value) { ?>
													<a><?= $room_t[$key] ?> : <?= $total_r[$key] ?></a>
													
											<?php	} ?>
											

										</td>
									</tr>
									<!-- <tr>
										<td>Price</td>
										<td>:</td>
										<td>$1280</td>
									</tr> -->
									<tr>
										<td>Check In</td>
										<td>:</td>
										<td><?=$booking_d['checkin_date'] ?></td>
									</tr>
									<tr>
										<td>Check Out</td>
										<td>:</td>
										<td><?=$booking_d['checkout_date'] ?></td>
									</tr>
									
									<tr>
										<td>Total Days</td>
										<td>:</td>
										<td><?=$booking_d['total_days'] ?>  </td>
									</tr>

									<tr>
										<td>Total Guest</td>
										<td>:</td>
										<td>
										<?php 
											$data= json_decode($booking_d['total_guest']);
											$a=0;
											for($i=0;$i<=count($data);$i++)
											{
												$a = $a + $data[$i];
											}
											echo $a." Guest";
										?> 

										
										</td>
									</tr>

									<tr>
										<td>Total Price</td>
										<td>:</td>
										<td>Rs. <?=$booking_d['final_price'] ?>  </td>
									</tr>

									
									<!--<tr>
										<td>Places Covered</td>
										<td>:</td>
										<td>Switzerland, Croatia, Austria, Bulgaria, Spain, Greece</td>
									</tr> -->
									<!-- <tr>
										<td>Payment Status</td>
										<td>:</td>
										<td><span class="db-not-done">Pending</span>
										</td>
									</tr> -->

									<tr>
										<td>
											<input type="radio" id="male" name="pay" value="h-<?=$booking_d['15per'] ?>" style="position: inherit!important; opacity: unset!important;" checked>  Pay Booking Amount (15%) == Rs. <?=$booking_d['15per'] ?>   <br>
											<input type="radio" id="male" name="pay" value="f-<?=$booking_d['final_price'] ?>" style="position: inherit!important; opacity: unset!important;">  Pay Full Amount (100%) == Rs. <?=$booking_d['final_price'] ?>
										</td>
									</tr>
								</tbody>
							</table>
							<div class="db-mak-pay-bot">
								<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p> 
								<button type="submit" class="waves-effect waves-light btn-large" >Make Paymeny Now</button> </div>
						</div>
					</form>	
				</div>
			</div>

			<div class="db-3">
				<h4>Payable Amount</h4>
			
				<ul>
					<li>
						<h5 style="color: #333;">1 x Premium Room for 1 Guest</h5>
						<h5 style="color: #333;">1 x Deluxe Room for 1 Guest</h5>
					</li>
					<li>
						<h5 style="color: #333;">Check In : 10-02-1998</h5>
						<h5 style="color: #333;">Check Out : 10-02-1998</h5>
					</li>

					<li>
						<h5 style="color: #333;">Total Room : 5</h5>
						<h5 style="color: #333;">Total Guest : 5</h5>
						<h5 style="color: #333;">Total Price : Rs. 1235</h5>
					</li>

					
					<form action="<?=base_url().'Hotel/payment_new'?>" method="post">
					
					<li>
						<label for="redeem-points" class="coupon-applied redeem-fab-points redeem_selection" style="margin-top:10px">
							<span>
								<small><span class="points_container">Birthday Redeem ₹150</span></small>
							</span>
							<input type="checkbox" name="redeem-points" class="apply_fab_points" id="redeem-points" value="0">
							<input type = "hidden" name="birthday" value="0">

						</label>


						<label for="redeem-points1" class="coupon-applied1 redeem-fab-points1 redeem_selection1">
							<!-- <span>
								<small><span class="points_container1">Birthday Redeem ₹150</span></small>
							</span> -->
							<strong class="coupon_name">RTMT </strong>
							<small>coupon applied</small>
							<a href="javascript:void(0);" class="view_offer" onclick="openNav()">View Offers</a>
						</label>
					</li>



					<li>
						<div class="df">
							<h6> <input type="radio" id="half" name="pay_without_gst_coupon" value="h-<?=$booking_d['15per'] ?> " onclick ="pay_amot(this.value)"       style="position: inherit!important; opacity: unset!important;" checked> Pay Booking Amount (15%)  <span style="float:right">Rs. <?=$booking_d['15per'] ?>  </span></h6>  
							<h6> <input type="radio" id="full" name="pay_without_gst_coupon"  value="f-<?=$booking_d['final_price'] ?>"  onclick ="pay_amot(this.value)"  style="position: inherit!important; opacity: unset!important;"> 	Pay Full Amount (100%)     <span style="float:right">Rs. <?=$booking_d['final_price'] ?> </span> </h6> 	
							<hr class="pricehr">	

							<h6>Total Price :  <span  class="sizechange"> Rs. <span id="total_priceq" class="sizechange"> <?=$booking_d['15per'] ?> </span> </span> </h6>
											
							<div class="div">
								<h6>Coupon : Not apply  <span class="sizechange">Rs. -<span id="coupenprice" class="sizechange"> 0  </span> <input type="hidden" name="coupon_id" id="input_coupon_id" value="0"> </span> </h6>			
							</div>

							<?php 
								$final =  ($booking_d['15per'] * $taxprice)/100;
								$gstpricetotal = $booking_d['15per'] + $final;
							?>
							<input type="hidden" id="taxtotal" value="<?=$taxprice?>" >
							<h6>GST (18%) :  <span  class="sizechange">Rs. <span id="taxprice" class="sizechange"> <?=$final?>  </span> <input type="hidden" name="gst" id="input_gst" value="<?=$taxprice?>"> </span> </h6>
						
						</div>
					</li>
					<li>
						Total Payable : <span style="float:right">Rs. <span id="totalpay">  <?=$gstpricetotal?> </span> <input type="hidden" name="pay_with_gst_coupon" id="input_pfinal" value="<?=$gstpricetotal?>"> </span>
					</li>

						<input type="hidden" name="final_price" id="input_remaining" value="<?=$booking_d['final_price']?>">		

					<li>
						<button type="submit" class="hot-page2-alp-quot-btn spec-btn-text">Book</button>

						<?php 
							echo $booking_d['15per']."<br>";
							echo $taxprice ."<br>";
							$final =  ($booking_d['15per'] * $taxprice)/100;
							echo $booking_d['15per'] + $final;
						?>
					</li>

					</form>
					
				</ul>
			</div>
			
		</div>
	</section>



<div id="myNav" class="overlay">
  	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	<div class="overlay-content" style="color:white">
<?php
	foreach($voucher as $v) { ?>

		<a href="#" onclick="voucher_add('<?= $v->pay_type ?>',' <?= $v->discount ?>','<?= $v->id ?> ' )"><?= $v->voucher_name ?></a>

	<?php	}  ?>
		
	</div>
</div>



	
	
	<!--====== FOOTER 2 ==========-->
	<!-- <section>
		<div class="rows">
			<div class="footer">
				<div class="container">
					<div class="foot-sec2">
						<div>
							<div class="row">
								<div class="col-sm-3 foot-spec foot-com">
									<h4><span>Holiday</span> Tour & Travels</h4>
									<p>World's leading tour and travels Booking website,Over 30,000 packages worldwide.</p>
								</div>
								<div class="col-sm-3 foot-spec foot-com">
									<h4><span>Address</span> & Contact Info</h4>
									<p>28800 Orchard Lake Road, Suite 180 Farmington Hills, U.S.A. Landmark : Next To Airport</p>
									<p> <span class="strong">Phone: </span> <span class="highlighted">+101-1231-1231</span> </p>
								</div>
								<div class="col-sm-3 col-md-3 foot-spec foot-com">
									<h4><span>SUPPORT</span> & HELP</h4>
									<ul class="two-columns">
										<li> <a href="#">About Us</a> </li>
										<li> <a href="#">FAQ</a> </li>
										<li> <a href="#">Feedbacks</a> </li>
										<li> <a href="#">Blog </a> </li>
										<li> <a href="#">Use Cases</a> </li>
										<li> <a href="#">Advertise us</a> </li>
										<li> <a href="#">Discount</a> </li>
										<li> <a href="#">Vacations</a> </li>
										<li> <a href="#">Branding Offers </a> </li>
										<li> <a href="#">Contact Us</a> </li>
									</ul>
								</div>
								<div class="col-sm-3 foot-social foot-spec foot-com">
									<h4><span>Follow</span> with us</h4>
									<p>Join the thousands of other There are many variations of passages of Lorem Ipsum available</p>
									<ul>
										<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
										<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>
										<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
										<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
										<li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a> </li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!--====== FOOTER - COPYRIGHT ==========-->
	<!-- <section>
		<div class="rows copy">
			<div class="container">
				<p>Copyrights © 2017 Company Name. All Rights Reserved</p>
			</div>
		</div>
	</section>
	<section>
		<div class="icon-float">
			<ul>
				<li><a href="#" class="sh">1k <br> Share</a> </li>
				<li><a href="#" class="fb1"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
				<li><a href="#" class="gp1"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>
				<li><a href="#" class="tw1"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
				<li><a href="#" class="li1"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
				<li><a href="#" class="wa1"><i class="fa fa-whatsapp" aria-hidden="true"></i></a> </li>
				<li><a href="#" class="sh1"><i class="fa fa-envelope-o" aria-hidden="true"></i></a> </li>
			</ul>
		</div>
	</section> -->
	<!--========= Scripts ===========-->
	<!-- <script src="js/jquery-latest.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/materialize.min.js"></script>
	<script src="js/custom.js"></script> -->
</body>

<script>

window.onload = function() {
	document.getElementById("half").checked = true;
};



function pay_amot(price)
{
	
	split = price.split("-");


	// alert(split[1]);

	var total_priceq = document.getElementById('total_priceq').innerHTML = split[1];


	alert(Number(total_priceq));

	var taxprice = document.getElementById('taxtotal').value;

	alert(Number(taxprice));

	// $final =  ($booking_d['15per'] * $taxprice)/100;
	// $gstpricetotal = $booking_d['15per'] + $final;


	var gst = (Number(total_priceq) * Number(taxprice)) /100;
	
	var p = (Number(total_priceq) + gst).toFixed(2);

	var coupenprice = document.getElementById('coupenprice').innerHTML;

	document.getElementById('totalpay').innerHTML=p-Number(coupenprice);


	document.getElementById('input_pfinal').value=p-Number(coupenprice);	



	console.log(k);
}

</script>



<script>


function openNav() {
  document.getElementById("myNav").style.width = "30%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}


function voucher_add(pay_type,discount,voucherid)
{

	var fprice;

	if (document.getElementById('half').checked) {

		fprice=document.getElementById('half').value;

  } else if (document.getElementById('full').checked) {

    	fprice=document.getElementById('full').value;

  }


	// alert(`${pay_type} || ${discount}`)

	

	var pap = fprice.split("-");

	if(pay_type === 'percentage') {

		d = discount.slice(0, -1)
		
		var c =Math.round( (Number(d) / 100) * Number(pap[1])  ) ;

		document.getElementById('coupenprice').innerHTML = c;

		document.getElementById('input_coupon_id').value = voucherid;
		this.pay_amot(fprice)


	}else{


		document.getElementById('coupenprice').innerHTML = Number(discount);
		document.getElementById('input_coupon_id').value = voucherid;
		this.pay_amot(fprice

	}
}


</script>


	
<!-- Mirrored from rn53themes.net/themes/demo/travelz/db-travel-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Nov 2020 06:56:49 GMT -->
</html> 
<!-- search bar js -->
<script src="<?php echo searchjs; ?>/main.js"></script>
