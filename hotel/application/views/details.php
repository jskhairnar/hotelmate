<!--====== BANNER ==========-->
<?php error_reporting(0); ?>

<style>
html{
	scroll-behavior: smooth;
}
#snackbar {
  visibility: hidden;
  min-width: 250px;
  margin-left: -125px;
  background-color: #333;
  color: #fff;
  text-align: center;
  border-radius: 2px;
  padding: 16px;
  position: fixed;
  z-index: 1;
  left: 50%;
  bottom: 30px;
  font-size: 17px;
}

#snackbar.show {
  visibility: visible;
  -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
  animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

@-webkit-keyframes fadein {
  from {bottom: 0; opacity: 0;} 
  to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
  from {bottom: 0; opacity: 0;}
  to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
  from {bottom: 30px; opacity: 1;} 
  to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
  from {bottom: 30px; opacity: 1;}
  to {bottom: 0; opacity: 0;}
}
</style>
<section>
		
		<div class="rows inner_banner inner_banner_2">
		
			<div class="container">
				<h2><span><?= $details->hotel_name ?></span></h2>
				<ul>
					<li><a href="#inner-page-title" id="bookk">Home</a>
					</li>
					<li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
					<li><a href="#inner-page-title" class="bread-acti">Hotel Booking</a>
					</li>
				</ul>
				<p><?=$details->address?></p>
			</div>
		</div>
	</section>
	<!--====== TOUR DETAILS - BOOKING ==========-->
	<section>
		<div class="rows banner_book" id="inner-page-title">
			<div class="container">
				<div class="banner_book_1">
					<ul>
						<li class="dl1">Location : <?= $details->state ?> </li>
						<li class="dl2">Guest : <?= $guest ?></li>
						<li class="dl3">Duration : <span id="day_g"> <?= $days ?> </span> Days</li>
						<!-- <li class="dl3">Price : Rs <span id="asd">0</span></li> -->
						<li class="dl4"><a href="javascript:;" onclick="check()">Book Now</a> </li>


					</ul>
				</div>
			</div>
		</div>
	</section>
	<!--====== TOUR DETAILS ==========-->
	<section>
		<div class="rows inn-page-bg com-colo">
			<div class="container inn-page-con-bg tb-space">
				<div class="col-md-9">
					<!--====== TOUR TITLE ==========-->
					<div class="tour_head">
						<!-- title -->
						<h2><?= $details->hotel_name ?> 
						<!-- rating -->
						<span class="tour_star">
							<?php  
								$number = $details->rating;
								$average_stars = round($number * 2) / 2;
								$drawn = 7;
								for ($i = 0; $i < floor($average_stars); $i++)
								{
									$drawn--;
									echo ' <i class="fa fa-star" aria-hidden="true"></i>';
								}
							
								if ($number - floor($average_stars) == 0.5)
								{
									$drawn--;
									echo '<i class="fa fa-star-half-o" aria-hidden="true"></i>';
								}
							
								for($i = $drawn; $i > 0; $i--)
								{
									echo ' <i class="fa fa-star-o" aria-hidden="true"></i>';
								}
							?>
						</span>
						
						<span class="tour_rat"><?= $details->rating?></span></h2> </div>
					<!--====== TOUR DESCRIPTION ==========-->
					<div class="tour_head1 hotel-com-color">
						<h3>About GRAND HOTEL</h3>
						<p>Discover two of South America’s greatest cities, Rio de Janeiro and Buenos Aires, at a leisurely pace. A major highlight on this journey is a visit to Iguassu Falls in between your two city stays. It truly is one of the most spectacular sights on Earth. See the impressive falls from both the Brazilian and Argentine sides.</p>
						<p>Brazil’s view takes you through clouds of mist and the opportunity to see these 275 falls, spanning nearly two miles! Argentina’s side allows you to walk along the boardwalk network and embark on a jungle train through the forest for unforgettable views. Hear the deafening roar and admire the brilliant rainbows created by the clouds of spray, and take in the majesty of this wonder of the world. From vibrant cities to scenic beauty, this vacation to Rio de Janeiro, Iguassu Falls, and Buenos Aires will leave you with vacation memories you’ll cherish for life.</p>
					</div>
					<!--====== ROOMS: HOTEL BOOKING ==========-->
					<div class="tour_head1 hotel-book-room">
						<h3>Photo Gallery</h3>
						<div id="myCarousel1" class="carousel slide" data-ride="carousel">
							<!-- Indicators -->
							<ol class="carousel-indicators carousel-indicators-1">
								<li data-target="#myCarousel1" data-slide-to="0"><img src="<?= images ?>/gallery/s1.jpg" alt="Chania">
								</li>
								<li data-target="#myCarousel1" data-slide-to="1"><img src="<?= images ?>/gallery/s2.jpg" alt="Chania">
								</li>
								<li data-target="#myCarousel1" data-slide-to="2"><img src="<?= images ?>/gallery/s3.jpg" alt="Chania">
								</li>
								<li data-target="#myCarousel1" data-slide-to="3"><img src="<?= images ?>/gallery/s4.jpg" alt="Chania">
								</li>
								<li data-target="#myCarousel1" data-slide-to="4"><img src="<?= images ?>/gallery/s5.jpg" alt="Chania">
								</li>
								<li data-target="#myCarousel1" data-slide-to="5"><img src="<?= images ?>/gallery/s6.jpg" alt="Chania">
								</li>
								<li data-target="#myCarousel1" data-slide-to="6"><img src="<?= images ?>/gallery/s7.jpg" alt="Chania">
								</li>
								<li data-target="#myCarousel1" data-slide-to="7"><img src="<?= images ?>/gallery/s8.jpg" alt="Chania">
								</li>
								<li data-target="#myCarousel1" data-slide-to="8"><img src="<?= images ?>/gallery/s9.jpg" alt="Chania">
								</li>
							</ol>
							<!-- Wrapper for slides -->
							<div class="carousel-inner carousel-inner1" role="listbox">
								<div class="item active"> <img src="<?= images ?>/gallery/s1.jpg" alt="Chania" width="460" height="345"> </div>
								<div class="item"> <img src="<?= images ?>/gallery/s2.jpg" alt="Chania" width="460" height="345"> </div>
								<div class="item"> <img src="<?= images ?>/gallery/s3.jpg" alt="Chania" width="460" height="345"> </div>
								<div class="item"> <img src="<?= images ?>/gallery/s4.jpg" alt="Chania" width="460" height="345"> </div>
								<div class="item"> <img src="<?= images ?>/gallery/s5.jpg" alt="Chania" width="460" height="345"> </div>
								<div class="item"> <img src="<?= images ?>/gallery/s6.jpg" alt="Chania" width="460" height="345"> </div>
								<div class="item"> <img src="<?= images ?>/gallery/s7.jpg" alt="Chania" width="460" height="345"> </div>
								<div class="item"> <img src="<?= images ?>/gallery/s8.jpg" alt="Chania" width="460" height="345"> </div>
								<div class="item"> <img src="<?= images ?>/gallery/s9.jpg" alt="Chania" width="460" height="345"> </div>
							</div>
							<!-- Left and right controls -->
							<a class="left carousel-control" href="#myCarousel1" role="button" data-slide="prev"> <span><i class="fa fa-angle-left hotel-gal-arr" aria-hidden="true"></i></span> </a>
							<a class="right carousel-control" href="#myCarousel1" role="button" data-slide="next"> <span><i class="fa fa-angle-right hotel-gal-arr hotel-gal-arr1" aria-hidden="true"></i></span> </a>
						</div>
					</div>
					<!--====== ABOUT THE TOUR ==========-->
					<div class="tour_head1" id="booknow">
						<h3>special features</h3>
						<table>
							<tr>
								<th>Places covered</th>
								<th class="event-res">Inclusions</th>
								<th class="event-res">Exclusions</th>
								<th>Event Date</th>
							</tr>
							<tr>
								<td>Rio De Janeiro ,Brazil</td>
								<td class="event-res">Accommodation</td>
								<td class="event-res">Return Airfare & Taxes</td>
								<td>Nov 12, 2017</td>
							</tr>
							<tr>
								<td>Iguassu Falls </td>
								<td class="event-res">8 Breakfast, 3 Dinners</td>
								<td class="event-res">Arrival & Departure transfers</td>
								<td>Nov 14, 2017</td>
							</tr>
							<tr>
								<td>Peru,Lima </td>
								<td class="event-res">First-class Travel</td>
								<td class="event-res">travel insurance</td>
								<td>Nov 16, 2017</td>
							</tr>
							<tr>
								<td>Cusco & Buenos Aires </td>
								<td class="event-res">Free Sightseeing</td>
								<td class="event-res">Service tax of 4.50%</td>
								<td>Nov 18, 2017</td>
							</tr>
						</table>
					</div>
					<!--====== HOTEL ROOM TYPES ==========-->
					<div class="tour_head1" >
						<h3>ROOMS & AVAILABILITIES</h3>
						<div class="tr-room-type">
							<ul>

							<?php 
								$room=json_decode($details->room);
								$room_price=json_decode($details->room_price);
								$guest_room_rent=json_decode($details->guest_room_rent);


								
								$rooms=$room[0];
								$rooms_p=$room_price[0];
								$guest_r_p=$guest_room_rent[0];

								foreach($rooms as $key => $value) { 
										$a=array($rooms[$key],$rooms_p[$key],$guest_r_p[$key]);  //create single array
										$array[]=$a;	//create multidimentional array
								}

								// print_r($array);
								
								

							// $keys = array_keys($array);
							// for($i = 0; $i < count($array); $i++) {
							// 	echo $keys[$i] . "{<br>";
							// 	foreach($array[$keys[$i]] as $key => $value) {
							// 		echo $key . " : " . $value . "<br>";
							// 	}
							// 	echo "}<br>";
							// }

					?>
							<?php foreach($array as $d) {  ?>
								<li>
									<div class="tr-room-type-list">
										<div class="col-md-3 tr-room-type-list-1"><img src="<?= images ?>/rooms/01.jpg" alt="" />
										</div>
										<div class="col-md-5 tr-room-type-list-2">
											<h4> <?= $d[0] ?></h4>
											<p><b>Amenities: 

											</b>
											<?php 
											$q="";
												$amnities=json_decode($details->aminities_s);
												for($i=0;$i < 3;$i++) {
													$q.=$amnities[0][$i].", ";
												}
												$q.= "& more...";
												echo $q;
												
											?>
											</p> 
											<span><b>Includes</b> : Free Parking, Breakfast, VAT</span>
											<!-- <span><b>guest </b> : Rs. <?= $d[2] ?> </span> 
											<span><b>room </b> : Rs. <?= $d[1] ?> </span>  -->
											<span><b>Price </b> : Rs. <?= $d[1]+ $d[2] ?> </span> 
											
											<span><b>Maxinum </b> : 4 Persons</span> 
										</div>
										<div class="col-md-2 tr-room-type-list-3" > 
											<!-- <span class="hot-list-p3-1">Price Per Night</span> 
											<span class="hot-list-p3-2">Rs.<?=$rooms_p[$key]?></span> -->
											<!-- <select onchange="fun(this.value, '<?php echo $details->id ?>', '<?php echo $d[0] ?>')">
												<option value="" disabled selected >room</option>
												<option value="1" >1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="2">4</option>
												<option value="2">5</option>
											</select> -->
											<label for="room<?= $d[0] ?>">Select Rooms*</label>
											<select class="form-control" id="room<?= $d[0] ?>" onchange="roomcalc(this.value,4,'<?= $d[0] ?>','<?= $d[1] ?>','<?= $d[1]+ $d[2] ?>')">
												<option value="" disabled>select room</option>
												<option value="1" selected>1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
											</select>

											<label for="guest<?= $d[0] ?>">No of Guest*</label>
											<select class="form-control" id="guest<?= $d[0] ?>" onchange="finalcalc(this.value,'<?= $d[2] ?>','<?= $d[0] ?>')">
												<option value="" disabled>select guest</option>
												<option value="1" selected>1</option>
												<option value="2" >2</option>
												<option value="3" >3</option>
												
											</select>

											
										</div>

										<div class="col-md-2 tr-room-type-list-3"> 
											<p>Room : <span id="troom<?= $d[0]?>" style="display: inline!important;"> 1 </span></p>
											<p>Guest : <span id="tguest<?= $d[0]?>" style="display: inline!important;"> 1 </span></p>
											<p>Total  : <span id="final<?= $d[0]?>" style="display: inline!important;"><?= $d[1]+ $d[2] ?> </span></p>
											
											

											<a href="#bookk" id="selectroom<?= $d[0]?>" onclick="selectroom('<?= $d[0]?>')" class="hot-page2-alp-quot-btn spec-btn-text">Select</a> 
											<a href="javascript:;" id="cancelroom<?= $d[0]?>" onclick="cancelroom('<?= $d[0]?>')" class="hot-page2-alp-quot-btn spec-btn-text" style="display:none">Cancel</a> 

											<!-- <a href="javascript:;"  onclick="check()" class="hot-page2-alp-quot-btn spec-btn-text" >check</a>  -->

										</div>

									</div>
								</li>
							<?php  
									} ?>

										
								
								
								<!-- <li>
									<div class="tr-room-type-list">
										<div class="col-md-3 tr-room-type-list-1"><img src="<?= images ?>/rooms/02.jpg" alt="" />
										</div>
										<div class="col-md-6 tr-room-type-list-2">
											<h4>Premium Rooms(EXECUTIVE)</h4>
											<p><b>Amenities: </b>Television, Wi-Fi, Hair dryer, Towels, Dining, Music, GYM and more.. </p> <span><b>Includes</b> : Free Parking, Breakfast, VAT</span> <span><b>Maxinum </b> : 4 Persons</span> </div>
										<div class="col-md-3 tr-room-type-list-3"> <span class="hot-list-p3-1">Price Per Night</span> <span class="hot-list-p3-2">$720</span> <a href="booking.html" class="hot-page2-alp-quot-btn spec-btn-text">Book Now</a> </div>
									</div>
								</li>
								<li>
									<div class="tr-room-type-list">
										<div class="col-md-3 tr-room-type-list-1"><img src="<?= images ?>/rooms/03.jpg" alt="" />
										</div>
										<div class="col-md-6 tr-room-type-list-2">
											<h4>EXECUTIVE DELUXE MARINA BAY VIEW</h4>
											<p><b>Amenities: </b>Television, Wi-Fi, Hair dryer, Towels, Dining, Music, GYM and more.. </p> <span><b>Includes</b> : Free Parking, Breakfast, VAT</span> <span><b>Maxinum </b> : 4 Persons</span> </div>
										<div class="col-md-3 tr-room-type-list-3"> <span class="hot-list-p3-1">Price Per Night</span> <span class="hot-list-p3-2">$560</span> <a href="booking.html" class="hot-page2-alp-quot-btn spec-btn-text">Book Now</a> </div>
									</div>
								</li>
								<li>
									<div class="tr-room-type-list">
										<div class="col-md-3 tr-room-type-list-1"><img src="<?= images ?>/rooms/04.jpg" alt="" />
										</div>
										<div class="col-md-6 tr-room-type-list-2">
											<h4>Normal Rooms</h4>
											<p><b>Amenities: </b>Television, Wi-Fi, Hair dryer, Towels, Dining, Music, GYM and more.. </p> <span><b>Includes</b> : Free Parking, Breakfast, VAT</span> <span><b>Maxinum </b> : 4 Persons</span> </div>
										<div class="col-md-3 tr-room-type-list-3"> <span class="hot-list-p3-1">Price Per Night</span> <span class="hot-list-p3-2">$420</span> <a href="booking.html" class="hot-page2-alp-quot-btn spec-btn-text">Book Now</a> </div>
									</div>
								</li> -->
							</ul>
						</div>
					</div>
					<!--====== AMENITIES ==========-->
					<div class="tour_head1 hot-ameni">
						<h3>Hotel Amenities</h3>
						<ul>
							<?php 
								$amnities=json_decode($details->aminities_s);
							
								for($i=0;$i<count($amnities[0]);$i++){
								
									echo "<li><i class='fa fa-check' aria-hidden='true'></i>".$amnities[0][$i]."</li>";
								}
							?> 
						</ul>
					</div>
					<!--======  ==========-->
					<div class="tour_head1 l-info-pack-days days">
						<h3>Hotel Policies</h3>
						<ul>
							<li class="l-info-pack-plac"> <i class="fa fa-clock-o" aria-hidden="true"></i>
								<h4><span>Day : 1</span> Arrival and Evening Dhow Cruise</h4>
								<p>Arrive at the airport and transfer to hotel. Check-in time at the hotel will be at 2:00 PM. In the evening, enjoy a tasty dinner on the Dhow cruise. Later, head back to the hotel for a comfortable overnight stay.</p>
							</li>
							<li class="l-info-pack-plac"> <i class="fa fa-clock-o" aria-hidden="true"></i>
								<h4><span>Day : 2</span> City Tour and Evening Free for Leisure</h4>
								<p>After breakfast, proceed for tour of Dubai city. Visit Jumeirah Mosque, World Trade Centre, Palaces and Dubai Museum. Enjoy your overnight stay at the hotel.In the evening, enjoy a tasty dinner on the Dhow cruise. Later, head back to the hotel for a comfortable overnight stay.</p>
							</li>
							<li class="l-info-pack-plac"> <i class="fa fa-clock-o" aria-hidden="true"></i>
								<h4><span>Day : 3</span> Desert Safari with Dinner</h4>
								<p>Relish a yummy breakfast and later, proceed to explore the city on your own. Enjoy shopping at Mercato Shopping Mall, Dubai Mall and Wafi City. In the evening, enjoy the desert safari experience and belly dance performance. Relish a mouth-watering barbecue dinner and enjoy staying overnight in Dubai.</p>
							</li>
							<li class="l-info-pack-plac"> <i class="fa fa-clock-o" aria-hidden="true"></i>
								<h4><span>Day : 4</span> Day at leisure</h4>
								<p>Savour a satiating breakfast and relax for a while. Day Free for leisure. Overnight stay will be arranged in Dubai. In the evening, enjoy a tasty dinner on the Dhow cruise. Later, head back to the hotel for a comfortable overnight stay.</p>
							</li>
							<li class="l-info-pack-plac"> <i class="fa fa-clock-o" aria-hidden="true"></i>
								<h4><span>Day : 5</span> Departure</h4>
								<p>Fill your tummy with yummy breakfast and relax for a while. Later, check out from the hotel and proceed for your onward journey.In the evening, enjoy a tasty dinner on the Dhow cruise. Later, head back to the hotel for a comfortable overnight stay.</p>
							</li>
						</ul>
					</div>






					<!--====== TOUR LOCATION ==========-->
					<div class="tour_head1 tout-map map-container">
						<h3>Location</h3>
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6290415.157581651!2d-93.99661009218904!3d39.661150926343694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880b2d386f6e2619%3A0x7f15825064115956!2sIllinois%2C+USA!5e0!3m2!1sen!2sin!4v1467884030780" allowfullscreen></iframe>
					</div>
					<div>
						<div class="dir-rat">
							<div class="dir-rat-inn dir-rat-title">
								<h3>Write Your Rating Here</h3>
								<p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text</p>
								<fieldset class="rating">
									<input type="radio" id="star5" name="rating" value="5" />
									<label class="full" for="star5" title="Awesome - 5 stars"></label>
									<input type="radio" id="star4half" name="rating" value="4 and a half" />
									<label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
									<input type="radio" id="star4" name="rating" value="4" />
									<label class="full" for="star4" title="Pretty good - 4 stars"></label>
									<input type="radio" id="star3half" name="rating" value="3 and a half" />
									<label class="half" for="star3half" title="Meh - 3.5 stars"></label>
									<input type="radio" id="star3" name="rating" value="3" />
									<label class="full" for="star3" title="Meh - 3 stars"></label>
									<input type="radio" id="star2half" name="rating" value="2 and a half" />
									<label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
									<input type="radio" id="star2" name="rating" value="2" />
									<label class="full" for="star2" title="Kinda bad - 2 stars"></label>
									<input type="radio" id="star1half" name="rating" value="1 and a half" />
									<label class="half" for="star1half" title="Meh - 1.5 stars"></label>
									<input type="radio" id="star1" name="rating" value="1" />
									<label class="full" for="star1" title="Sucks big time - 1 star"></label>
									<input type="radio" id="starhalf" name="rating" value="half" />
									<label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
								</fieldset>
							</div>
							<div class="dir-rat-inn">
								<form class="dir-rat-form">
									<div class="form-group col-md-6 pad-left-o">
										<input type="text" class="form-control" id="email11" placeholder="Enter Name"> </div>
									<div class="form-group col-md-6 pad-left-o">
										<input type="number" class="form-control" id="email12" placeholder="Enter Mobile"> </div>
									<div class="form-group col-md-6 pad-left-o">
										<input type="email" class="form-control" id="email13" placeholder="Enter Email id"> </div>
									<div class="form-group col-md-6 pad-left-o">
										<input type="text" class="form-control" id="email14" placeholder="Enter your City"> </div>
									<div class="form-group col-md-12 pad-left-o">
										<textarea placeholder="Write your message"></textarea>
									</div>
									<div class="form-group col-md-12 pad-left-o">
										<input type="submit" value="SUBMIT" class="link-btn"> </div>
								</form>
							</div>
							<!--COMMENT RATING-->
							<div class="dir-rat-inn dir-rat-review">
								<div class="row">
									<div class="col-md-3 dir-rat-left"> <img src="<?= images ?>/reviewer/4.jpg" alt="">
										<p>Orange Fab & Weld <span>19th January, 2017</span> </p>
									</div>
									<div class="col-md-9 dir-rat-right">
										<div class="dir-rat-star"> <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i> </div>
										<p>Michael & his team have been helping us with our eqiupment finance for the past 5 years - I think that says a quite a lot.. Michael is always ready to go the extra mile, always available, always helpfull that goes the same for his team that work with him - definatley our first phone call.</p>
										<ul>
											<li><a href="#"><span>Like</span><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a> </li>
											<li><a href="#"><span>Dis-Like</span><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></a> </li>
											<li><a href="#"><span>Report</span> <i class="fa fa-flag-o" aria-hidden="true"></i></a> </li>
											<li><a href="#"><span>Comments</span> <i class="fa fa-commenting-o" aria-hidden="true"></i></a> </li>
											<li><a href="#"><span>Share Now</span>  <i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
											<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>
											<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
											<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
											<li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a> </li>
										</ul>
									</div>
								</div>
							</div>
							<!--COMMENT RATING-->
							<div class="dir-rat-inn dir-rat-review">
								<div class="row">
									<div class="col-md-3 dir-rat-left"> <img src="<?= images ?>/reviewer/3.jpg" alt="">
										<p>Orange Fab & Weld <span>19th January, 2017</span> </p>
									</div>
									<div class="col-md-9 dir-rat-right">
										<div class="dir-rat-star"> <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i> </div>
										<p>Michael & his team have been helping us with our eqiupment finance for the past 5 years - I think that says a quite a lot.. Michael is always ready to go the extra mile, always available, always helpfull that goes the same for his team that work with him - definatley our first phone call.</p>
										<ul>
											<li><a href="#"><span>Like</span><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a> </li>
											<li><a href="#"><span>Dis-Like</span><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></a> </li>
											<li><a href="#"><span>Report</span> <i class="fa fa-flag-o" aria-hidden="true"></i></a> </li>
											<li><a href="#"><span>Comments</span> <i class="fa fa-commenting-o" aria-hidden="true"></i></a> </li>
											<li><a href="#"><span>Share Now</span>  <i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
											<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>
											<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
											<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
											<li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a> </li>
										</ul>
									</div>
								</div>
							</div>
							<!--COMMENT RATING-->
							<div class="dir-rat-inn dir-rat-review">
								<div class="row">
									<div class="col-md-3 dir-rat-left"> <img src="<?= images ?>/reviewer/1.jpg" alt="">
										<p>Orange Fab & Weld <span>19th January, 2017</span> </p>
									</div>
									<div class="col-md-9 dir-rat-right">
										<div class="dir-rat-star"> <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i> </div>
										<p>Michael & his team have been helping us with our eqiupment finance for the past 5 years - I think that says a quite a lot.. Michael is always ready to go the extra mile, always available, always helpfull that goes the same for his team that work with him - definatley our first phone call.</p>
										<ul>
											<li><a href="#"><span>Like</span><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a> </li>
											<li><a href="#"><span>Dis-Like</span><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></a> </li>
											<li><a href="#"><span>Report</span> <i class="fa fa-flag-o" aria-hidden="true"></i></a> </li>
											<li><a href="#"><span>Comments</span> <i class="fa fa-commenting-o" aria-hidden="true"></i></a> </li>
											<li><a href="#"><span>Share Now</span>  <i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
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
				<div class="col-md-3 tour_r">
					<!--====== SPECIAL OFFERS ==========-->
					<div class="tour_right tour_offer">
						<div class="band1"><img src="<?= images ?>/offer.png" alt="" /> </div>
						<p>Special Offer</p>
						<h4>$500<span class="n-td">
								<span class="n-td-1">$800</span>
								</span>
							</h4> <a href="booking.html" class="link-btn">Book Now</a> </div>
					<!--====== TRIP INFORMATION ==========-->
					<div class="tour_right tour_incl tour-ri-com">
						<h3>Trip Information</h3>
						<ul>
							<li>Location : Rio,Brazil</li>
							<li>Arrival Date: Nov 12, 2017</li>
							<li>Departure Date: Nov 21, 2017</li>
							<li>Free Sightseeing & Hotel</li>
						</ul>
					</div>
					<!--====== PACKAGE SHARE ==========-->
					<div class="tour_right head_right tour_social tour-ri-com">
						<h3>Share This Package</h3>
						<ul>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
							<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
							<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
							<li><a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a> </li>
						</ul>
					</div>
					<!--====== HELP PACKAGE ==========-->
					<div class="tour_right head_right tour_help tour-ri-com">
						<h3>Help & Support</h3>
						<div class="tour_help_1">
							<h4 class="tour_help_1_call">Call Us Now</h4>
							<h4><i class="fa fa-phone" aria-hidden="true"></i> 10-800-123-000</h4> </div>
					</div>
					<!--====== PUPULAR TOUR PACKAGES ==========-->
					<div class="tour_right tour_rela tour-ri-com">
						<h3>Popular Packages</h3>
						<div class="tour_rela_1"> <img src="<?= images ?>/related1.png" alt="" />
							<h4>Dubai 7Days / 6Nights</h4>
							<p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text</p> <a href="#" class="link-btn">View this Package</a> </div>
						<div class="tour_rela_1"> <img src="<?= images ?>/related2.png" alt="" />
							<h4>Mauritius 4Days / 3Nights</h4>
							<p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text</p> <a href="#" class="link-btn">View this Package</a> </div>
						<div class="tour_rela_1"> <img src="<?= images ?>/related3.png" alt="" />
							<h4>India 14Days / 13Nights</h4>
							<p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text</p> <a href="#" class="link-btn">View this Package</a> </div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div id="snackbar">Please Select Rooms</div>


    <div id="myNav" class="overlay">
		jayesh
	</div>




	<script>
	
	// function fun(select_value,id,room_type)
	// {

	
	// 	alert(`${select_value} ${id} ${room_type}`);
	// }
	

	var j="";
	var room_c="";

	var footer_section = [];

	function roomcalc(i,j,g,room_rent,final_price)
	{
		/* i = no of rooms /
			j = no of maximum guest in room
		*/
		// alert(room_rent );
		
		var final='';
		var a = i*j;
		
		room_c = i *  room_rent;
		

		// room onchage then price change

		var final_price1 = Number(final_price);
		var final_price12=0;
		for(q=1; q<=i; q++) {

			final_price12 =final_price12 + final_price1;

		}
		document.getElementById('final'+g).innerHTML=final_price12;
		document.getElementById('tguest'+g).innerHTML=i;
		// -

		//option
		final = '<option value="" disabled>select Room</option>';
		for(b=i;b<=a;b++)
		{
			 final += "<option value="+b+">"+b+"</option>";
		}

		

		console.log(final);
		document.getElementById('guest'+g).innerHTML=final;

		// troom
		document.getElementById('troom'+g).innerHTML=i;



//------------------ select room --- start footer update section -----------------------------------
			var flag = 0;
			var obj_pos;
			if(footer_section.length == 0)
			{
				n={
				"room_type" : g,
				"t_room"    : document.getElementById('troom'+g).innerHTML,
				"t_guest"   : document.getElementById('troom'+g).innerHTML,
				"t_final"   : document.getElementById('final'+g).innerHTML
				}
				footer_section.push(n)

			} else{

				for(var i=0;i<footer_section.length;i++) {
					
					var obj = footer_section[i];
					
					if(obj.room_type == g) {

						// aleready exit
						flag=1;
						obj_pos=i;

						break;
					} 
				}


				//falg 1 == aleready exit then update room
				if(flag == 1)
				{
					 n ={
						"room_type" : g,
						"t_room"    : document.getElementById('troom'+g).innerHTML,
						"t_guest"   : document.getElementById('troom'+g).innerHTML,
						"t_final"   : document.getElementById('final'+g).innerHTML
					}

					footer_section[obj_pos] = a;
					console.log(footer_section);
					console.log("Update");

				} else {
					console.log("insert");
					n={
						"room_type" : g,
						"t_room"    : document.getElementById('troom'+g).innerHTML,
						"t_guest"   : document.getElementById('troom'+g).innerHTML,
						"t_final"   : document.getElementById('final'+g).innerHTML
					}

					footer_section.push(p)

					console.log(footer_section);
				}

			}
			// console.log(footer_section);

//------------------  end footer update section -----------------------------------
this.add(g)
		
	}

	


	function finalcalc(total_guest,guest_charges,g)
	{
		// tguest
		document.getElementById('tguest'+g).innerHTML=total_guest;

		// alert("guest");
		var total_guest_charges = total_guest * guest_charges;
		// alert(`room charges : ${room_c} , guest_charges : ${total_guest_charges} = ${room_c + total_guest_charges }  `);
		
		var finalprices= room_c + total_guest_charges;

		document.getElementById('final'+g).innerHTML=finalprices;

		// document.getElementById('t_final'+g).value=finalprices;

		// alert();

	


		this.add(g)
		
	}


	</script>


	<script>
		var s_room12;
		var s_guest12;
		var s_final_array = [];
		var s_id12;

		function selectroom(g){
			
			select = document.getElementById('cancelroom'+g).style.display = "block";
			cancel = document.getElementById('selectroom'+g).style.display = "none";
			s_id12 = g;

			s_final_array.push(g);

			// alert(s_final_array);

			// console.log(s_final_array);
			document.getElementById("myNav").style.display = "block";

			console.log(s_final_array);

			this.add(g)

		}


		function cancelroom(g){

			select = document.getElementById('cancelroom'+g).style.display = "none";
			cancel = document.getElementById('selectroom'+g).style.display = "block";

			// var selectBox = document.getElementById('room'+g);
			// var selectedValue = selectBox.options[selectBox.selectedIndex].value=1;
			console.log(s_final_array);

			for(var i=0;i<s_final_array.length;i++){

				if(s_final_array[i]===g)
				{
					s_final_array.splice(i,1);
				}
			}

			


			if(s_final_array.length==0){

				document.getElementById("myNav").style.display = "none";

			}
			// this.jk();
			
		}



		// var ch =0;
		// function add(g)
		// {
			
		// 	if(g) {

		// 	} else {
		// 		var s = document.getElementById('final'+ g ).innerHTML;	 
		// 	}
			

		// 	// ch = ch + Number(s);
		// 	// console.log(ch);

		// 	document.getElementById('asd' ).innerHTML=Number(s);
			
		// }




		// function jk()
		// {
		// 	for(var i=0; i<s_final_array.length; i++)
		// 	{
		// 		var s = document.getElementById('final'+ s_final_array[i] ).innerHTML;
		// 		ch = ch - Number(s)

		// 		document.getElementById('asd' ).innerHTML=ch;
				
		// 		console.log(s)
				
		// 	}
		// }



		function check()
		{
			

			var final_details= [];

			if(s_final_array.length==0)
			{
				// alert("Please Select Hotel");
				var x = document.getElementById("snackbar");
  				x.className = "show";
  				setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);

			}else{

				for(var i=0;i<s_final_array.length;i++)
				{
					alert("n");
					
					n={
						"room_type":s_final_array[i],
						"t_room":document.getElementById('room'+s_final_array[i]).value,
						"t_guest":document.getElementById('guest'+s_final_array[i]).value,
						"t_total":document.getElementById('final'+s_final_array[i]).innerHTML * Number(document.getElementById('day_g').innerHTML)
					}

					final_details.push(n);
				}
				
				
				console.log(final_details);

					// // val= document.getElementById("textvalue").value;
					// //alert(val);
					// var obj = new XMLHttpRequest();
					// obj.onreadystatechange=function()
					// {
					// 	if(this.readyState==4 && this.status==200)
					// 	{
					// 		// document.getElementById("showtable").innerHTML=this.responseText;
					// 		alert(this.responseText);
						
					// 	}
					// } 
					// var f="jayesh";
					// //console.log(url);
					// obj.open("POST","<?=base_url().'Hotel/Hotelbooking'?>?d1="+f ,true);
					// obj.send();

					
					
					var action = "action";
					var hid = <?=$details->id?>;
					var day = <?= $days ?>;
					$.ajax({
						url:"<?=base_url()?>Hotel/Hotelbooking",
						method:"POST",
						data:{action:action,final_details:final_details,hid:hid,day:day},
						success:function(data){
							// $('.filter_data').html(data);
							if(data=1){
								window.location.href = "<?=base_url().'Hotel/Booking_sent'?>";
							} else{
								alert("something wents wrong..!")
							}
						}
           		 	});
				
			}
		}
	</script>






	<!-- search bar js -->
    <script src="<?php echo searchjs; ?>/main.js"></script>