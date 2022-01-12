<?php

error_reporting(0);
date_default_timezone_set("Asia/Kolkata");   //India time (GMT+5:30)
defined('BASEPATH') OR exit('No direct script access allowed');

class Hotel extends CI_Controller {

    //constructor
    public function __construct() {
        parent::__construct();

        $this->load->model('Hotel_m');
     }


    
    // get search list - all type
	public function index() {

        // check the url parameter then next proceed
        // if(!$_REQUEST['type'] || !$_REQUEST['location'] || $_REQUEST['location']=='' || $_REQUEST['type']==''){
        //     redirect('Home');
        // }
        
        $get_days=$this->dateDiffInDays($_REQUEST['checkin'],$_REQUEST['checkout']);
        
        if($_REQUEST['checkin']=="" || $_REQUEST['checkout']=="" || $get_days <= 0)
        {
          redirect('Home');
        }

        

        $data['Title']= ucfirst($_REQUEST['location'])."-".ucfirst($_REQUEST['type']);
        $data['location']=$_REQUEST['location'];
        
        $serch_details = array(
            
                                "checkin" => $_REQUEST['checkin'],
                                "checkout" => $_REQUEST['checkout'],
                                "guest" => $_REQUEST['guest'],
                                "type" => $_REQUEST['type'],
                                "location" => $_REQUEST['location']
                            );
        // search details set in session
        $this->session->set_userdata('search_details',$serch_details);
       
        // city temp
        $jsonfile = file_get_contents("https://api.openweathermap.org/data/2.5/weather?q=".$_REQUEST['location']."&units=metric&appid=12ed12ad49c09301615d1da7d72863f6");
        $temp = json_decode($jsonfile,true);
       
        $this->session->set_userdata('temp',round($temp['main']['temp']));
        $data['temp']=round($temp['main']['temp']);



     
        $this->load->view('common/new_header',$data);
        $this->load->view('details_new',$data);
        $this->load->view('common/new_footer',$data);
        
  }
    

    
    public function get_search_list()
    {
        echo "<script>console.log('min : ". json_encode($_POST) ."' )</script>";
       
        if(isset($_POST["action"])) {

            $location=$this->session->userdata('search_details')['location'];
            $type=$this->session->userdata('search_details')['type'];

    
            // check type and pass table name
            $table_name="";
            if ($type == "hotel") {

                $table_name = "tbl_markers";
                $image_url = upload."hotel/";

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
                // echo "<script>alert('min : ". $min ."-- max:".$max."' )</script>";

                $price_filter = implode("','", $_POST["price"]);

                $str_arr = explode ("-", $price_filter);  
                $min = $str_arr[0];
                $max = $str_arr[1];
                
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

                $aminities_filter = $_POST["aminities"];

                $new_array=[];
                for($i=0; $i<count($aminities_filter); $i++){
                    $am=$aminities_filter[$i];
                   
                   $query = "SELECT * FROM $table_name WHERE status = '1' AND (country IN('".$location."') OR state IN('".$location."') OR city IN('".$location."'))";
                   $result = $this->Hotel_m->hotel_list_m($query);
               
                $new_array=[];

                for($i=0; $i<count($result); $i++)
                {
                    
                        $arr=json_decode($result[$i]->aminities_s);

                        $arr1=$arr[0];

                        foreach($arr1 as $key => $value) { 

                          if($am == $value)
                          {
                           
                            array_push($new_array,$result[$i]);
                          }
                        // echo "<script>console.log('JSON.parse(".$value.")' )</script>";
                        }
                }

                $data = $new_array;
                
                
                }

            }

            $output="";
         
            if(!empty($data))
            {

                // show hotel
                if($type) {

                    foreach($data as $r){

                        
                        $a=json_decode($r->room_price);

                        $image=json_decode($r->icon);
                      
                        $output .='<div class="theme-search-results-item theme-search-results-item-">
                        <div class="theme-search-results-item-preview">
                          <a class="theme-search-results-item-mask-link" href="#'.$r->id.'" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="searchResultsItem-"></a>
                          <a class="theme-search-results-item-bookmark theme-search-results-item-bookmark-top" href="#">
                            <i class="fa fa-bookmark"></i>
                            <span>Watch</span>
                          </a>
                          <div class="row" data-gutter="20">
                            <div class="col-md-5 ">
                              <div class="theme-search-results-item-img-wrap">
                                <img class="theme-search-results-item-img" src="'.$image_url.''.$image[0][0].'" alt="Image Alternative text" title="Image Title"/>
                              </div>
                            </div>
                            <div class="col-md-5 ">
                            
                              <h5 class="theme-search-results-item-title theme-search-results-item-title-lg">'.$r->name.'</h5>
                              <p class="theme-search-results-item-location">
                                <b>'. ucfirst($r->rating).' Star Hotel</b>
                              </p>
                              <p class="theme-search-results-item-location">
                                <b>'. ucfirst($r->review_rating).' / 5</b>
                              </p>
                              <p class="theme-search-results-item-location">
                                <i class="fa fa-map-marker"></i>'. ucfirst($r->city) .", ". ucfirst($r->state).'
                              </p>
                              <p class="theme-search-results-item-location">
                              <i class="fa fa-map"></i> Near by '. ucfirst($r->landmark).'
                              </p>
                              <p class="theme-search-results-item-hotel-book-count" style="color: #ff6c2d;">
                                <i class="fa fa-street-view"></i> <b> '. ucfirst($r->visited).' </b>times visited
                              </p>
                              
                            </div>
                            <div class="col-md-2 ">
                              <div class="theme-search-results-item-book">
                                <div class="theme-search-results-item-price">
                                  <p class="theme-search-results-item-price-tag">₹'.$a[0][0].'</p>
                                  <p class="theme-search-results-item-price-sign">per night</p>
                                </div>
                                <a class="btn btn-primary-inverse btn-block theme-search-results-item-price-btn" href='.base_url().'Hotel/Hoteldetails/'.$r->id.'>Book Now</a>
                              </div>
                            </div>
                          </div>
                        </div>
      
                        
                      </div>
                      '; 
                                // checkin=2020-11-23&checkout=2020-11-24&adult=3
                    }  
                }
                echo $output;
            } else{
                echo '<h3 style="text-align:center">Not Found...</h3>';
            }
           
        }   
        
        
    }




    public function Hoteldetails($no)
    {

        // print_r($this->session->userdata('search_details')[0]);
        $checkin = $this->session->userdata('search_details')['checkin'];   
        $checkout= $this->session->userdata('search_details')['checkout'];

        $type= $this->session->userdata('search_details')['type'];


        $data['guest'] = $this->session->userdata('search_details')['guest'];

        $data['days'] = $this->dateDiffInDays($checkin,$checkout);

        $data['details'] = $this->Hotel_m->hotel_deteails($no,$type);

        // $data['Title']="HotelDetails";

        if($type == 'weekend') {

          $this->load->view('common/new_header',$data);
          $this->load->view('weekend_details',$data);
          $this->load->view('common/new_footer',$data);

        }elseif($type == 'sightseeing'){
          $this->load->view('common/new_header',$data);
          $this->load->view('sightseeing_details',$data);
          $this->load->view('common/new_footer',$data);
        }else{
          $this->load->view('common/new_header',$data);
          $this->load->view('new_details',$data);
          $this->load->view('common/new_footer',$data);
        
        }




        
    }




    // find the number of days 

    function dateDiffInDays($checkin, $checkout)  
    { 
        
        $days = (strtotime($checkout) - strtotime($checkin)) / (60 * 60 * 24);
                return $days;
 

    } 


    

    //hotel booking ajax
    function Hotelbooking(){
        
        if(isset($_POST['action']))
        {
            $this->session->set_userdata('bookingdetails', $_POST['final_details']);
            $this->session->set_userdata('hotelid', $_POST['hid']);
            $this->session->set_userdata('days', $_POST['day']);
            $this->session->set_userdata('email_address',$_POST['email']);
            echo 1;
        }

    }



    // booking sent
    function Booking_sent(){

        $final_price=0;

        //get user data
        $user_id = $this->session->userdata('userdata')['u_id'];
        $user_data = $this->Hotel_m->get_user($user_id);

        $data['u_fname'] = $user_data->u_fname;
        $data['u_lname'] = $user_data->u_lname;
        $data['u_mobile'] = $user_data->u_mobile;
        $data['u_email'] = $user_data->u_email;
        $data['u_credits'] = $user_data->u_credits;

        

        // get booking details
        $b=$this->session->userdata('bookingdetails');
        // echo "<pre>";
        // print_r($b);

        // get hotel details using id
        $hid=$this->session->userdata('hotelid');

        $hname =$this->session->userdata('h_name');

        $type= $this->session->userdata('search_details')['type'];
        $hotel_row=$this->Hotel_m->hotel_deteails($hid,$type);

        
        for($i=0;$i<count($b);$i++)
        {
            $room_type[] = $b[$i]['room_type'];
            $total_room[]=$b[$i]['t_room'];
            $total_guest[]=$b[$i]['t_guest'];
            $total_price[]=$b[$i]['t_total'];
            $breakfast_status[] = $b[$i]['t_breakfast_status'];
            $breakfast_price[] = $b[$i]['t_breakfast_price'];
            $breakdinner_status[] = $b[$i]['t_breakdinner_status'];
            $breakdinner_price[] = $b[$i]['t_breakdinner_price'];

            $final_price=$final_price + $b[$i]['t_total'];
        }


        // get number of  day
        $checkin = $this->session->userdata('search_details')['checkin'];   
        $checkout= $this->session->userdata('search_details')['checkout'];
        $get_days=$this->dateDiffInDays($checkin,$checkout);

        if($this->session->userdata('userdata')['authenticated'])
        {
          if($this->session->userdata('userdata')['u_bod'])
          {
            if($get_days >= 3) {
                
                $current_date = date("m-d");
                
                
                $bod_date_d = strtotime($this->session->userdata('userdata')['u_bod']);
                $user_bod = date('m-d', $bod_date_d);
                
                if($current_date == $user_bod)
                {
                  
                  
                  echo $birthday_coupon_price = $b[0]['free_birthday_pernight'];
                  $final_price = $final_price;
                  $this->session->set_userdata("bod_coupon_applied",TRUE);

                }else{

                  echo "not";

                }
              
              // echo $this->session->userdata('userdata')['u_bod'];
              
            }else{
              // echo "Sdfsdf";
            }
          }
          
        }

        // create booking id 
        // $bookingid = "RMT".date('dmY').rand(1000,9999);

        $get15 = $this->getPercentOfNumber($final_price,15);

        $array = array(

            "hotel_id" => $hotel_row->id,
            "hotel_name"=> $hotel_row->name,
            "user_id" => $this->session->userdata('userdata')['u_id'],
            "room_type"=> json_encode($room_type),
            "total_room"=> json_encode($total_room),
            "total_guest"=> json_encode($total_guest),
            "total_price"=> json_encode($total_price),
            "breakfast_status"=> json_encode($breakfast_status),
            "breakfast_price"=> json_encode($breakfast_price),
            "breakdinner_status"=> json_encode($breakdinner_status),
            "breakdinner_price"=> json_encode($breakdinner_price),
            "total_days"=> $get_days,
            "final_price"=> $final_price,
            "birthday_coupon_price" => $birthday_coupon_price,
            "15per"=> round($get15,2),
            "status" => 0,
            "checkin_date"=> $this->session->userdata('search_details')['checkin'],
            "checkout_date"=> $this->session->userdata('search_details')['checkout'],
            "addedDate"=> date('Y-m-d h:i:s')

        );

      

        $data['booking_d']=$array;

        //voucher
        $voucher=$this->Hotel_m->view_voucher();
        $data['voucher'] = $voucher;
        
        $data['Title'] = 'Booking Details';
        

        $this->load->view('common/new_header',$data);
        $this->load->view('new_booking_details',$data);
		    $this->load->view('common/new_footer',$data);



        $this->session->unset_userdata('bookinglogin_check');



    }




    function payment()
    {
        print_r($_POST);
        // echo "<pre>";
        $get_user_id=$this->session->userdata('get_bookingdata');

        $a=$this->Hotel_m->get_user( $get_user_id['user_id']);

        $data['u_mobile']=$a->u_mobile;
        $data['u_email']=$a->u_email;
        $data['u_fullname']=$a->u_lname." ". $a->u_fname;

        // print_r($data);
        $this->load->view('payment',$data);

    }




    function payment_new()
    {

        $get_user_id = $this->session->userdata('get_bookingdata');

        $a=$this->Hotel_m->get_user($get_user_id['user_id']);

        $data['u_mobile']=$a->u_mobile;
        $data['u_email']=$a->u_email;
        $data['u_fullname']=$a->u_lname." ". $a->u_fname;
        // echo "<pre>";
        
        // print_r($data);
        $this->load->view('paymentnew',$data);


    }

    function paymentsucnew()
    {

        $data=$this->session->userdata('rp_payment_details');
        // echo "<pre>";
        // print_r($data);
        // exit;
        $get_data=$this->session->userdata('get_bookingdata');

        $type = $this->session->userdata('search_details')['type'];

        $d = 0;

        $use_credits=0;
        $new_credits = 0;

        if($data['payment_status'] == 'f')
        {

            $d = 0 ;

            //credits
            $use_credits=$data['existing_credits'];

            $new_credits = round($data['pay_with_gst_coupon'],0);

            // and update create in user account
            $user_id_get = $this->session->userdata('userdata')['u_id'];
            $this->Hotel_m->update_credits($user_id_get, $new_credits);

        }else {

           $d= $data['final'] - $data['pay_without_gst_coupon'] ;

           $use_credits=0;
           $new_credits = 0;

        }

        //birthday check
        $birthday_price=0;
        if($data['birthday_coupon_price'] == Null)
        {

          $birthday_price = 0;

        }else{
          $birthday_price = $data['birthday_coupon_price'];
        }

        $temporary_code  = 'RTMT'.date('dmY').time();
        $array = array(

            "booking_id"    => $data['booking_id'],
            "temporary_id"  => $temporary_code,
            "hotel_id"      => $get_data['hotel_id'],
            "name"          => $get_data['hotel_name'],
            "type"          => $type,
            "user_id"       => $get_data['user_id'],
            "room_type"     =>  "[".$get_data['room_type']."]",
            "total_room"    => "[".$get_data['total_room']."]",
            "total_guest"   => "[".$get_data['total_guest']."]",
            "total_price"   => "[".$get_data['total_price']."]",
            "breakfast_status" => "[".$get_data['breakfast_status']."]",
            "breakfast_price" => "[".$get_data['breakfast_price']."]",
            "breakfastdinner_status" => "[".$get_data['breakdinner_status']."]",
            "breakfastdinner_price" => "[".$get_data['breakdinner_price']."]",

            "pay_without_gst_coupon"  => $data['pay_without_gst_coupon'],
            "status"        => 0,
            "user_cancel_booking" => 1,
            "checkin_date"  =>  $get_data['checkin_date'],
            "checkout_date" =>  $get_data['checkout_date'],
            "coupon_id"     => $data['coupon_id'],
            "birthday_coupon" => $data['birthday'],
            "birthday_coupon_price" => $birthday_price,
            "gst"              => $data['gst'],
            "pay_with_gst_coupon"  => $data['pay_with_gst_coupon'],
            "remaining_amt" => $d,
            "payment_status"=> $data['payment_status'],
            "razorpay_payment_id" => $_POST['razorpay_payment_id'],
            "razorpay_order_id"   => $_POST['razorpay_order_id'],
            "razorpay_signature"  => $_POST['razorpay_signature'],
            "user_credit"  => $use_credits,
            "addedDate"=> date('Y-m-d h:i:s')


        );
        // echo "<pre>";
        // print_r($array);

        $data['booking_details_show']=$array;
        $status=$this->Hotel_m->hotel_booking($array);
        if($status) { 

            // message sent
            $status1=$this->sent_confirmation($data['booking_id'], $this->session->userdata('email_address'), $temporary_code);

            if($status1){
                // echo "You'r get confirmation in 1 hour..! <a href=".base_url()."Home>Goto Home</a>";
                
                // $this->load->view('common/new_header');
                // $this->load->view('payment_booking_succ',$data);
                // $this->load->view('common/new_footer');

                $this->session->set_userdata('fist_payment_receipt',$data);
                redirect('hotel/booking_receipt');

                
            }

        }else{
            echo "not";
        }
    }


    function paymentsuc()
    {
        echo "<pre>";
        print_r($_POST)."<br>";

        $data=$this->session->userdata('rp_payment_details');
        print_r($data);
        $get_data=$this->session->userdata('get_bookingdata');
        print_r($get_data);



        $array = array(

            "booking_id"    => $data['booking_id'],
            "hotel_id"      => $get_data['hotel_id'],
            "user_id"       => $get_data['user_id'],
            "room_type"     => $get_data['room_type'],
            "total_room"    => $get_data['total_room'],
            "total_guest"   => $get_data['total_guest'],
            "total_price"   => $get_data['total_price'],
            "final_price"   => $get_data['final_price'],
            "status"        => 0,
            "checkin_date"  =>  $get_data['checkin_date'],
            "checkout_date" =>  $get_data['checkout_date'],
            "paid_amt"      => $data['pay_amt'],
            "remaining_amt" => $get_data['final_price'] - $data['pay_amt'],
            "payment_status"=> $data['payment_status'],
            "razorpay_payment_id" => $_POST['razorpay_payment_id'],
            "razorpay_order_id"   => $_POST['razorpay_order_id'],
            "razorpay_signature"  => $_POST['razorpay_signature'],
            "addedDate"=> date('Y-m-d h:i:s')

        );
        // exit;
        $status=$this->Hotel_m->hotel_booking($array);
        if($status) { 

            // message sent
            $status1=$this->sent_confirmation($data['booking_id'], "ajkhairnar111198920@gmail.com");

            if($status1){
                echo "You'r get confirmation in 1 hour..! <a href=".base_url()."Home>Goto Home</a>";
            }

        }else{
            echo "not";
        }



    }


    function getPercentOfNumber($price, $percent){
        // return ($percent / 100) * $price;

        return $price/100 * $percent;
    }

    
function booking_receipt()
{
  $data['booking_details_show']=$this->session->userdata('fist_payment_receipt');

  $this->load->view('common/new_header');
  $this->load->view('payment_booking_succ',$data);
  $this->load->view('common/new_footer');
  
}


function hotel_sideconf_booked()
{

  $data['confirm'] = 'Booking has been confirmed !';
  $this->load->view('hotel_sideconf_booked',$data);

}

function hotel_sideconf_cancelled()
{
  $data['confirm'] = 'Booking has been Cancelled !';
  $this->load->view('hotel_sideconf_booked',$data);
}





    





}