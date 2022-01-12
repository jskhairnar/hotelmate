<?php

error_reporting(0);
date_default_timezone_set("Asia/Kolkata");   //India time (GMT+5:30)
defined('BASEPATH') OR exit('No direct script access allowed');

class New1 extends CI_Controller {

     //constructor
     public function __construct() {
        parent::__construct();

        $this->load->model('Hotel_m');
     }


    function index()
    {
        $this->load->view('common/new_header');
        $this->load->view('details_new');
        $this->load->view('common/new_footer');
    }


    
    public function get_search_list()
    {
       
       
        if(isset($_POST["action"])) {

            $location=$this->session->userdata('search_details')['location'];
            $type=$this->session->userdata('search_details')['type'];

            // check type and pass table name
            $table_name="tbl_markers";
            if ($type == "hotel") {
                $table_name = "tbl_markers";
            }
    


            // $query = "SELECT * FROM $table_name WHERE status = '1' AND city IN('".$location."') ";

            $query = "SELECT * FROM $table_name WHERE status = '1' AND (country IN('".$location."') OR state IN('".$location."') OR city IN('".$location."'))";

            $data = $this->Hotel_m->hotel_list_m($query);

            

            if(isset($_POST["rating"]))
            {
                $rating_filter = implode("','", $_POST["rating"]);

                $query = "SELECT * FROM $table_name WHERE status = '1' AND (country IN('".$location."') OR state IN('".$location."') OR city IN('".$location."')) AND rating IN('".$rating_filter."')";
                $data = $this->Hotel_m->hotel_list_m($query);


                
            }

            if(isset($_POST["price"]))
            {

                // echo "<script>alert('min : ". $min ."-- max:".$max."' )</script>";
                echo "<script>alert('min : ". $min ."-- max:".$max."' )</script>";

                $price_filter = implode("','", $_POST["price"]);

                $str_arr = explode ("-", $price_filter);  
                $min = $str_arr[0];
                $max = $str_arr[1];
                

                // $query=$this->db->query("SELECT * FROM hotel WHERE h_charges BETWEEN '$min' AND '$max'");
                //  exit;

                $query = "SELECT * FROM $table_name WHERE status = '1' AND (country IN('".$location."') OR state IN('".$location."') OR city IN('".$location."'))";


                // $query .= "SELECT * FROM tbl_markers WHERE status = '1' AND city IN('".$city."') AND h_charges BETWEEN '".$min."' AND '". $max."'";

                $result = $this->Hotel_m->hotel_list_m($query);
               
                $new_array=[];

                for($i=0; $i<count($result); $i++)
                {
                    
                        $arr=json_decode($result[$i]->room_price);
                        
                        // echo $arr[0][0];
                        if($arr[0][0] >= $min && $arr[0][0] <= $max ){
                            
                            array_push($new_array,$result[$i]);
                        }

                }
                
                $data = $new_array;

            }

            
            if(isset($_POST["aminities"]))
            {
                $aminities_filter = implode("','", $_POST["aminities"]);
                echo "<script>alert('".$aminities_filter."')</script>";
                $query .= "AND  FIND_IN_SET ('".$aminities_filter."',h_aminities) ";
            }
           
            // echo "<script>alert('".$query."')</script>";
            //  exit;
            
            // $data = $this->Hotel_m->hotel_list_m($query);
            // echo '<pre>';
            // print_r($data);
            
            // exit;

            $output="";
         
            if(!empty($data))
            {

                // show hotel
                if($type=="hotel") {
                    // echo "<script>alert('sdfsd')</script>";
                    foreach($data as $r){
                        $a=json_decode($r->room_price);
                        
                        // $output .='<div class="hot-page2-alp-r-list">
                        //             <div class="col-md-3 hot-page2-alp-r-list-re-sp">
                        //                 <a href="javascript:void(0);">
                        //                     <div class="hotel-list-score">'.$r->rating.'</div>
                        //                     <div class="hot-page2-hli-1"> <img src="'.images.'/hotels/l1.jpg" alt=""></div>
                        //                     <div class="hom-hot-av-tic hom-hot-av-tic-list"> Available Rooms: 42 </div>
                        //                 </a>
                        //             </div>
                        //             <div class="col-md-6">
                        //                 <div class="hot-page2-alp-ri-p2"> <a href="hotel-details.html"><h3>'.$r->hotel_name.'</h3></a>
                        //                     <ul>
                        //                         <li>'.$r->address.'</li>
                        //                         <li>'.$r->contact.'</li>
                        //                     </ul>
                        //                 </div>
                        //             </div>
                        //             <div class="col-md-3">
                        //                 <div class="hot-page2-alp-ri-p3">
                        //                     <div class="hot-page2-alp-r-hot-page-rat">25%Off</div> <span class="hot-list-p3-1">Price Per Night</span> <span class="hot-list-p3-2">Rs.'. $a[0][0].'</span><span class="hot-list-p3-4">
                        //                         <a href='.base_url().'Hotel/Hoteldetails/'.$r->id.' class="hot-page2-alp-quot-btn">Book Now</a>
                        //                     </span> </div>
                        //             </div>
                        //         </div>';

                                $output .='<div class="theme-search-results-item theme-search-results-item-">
                                <div class="theme-search-results-item-preview">
                                  <a class="theme-search-results-item-mask-link" href="#searchResultsItem-" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="searchResultsItem-"></a>
                                  <a class="theme-search-results-item-bookmark theme-search-results-item-bookmark-top" href="#">
                                    <i class="fa fa-bookmark"></i>
                                    <span>Watch</span>
                                  </a>
                                  <div class="row" data-gutter="20">
                                    <div class="col-md-5 ">
                                      <div class="theme-search-results-item-img-wrap">
                                        <img class="theme-search-results-item-img" src="<?=new_ass?>img/hotel-results/1.jpg" alt="Image Alternative text" title="Image Title"/>
                                      </div>
                                    </div>
                                    <div class="col-md-5 ">
                                      <ul class="theme-search-results-item-hotel-stars">
                                        <li>
                                          <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                          <i class="fa fa-star"></i>
                                        </li>
                                      </ul>
                                      <h5 class="theme-search-results-item-title theme-search-results-item-title-lg">'.$r->hotel_name.'</h5>
                                      <div class="theme-search-results-item-hotel-rating">
                                        <p class="theme-search-results-item-hotel-rating-title">
                                          <b>9.8 Excellent</b>&nbsp;(6432 reviews)
                                        </p>
                                      </div>
                                      <p class="theme-search-results-item-location">
                                        <i class="fa fa-map-marker"></i>East Side
                                      </p>
                                      <p class="theme-search-results-item-hotel-book-count">Booked
                                        <b>16</b>times today
                                      </p>
                                      <ul class="theme-search-results-item-hotel-features">
                                        <li>
                                          <span>!</span>
                                          <b>FREE</b>cancellation - no prepayment
                                        </li>
                                      </ul>
                                    </div>
                                    <div class="col-md-2 ">
                                      <div class="theme-search-results-item-book">
                                        <div class="theme-search-results-item-price">
                                          <p class="theme-search-results-item-price-tag">$293</p>
                                          <p class="theme-search-results-item-price-sign">avg/night</p>
                                        </div>
                                        <a class="btn btn-primary-inverse btn-block theme-search-results-item-price-btn" href="#">Book Now</a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
              
                                <div class="collapse theme-search-results-item-collapse" id="searchResultsItem-">
                                  <div class="theme-search-results-item-extend">
                                    <a class="theme-search-results-item-extend-close" href="#searchResultsItem-" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="searchResultsItem-">&#10005;</a>
                                    <div class="tabbable theme-search-results-item-tabs">
                                      <ul class="nav nav-tabs" role="tablist">
                                        <li class="active" role="presentation">
                                          <a role="tab" data-toggle="tab" href="#tab-item--1" aria-controls="tab-item--1">Details</a>
                                        </li>
                                        <li role="presentation">
                                          <a role="tab" data-toggle="tab" href="#tab-item--2" aria-controls="tab-item--2">Map</a>
                                        </li>
                                        <li role="presentation">
                                          <a role="tab" data-toggle="tab" href="#tab-item--3" aria-controls="tab-item--3">Reviews</a>
                                        </li>
                                        <li role="presentation">
                                          <a role="tab" data-toggle="tab" href="#tab-item--4" aria-controls="tab-item--4">Similar</a>
                                        </li>
                                      </ul>
                                      <div class="tab-content">
                                        <div class="tab-pane active" role="tabpanel" id="tab-item--1">
                                          <div class="row" data-gutter="20">
                                            <div class="col-md-6 ">
                                              <ul class="magnific-gallery theme-search-results-item-tabs-gallery">
                                                <li>
                                                  <a href="<?=new_ass?>img/hotel-results/gallery/1.jpg">
                                                    <img src="<?=new_ass?>img/hotel-results/gallery/1-s.jpg" alt="Image Alternative text" title="Image Title"/>
                                                  </a>
                                                </li>
                                                <li>
                                                  <a href="<?=new_ass?>img/hotel-results/gallery/12.jpg">
                                                    <img src="<?=new_ass?>img/hotel-results/gallery/12-s.jpg" alt="Image Alternative text" title="Image Title"/>
                                                  </a>
                                                </li>
                                                <li>
                                                  <a href="<?=new_ass?>img/hotel-results/gallery/8.jpg">
                                                    <img src="<?=new_ass?>img/hotel-results/gallery/8-s.jpg" alt="Image Alternative text" title="Image Title"/>
                                                  </a>
                                                </li>
                                                <li>
                                                  <a href="<?=new_ass?>img/hotel-results/gallery/5.jpg">
                                                    <img src="<?=new_ass?>img/hotel-results/gallery/5-s.jpg" alt="Image Alternative text" title="Image Title"/>
                                                  </a>
                                                </li>
                                                <li>
                                                  <a href="<?=new_ass?>img/hotel-results/gallery/4.jpg">
                                                    <img src="<?=new_ass?>img/hotel-results/gallery/4-s.jpg" alt="Image Alternative text" title="Image Title"/>
                                                  </a>
                                                </li>
                                                <li>
                                                  <a href="<?=new_ass?>img/hotel-results/gallery/3.jpg">
                                                    <img src="<?=new_ass?>img/hotel-results/gallery/3-s.jpg" alt="Image Alternative text" title="Image Title"/>
                                                  </a>
                                                </li>
                                                <li>
                                                  <a href="<?=new_ass?>img/hotel-results/gallery/6.jpg">
                                                    <img src="<?=new_ass?>img/hotel-results/gallery/6-s.jpg" alt="Image Alternative text" title="Image Title"/>
                                                  </a>
                                                </li>
                                                <li>
                                                  <a href="<?=new_ass?>img/hotel-results/gallery/7.jpg">
                                                    <img src="<?=new_ass?>img/hotel-results/gallery/7-s.jpg" alt="Image Alternative text" title="Image Title"/>
                                                  </a>
                                                </li>
                                                <li>
                                                  <a href="<?=new_ass?>img/hotel-results/gallery/10.jpg">
                                                    <img src="<?=new_ass?>img/hotel-results/gallery/10-s.jpg" alt="Image Alternative text" title="Image Title"/>
                                                  </a>
                                                </li>
                                                <li>
                                                  <a href="<?=new_ass?>img/hotel-results/gallery/11.jpg">
                                                    <img src="<?=new_ass?>img/hotel-results/gallery/11-s.jpg" alt="Image Alternative text" title="Image Title"/>
                                                  </a>
                                                </li>
                                                <li>
                                                  <a href="<?=new_ass?>img/hotel-results/gallery/9.jpg">
                                                    <img src="<?=new_ass?>img/hotel-results/gallery/9-s.jpg" alt="Image Alternative text" title="Image Title"/>
                                                  </a>
                                                </li>
                                                <li>
                                                  <a href="<?=new_ass?>img/hotel-results/gallery/2.jpg">
                                                    <img src="<?=new_ass?>img/hotel-results/gallery/2-s.jpg" alt="Image Alternative text" title="Image Title"/>
                                                  </a>
                                                </li>
                                              </ul>
                                            </div>
                                            <div class="col-md-6 ">
                                              <p class="theme-search-results-item-tabs-details-desc">Good business hotel. Close to Starbucks. Good for sightseeing and close to the city center. Friendly atmosphere and good hotel grounds. Great valet service. Popular among families.</p>
                                              <table class="theme-search-results-item-tabs-details-table">
                                                <tr>
                                                  <th class="theme-search-results-item-tabs-details-table-title">Location</th>
                                                  <th class="theme-search-results-item-tabs-details-table-value">
                                                    <div class="theme-search-results-item-tabs-details-table-value-bar">
                                                      <div style="width:72%;"></div>
                                                    </div>
                                                  </th>
                                                  <th>
                                                    <b>7.2</b>
                                                  </th>
                                                </tr>
                                                <tr>
                                                  <th class="theme-search-results-item-tabs-details-table-title">Clearness</th>
                                                  <th class="theme-search-results-item-tabs-details-table-value">
                                                    <div class="theme-search-results-item-tabs-details-table-value-bar">
                                                      <div style="width:65%;"></div>
                                                    </div>
                                                  </th>
                                                  <th>
                                                    <b>6.5</b>
                                                  </th>
                                                </tr>
                                                <tr>
                                                  <th class="theme-search-results-item-tabs-details-table-title">Value for Money</th>
                                                  <th class="theme-search-results-item-tabs-details-table-value">
                                                    <div class="theme-search-results-item-tabs-details-table-value-bar">
                                                      <div style="width:83%;"></div>
                                                    </div>
                                                  </th>
                                                  <th>
                                                    <b>8.3</b>
                                                  </th>
                                                </tr>
                                                <tr>
                                                  <th class="theme-search-results-item-tabs-details-table-title">Amenities</th>
                                                  <th class="theme-search-results-item-tabs-details-table-value">
                                                    <div class="theme-search-results-item-tabs-details-table-value-bar">
                                                      <div style="width:98%;"></div>
                                                    </div>
                                                  </th>
                                                  <th>
                                                    <b>9.8</b>
                                                  </th>
                                                </tr>
                                              </table>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="tab-pane" role="tabpanel" id="tab-item--2">
                                          <div class="row" data-gutter="20">
                                            <div class="col-md-9 ">
                                              <div class="google-map theme-search-results-item-tabs-map" data-lat="40.7483624" data-lng="-73.9900896"></div>
                                            </div>
                                            <div class="col-md-3 ">
                                              <h3 class="theme-search-results-item-tabs-map-title">870 7th Avenue, New York, NY</h3>
                                              <p class="theme-search-results-item-tabs-map-phone">+1 126 470 4475</p>
                                              <ul class="theme-search-results-item-tabs-map-rates">
                                                <li>
                                                  <i class="fa fa-camera theme-search-results-item-tabs-map-rates-icon"></i>
                                                  <h5 class="theme-search-results-item-tabs-map-rates-title">
                                                    <b>9.9</b>Superb
                                                  </h5>
                                                  <p class="theme-search-results-item-tabs-map-rates-sign">Sightseeing</p>
                                                </li>
                                                <li>
                                                  <i class="fa fa-cutlery theme-search-results-item-tabs-map-rates-icon"></i>
                                                  <h5 class="theme-search-results-item-tabs-map-rates-title">
                                                    <b>9.9</b>Superb
                                                  </h5>
                                                  <p class="theme-search-results-item-tabs-map-rates-sign">Eating</p>
                                                </li>
                                                <li>
                                                  <i class="fa fa-glass theme-search-results-item-tabs-map-rates-icon"></i>
                                                  <h5 class="theme-search-results-item-tabs-map-rates-title">
                                                    <b>9.9</b>Superb
                                                  </h5>
                                                  <p class="theme-search-results-item-tabs-map-rates-sign">Nightlife</p>
                                                </li>
                                                <li>
                                                  <i class="fa fa-shopping-cart theme-search-results-item-tabs-map-rates-icon"></i>
                                                  <h5 class="theme-search-results-item-tabs-map-rates-title">
                                                    <b>9.9</b>Superb
                                                  </h5>
                                                  <p class="theme-search-results-item-tabs-map-rates-sign">Shopping</p>
                                                </li>
                                              </ul>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="tab-pane" role="tabpanel" id="tab-item--3">
                                          <div class="theme-reviews">
                                            <div class="theme-reviews-list">
                                              <article class="theme-reviews-item">
                                                <div class="row" data-gutter="10">
                                                  <div class="col-md-3 ">
                                                    <div class="theme-reviews-item-info">
                                                      <img class="theme-reviews-item-avatar" src="<?=new_ass?>img/fashion-beauty-model-portrait-girl_70x70.jpg" alt="Image Alternative text" title="Image Title"/>
                                                      <p class="theme-reviews-item-date">Reviewed Sat, Jun 23</p>
                                                      <p class="theme-reviews-item-author">by Blake Abraham</p>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-9 ">
                                                    <div class="theme-reviews-rating">
                                                      <div class="theme-reviews-rating-header">
                                                        <span class="theme-reviews-rating-num">7.5</span>
                                                        <span class="theme-reviews-rating-title">Good</span>
                                                      </div>
                                                      <div class="theme-reviews-rating-bar">
                                                        <div style="width:75%;"></div>
                                                      </div>
                                                    </div>
                                                    <div class="theme-reviews-item-body">
                                                      <p class="theme-reviews-item-text">Sed nascetur sit sagittis himenaeos morbi eu ad lectus elementum sem rhoncus hac consequat posuere vulputate primis dictum commodo molestie facilisis nullam netus primis tempus vivamus porttitor porttitor pharetra montes posuere</p>
                                                    </div>
                                                  </div>
                                                </div>
                                              </article>
                                              <article class="theme-reviews-item">
                                                <div class="row" data-gutter="10">
                                                  <div class="col-md-3 ">
                                                    <div class="theme-reviews-item-info">
                                                      <img class="theme-reviews-item-avatar" src="<?=new_ass?>img/amaze_70x70.jpg" alt="Image Alternative text" title="Image Title"/>
                                                      <p class="theme-reviews-item-date">Reviewed Tue, Jun 19</p>
                                                      <p class="theme-reviews-item-author">by Olivia Slater</p>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-9 ">
                                                    <div class="theme-reviews-rating">
                                                      <div class="theme-reviews-rating-header">
                                                        <span class="theme-reviews-rating-num">8.5</span>
                                                        <span class="theme-reviews-rating-title">Excellent</span>
                                                      </div>
                                                      <div class="theme-reviews-rating-bar">
                                                        <div style="width:85%;"></div>
                                                      </div>
                                                    </div>
                                                    <div class="theme-reviews-item-body">
                                                      <p class="theme-reviews-item-text">Laoreet netus primis potenti auctor semper etiam natoque habitasse blandit tempus parturient erat faucibus per lacinia luctus taciti platea dictum hac neque lobortis netus hendrerit purus mauris suscipit porta vulputate amet cras netus risus suscipit pellentesque nisi cras eget vel egestas consectetur nisl maecenas lacus etiam turpis</p>
                                                    </div>
                                                  </div>
                                                </div>
                                              </article>
                                              <article class="theme-reviews-item">
                                                <div class="row" data-gutter="10">
                                                  <div class="col-md-3 ">
                                                    <div class="theme-reviews-item-info">
                                                      <img class="theme-reviews-item-avatar" src="<?=new_ass?>img/man-wearing-black-formal-suit-with-black-necktie_70x70.jpg" alt="Image Alternative text" title="Image Title"/>
                                                      <p class="theme-reviews-item-date">Reviewed Sun, Jun 17</p>
                                                      <p class="theme-reviews-item-author">by Oliver Ross</p>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-9 ">
                                                    <div class="theme-reviews-rating">
                                                      <div class="theme-reviews-rating-header">
                                                        <span class="theme-reviews-rating-num">6.0</span>
                                                        <span class="theme-reviews-rating-title">Good</span>
                                                      </div>
                                                      <div class="theme-reviews-rating-bar">
                                                        <div style="width:60%;"></div>
                                                      </div>
                                                    </div>
                                                    <div class="theme-reviews-item-body">
                                                      <p class="theme-reviews-item-text">Suscipit sociis cubilia blandit rutrum himenaeos dolor in suspendisse nunc per rhoncus montes semper himenaeos odio felis nam dis interdum consectetur massa adipiscing mi mauris nunc viverra</p>
                                                    </div>
                                                  </div>
                                                </div>
                                              </article>
                                              <article class="theme-reviews-item">
                                                <div class="row" data-gutter="10">
                                                  <div class="col-md-3 ">
                                                    <div class="theme-reviews-item-info">
                                                      <img class="theme-reviews-item-avatar" src="<?=new_ass?>img/stella_grutzmann_premier_models_management_70x70.jpg" alt="Image Alternative text" title="Image Title"/>
                                                      <p class="theme-reviews-item-date">Reviewed Tue, Jun 12</p>
                                                      <p class="theme-reviews-item-author">by Joseph Hudson</p>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-9 ">
                                                    <div class="theme-reviews-rating">
                                                      <div class="theme-reviews-rating-header">
                                                        <span class="theme-reviews-rating-num">8.8</span>
                                                        <span class="theme-reviews-rating-title">Excellent</span>
                                                      </div>
                                                      <div class="theme-reviews-rating-bar">
                                                        <div style="width:88%;"></div>
                                                      </div>
                                                    </div>
                                                    <div class="theme-reviews-item-body">
                                                      <p class="theme-reviews-item-text">Quis vulputate ligula tempor massa luctus interdum aenean consectetur in porttitor vehicula nostra iaculis nunc pharetra dis interdum metus in</p>
                                                    </div>
                                                  </div>
                                                </div>
                                              </article>
                                              <article class="theme-reviews-item">
                                                <div class="row" data-gutter="10">
                                                  <div class="col-md-3 ">
                                                    <div class="theme-reviews-item-info">
                                                      <img class="theme-reviews-item-avatar" src="<?=new_ass?>img/gamer_chick_70x70.jpg" alt="Image Alternative text" title="Image Title"/>
                                                      <p class="theme-reviews-item-date">Reviewed Sun, Jun 10</p>
                                                      <p class="theme-reviews-item-author">by Carol Blevins</p>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-9 ">
                                                    <div class="theme-reviews-rating">
                                                      <div class="theme-reviews-rating-header">
                                                        <span class="theme-reviews-rating-num">7.7</span>
                                                        <span class="theme-reviews-rating-title">Good</span>
                                                      </div>
                                                      <div class="theme-reviews-rating-bar">
                                                        <div style="width:77%;"></div>
                                                      </div>
                                                    </div>
                                                    <div class="theme-reviews-item-body">
                                                      <p class="theme-reviews-item-text">Luctus id mattis massa magnis turpis donec leo mi netus augue donec sagittis magna primis dictum tincidunt magna nullam tortor cursus tortor auctor nascetur himenaeos aliquet accumsan nisi accumsan ullamcorper porttitor magna facilisis duis a scelerisque convallis donec elit pellentesque scelerisque feugiat taciti</p>
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
                                        </div>
                                        <div class="tab-pane" role="tabpanel" id="tab-item--4">
                                          <div class="row" data-gutter="10">
                                            <div class="col-md-3">
                                              <div class="theme-search-results-item-tabs-similar-item">
                                                <a class="theme-search-results-item-tabs-similar-item-link" href="#"></a>
                                                <img class="theme-search-results-item-tabs-similar-item-img" src="<?=new_ass?>img/hotel-results/similar/1.jpg" alt="Image Alternative text" title="Image Title"/>
                                                <div class="theme-search-results-item-tabs-similar-item-caption">
                                                  <p class="theme-search-results-item-tabs-similar-item-price">$204</p>
                                                  <ul class="theme-search-results-item-tabs-similar-item-stars">
                                                    <li class="active">
                                                      <i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="active">
                                                      <i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="active">
                                                      <i class="fa fa-star"></i>
                                                    </li>
                                                    <li>
                                                      <i class="fa fa-star"></i>
                                                    </li>
                                                    <li>
                                                      <i class="fa fa-star"></i>
                                                    </li>
                                                  </ul>
                                                  <h5 class="theme-search-results-item-tabs-similar-item-title">Millennium Broadway Hotel - Times Square</h5>
                                                  <a class="btn btn-primary btn-block btn-sm text-center theme-search-results-item-tabs-similar-item-book">View Deal</a>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-md-3">
                                              <div class="theme-search-results-item-tabs-similar-item">
                                                <a class="theme-search-results-item-tabs-similar-item-link" href="#"></a>
                                                <img class="theme-search-results-item-tabs-similar-item-img" src="<?=new_ass?>img/hotel-results/similar/2.jpg" alt="Image Alternative text" title="Image Title"/>
                                                <div class="theme-search-results-item-tabs-similar-item-caption">
                                                  <p class="theme-search-results-item-tabs-similar-item-price">$303</p>
                                                  <ul class="theme-search-results-item-tabs-similar-item-stars">
                                                    <li class="active">
                                                      <i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="active">
                                                      <i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="active">
                                                      <i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="active">
                                                      <i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="active">
                                                      <i class="fa fa-star"></i>
                                                    </li>
                                                  </ul>
                                                  <h5 class="theme-search-results-item-tabs-similar-item-title">The Time New York</h5>
                                                  <a class="btn btn-primary btn-block btn-sm text-center theme-search-results-item-tabs-similar-item-book">View Deal</a>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-md-3">
                                              <div class="theme-search-results-item-tabs-similar-item">
                                                <a class="theme-search-results-item-tabs-similar-item-link" href="#"></a>
                                                <img class="theme-search-results-item-tabs-similar-item-img" src="<?=new_ass?>img/hotel-results/similar/3.jpg" alt="Image Alternative text" title="Image Title"/>
                                                <div class="theme-search-results-item-tabs-similar-item-caption">
                                                  <p class="theme-search-results-item-tabs-similar-item-price">$488</p>
                                                  <ul class="theme-search-results-item-tabs-similar-item-stars">
                                                    <li class="active">
                                                      <i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="active">
                                                      <i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="active">
                                                      <i class="fa fa-star"></i>
                                                    </li>
                                                    <li>
                                                      <i class="fa fa-star"></i>
                                                    </li>
                                                    <li>
                                                      <i class="fa fa-star"></i>
                                                    </li>
                                                  </ul>
                                                  <h5 class="theme-search-results-item-tabs-similar-item-title">Hudson New York, Central Park</h5>
                                                  <a class="btn btn-primary btn-block btn-sm text-center theme-search-results-item-tabs-similar-item-book">View Deal</a>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-md-3">
                                              <div class="theme-search-results-item-tabs-similar-item">
                                                <a class="theme-search-results-item-tabs-similar-item-link" href="#"></a>
                                                <img class="theme-search-results-item-tabs-similar-item-img" src="<?=new_ass?>img/hotel-results/similar/4.jpg" alt="Image Alternative text" title="Image Title"/>
                                                <div class="theme-search-results-item-tabs-similar-item-caption">
                                                  <p class="theme-search-results-item-tabs-similar-item-price">$157</p>
                                                  <ul class="theme-search-results-item-tabs-similar-item-stars">
                                                    <li class="active">
                                                      <i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="active">
                                                      <i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="active">
                                                      <i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="active">
                                                      <i class="fa fa-star"></i>
                                                    </li>
                                                    <li>
                                                      <i class="fa fa-star"></i>
                                                    </li>
                                                  </ul>
                                                  <h5 class="theme-search-results-item-tabs-similar-item-title">Row NYC</h5>
                                                  <a class="btn btn-primary btn-block btn-sm text-center theme-search-results-item-tabs-similar-item-book">View Deal</a>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              ';        
    
                                // checkin=2020-11-23&checkout=2020-11-24&adult=3
    
                    }  
                } else {
                    echo "<script>alert('sdfsd')</script>";
                    foreach($data as $r){
                        $a=json_decode($r->r_room_price);
                        $output .='<div class="hot-page2-alp-r-list">
                                    <div class="col-md-3 hot-page2-alp-r-list-re-sp">
                                        <a href="javascript:void(0);">
                                            <div class="hotel-list-score">'.$r->rating.'</div>
                                            <div class="hot-page2-hli-1"> <img src="'.images.'/hotels/l1.jpg" alt=""></div>
                                            <div class="hom-hot-av-tic hom-hot-av-tic-list"> Available Rooms: 42 </div>
                                        </a>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="hot-page2-alp-ri-p2"> <a href="hotel-details.html"><h3>'.$r->resort_name.'</h3></a>
                                            <ul>
                                                <li>'.$r->r_address.'</li>
                                                <li>'.$r->mobile_no.'</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="hot-page2-alp-ri-p3">
                                            <div class="hot-page2-alp-r-hot-page-rat">25%Off</div> <span class="hot-list-p3-1">Price Per Night</span> <span class="hot-list-p3-2">Rs.'. $a[0][0].'</span><span class="hot-list-p3-4">
                                                <a href='.base_url().'Hotel/Hoteldetails/'.$r->id.' class="hot-page2-alp-quot-btn">Book Now</a>
                                            </span> </div>
                                    </div>
                                </div>';
    
                    }  
                }
                echo $output;
            } else{
                echo '<h3 style="text-align:center">Not Found...</h3>';
            }
           
        }   
        
        
    }


}


?>