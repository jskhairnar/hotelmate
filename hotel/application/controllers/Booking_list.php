<?php

date_default_timezone_set("Asia/Kolkata");   //India time (GMT+5:30)
error_reporting(0);

defined('BASEPATH') OR exit('No direct script access allowed');

class Booking_list extends MY_Controller {

    public function __construct() {

        parent::__construct();

        if(!$this->session->userdata('userdata'))
	    {
	    	redirect('Login');
        }

        $this->load->model('Booklist_m');
   
     }


     public function index()
     {

        $new_array= array();
        // if($this->session->userdata('userdata')['authenticated'] )
        $user_id = $this->session->userdata('userdata')['u_id'];

        // echo "<pre>";

        $booking_list = $this->Booklist_m->book_list($user_id);
        // print_r($data);

        foreach ($booking_list as $book) {

            $hotel_id = $book['hotel_id'];
            $type = $book['type'];

            //get hotel,resort,siteseent,camp
            $result = $this->Booklist_m->get_hotel($hotel_id,$type);

            $a = array(
                'booking_tbl_id' => $book['id'],
                'booking_id' => $book['booking_id'],
                'type' => $book['type'],
                'status'=>$book['status'],
                'payment_status'=>$book['payment_status'],
                'remaining_amt'=>$book['remaining_amt'],
                
                'room_type'=>$book['room_type'],
                'total_room'=>$book['total_room'],
                'total_guest'=>$book['total_guest'],
                'breakfast' => $book['breakfast_status'],
                'breakfastdinner'=>$book['breakfastdinner_status'],
                'checkin_date'=>$book['checkin_date'],
                'checkout_date'=>$book['checkout_date'],
                'name' => $result->name,
                'address' => $result->address
            );


            array_push($new_array,$a);
        }

        // print_r($new_array);
           
        $data['booking_list'] = $new_array;

    
        $this->load->view('common/new_header');
        $this->load->view('p_booking_list',$data);
		$this->load->view('common/new_footer');
     }


     //cancel booking
     public function cancel_booking()
     {
         $booking_id = $_POST['booking_id'];
         $reason =  $_POST['reason'];

        
        $cancel = $this->Booklist_m->cancel_booking($booking_id,$reason);

        if($cancel){
            redirect('booking_list');
        }else{
            echo "jayesh";
        }


     }


     //payment
     //payment
     public function remaining_payment($booking_id=0)
     {
         if($booking_id !=0 && $booking_id !='')
         {
            $this->session->set_userdata('b_id',$booking_id);

            redirect('booking_list/remaining_payment_pay');

         }else{
            redirect('booking_list');
         }
       
     }


     public function remaining_payment_pay()
     {
        $bid=$this->session->userdata('b_id');

        $result = $this->Booklist_m->get_book_row($bid);
        $data['booking_details'] = $result;
    
        $this->load->view('common/new_header');
        $this->load->view('p_remaining_payment',$data);
        $this->load->view('common/new_footer');


     }


     public function payment_process()
     {
        //  print_r($_POST);

        
        $data['previews_payment'] = $_POST['previews_payment'];
        $data['pay_with_gst'] = $_POST['pay_with_gst'];
        $data['u_mobile']=$this->session->userdata('userdata')['u_mobile'];
        $data['u_email']=$this->session->userdata('userdata')['email'];
        $data['u_fullname']=$this->session->userdata('userdata')['u_fname']." ".$this->session->userdata('userdata')['u_lname'];
        $this->load->view('p_paymentnew',$data);
        // print_r($data);

     }


     public function p_paymentsucnew() {

         
         if($_POST)
         {
            // print_r($_POST);
            // print_r($this->session->userdata('p_rp_payment_details'));

            $data=$this->session->userdata('p_rp_payment_details');

            $update_booking = array(
                "payment_status" =>  $data['payment_status'],
                "pay_with_gst_coupon" =>  $data['previews_payment'] + $data['pay_with_gst'],
                "remaining_amt" => 0,
                "razorpay_payment_id" => $_POST["razorpay_payment_id"],
                "razorpay_order_id" => $_POST["razorpay_order_id"],
                "razorpay_signature" => $_POST["razorpay_signature"],
                "modifiedDate" => date('Y-m-d h:i:s')
            );

            
            $result = $this->Booklist_m->update_payment($update_booking,$data['bid']);

            if($result){

                $payment_receipt = array(
                    "Booking ID" => $data['booking_id'],
                    "Amount paid" => $data['pay_with_gst'],
                    "razorpay_payment_id" => $_POST["razorpay_payment_id"]
                );
                $this->session->set_userdata('payment_recipt',$payment_receipt);
                redirect('booking_list/payment_recipt');
            }
        }
    }


    public function payment_recipt()
    {
        if( $this->session->userdata('payment_recipt'))
        {
            $this->load->view('common/new_header');
            $this->load->view('p_payment_recipt');
            $this->load->view('common/new_footer');
        }
       
    }



    }

?>