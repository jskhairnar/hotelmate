
<script src="<?=jksearchjs?>homeasset/js/extention/choices.js"></script>
    <script src="<?=jksearchjs?>homeasset/js/extention/flatpickr.js"></script>
   
<style>
html{
	scroll-behavior: smooth;
}
.theme-page-section-gray {
    background: #fff!important;
}
._p-30 {
    padding: 0px !important;
}
.theme-item-page-tabs._mb-30 {
    margin-top: 38px;
}
.theme-item-page-rooms-table .table > tbody > tr > td:first-child, .theme-item-page-rooms-table .table > thead > tr > th:first-child {
    padding-left: -2px!important;
}
.theme-item-page-rooms-table .table > tbody > tr > td:first-child, .theme-item-page-rooms-table .table > thead > tr > th:first-child {
    padding-left: 21px;
}
.theme-item-page-rooms-table .table > tbody > tr > td:last-child, .theme-item-page-rooms-table .table > thead > tr > th:last-child {
    padding: 16px;
    border-right: none;
}


.theme-item-page-rooms-table .table > tbody > tr > td {
    border:  none;
    border-left: none;
    border-bottom: none;
}
tr{
    
    border-bottom: solid 1px #bbbbbb;
    
}
tr:hover{
      background: #fcfcfc;
    border: solid 1px #bbbbbb;
    border-radius:5px;
    box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.08);
    
}

.theme-item-page-rooms-table .table > tbody > tr:last-child td {
    padding-bottom: 22px;
}

@media screen and (max-width: 600px) {
    ._p-30 {
    padding: 10px !important;
}
 .theme-item-page-rooms-table .table > tbody > tr > td:first-child, .theme-item-page-rooms-table .table > thead > tr > th:first-child {
    padding-left: -2px!important;
}
.theme-item-page-rooms-table .table > tbody > tr > td:first-child, .theme-item-page-rooms-table .table > thead > tr > th:first-child {
    padding-left: 0px;
}
.theme-item-page-rooms-table .table > tbody > tr > td:last-child, .theme-item-page-rooms-table .table > thead > tr > th:last-child {
    padding: 16px;
    border-right: none;
}
tr{
    
    padding:10px;
    
}
tr:hover{
     
    border: none;
    border-radius:5px;
}

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

.show_book_btn{
  display:none;
}

.final_price_show{
  font-weight: bold;
    font-size: 32px;
    letter-spacing: 0.64px;
    font-family: 'Roboto', helvetica, Arial, sans-serif;
    color: #0093d2;
    line-height: 1em;
    margin-bottom: 0;
}

.theme-item-page-rooms-table-price-night-amount {
    font-weight: bold;
    font-size: 23px;
    letter-spacing: 0.64px;
    font-family: 'Roboto', helvetica, Arial, sans-serif;
    color: #4d4d4d;
    line-height: 1em;
    margin-bottom: 0;
}

.price_per_nightas{
  font-size:13px;
  margin-top: 32px;
}

.map-responsive1{
    overflow:hidden;
    padding-bottom:50%;
    position:relative;
    height:0;
}
.map-responsive1 iframe{
    left:0;
    top:0;
    height:100%;
    width:100%;
    position:absolute;
}

option{
  color:black;
}

@media screen and (max-height: 700px) {
  .show_book_btn{
  display:block;
}
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

.hotel_details_show p {
    
        font-size: 14px!important;
    line-height: 1.65em!important;
    margin-bottom: 0!important;
    color: black!important;
    font-weight: 500;
    
}
</style>

<div class="theme-hero-area">
      <div class="theme-hero-area-bg-wrap">
        <div class="theme-hero-area-bg ws-action" style="background-image:url(<?=new_ass?>/img/hotel-page/layout-1/header-5.jpg);" data-parallax="true"></div>
        <div class="theme-hero-area-mask theme-hero-area-mask-half"></div>
        <div class="theme-hero-area-inner-shadow"></div>
      </div>
      <div class="theme-hero-area-body">
        <div class="container">
          <div class="theme-item-page-header _pt-150 _pb-50 theme-item-page-header-white">
            <div class="theme-item-page-header-body">
              <ul class="theme-item-page-header-stars">
                <!-- <li>
                  <i class="fa fa-star"></i>
                </li>
                <li>
                  <i class="fa fa-star"></i>
                </li>
                <li>
                  <i class="fa fa-star"></i>
                </li>
                <li>
                  <i class="fa fa-star"></i>
                </li>
                <li>
                  <i class="fa fa-star"></i>
                </li> -->
              </ul>
              
              <h1 class="theme-item-page-header-title" style="margin-bottom:10px;"><?= $details->name ?></h1>
              <span style="color:white;"><i class="fa fa-map-marker" style="color:white;margin-right:10px"></i><?= $details->address ?><span>
              <div class="theme-item-page-header-price">
                <!-- <p class="theme-item-page-header-price-body">
                  <span>from</span>
                  <b>Rs. 97</b>
                  <span>/ night</span>
                </p> -->
                <a class="btn _tt-uc btn-primary-inverse" data-scroll href="#booking-scroll"  >Show Rooms</a>
                <!-- <a class="btn _tt-uc btn-primary-inverse"  href="javascript:;" onclick="check()" >Show Rooms</a> -->

              </div>
              <ul class="theme-breadcrumbs _mt-20 _mob-h">
                <li>
                  <p class="theme-breadcrumbs-item-title">
                    <a href="<?=base_url()?>Home">Home</a>
                  </p>
                </li>
                <li>
                  <p class="theme-breadcrumbs-item-title">
                    <a href="#"><?= $details->country ?></a>
                  </p>
                </li>
                <li>
                  <p class="theme-breadcrumbs-item-title">
                    <a href="#"><?= $details->state ?></a>
                  </p>
                </li>
                <li>
                  <p class="theme-breadcrumbs-item-title">
                    <a href="#"><?= ucfirst($details->city) ?>  <?=$this->session->userdata('search_details')['type']?></a>
                  </p>
                </li>
                <li>
                  <p class="theme-breadcrumbs-item-title active"> <?= $details->name ?> </p>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="theme-page-section theme-page-section-gray">
      <div class="container">
        <div class="row row-col-static" id="sticky-parent">
          <div class="col-md-9 ">
            <div class="theme-sidebar-section _mb-20 _desk-h">
              <h5 class="theme-sidebar-section-title">Weather in <?=ucfirst($this->session->userdata('search_details')['location']);?></h5>
                <ul class="theme-sidebar-section-weather-list">
                  <li>
                    <p class="theme-sidebar-section-weather-date"> <b>Today  <?=date("d-m-Y")?> </b></p>
                    <p class="theme-sidebar-section-weather-temp">
                      <i class="wi wi-thermometer theme-sidebar-section-weather-icon"></i>
                      <b><?= $this->session->userdata('temp')?> °c
                    </p>
                  </li>
                 
                </ul>
            </div>
              <div class="theme-search-area _p-20 _bg-p _br-4 _mb-20 _bsh theme-search-area-vert theme-search-area-white _desk-h">
                
                              <?php

                  $location_search = $this->session->userdata('search_details')['location'];  
                  $checkin_search = $this->session->userdata('search_details')['checkin'];   
                  $checkout_search = $this->session->userdata('search_details')['checkout'];
                  $type_search = $this->session->userdata('search_details')['type'];
                  $guest_search = $this->session->userdata('search_details')['guest'];

                  ?>
                <form action="<?=base_url().'Hotel'?>" method="GET">
                  <div class="theme-search-area-form" id="hero-search-form">
                    <div class="theme-search-area-section first theme-search-area-section-curved theme-search-area-section-sm theme-search-area-section-fade-white theme-search-area-section-no-border">
                      <label class="theme-search-area-section-label">Where</label>
                      <div class="theme-search-area-section-inner">
                        <i class="theme-search-area-section-icon lin lin-location-pin"></i>
                        <input class="theme-search-area-section-input" value="<?=$location_search?>" type="text" placeholder="Location" name="location" id="country" autocomplete="off" required/>
                      </div>
                    </div>
                    <div class="row" data-gutter="10">
                      <div class="col-md-12 ">
                        <div class="theme-search-area-section theme-search-area-section-curved theme-search-area-section-sm theme-search-area-section-fade-white theme-search-area-section-no-border">
                          <label class="theme-search-area-section-label">Check In</label>
                          <div class="theme-search-area-section-inner">
                            <i class="theme-search-area-section-icon lin lin-calendar"></i>
                            
                            <input class="theme-search-area-section-input "  type="date" name="checkin" value="<?php echo date('Y-m-d',strtotime($checkin_search))?>"/>
                            <!-- <input class="theme-search-area-section-input _desk-h mobile-picker" value="<?=$checkin_search?>" type="date"/> -->
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12 ">
                        <div class="theme-search-area-section theme-search-area-section-curved theme-search-area-section-sm theme-search-area-section-fade-white theme-search-area-section-no-border">
                          <label class="theme-search-area-section-label">Check Out</label>
                          <div class="theme-search-area-section-inner">
                            <i class="theme-search-area-section-icon lin lin-calendar"></i>
                              <input type="date" class="theme-search-area-section-input " name="checkout" value="<?php echo date('Y-m-d',strtotime($checkout_search))?>">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row" data-gutter="10">
                      <div class="col-md-12 ">
                        <div class="theme-search-area-section theme-search-area-section-curved theme-search-area-section-sm theme-search-area-section-fade-white theme-search-area-section-no-border quantity-selector" data-increment="Guests">
                          <label class="theme-search-area-section-label">select</label>
                          <div class="theme-search-area-section theme-search-area-section-sm theme-search-area-section-no-border theme-search-area-section-fade-white theme-search-area-section-curved">
                            <div class="theme-search-area-section-inner">
                              <i class="theme-search-area-section-icon lin lin-location-pin"></i>
                                      <select class="theme-search-area-section-input" name="type" >
                                        <option style="color:black" value="hotel" <?php if($type_search== "hotel") echo "selected"; ?> >Hotel</option>
                                        <option style="color:black" value="resort" <?php if($type_search== "resort") echo "selected"; ?> >Resort</option>
                                        <option style="color:black" value="camp" <?php if($type_search== "camp") echo "selected"; ?> >Camp</option>
                                        <option style="color:black" value="weekend" <?php if($type_search== "weekend") echo "selected"; ?> >Weekend</option>
                                        <option style="color:black" value="weekend" <?php if($type_search== "sightseeing") echo "selected"; ?> >sightseeing</option>

                                      </select>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12 ">
                        <div class="theme-search-area-section theme-search-area-section-curved theme-search-area-section-sm theme-search-area-section-fade-white theme-search-area-section-no-border quantity-selector" data-increment="Guests">
                          <label class="theme-search-area-section-label">Guests</label>
                          <div class="theme-search-area-section theme-search-area-section-sm theme-search-area-section-no-border theme-search-area-section-fade-white theme-search-area-section-curved">
                            <div class="theme-search-area-section-inner">
                              <i class="theme-search-area-section-icon lin lin-people"></i>
                              <select class="theme-search-area-section-input" name="guest">
                                <option style="color:black" value="2" <?php if($guest_search== "2") echo "selected"; ?> >2</option>
                                <option style="color:black" value="3" <?php if($guest_search== "3") echo "selected"; ?> >3</option>
                                <option style="color:black" value="4" <?php if($guest_search== "4") echo "selected"; ?> >4</option>
                                <option style="color:black" value="5" <?php if($guest_search== "5") echo "selected"; ?> >5</option>
                              </select>

                            </div>
                          </div>
                        </div>

                      
                      </div>
                    </div>
                    <button class="theme-search-area-submit _mt-0 _tt-uc theme-search-area-submit-curved theme-search-area-submit-sm theme-search-area-submit-white theme-search-area-submit-primary">Change</button>
                  </div>
                <form>
              </div>
            <?php
            

            //url set room image and hotel image
            if($this->session->userdata('search_details')['type'] == "hotel")
            {
                $room_img_n = upload."hotel_room_images/";
                $images_n= upload."hotel/";
            }elseif($this->session->userdata('search_details')['type'] == "camp")
            {
                $room_img_n = upload."camp_room_images/";
                $images_n= upload."camp/";
            }elseif($this->session->userdata('search_details')['type'] == "resort")
            {
                $room_img_n = upload."resort_room_images/";
                $images_n= upload."resort/";
            }


            //hotel image
            $icon=json_decode($details->icon);
            $icons=$icon[0];


            ?>
            
            <div class="fotorama _mb-30" data-nav="thumbs" data-minwidth="100%" data-arrows="always" data-allowfullscreen="native">
              
            <?php foreach($icons as $key => $value) {  ?>
              
              <img src="<?=$images_n?><?=$value?>" alt="Image Alternative text" title="Image Title"/>

            <?php  } ?>
              
            </div>
           
            <div id="booking-scroll">
             
            </div>
            <div class="theme-item-page-rooms-table _p-30 _bg-w _mb-mob-30">

            <!-- <a class="btn _tt-uc btn-primary-inverse show_book_btn" href="javascript:;" id="book_now_btn"  onclick="check()">Book Now</a> -->

              <table class="table">
                <thead>
                  <tr>
                    <th>Room type</th>
                    <th>Options</th>
                    <th>Price</th>
                    <!-- <th><a class="btn _tt-uc btn-primary-inverse" href="javascript:;" id="book_now_btn" onclick="check()">Book Now</a></th> -->
                  </tr>
                </thead>
                <tbody>
                <?php 



                    

                   
                    
                    $room=json_decode($details->room);
                    $room_price=json_decode($details->room_price);
                    $guest_room_rent=json_decode($details->guest_room_rent);
                    $max_room = json_decode($details->max_room);
                    $max_room_guest = json_decode($details->max_room_guest);
                   
                    $breakfast_statuss = $details->breakfast_status;
                    
                    $breakfast_pricee = $details->breakfast_price;
                    $breakdinner_pricee = $details->breakdinner_price;

                    $room_imagess = json_decode($details->room_images);

                    
                    $rooms=$room[0];
                    $rooms_p=$room_price[0];
                    $guest_r_p=$guest_room_rent[0];
                    $max_room=$max_room[0];
                    $max_r_guest=$max_room_guest[0];
                    


                    $breakfast_status = $breakfast_statuss;
                    $breakfast_price = $breakfast_pricee;
                    $breakdinner_price = $breakdinner_pricee;

                    $room_images=$room_imagess[0];

                   
                  
                   

                    foreach($rooms as $key => $value) { 
                            $a=array($rooms[$key],$rooms_p[$key],$guest_r_p[$key],$max_room[$key],$max_r_guest[$key],$breakfast_status,$breakfast_price,$breakdinner_price,$room_images[$key]);  //create single array
                            $array[]=$a;	//create multidimentional array
                    }
                    // echo "<pre>";
                    // print_r($array);
                   
                ?>


                <?php foreach($array as $d) { 
                    // $d[0];  -> room type e.g standard,luxury...
                    // $d[1];  -> room price 
                    // $d[2];  -> per guest price
                    //$d[3] ;  -> max room
                    // $d[4] ;  -> max room guest


                    
                    $defult_room_rent=$d[1];

                    // $first_price = $d[1] + $d[2];   //room price + per guest e.g 1500 + 450 

                    $first_price = $d[1];  //room price + per guest e.g 1500 + 450 
                    $first_price_total_night = $days * $first_price;  // number of days * $first_price 
              
                     $a= $d[6] * $days;
                     $breakfastwithdays = $a * 2;


                    

                ?>

                
                <tr>
                    <td class="theme-item-page-rooms-table-type">
                        <h5 class="theme-item-page-rooms-table-type-title"> <?= ucfirst($d[0]) ?></h5>
                        <img class="theme-item-page-rooms-table-type-img" src="<?= $room_img_n?><?=$d[8]?>" alt="Image Alternative text" title="Image Title"/>
                        <ul class="theme-item-page-rooms-table-type-feature-list">
                        <li>
                            <i class="fa fa-bed theme-item-page-rooms-table-type-feature-list-icon"></i>Bed
                        </li>
                        <li>
                            <i class="fa fa-arrows-h theme-item-page-rooms-table-type-feature-list-icon"></i>250 squre feet
                        </li>
                        <li>
                            <i class="fa fa-shower theme-item-page-rooms-table-type-feature-list-icon"></i>bathroom
                        </li>
                        <li>
                            <i class="fa fa-wifi theme-item-page-rooms-table-type-feature-list-icon"></i>Free Wifi
                        </li>
                        </ul>
                    </td>
                    <td>
                        <ul class="theme-item-page-rooms-table-options-list">
                        <!-- <li>Non-refundable</li>
                        <li>Special conditions,
                            <br/>pay when you stay
                        </li> -->
                        <li>Free Breakfast</li>
                        <!-- <li>
                            <b class="text-color-inverse">Last minute deal: save 25%</b>
                        </li> -->

                        <!-- start breakfast -->

                        <li>

                              <!-- breakfast -->
                              <input class="icheck" type="checkbox" id="breakfast<?= $d[0] ?>" value="<?=$d[6] ?>" checked= <?php ($d[5] == 1) ? 'checked' : '' ?> />
                              <span class="icheck-title">Breakfast</span>
                              


                              <!-- breakfast + dinner -->
                              <?php 
                              $check_visible='';
                              $check_type_camp = $this->session->userdata('search_details')['type']; 
                              if($check_type_camp == 'camp')
                              { 
                                  $check_visible = 'none';

                                } else {  
                                    $check_visible = 'block';
                                  
                                }?>
                              <div class="div" style="display:flex">
                              <input class="breakdinner_check" style="display : <?= $check_visible ?>" type="checkbox" id="breakdinner<?= $d[0] ?>" onchange="abc('<?=$d[7] ?>','<?= $days ?>','<?= $d[0] ?>')" value="<?= $d[7] ?>"/>
                              <span class="" style="display : <?= $check_visible ?>;margin-left:6px; margin-top:3px;" >Breakfast + Dinner</span>
                              
                              </div>
                             
                             
                             
                            
                        </li>

                        <!-- end breakfast -->
                        </ul>
                    </td>

                    <td class="theme-item-page-rooms-table-price">
                        <div>
                          <?php 
                            // $defulat_day = 1;
                            // $defulat_guest = 2;
                            // $f = $first_price * $defulat_day; // room_price * 1

                            // $s= $d[6] * $defulat_guest;  //breakfast * 2

                            $per_night = $first_price;

                          ?>
                          <div class="theme-item-page-rooms-table-price-night">
                              <p class="theme-item-page-rooms-table-price-sign">Per night</p>
                              <p class="theme-item-page-rooms-table-price-night-amount">₹ <span id="price_per_night<?= $d[0] ?>"> <?= $per_night ?> </span></p>
                          </div>
                          <!-- <div class="theme-item-page-rooms-table-price-total">
                              <p class="theme-item-page-rooms-table-price-sign">Total price
                              <br/>for <span> <?= $days ?> </span> nights
                              </p>
                              <p class="theme-item-page-rooms-table-price-total-amount">₹ <?= $first_price_total_night ?></p>
                          </div> -->
                        </div>
                          <p class="theme-item-page-rooms-table-price-note">1Room + 2 Guest for Rs. <?= $per_night ?>
                        </p>

                       <!-- Room -->
                       <label for="room<?= $d[0] ?>" class="_mt-10">Select Rooms*</label>
                        <select class="form-control" id="room<?= $d[0] ?>" onchange="roomcalc(this.value,'<?=$d[4]?>','<?= $d[0] ?>','<?= $d[4] ?>','<?= $d[1] ?>','<?= $days ?>','<?= $d[6] ?>')">
                          
                          <?php 


                            for($i=1; $i<=$d[3]; $i++){

                              echo '<option value='.$i.'>'.$i.'</option>';

                            }
                          
                          ?>
                         </select>


                      <!-- Guest -->
                      <label for="guest<?= $d[0] ?>"  class="_mt-10">Extra Guest</label>
                        <select class="form-control" id="guest<?= $d[0] ?>" onchange="finalcalc(this.value,'<?= $d[2] ?>','<?= $d[0] ?>','<?= $days?>','<?=$d[1]?>','<?= $d[6] ?>')">
                          <?php 
                            
                            $default_constant = 1 * 2;    // 1 room * 2 guest
                            
                            $final_limit   = 1 * $d[4];   // 1 room * limit guest per room

                            if($final_limit > $default_constant){

                                 $total_opt= $final_limit-$default_constant;
                                 
                                 for($i=0; $i<=$total_opt; $i++) {
                              
                                  echo '<option value='.$i.'>'.$i.'</option>';
    
                                } 
                                 
                            }


                            ?>
                        </select>
                    </td>
                    
                    <td>
                        <!-- <a class="btn btn-primary-inverse btn-block">Select Room</a> -->
                        
											<!-- <a href="javascript:;" id="cancelroom<?= $d[0]?>" onclick="cancelroom('<?= $d[0]?>')" class="btn btn-primary-inverse btn-block" style="display:none">Cancel</a>  -->

                        <div class="theme-item-page-rooms-table-price-total _mt-20 " >
                            <p>Room : <span id="troom<?= $d[0]?>" style="display: inline!important;"> 1 </span></p>
											      <p>Guest : <span id="tguest<?= $d[0]?>" style="display: inline!important;"> 2 </span></p>
                            <p class="theme-item-page-rooms-table-price-sign price_per_nightas" style="font-size:13px;"> Total price for <span> <?= $days ?> </span> nights </p>
                            <p class="theme-item-page-rooms-table-price-total-amount final_price_show">₹ <span id="final<?= $d[0]?>" style="display: inline!important;"><?= ($d[1]*$days)  ?> </span></p>
                        </div>
											<a href="#book_now_btn" id="selectroom<?= $d[0]?>" onclick="selectroom('<?= $d[0]?>')" class="btn btn-primary-inverse btn-block">Book Now</a> 

                    </td>
                </tr>
                <?php } ?>
                 
                </tbody>
              </table>
            </div>

            <div class="theme-item-page-tabs _mb-30">
              <div class="tabbable">
                <ul class="nav nav-tabs nav-default nav-no-br nav-sqr nav-mob-inline" role="tablist">
                  <li class="active" role="presentation"> 
                    <a class="_ph-30" aria-controls="HotelPageTabs-1" role="tab" data-toggle="tab" href="#HotelPageTabs-1">Details</a>
                  </li>
                  <li role="presentation">
                    <a class="_ph-30" aria-controls="HotelPageTabs-2" role="tab" data-toggle="tab" href="#HotelPageTabs-2">Map</a>
                  </li>
                  <!-- <li role="presentation">
                    <a class="_ph-30" aria-controls="HotelPageTabs-3" role="tab" data-toggle="tab" href="#HotelPageTabs-3">Reviews</a>
                  </li> -->
                  <li role="presentation">
                    <a class="_ph-30" aria-controls="HotelPageTabs-4" role="tab" data-toggle="tab" href="#HotelPageTabs-4">Facilities</a>
                  </li>
                </ul>
                <div class="tab-content _p-30 _bg-w">
                  <div class="tab-pane active" id="HotelPageTabs-1" role="tab-panel">
                    <div class="theme-item-page-desc hotel_details_show">
                     <?= $details->amnities ?>
                     </div>
                  </div>
                  <div class="tab-pane" id="HotelPageTabs-2" role="tab-panel">
                    <div class="map-responsive1">
                        <div style="width: 100%"> <?= $details->map ?></div>
                    </div>
                  </div>
                  <!-- <div class="tab-pane" id="HotelPageTabs-3" role="tab-panel">
                    <div class="theme-reviews">
                      <div class="theme-reviews-score theme-reviews-score-hor">
                        <div class="row">
                          <div class="col-md-3 ">
                            <div class="theme-reviews-score-header">
                              <h5 class="theme-reviews-score-title">Review score</h5>
                              <p class="theme-reviews-score-subtitle">Based on 2889 reviews</p>
                            </div>
                            <div class="theme-reviews-score-total">
                              <p>7.1</p>
                            </div>
                          </div>
                          <div class="col-md-9 ">
                            <div class="theme-reviews-score-list">
                              <div class="row">
                                <div class="col-md-6 ">
                                  <div class="theme-reviews-score-item">
                                    <div class="theme-reviews-score-item-header">
                                      <p class="theme-reviews-score-item-title">Breakfast</p>
                                      <p class="theme-reviews-score-item-num">6.5</p>
                                    </div>
                                    <div class="theme-reviews-score-item-bar">
                                      <div style="width:65%;"></div>
                                    </div>
                                  </div>
                                  <div class="theme-reviews-score-item">
                                    <div class="theme-reviews-score-item-header">
                                      <p class="theme-reviews-score-item-title">Clearness</p>
                                      <p class="theme-reviews-score-item-num">6.2</p>
                                    </div>
                                    <div class="theme-reviews-score-item-bar">
                                      <div style="width:62%;"></div>
                                    </div>
                                  </div>
                                  <div class="theme-reviews-score-item">
                                    <div class="theme-reviews-score-item-header">
                                      <p class="theme-reviews-score-item-title">Comfort</p>
                                      <p class="theme-reviews-score-item-num">7.6</p>
                                    </div>
                                    <div class="theme-reviews-score-item-bar">
                                      <div style="width:76%;"></div>
                                    </div>
                                  </div>
                                  <div class="theme-reviews-score-item">
                                    <div class="theme-reviews-score-item-header">
                                      <p class="theme-reviews-score-item-title">Location</p>
                                      <p class="theme-reviews-score-item-num">5.3</p>
                                    </div>
                                    <div class="theme-reviews-score-item-bar">
                                      <div style="width:53%;"></div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6 ">
                                  <div class="theme-reviews-score-item">
                                    <div class="theme-reviews-score-item-header">
                                      <p class="theme-reviews-score-item-title">Facilities</p>
                                      <p class="theme-reviews-score-item-num">9.7</p>
                                    </div>
                                    <div class="theme-reviews-score-item-bar">
                                      <div style="width:97%;"></div>
                                    </div>
                                  </div>
                                  <div class="theme-reviews-score-item">
                                    <div class="theme-reviews-score-item-header">
                                      <p class="theme-reviews-score-item-title">Staff</p>
                                      <p class="theme-reviews-score-item-num">7.1</p>
                                    </div>
                                    <div class="theme-reviews-score-item-bar">
                                      <div style="width:71%;"></div>
                                    </div>
                                  </div>
                                  <div class="theme-reviews-score-item">
                                    <div class="theme-reviews-score-item-header">
                                      <p class="theme-reviews-score-item-title">Value for money</p>
                                      <p class="theme-reviews-score-item-num">6.4</p>
                                    </div>
                                    <div class="theme-reviews-score-item-bar">
                                      <div style="width:64%;"></div>
                                    </div>
                                  </div>
                                  <div class="theme-reviews-score-item">
                                    <div class="theme-reviews-score-item-header">
                                      <p class="theme-reviews-score-item-title">Free WiFi</p>
                                      <p class="theme-reviews-score-item-num">8.0</p>
                                    </div>
                                    <div class="theme-reviews-score-item-bar">
                                      <div style="width:80%;"></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="theme-reviews-list">
                        <article class="theme-reviews-item">
                          <div class="row" data-gutter="10">
                            <div class="col-md-3 ">
                              <div class="theme-reviews-item-info">
                                <img class="theme-reviews-item-avatar" src="<?=new_ass?>/img/amaze_70x70.jpg" alt="Image Alternative text" title="Image Title"/>
                                <p class="theme-reviews-item-date">Reviewed Sat, Jun 23</p>
                                <p class="theme-reviews-item-author">by Ava McDonald</p>
                              </div>
                            </div>
                            <div class="col-md-9 ">
                              <div class="theme-reviews-rating">
                                <div class="theme-reviews-rating-header">
                                  <span class="theme-reviews-rating-num">9.9</span>
                                  <span class="theme-reviews-rating-title">Excellent</span>
                                </div>
                                <div class="theme-reviews-rating-bar">
                                  <div style="width:99%;"></div>
                                </div>
                              </div>
                              <div class="theme-reviews-item-body">
                                <p class="theme-reviews-item-text">Velit condimentum fames ligula commodo habitasse torquent dui mus semper magna felis nulla metus suscipit hac auctor commodo natoque morbi montes quis imperdiet turpis himenaeos est nascetur aliquet proin lacinia</p>
                              </div>
                            </div>
                          </div>
                        </article>
                        <article class="theme-reviews-item">
                          <div class="row" data-gutter="10">
                            <div class="col-md-3 ">
                              <div class="theme-reviews-item-info">
                                <img class="theme-reviews-item-avatar" src="<?=new_ass?>/img/afro_70x70.jpg" alt="Image Alternative text" title="Image Title"/>
                                <p class="theme-reviews-item-date">Reviewed Sat, Jun 16</p>
                                <p class="theme-reviews-item-author">by Elizabeth Wallace</p>
                              </div>
                            </div>
                            <div class="col-md-9 ">
                              <div class="theme-reviews-rating">
                                <div class="theme-reviews-rating-header">
                                  <span class="theme-reviews-rating-num">9.4</span>
                                  <span class="theme-reviews-rating-title">Excellent</span>
                                </div>
                                <div class="theme-reviews-rating-bar">
                                  <div style="width:94%;"></div>
                                </div>
                              </div>
                              <div class="theme-reviews-item-body">
                                <p class="theme-reviews-item-text">Tempor iaculis montes cubilia vehicula netus tempor himenaeos accumsan nascetur tristique purus praesent molestie sociis rhoncus id luctus nunc praesent lectus consectetur netus eros velit mi dictum iaculis ad ornare mus torquent adipiscing condimentum aliquet vestibulum platea ullamcorper gravida porttitor maecenas</p>
                              </div>
                            </div>
                          </div>
                        </article>
                        <article class="theme-reviews-item">
                          <div class="row" data-gutter="10">
                            <div class="col-md-3 ">
                              <div class="theme-reviews-item-info">
                                <img class="theme-reviews-item-avatar" src="<?=new_ass?>/img/adolescent-beanie-casual-cold-295821_70x70.jpg" alt="Image Alternative text" title="Image Title"/>
                                <p class="theme-reviews-item-date">Reviewed Sat, Jun 09</p>
                                <p class="theme-reviews-item-author">by Keith Churchill</p>
                              </div>
                            </div>
                            <div class="col-md-9 ">
                              <div class="theme-reviews-rating">
                                <div class="theme-reviews-rating-header">
                                  <span class="theme-reviews-rating-num">7.4</span>
                                  <span class="theme-reviews-rating-title">Good</span>
                                </div>
                                <div class="theme-reviews-rating-bar">
                                  <div style="width:74%;"></div>
                                </div>
                              </div>
                              <div class="theme-reviews-item-body">
                                <p class="theme-reviews-item-text">Adipiscing faucibus nulla ultrices fusce pretium velit fames ipsum tempor parturient consequat hendrerit tristique natoque nec platea suscipit mus suspendisse nullam cursus quam sociosqu tincidunt eget felis natoque elementum</p>
                              </div>
                            </div>
                          </div>
                        </article>
                        <div class="row">
                          <div class="col-md-9 col-md-offset-3">
                            <a class="theme-reviews-more" href="#">&#x2b; More Reviews</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div> -->
                  <div class="tab-pane" id="HotelPageTabs-4" role="tab-panel">
                    <div class="theme-item-page-facilities">
                      <div class="row">
                        <div class="col-md-3 ">
                          <div class="theme-item-page-facilities-item">
                            <i class="fa fa-shower theme-item-page-facilities-item-icon"></i>
                            <h5 class="theme-item-page-facilities-item-title">Bathroom</h5>
                            
                          </div>
                          <div class="theme-item-page-facilities-item">
                            <i class="fa fa-heart theme-item-page-facilities-item-icon"></i>
                            <h5 class="theme-item-page-facilities-item-title">Pool and wellness</h5>
                            
                          </div>
                          <div class="theme-item-page-facilities-item">
                            <i class="fa fa-glass theme-item-page-facilities-item-icon"></i>
                            <h5 class="theme-item-page-facilities-item-title">Food and Drink</h5>
                            
                          </div>
                        </div>
                        <div class="col-md-3 ">
                          <div class="theme-item-page-facilities-item">
                            <i class="fa fa-wifi theme-item-page-facilities-item-icon"></i>
                            <h5 class="theme-item-page-facilities-item-title">Internet</h5>
                          </div>
                          <div class="theme-item-page-facilities-item">
                            <i class="fa fa-car theme-item-page-facilities-item-icon"></i>
                            <h5 class="theme-item-page-facilities-item-title">Parking</h5>
                          </div>
                          <div class="theme-item-page-facilities-item">
                            <i class="fa fa-users theme-item-page-facilities-item-icon"></i>
                            <h5 class="theme-item-page-facilities-item-title">Reception services</h5>
                            
                          </div>
                        </div>
                        <div class="col-md-3 ">
                          <div class="theme-item-page-facilities-item">
                            <i class="fa fa-tint theme-item-page-facilities-item-icon"></i>
                            <h5 class="theme-item-page-facilities-item-title">Cleaning services</h5>
                            
                          </div>
                          <div class="theme-item-page-facilities-item">
                            <i class="fa fa-handshake-o theme-item-page-facilities-item-icon"></i>
                            <h5 class="theme-item-page-facilities-item-title">Business facilities</h5>
                            
                          </div>
                          <div class="theme-item-page-facilities-item">
                            <i class="fa fa-laptop theme-item-page-facilities-item-icon"></i>
                            <h5 class="theme-item-page-facilities-item-title">Media and technology</h5>
                            
                          </div>
                        </div>
                        <div class="col-md-3 ">
                          <div class="theme-item-page-facilities-item">
                            <i class="fa fa-info-circle theme-item-page-facilities-item-icon"></i>
                            <h5 class="theme-item-page-facilities-item-title">General</h5>
                           
                          </div>
                          <div class="theme-item-page-facilities-item">
                            <i class="fa fa-globe theme-item-page-facilities-item-icon"></i>
                            <h5 class="theme-item-page-facilities-item-title">Languages spoken</h5>
                            
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 ">
            <div class="sticky-col">
              <div class="theme-sidebar-section _mb-10 _mob-h">
                <h5 class="theme-sidebar-section-title">Weather in <?=ucfirst($this->session->userdata('search_details')['location']);?></h5>
                <ul class="theme-sidebar-section-weather-list">
                  <li>
                    <p class="theme-sidebar-section-weather-date"> <b>Today  <?=date("d-m-Y")?> </b></p>
                    <p class="theme-sidebar-section-weather-temp">
                      <i class="wi wi-thermometer theme-sidebar-section-weather-icon"></i>
                      <b><?= $this->session->userdata('temp')?> °c
                    </p>
                  </li>
                 
                </ul>
                
              </div>
              <!-- <div class="theme-sidebar-section _mb-10">
               
                
              </div> -->
              <!-- <div class="theme-sidebar-section _mb-10">
                <ul class="theme-sidebar-section-features-list">
                  <li>
                    <h5 class="theme-sidebar-section-features-list-title">Manage your bookings!</h5>
                    <p class="theme-sidebar-section-features-list-body">You're in control of your booking - no registration required.</p>
                  </li>
                  <li>
                    <h5 class="theme-sidebar-section-features-list-title">Customer support available 24/7 worldwide!</h5>
                    <p class="theme-sidebar-section-features-list-body">Website and customer support in English and 41 other languages.</p>
                  </li>
                </ul>
              </div> -->

              <div class="theme-search-area _p-20 _bg-p _br-4 _mb-20 _bsh theme-search-area-vert theme-search-area-white _mob-h">
                <?php

                  $location_search = $this->session->userdata('search_details')['location'];  
                  $checkin_search = $this->session->userdata('search_details')['checkin'];   
                  $checkout_search = $this->session->userdata('search_details')['checkout'];
                  $type_search = $this->session->userdata('search_details')['type'];
                  $guest_search = $this->session->userdata('search_details')['guest'];

                  ?>
               
                <form action="<?=base_url().'Hotel'?>" method="GET">
                  <div class="theme-search-area-form" id="hero-search-form">
                    <div class="theme-search-area-section first theme-search-area-section-curved theme-search-area-section-sm theme-search-area-section-fade-white theme-search-area-section-no-border">
                      <label class="theme-search-area-section-label">Where</label>
                      <div class="theme-search-area-section-inner">
                        <i class="theme-search-area-section-icon lin lin-location-pin"></i>
                        <input class="theme-search-area-section-input" value="<?=$location_search?>" type="text" placeholder="Location" name="location" id="country_m" autocomplete="off" required/>
                      </div>
                    </div>
                    <div class="row" data-gutter="10">
                      <div class="col-md-12 ">
                        <div class="theme-search-area-section theme-search-area-section-curved theme-search-area-section-sm theme-search-area-section-fade-white theme-search-area-section-no-border">
                          <label class="theme-search-area-section-label">Check In</label>
                          <div class="theme-search-area-section-inner">
                            <i class="theme-search-area-section-icon lin lin-calendar"></i>
                            
                            <input class="theme-search-area-section-input "  type="date" name="checkin" value="<?php echo date('Y-m-d',strtotime($checkin_search))?>"/>
                            <!-- <input class="theme-search-area-section-input _desk-h mobile-picker" value="<?=$checkin_search?>" type="date"/> -->
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12 ">
                        <div class="theme-search-area-section theme-search-area-section-curved theme-search-area-section-sm theme-search-area-section-fade-white theme-search-area-section-no-border">
                          <label class="theme-search-area-section-label">Check Out</label>
                          <div class="theme-search-area-section-inner">
                            <i class="theme-search-area-section-icon lin lin-calendar"></i>
                              <input type="date" class="theme-search-area-section-input " name="checkout" value="<?php echo date('Y-m-d',strtotime($checkout_search))?>">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row" data-gutter="10">
                      <div class="col-md-12 ">
                        <div class="theme-search-area-section theme-search-area-section-curved theme-search-area-section-sm theme-search-area-section-fade-white theme-search-area-section-no-border quantity-selector" data-increment="Guests">
                          <label class="theme-search-area-section-label">select</label>
                          <div class="theme-search-area-section theme-search-area-section-sm theme-search-area-section-no-border theme-search-area-section-fade-white theme-search-area-section-curved">
                            <div class="theme-search-area-section-inner">
                              <i class="theme-search-area-section-icon lin lin-location-pin"></i>
                                      <select class="theme-search-area-section-input" name="type" >
                                        <option style="color:black" value="hotel" <?php if($type_search== "hotel") echo "selected"; ?> >Hotel</option>
                                        <option style="color:black" value="resort" <?php if($type_search== "resort") echo "selected"; ?> >Resort</option>
                                        <option style="color:black" value="camp" <?php if($type_search== "camp") echo "selected"; ?> >Camp</option>
                                        <option style="color:black" value="weekend" <?php if($type_search== "weekend") echo "selected"; ?> >Weekend</option>
                                        <option style="color:black" value="weekend" <?php if($type_search== "sightseeing") echo "selected"; ?> >sightseeing</option>
                                      </select>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12 ">
                        <div class="theme-search-area-section theme-search-area-section-curved theme-search-area-section-sm theme-search-area-section-fade-white theme-search-area-section-no-border quantity-selector" data-increment="Guests">
                          <label class="theme-search-area-section-label">Guests</label>
                          <div class="theme-search-area-section theme-search-area-section-sm theme-search-area-section-no-border theme-search-area-section-fade-white theme-search-area-section-curved">
                            <div class="theme-search-area-section-inner">
                              <i class="theme-search-area-section-icon lin lin-people"></i>
                              <select class="theme-search-area-section-input" name="guest">
                                <option style="color:black" value="2" <?php if($guest_search== "2") echo "selected"; ?> >2</option>
                                <option style="color:black" value="3" <?php if($guest_search== "3") echo "selected"; ?> >3</option>
                                <option style="color:black" value="4" <?php if($guest_search== "4") echo "selected"; ?> >4</option>
                                <option style="color:black" value="5" <?php if($guest_search== "5") echo "selected"; ?> >5</option>
                              </select>

                            </div>
                          </div>
                        </div>

                      
                      </div>
                    </div>
                    <button class="theme-search-area-submit _mt-0 _tt-uc theme-search-area-submit-curved theme-search-area-submit-sm theme-search-area-submit-white theme-search-area-submit-primary">Change</button>
                  </div>
                <form>
              </div>
              
              
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="snackbar">Please Select Rooms</div>

    <script src="<?=new_ass?>js/jquery.js"></script>

    <script>
      window.onload = function() {
        // breakdinner_check

       

        var elmnt = document.getElementById("booking-scroll");
        elmnt.scrollIntoView();
      }
    </script>

<script>
	

	var j="";
	var room_c="";

	var footer_section = [];


	function roomcalc(i,j,g,room_rent,final_price,day,breakfast_price)
	{
    
		/* i = no of rooms /
			j = no of maximum guest in room
		*/
    var final='';
		
		var a = i * 2;            // 1 step 
    var aa = i * Number(j);  // 2 step 

		// room_c = i * room_rent;
    
    if(aa > a) {                              // 3 step 

      var show_total_opt =  aa - a;           // 4 step 
      for(q=0; q<=show_total_opt; q++)        // 5 step
      {
        final += "<option value="+q+">"+q+"</option>";
      }

    }


    // alert(final_price);
    
		// room onchage then price change
		var final_price1 = Number(final_price);
    var one = (final_price1 * i) * Number(day);
    // var guest_count =  2 * i;
    // var two = (breakfast_price * guest_count) * Number(day);

    // alert('two' + two)

   
    

    // document.getElementById('final'+g).innerHTML = one + two;

    document.getElementById('final'+g).innerHTML = one;
    document.getElementById('tguest'+g).innerHTML=a;
		console.log(final);
		document.getElementById('guest'+g).innerHTML=final;
		// troom
		document.getElementById('troom'+g).innerHTML=i;



    var chech = document.getElementById('breakdinner'+g).checked;
    if(check)
    {
      document.getElementById("breakdinner"+g).checked = false;
    }




	}



  function finalcalc(selected_guest,guest_charges,g,day,room_price,breakfast_price)
	{

    // get selected room
    var selected_room = document.getElementById('room'+g).value;
    var get_guest = document.getElementById('tguest'+g).innerHTML;

   
    var first = (room_price * selected_room) * Number(day);   //(roomprice * selected room) * day
    
    var second =  (guest_charges * selected_guest) * Number(day);
    
    var third  = (selected_room * 2) + Number(selected_guest);
    // alert(third)

    // var fourt  = (breakfast_price * third) * Number(day);
    
    var result = first + second;

    
    // calculation for guest with days 
    // var f =  breakfast_price * day;
    // var breakfast_day_guest =  f * selected_guest;

    


		document.getElementById('final'+g).innerHTML= result;


    if(Number(selected_guest) == 0){
     
      var selected_room1 = document.getElementById('room'+g).value;
      document.getElementById('tguest'+g).innerHTML = selected_room1 * 2;

    } 
    else{

      var selected_room2 = document.getElementById('room'+g).value;
      var new1 = document.getElementById('tguest'+g).innerHTML = selected_room2 * 2;

      document.getElementById('tguest'+g).innerHTML = new1+ Number(selected_guest);

    }


    var chech = document.getElementById('breakdinner'+g).checked;
    if(check)
    {
      document.getElementById("breakdinner"+g).checked = false;
    }

    // document.getElementById('tguest'+g).innerHTML = Number(get_guest) + Number(selected_guest);
		// document.getElementById('t_final'+g).value=finalprices;

		// alert();
		// this.add(g)
		
	}


  function abc(breakfast_price,days,g)
    {
      
      var chech = document.getElementById('breakdinner'+g).checked;

      var get_guest = Number(document.getElementById('tguest'+g).innerHTML);
      var final_value = Number(document.getElementById('final'+g).innerHTML);

      var f = get_guest * breakfast_price;
      var final_breakdinner_price = f * days;


      if(chech)
      {
        document.getElementById('final'+g).innerHTML= final_value + final_breakdinner_price;
      } else{
        document.getElementById('final'+g).innerHTML= final_value - final_breakdinner_price;
      }
      //final value     
    }

</script>


<script>

		var s_room12;
		var s_guest12;
		var s_final_array = [];
		var s_id12;

		function selectroom(g){
			
			// select = document.getElementById('cancelroom'+g).style.display = "block";
			// cancel = document.getElementById('selectroom'+g).style.display = "none";
			s_id12 = g;

			s_final_array.push(g);
			// alert(s_final_array);
			// console.log(s_final_array);
			// document.getElementById("myNav").style.display = "block";
			// console.log(s_final_array);


      this.check();

			// this.add(g)
		}

    

		// function cancelroom(g){

		// 	select = document.getElementById('cancelroom'+g).style.display = "none";
		// 	cancel = document.getElementById('selectroom'+g).style.display = "block";

		// 	// var selectBox = document.getElementById('room'+g);
		// 	// var selectedValue = selectBox.options[selectBox.selectedIndex].value=1;
		

		// 	for(var i=0;i<s_final_array.length;i++){

		// 		if(s_final_array[i]===g)
		// 		{
		// 			s_final_array.splice(i,1);
		// 		}
		// 	}

			
    //   console.log(s_final_array);


		// 	if(s_final_array.length==0){

		// 		// document.getElementById("myNav").style.display = "none";
		// 	}
		// 	// this.jk();
		// }



		function check()
		{
     var breakfast;
     var breakfast_price;

     var brekwithdinner;
     var brekwithdinner_price;

			
			var final_details= [];

			if(s_final_array.length==0)
			{
				alert("Please Select Hotel");
				var x = document.getElementById("snackbar");
  				x.className = "show";
  				setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);

			}else{

				for(var i=0;i<s_final_array.length;i++)
				{
					
					 // check breakfastwithdinner
           var chech1 = document.getElementById('breakfast'+s_final_array[i]).checked;
          if(chech1)
          {
            breakfast = 1;
            breakfast_price= document.getElementById('breakfast'+s_final_array[i]).value;

            
            
          } else{
            breakfast = 0;
            breakfast_price=0;
          }

          // check breakfastwithdinner
          var chech = document.getElementById('breakdinner'+s_final_array[i]).checked;
          if(chech)
          {
            breakwithdinner = 1;
            brekwithdinner_price=document.getElementById('breakdinner'+s_final_array[i]).value;
          } else{
            breakwithdinner = 0;
            brekwithdinner_price=0;
          }



					n={
						"room_type":s_final_array[i],
						"t_room":Number(document.getElementById('troom'+s_final_array[i]).innerHTML),
						"t_guest":Number(document.getElementById('tguest'+s_final_array[i]).innerHTML),
            "t_total":Number(document.getElementById('final'+s_final_array[i]).innerHTML),
            "free_birthday_pernight" : Number(document.getElementById('price_per_night'+s_final_array[i]).innerHTML),
            "t_breakfast_status":breakfast,
            "t_breakfast_price":breakfast_price,
            "t_breakdinner_status":breakwithdinner,
            "t_breakdinner_price":brekwithdinner_price,

					}

					final_details.push(n);
				}

          console.log(final_details);
					var action = "action";
					var hid = <?=$details->id?>;
					var day = <?= $days ?>;
          var email = "<?=$details->email?>";
					$.ajax({
						url:"<?=base_url()?>Hotel/Hotelbooking",
						method:"POST",
						data:{action:action,final_details:final_details,hid:hid,day:day,email:email},
						success:function(data){
							// $('.filter_data').html(data);
							if(data=1){
                
                var chech = document.getElementById('breakdinner'+s_final_array).checked;
                if(check)
                {
                  document.getElementById("breakdinner"+s_final_array).checked = false;
                  window.location.href = "<?=base_url().'Hotel/Booking_sent'?>";
                }else{
                  window.location.href = "<?=base_url().'Hotel/Booking_sent'?>";
                }
              
								
							} else{
								alert("something wents wrong..!")
							}
						}
      });
				
			}
		}
	</script>


  
<script>
$(document).ready(function(){
 
 $('#country').typeahead({
  source: function(query, result)
  {
   $.ajax({
    url:"<?= fetch_cities ?>fetch.php",
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

 $('#country_m').typeahead({
  source: function(query, result)
  {
   $.ajax({
    url:"<?= fetch_cities ?>fetch.php",
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




<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>  


   

   