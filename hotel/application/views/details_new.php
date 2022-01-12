
 <script src="<?=jksearchjs?>homeasset/js/extention/choices.js"></script>
    <script src="<?=jksearchjs?>homeasset/js/extention/flatpickr.js"></script>
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
<style>
/* The container */
.container_check {
  display: block;
  position: relative;
  padding-left: 0px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 22px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default checkbox */
.container_check input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

/* Create a custom checkbox */
.checkmark {
  position: absolute;
    top: 0;
    left: 0;
    height: 21px;
    width: 21px;
    background-color: #eee;
}

/* On mouse-over, add a grey background color */
.container_check:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.container_check input:checked ~ .checkmark {
  background-color: #2196F3;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the checkmark when checked */
.container_check input:checked ~ .checkmark:after {
  display: block;
}

/* Style the checkmark/indicator */
.container_check .checkmark:after {
  left: 8px;
    top: 4px;
    width: 5px;
    height: 10px;
    border: solid white;
    border-width: 0 3px 3px 0;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
}

.radio label, .checkbox label {
    min-height: 20px;
    padding-left: 34px!important;
}
</style>

<style>

.theme-page-section-gray {
    background: #fff!important;
}

._p-30 {
    padding: 0px !important;
}


.theme-search-results-item-price-tag {
    font-family: 'Roboto', helvetica, Arial, sans-serif;
    font-size: 27px;
    margin-bottom: 0;
    line-height: 1em;
}
.theme-search-results-item-price-sign {
    font-size: 13px;
    color: #b3b3b3;
    margin-bottom: 0;
    margin-top: 2px;
}
.theme-search-results-item-tabs-gallery > li {
    float: left;
    width: 16%;
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

@media (max-width: 700px){
.theme-search-results-item-grid .theme-search-results-item-title {
  font-size: 17px;
    height: 34px;
    overflow: hidden;
    margin-bottom: 0px;
    font-weight: bold;
    margin-top: 20px;
}
.theme-search-results-item-grid .theme-search-results-item-price {
    margin-bottom: 0;
    text-align: left;
}

.theme-search-results-item-grid .theme-search-results-item-price-tag {
  font-size: 20px;
    line-height: 1em;
    font-weight: normal;
    margin-top: 14px;
}

.theme-search-results-item-grid .theme-search-results-item-price-sign {
    font-size: 12px;
    margin-bottom: 8px;
}

.theme-search-results-item-hotel-rating-title {
    margin-bottom: 5px;
}

.theme-search-results-item-grid .theme-search-results-item-location {
    margin-bottom: 0;
    font-size: 13px;
    color: #333;
    margin: 7px 0px;
}

.theme-search-results-item._br-3._mb-20._bsh-xl.theme-search-results-item-grid {
    background: #e6e6e6;;
}

.theme-search-results-item {
   
    margin-top: 14px;
}
._bsh-xl {
    -webkit-box-shadow: none; 
    box-shadow: none;
}
}


</style>
    
    
    
    <div class="theme-hero-area">
      <div class="theme-hero-area-bg-wrap">
        <div class="theme-hero-area-bg-pattern theme-hero-area-bg-pattern-ultra-light" style="background-image:url(<?=new_ass?>img/patterns/travel/4.png);"></div>
        <div class="theme-hero-area-grad-mask"></div>
      </div>
      <div class="theme-hero-area-body">
        <div class="container">
          <div class="row _pv-60">
            <div class="col-md-9 ">
              <div class="_mob-h">
                <div class="theme-hero-text theme-hero-text-white">
                  <div class="theme-hero-text-header">
                    <h2 class="theme-hero-text-title _mb-20 theme-hero-text-title-sm"><?php echo ucfirst($this->session->userdata('search_details')['type']);?>s in <?php echo ucfirst($this->session->userdata('search_details')['location']);?></h2>
                  </div>
                </div>
                <ul class="theme-breadcrumbs _mt-20">
                  <li>
                    <p class="theme-breadcrumbs-item-title">
                      <a href="index.html">Home</a>
                    </p>
                  </li>
                  <li>
                    <p class="theme-breadcrumbs-item-title">
                      <a href="#"><?php echo ucfirst($this->session->userdata('search_details')['location']);?></a>
                    </p>
                    <!-- <p class="theme-breadcrumbs-item-subtitle">123,878 hotels</p> -->
                  </li>
                  <!-- <li>
                    <p class="theme-breadcrumbs-item-title">
                      <a href="#">New York State</a>
                    </p>
                    <p class="theme-breadcrumbs-item-subtitle">5,478 hotels</p>
                  </li>
                  <li>
                    <p class="theme-breadcrumbs-item-title active">New York City Hotels</p>
                    <p class="theme-breadcrumbs-item-subtitle">2438 properties</p>
                  </li> -->
                </ul>
              </div>

              <!-- jayesh -->
              <div class="theme-search-area-inline _desk-h theme-search-area-inline-white">
                <h4 class="theme-search-area-inline-title"><?php echo ucfirst($this->session->userdata('search_details')['type']);?>s in <?php echo ucfirst($this->session->userdata('search_details')['location']);?></h4>
                
                
                <?php
                   
                   $ch_in =  date('M,d', strtotime($this->session->userdata('search_details')['checkin']));

                    $ch_out= date('M,d', strtotime($this->session->userdata('search_details')['checkout']));
                
                ?>
                
                <p class="theme-search-area-inline-details"> <?= $ch_in ?> &rarr; <?= $ch_out ?></p>
                <a class="theme-search-area-inline-link magnific-inline" href="#searchEditModal">
                  <i class="fa fa-pencil"></i>Edit
                </a>

                  <?php

                          $location_search = $this->session->userdata('search_details')['location'];  
                          $checkin_search = $this->session->userdata('search_details')['checkin'];   
                          $checkout_search = $this->session->userdata('search_details')['checkout'];
                          $type_search = $this->session->userdata('search_details')['type'];
                          $guest_search = $this->session->userdata('search_details')['guest'];
                          
                  ?>
                  
                    <div class="magnific-popup magnific-popup-sm mfp-hide" id="searchEditModal">
                      <div class="theme-search-area theme-search-area-vert">
                        <div class="theme-search-area-header">
                          <h1 class="theme-search-area-title theme-search-area-title-sm">Edit your Search</h1>
                        </div>
                          <form action="<?=base_url().'Hotel'?>" method="GET">
                          

                            <div class="theme-search-area-form">
                              <div class="theme-search-area-section first theme-search-area-section-curved">
                                <label class="theme-search-area-section-label">Where</label>
                                <div class="theme-search-area-section-inner">
                                  <i class="theme-search-area-section-icon lin lin-location-pin"></i>
                                  <input class="theme-search-area-section-input" value="<?=$location_search?>" type="text" placeholder="Location" name="location" id="country_m" autocomplete="off" required />

                                </div>
                              </div>
                              <div class="row" data-gutter="10">
                              <div class="col-md-6 ">
                                  <div class="theme-search-area-section theme-search-area-section-curved">
                                    <label class="theme-search-area-section-label">Check In</label>
                                    <div class="theme-search-area-section-inner">
                                      <i class="theme-search-area-section-icon lin lin-calendar"></i>
                                      <!-- <input class="theme-search-area-section-input datePickerStart _mob-h" value="<?=$checkin_search?>" name="checkin" type="text" placeholder="Check-In"/> -->
                                      <!-- <input type="text" class="datepicker theme-search-area-section-input" value="<?=$checkin_search?>"  name="checkin"/> -->
                                      
                                      <input class="theme-search-area-section-input "  type="date" name="checkin" value="<?php echo date('Y-m-d',strtotime($checkin_search))?>"/>
                                      
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6 ">
                                  <div class="theme-search-area-section theme-search-area-section-curved">
                                    <label class="theme-search-area-section-label">Check Out</label>
                                    <div class="theme-search-area-section-inner">
                                      <i class="theme-search-area-section-icon lin lin-calendar"></i>
                                <input type="date" class="theme-search-area-section-input " name="checkout" value="<?php echo date('Y-m-d',strtotime($checkout_search))?>">

                                      </div>
                                  </div>
                                </div>
                              </div>
                              <div class="theme-search-area-section first theme-search-area-section-curved">
                                <label class="theme-search-area-section-label">Select</label>
                                <div class="theme-search-area-section-inner">
                                  <i class="theme-search-area-section-icon lin lin-location-pin"></i>
                                  <select class="theme-search-area-section-input" name="type"  >
                                          <option value="hotel" <?php if($type_search== "hotel") echo "selected"; ?> >Hotel</option>
                                          <option value="resort" <?php if($type_search== "resort") echo "selected"; ?> >Resort</option>
                                          <option value="camp" <?php if($type_search== "camp") echo "selected"; ?> >Camp</option>
                                          <option value="weekend" <?php if($type_search== "weekend") echo "selected"; ?> >Weekend</option>
                                        </select>
                                </div>
                              </div>

                              <div class="theme-search-area-section first theme-search-area-section-curved">
                                <label class="theme-search-area-section-label">Guest</label>
                                <div class="theme-search-area-section-inner">
                                  <i class="theme-search-area-section-icon lin lin-people""></i>
                                  <select class="theme-search-area-section-input" name="guest"  >
                                      <option style="color:black" value="2" <?php if($guest_search== "2") echo "selected"; ?> >2</option>
                                      <option style="color:black" value="3" <?php if($guest_search== "3") echo "selected"; ?> >3</option>
                                      <option style="color:black" value="4" <?php if($guest_search== "4") echo "selected"; ?> >4</option>
                                      <option style="color:black" value="5" <?php if($guest_search== "5") echo "selected"; ?> >5</option>
                                  </select>
                                </div>
                              </div>
                            

                              
                              <button type="submit" class="theme-search-area-submit _mt-0 _tt-uc theme-search-area-submit-curved">Search</button>
                            </div>


                          </form>  
                      </div>
                    </div>
                 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>






    
    <div class="theme-page-section theme-page-section-gray">
      <div class="container">
        <div class="row row-col-static" id="sticky-parent" data-gutter="20">

            <?php

              $location_search = $this->session->userdata('search_details')['location'];  
              $checkin_search = $this->session->userdata('search_details')['checkin'];   
              $checkout_search = $this->session->userdata('search_details')['checkout'];
              $type_search = $this->session->userdata('search_details')['type'];
              $guest_search = $this->session->userdata('search_details')['guest'];

            ?>
          <!-- filter section-->
          <div class="col-md-3 ">
            <div class="sticky-col _mob-h">
              <div class="theme-search-results-sidebar-map-view _mb-10">
                <a class="theme-search-results-sidebar-map-view-link" href="#"></a>
                <div class="theme-search-results-sidebar-map-view-body">
                  <i class="fa fa-thermometer-half theme-search-results-sidebar-map-view-icon"></i>
                  <p class="theme-search-results-sidebar-map-view-sign">TEMP <?=$temp?> °c</p>
                </div>
                <div class="theme-search-results-sidebar-map-view-mask"></div>
              </div>
              <div class="theme-search-area _p-20 _bg-p _br-4 _mb-20 _bsh theme-search-area-vert theme-search-area-white">
                
               
                <form action="<?=base_url().'Hotel'?>" method="GET">
                  <div class="theme-search-area-form" id="hero-search-form">
                    <div class="theme-search-area-section first theme-search-area-section-curved theme-search-area-section-sm theme-search-area-section-fade-white theme-search-area-section-no-border">
                      <label class="theme-search-area-section-label">Wheres</label>
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

              <!-- rating filter -->
              <div class="theme-search-results-sidebar">
                <div class="theme-search-results-sidebar-sections _mb-20 _br-2 theme-search-results-sidebar-sections-white-wrap">
                  <div class="theme-search-results-sidebar-section" style="padding-bottom: 5px;">
                    <h5 class="theme-search-results-sidebar-section-title">Filteration</h5>
                    
                  </div>
                  <div class="theme-search-results-sidebar-section">
                    <h5 class="theme-search-results-sidebar-section-title">Hotel Class</h5>
                    <div class="theme-search-results-sidebar-section-checkbox-list">
                      <div class="theme-search-results-sidebar-section-checkbox-list-items">
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item " >
                          <label class="container_check">5 Star Hotel
                            <input type="checkbox" class="rating common_selector" value="5">
                            <span class="checkmark"></span>
                          </label>
                        </div>
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="container_check">4 Star Hotel
                              <input type="checkbox" class="rating common_selector"  value="4">
                              <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="container_check">3 Star Hotel
                              <input type="checkbox" class="rating common_selector"  value="3">
                              <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="container_check">2 Star Hotel
                              <input type="checkbox" class="rating common_selector"  value="2">
                              <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="container_check"> 1 Star Hotel
                              <input type="checkbox" class="rating common_selector"  value="1">
                              <span class="checkmark"></span>
                            </label>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                  <div class="theme-search-results-sidebar-section">
                    <h5 class="theme-search-results-sidebar-section-title"> SELECT PRICE RANGE </h5>
                    <div class="theme-search-results-sidebar-section-checkbox-list">
                      <div class="theme-search-results-sidebar-section-checkbox-list-items">
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="container_check">Rs.5000 - Above
                            <input type="checkbox" class="price common_selector" value="5000-100000">
                            <span class="checkmark"></span>
                          </label>
                        </div>
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="container_check">Rs.4000 - Rs.5000
                            <input type="checkbox" class="price common_selector" value="4000-5000">
                            <span class="checkmark"></span>
                          </label>
                        </div>
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="container_check">Rs.3000 - Rs.4000
                            <input type="checkbox" class="price common_selector" value="3000-4000">
                            <span class="checkmark"></span>
                          </label>
                        </div>
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="container_check">Rs.2000 - Rs.3000
                            <input type="checkbox" class="price common_selector" value="2000-3000">
                            <span class="checkmark"></span>
                          </label>
                        </div>
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="container_check">Rs.1000 - Rs.2000
                            <input type="checkbox" class="price common_selector" value="1000-2000">
                            <span class="checkmark"></span>
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>


                  <!-- aminities -->
                  <div class="theme-search-results-sidebar-section">
                    <h5 class="theme-search-results-sidebar-section-title">Amenities</h5>
                    <div class="theme-search-results-sidebar-section-checkbox-list">
                      <div class="theme-search-results-sidebar-section-checkbox-list-items">
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="container_check"> wifi
                              <input type="checkbox" class="aminities common_selector"  value="wifi">
                              <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="container_check"> tv
                              <input type="checkbox" class="aminities common_selector"  value="tv">
                              <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="container_check"> parking
                              <input type="checkbox" class="aminities common_selector"  value="parking">
                              <span class="checkmark"></span>
                            </label>
                        </div>
                        
                        
                      </div>
                      <div class="collapse" id="SearchResultsCheckboxAmenities">
                        <div class="theme-search-results-sidebar-section-checkbox-list-items theme-search-results-sidebar-section-checkbox-list-items-expand">
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="container_check"> parking
                              <input type="checkbox" class="aminities common_selector"  value="parking">
                              <span class="checkmark"></span>
                            </label>
                        </div>
                        </div>
                      </div>
                      <a class="theme-search-results-sidebar-section-checkbox-list-expand-link" role="button" data-toggle="collapse" href="#SearchResultsCheckboxAmenities" aria-expanded="false">Show more
                        <i class="fa fa-angle-down"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>


            </div>
          </div>


          <!-- Middle section -->
          <div class="col-md-7-5 ">

          


            <div class="theme-search-results">
              
              <!-- desk searchresult section -->
            
              <div class="_mob-h filter_data">

              </div>

              <!-- mobile searchresult section -->
              <div class="_desk-h">  
                <!-- Jayesh -->
                <div class="theme-search-results-sidebar-map-view _mb-10">
                  <a class="theme-search-results-sidebar-map-view-link" href="#"></a>
                  <div class="theme-search-results-sidebar-map-view-body">
                    <i class="fa fa-thermometer-half theme-search-results-sidebar-map-view-icon"></i>
                    <p class="theme-search-results-sidebar-map-view-sign">TEMP <?=$temp?> °c</p>
                  </div>
                  <div class="theme-search-results-sidebar-map-view-mask"></div>
                </div>
                <div class="theme-search-results-item _br-3 _mb-20 _bsh-xl theme-search-results-item-grid">
                  <div class="filter_data_mobile">
                  
                  </div>
                  
                </div>
              </div>


              <div class="theme-search-results-mobile-filters" id="mobileFilters">
                <a class="theme-search-results-mobile-filters-btn magnific-inline" href="#MobileFilters">
                  <i class="fa fa-filter"></i>Filters
                </a>
                <div class="magnific-popup mfp-hide" id="MobileFilters">
                  <div class="theme-search-results-sidebar">
                    <div class="theme-search-results-sidebar-sections">
                      <div class="theme-search-results-sidebar-section">
                        <h5 class="theme-search-results-sidebar-section-title">Search Hotels</h5>
                      </div>
                      <div class="theme-search-results-sidebar-section">
                        <h5 class="theme-search-results-sidebar-section-title">Hotel Class</h5>
                        <div class="theme-search-results-sidebar-section-checkbox-list">
                        <div class="theme-search-results-sidebar-section-checkbox-list-items">
                          <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item " >
                              <label class="container_check">5 Star Hotel
                              <input type="checkbox" class="rating common_selector" value="5">
                              <span class="checkmark"></span>
                              </label>
                          </div>
                          <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                              <label class="container_check">4 Star Hotel
                                <input type="checkbox" class="rating common_selector"  value="4">
                                <span class="checkmark"></span>
                              </label>
                          </div>
                          <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                              <label class="container_check">3 Star Hotel
                                <input type="checkbox" class="rating common_selector"  value="3">
                                <span class="checkmark"></span>
                              </label>
                          </div>
                          <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                            <label class="container_check">2 Star Hotel
                                <input type="checkbox" class="rating common_selector"  value="2">
                                <span class="checkmark"></span>
                              </label>
                          </div>
                          <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                            <label class="container_check"> 1 Star Hotel
                                <input type="checkbox" class="rating common_selector"  value="1">
                                <span class="checkmark"></span>
                              </label>
                          </div>
                          
                        </div>
                      </div>
                    </div>
                    <div class="theme-search-results-sidebar-section">
                      <h5 class="theme-search-results-sidebar-section-title"> SELECT PRICE RANGE </h5>
                      <div class="theme-search-results-sidebar-section-checkbox-list">
                        <div class="theme-search-results-sidebar-section-checkbox-list-items">
                          <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                            <label class="container_check">Rs.5000 - Above
                              <input type="checkbox" class="price common_selector" value="5000-100000">
                              <span class="checkmark"></span>
                            </label>
                          </div>
                          <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                            <label class="container_check">Rs.4000 - Rs.5000
                              <input type="checkbox" class="price common_selector" value="4000-5000">
                              <span class="checkmark"></span>
                            </label>
                          </div>
                          <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                            <label class="container_check">Rs.3000 - Rs.4000
                              <input type="checkbox" class="price common_selector" value="3000-4000">
                              <span class="checkmark"></span>
                            </label>
                          </div>
                          <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                            <label class="container_check">Rs.2000 - Rs.3000
                              <input type="checkbox" class="price common_selector" value="2000-3000">
                              <span class="checkmark"></span>
                            </label>
                          </div>
                          <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                            <label class="container_check">Rs.1000 - Rs.2000
                              <input type="checkbox" class="price common_selector" value="1000-2000">
                              <span class="checkmark"></span>
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- aminities -->
                    <div class="theme-search-results-sidebar-section">
                      <h5 class="theme-search-results-sidebar-section-title">Amenities</h5>
                      <div class="theme-search-results-sidebar-section-checkbox-list">
                        <div class="theme-search-results-sidebar-section-checkbox-list-items">
                          <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                            <label class="container_check"> wifi
                                <input type="checkbox" class="aminities common_selector"  value="wifi">
                                <span class="checkmark"></span>
                              </label>
                          </div>
                          <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                            <label class="container_check"> tv
                                <input type="checkbox" class="aminities common_selector"  value="tv">
                                <span class="checkmark"></span>
                              </label>
                          </div>
                          <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                            <label class="container_check"> parking
                                <input type="checkbox" class="aminities common_selector"  value="parking">
                                <span class="checkmark"></span>
                              </label>
                          </div>
                          
                          
                        </div>
                        <div class="collapse" id="SearchResultsCheckboxAmenities">
                          <div class="theme-search-results-sidebar-section-checkbox-list-items theme-search-results-sidebar-section-checkbox-list-items-expand">
                          <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                            <label class="container_check"> parking
                                <input type="checkbox" class="aminities common_selector"  value="parking">
                                <span class="checkmark"></span>
                              </label>
                          </div>
                          </div>
                        </div>
                        <a class="theme-search-results-sidebar-section-checkbox-list-expand-link" role="button" data-toggle="collapse" href="#SearchResultsCheckboxAmenities" aria-expanded="false">Show more
                          <i class="fa fa-angle-down"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              </div>
            </div>


            <!-- <a class="btn _tt-uc _fs-sm _mt-10 btn-white btn-block btn-lg" href="#">Load More Results</a> -->
            
          </div>

        </div>
      </div>
   
    </div>



    <script src="<?=new_ass?>js/jquery.js"></script>
    <script>

        $(document).ready(function(){
          
            filter_data();
          
            function filter_data()
            {
          
                // $('.filter_data').html('<div id="loading" style="" ></div>');
                var action = 'fetch_data';
                var rating = get_filter('rating');
              
                var price = get_filter('price');
                var aminities = get_filter('aminities');
          

                $.ajax({
                    url:"<?=base_url()?>Hotel/get_search_list",
                    method:"POST",
                    data:{action:action,rating:rating,price:price,aminities:aminities},
                    success:function(data){
                        $('.filter_data').html(data);
                        $('.filter_data_mobile').html(data);
                        
                    }
                });
            }



        function get_filter(class_name)
        {    
            var filter = [];
            $('.'+class_name+':checked').each(function(){
                filter.push($(this).val());
            });
            return filter;
        }
        

              $('.common_selector').click(function(){
                  
              filter_data();
          });


          });


   
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


   










