<?php

error_reporting(0);
date_default_timezone_set("Asia/Kolkata");   //India time (GMT+5:30)
defined('BASEPATH') OR exit('No direct script access allowed');



class Search extends CI_Controller {



    //constructor
    public function __construct(){

        parent::__construct();

        $this->load->model('Hotel_m');


     }


    
    

    // get search list - all type
	public function index()
	{
        $data['Title']="Hotel";
        $data['city']=$_REQUEST['city'];

        
        // check the url parameter city and type value blank then redirect home
        if($_REQUEST['city']=='' && $_REQUEST['type']==''){
            redirect('Home');
        }
        

        // search details
        $serch_details = array($_REQUEST['checkin'],$_REQUEST['checkout'],$_REQUEST['guest']);

        
        $this->session->set_userdata('search_details',$serch_details);

        $this->session->set_userdata('city', $_REQUEST['city']);
        $this->session->set_userdata('type', $_REQUEST['type']);

        $this->load->view('common/header',$data);
        $this->load->view('hotel_list',$data);
		$this->load->view('common/footer',$data);
    }
    

    
    public function get_hotel_list()
    {

        if(isset($_POST["action"])) {

            //$query = $this->db->get('hotel');
           
            // $city = implode("','",$_POST['city']);
            // echo "<script>alert('".."')</script>";
            // exit;

            $city=$this->session->userdata('city');
            $type=$this->session->userdata('type');

            // check type and pass table name
            $table_name="";
            if ($type == "hotel") {
                $table_name = "tbl_markers";
            } elseif($type == "resort") {
                $table_name = 'tbl_resort';
            } elseif($type == "camp") {
                $table_name="tbl_camp";
            }else{
                $table_name="tbl_weekend";
            }
    


            $query = "SELECT * FROM $table_name WHERE status = '1' AND city IN('".$city."') ";

            $data = $this->Hotel_m->hotel_list_m($query);

            

            if(isset($_POST["rating"]))
            {
                $rating_filter = implode("','", $_POST["rating"]);

                // echo "<script>alert('".$ram_filter."')</script>";
                // $query.= ->where('h_rating',$_POST["rating"]);
                
                // $this->db->select('*');
                // $this->db->where('h_rating',$rating_filter);
                // $query = $this->db->get('hotel');

                // $query .= "AND rating IN('".$rating_filter."')";

                $query = "SELECT * FROM $table_name WHERE status = '1' AND city IN('".$city."') AND rating IN('".$rating_filter."')";
                $data = $this->Hotel_m->hotel_list_m($query);


                
            }

            if(isset($_POST["price"]))
            {
                $price_filter = implode("','", $_POST["price"]);

                $str_arr = explode ("-", $price_filter);  
                $min = $str_arr[0];
                $max = $str_arr[1];
                // echo "<script>alert('min : ". $min ."-- max:".$max."' )</script>";

                // $query=$this->db->query("SELECT * FROM hotel WHERE h_charges BETWEEN '$min' AND '$max'");
                //  exit;

                $query = "SELECT * FROM $table_name WHERE status = '1' AND city IN('".$city."') ";


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
                    echo "<script>alert('sdfsd')</script>";
                    foreach($data as $r){
                        $a=json_decode($r->room_price);
                      
                        $output .='<div class="hot-page2-alp-r-list">
                                    <div class="col-md-3 hot-page2-alp-r-list-re-sp">
                                        <a href="javascript:void(0);">
                                            <div class="hotel-list-score">'.$r->rating.'</div>
                                            <div class="hot-page2-hli-1"> <img src="'.images.'/hotels/l1.jpg" alt=""></div>
                                            <div class="hom-hot-av-tic hom-hot-av-tic-list"> Available Rooms: 42 </div>
                                        </a>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="hot-page2-alp-ri-p2"> <a href="hotel-details.html"><h3>'.$r->hotel_name.'</h3></a>
                                            <ul>
                                                <li>'.$r->address.'</li>
                                                <li>'.$r->contact.'</li>
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




    public function Hoteldetails($no)
    {

        

        // print_r($this->session->userdata('search_details')[0]);
        $checkin = $this->session->userdata('search_details')[0];   
        $checkout= $this->session->userdata('search_details')[1];

        $data['guest']= $this->session->userdata('search_details')[2];


        $data['days']=$this->dateDiffInDays($checkin,$checkout);

        $data['details'] = $this->Hotel_m->hotel_deteails($no);
        $data['Title']="HotelDetails";

        // print_r( $data['details'] );
        $this->load->view('common/header',$data);
        $this->load->view('Hoteldetails',$data);
		$this->load->view('common/footer',$data);
    }


    // find the number of days 

    function dateDiffInDays($checkin, $checkout)  
    { 
        // Calculating the difference in timestamps 
        $diff = strtotime($checkout) - strtotime($checkin); 
        
        // 1 day = 24 hours 
        // 24 * 60 * 60 = 86400 seconds 
        return abs(round($diff / 86400)); 
    } 


    

    //hotel booking ajax
    function Hotelbooking(){
        
        if(isset($_POST['action']))
        {
            $this->session->set_userdata('bookingdetails', $_POST['final_details']);
            $this->session->set_userdata('hotelid', $_POST['hid']);
            $this->session->set_userdata('days', $_POST['day']);
            
            echo 1;
        }

    }



    // booking sent
    function Booking_sent(){
       
        $final_price=0;

        // check aleready login then booking either redirect to login page
        if(!$this->session->userdata('userdata'))
		{
            $this->session->set_userdata('bookinglogin_check',1);
			return redirect('Login');
        }
        
        // get booking details
        $b=$this->session->userdata('bookingdetails');
        // echo "<pre>";
        // print_r($b);


        // get hotel details using id
        $hid=$this->session->userdata('hotelid');
        $hotel_row=$this->Hotel_m->hotel_deteails($hid);

        // get number of  day
        $checkin = $this->session->userdata('search_details')[0];   
        $checkout= $this->session->userdata('search_details')[1];

        $get_days=$this->dateDiffInDays($checkin,$checkout);



         
        for($i=0;$i<count($b);$i++)
        {
            $room_type[] = $b[$i]['room_type'];
            $total_room[]=$b[$i]['t_room'];
            $total_guest[]=$b[$i]['t_guest'];
            $total_price[]=$b[$i]['t_total'];
            $final_price=$final_price + $b[$i]['t_total'];
        }


        

        // create booking id 
        $bookingid = "RMT".date('dmY').rand(1000,9999);

        $get15 = $this->getPercentOfNumber($final_price,15);

        $array = array(
            "hotel_id" => $hotel_row->id,
            "hotel_name"=> $hotel_row->hotel_name,
            "user_id" => $this->session->userdata('userdata')['u_id'],
            "room_type"=> json_encode($room_type),
            "total_room"=> json_encode($total_room),
            "total_guest"=> json_encode($total_guest),
            "total_price"=> json_encode($total_price),
            "total_days"=> $get_days,
            "final_price"=> $final_price,
            "15per"=> round($get15),
            "status" => 0,
            "checkin_date"=> $this->session->userdata('search_details')[0],
            "checkout_date"=> $this->session->userdata('search_details')[1],
            "addedDate"=> date('Y-m-d h:i:s')
        );


        // pass the book details page

        // $data['booking_id']     = $bookingid;
        // $data['hotel_name']     = $hotel_row->hotel_name;
        // $data['total_days']     = $get_days;
        // $data['room_type']     = json_encode($room_type);

        // $data['total_room']     = json_encode($total_room);
        // $data['total_guest']     = json_encode($total_guest);
     
        // $data['checkin']        = $this->session->userdata('search_details')[0];
        // $data['checkout']        = $this->session->userdata('search_details')[1];


        $data['booking_d']=$array;

        
        // $u = $this->Hotel_m->get_user($this->session->userdata('userdata')['u_id']);
       
        $voucher=$this->Hotel_m->view_voucher();

        $data['voucher'] = $voucher;
        
        $data['Title'] = 'Booking Details';
        
        $this->load->view('common/header',$data);
        $this->load->view('booking_details',$data);
		$this->load->view('common/footer',$data);





        // insert data in table
        // $status=$this->Hotel_m->hotel_booking($array);

        // if($status){

        //     // message sent
        //     $status=$this->sent_confirmation($bookingid, "ajkhairnar111198920@gmail.com");

        //     if($status){
        //         echo "sent";
        //     }

        // }else{
        //     echo "not";
        // }

        // echo json_encode($room_type)."<br>";
        // echo json_encode($total_room)."<br>";
        // echo json_encode($total_guest)."<br>";
        // echo json_encode($total_price)."<br>";

        // echo  $final_price."<br>";

        // echo "Hotel id : ".$this->session->userdata('hotelid')."<br>";
        // echo  $checkin = $this->session->userdata('search_details')[0];   
        // echo  $checkout= $this->session->userdata('search_details')[1];
        // echo  $guest= $this->session->userdata('search_details')[2]."<br>";

        // print_r($this->session->userdata('userdata')['u_id']);

            // echo "<pre>";
            // print_r($array);

        $this->session->unset_userdata('bookinglogin_check');



        // $status=$this->sent_confirmation(123,"ajkhairnar111198920@gmail.com");

        // if($status)
        // {
            
        // }else{
        //     echo "error";
        // }

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
        

        $get_user_id=$this->session->userdata('get_bookingdata');

        $a=$this->Hotel_m->get_user( $get_user_id['user_id']);


        $data['u_mobile']=$a->u_mobile;
        $data['u_email']=$a->u_email;
        $data['u_fullname']=$a->u_lname." ". $a->u_fname;
        echo "<pre>";
        print_r($_POST);
        print_r($data);
        $this->load->view('paymentnew',$data);


    }

    function paymentsucnew()
    {

        $data=$this->session->userdata('rp_payment_details');
        // echo "<pre>";
        // print_r($data);
        // exit;
        $get_data=$this->session->userdata('get_bookingdata');

        $type = $this->session->userdata('type');

        $d = 0;

        if($data['payment_status'] == 'f')
        {
            $d = 0 ;
        }else {
         
           
           $d= $data['final'] - $data['pay_without_gst_coupon'] ;
           
        }


        // echo "<pre>";
        // print_r($data);
        // print_r($get_data);


        

        $array = array(

            "booking_id"    => $data['booking_id'],
            "hotel_id"      => $get_data['hotel_id'],
            "type"          => $type,
            "user_id"       => $get_data['user_id'],
            "room_type"     =>  "[".$get_data['room_type']."]",

            // "total_room"    => foreach ($get_data['total_room'] as $a) { 
            //     $pdata[] = filter_var($a,FILTER_SANITIZE_STRING)
            //  },

            //  $pData[] = $pdata;
            //     return$data['room'] = json_encode($pData);

            "total_room"    => "[".$get_data['total_room']."]",
            "total_guest"   => "[".$get_data['total_guest']."]",
            "total_price"   => "[".$get_data['total_price']."]",
            "pay_without_gst_coupon"  => $data['pay_without_gst_coupon'],
            "status"        => 0,
            "checkin_date"  =>  $get_data['checkin_date'],
            "checkout_date" =>  $get_data['checkout_date'],
            "coupon_id"     => $data['coupon_id'],
            "birthday_coupon" => $data['birthday'],
            "gst"              => $data['gst'],
            "pay_with_gst_coupon"  => $data['pay_with_gst_coupon'],
            "remaining_amt" => $d,
            "payment_status"=> $data['payment_status'],
            "razorpay_payment_id" => $_POST['razorpay_payment_id'],
            "razorpay_order_id"   => $_POST['razorpay_order_id'],
            "razorpay_signature"  => $_POST['razorpay_signature'],
            "addedDate"=> date('Y-m-d h:i:s')


        );
        // echo "<pre>";
        // print_r($array);

     
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
        exit;
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


    //email sent
	 function sent_confirmation($bookingid,$email)
	{
		require 'class/class.phpmailer.php';
		$mail = new PHPMailer;
		$mail->IsSMTP();								//Sets Mailer to send message using SMTP
		$mail->Host = 'smtp.gmail.com';		            //Sets the SMTP hosts of your Email hosting, this for Godaddy
		$mail->Port = '465';							//Sets the default SMTP server port
		$mail->SMTPAuth = true;							//Sets SMTP authentication. Utilizes the Username and Password variables
		$mail->Username = 'gmore2151@gmail.com';		//Sets SMTP username
		$mail->Password = 'Jayesh@@1008';				//Sets SMTP password
		$mail->SMTPSecure = 'ssl';						//Sets connection prefix. Options are "", "ssl" or "tls"
		$mail->From = $email;					        //Sets the From email address for the message
		
		$mail->AddAddress('gmore2151@gmail.com', 'jayesh khairnar');		//Adds a "To" address
		$mail->AddCC($email);	//Adds a "Cc" address
		$mail->WordWrap = 50;							//Sets word wrapping on the body of the message to a given number of characters
		$mail->IsHTML(true);							//Sets message type to HTML				
		$mail->Subject = "Confirmation Code";			//Sets the Subject of the message
		$mail->Body = "<h1>Your Confirmation Code Is : </h1><br>
        <a href='http://localhost/hotelmate/Hotel/booking_confirmation?key=hotelmate@$31&bid=".$bookingid."&status=1'>Accept</a> <a href='http://localhost/hotel/Hotel/booking_confirmation?key=hotelmate@$31&bid=".$bookingid."&status=2'>Decline</a> ";				//An HTML or plain text message body
		if(!$mail->Send())								//Send an Email. Return true on success or 
		{
			// echo  "Message could not be sent";
            return false;
        //    echo  $mail->ErrorInfo;
		}
		else
		{ 
			// echo "message sent";
			return true;
		}	
    }
    


    function booking_confirmation(){
        
        if(isset($_REQUEST['key'])){

            if($_REQUEST['key'] == 'hotelmate@$31'){

               $status=$this->Hotel_m->confirm_hotel_booking($_REQUEST['bid'],$_REQUEST['status']);

               if($status){
                   echo "success !";
               }

            }else{
                echo "error";
            }
           
        }
        // else{
        //     echo "fail";
        // }
    }



    





}