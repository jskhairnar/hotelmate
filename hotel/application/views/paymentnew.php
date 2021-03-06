<?php

// require_once 'configDB.php';
require_once 'razorpay/razorpay-php/Razorpay.php';

use Razorpay\Api\Api;

/*
Key ID : rzp_test_rE3IOee1FdD1lN
Secret Key : SjhuOJjTmcXC0rhRAOfvRhVA


Live Key
Key ID : rzp_live_6Q0hFwn7CvrYsv
Secret Key : gfCAEjNyc1I2X1XetW8MCPgk

*/

 $keyId = "rzp_test_1AvXoDXWyTuQmw";
 $secretKey = '';
 $api = new Api($keyId,$secretKey);
 



 //payment status h or f
 $pay_s = explode("-",$_POST['pay_without_gst_coupon']) ;

 //payment status
 $payment_status=$pay_s[0];
 $pay_without_gst_coupon=trim($pay_s[1]);


//  total payable payment
 $PAY_AMT =$_POST['pay_with_gst_coupon'] * 100;

 

 $oid = 'RMT'.date('dmY').rand(1000,9999);
 

//  Array ( [birthday] => 0 [pay_without_gst_coupon] => h-693 [coupon_id] => 0 [gst] => 123 [pay_with_gst_coupon] => 816 )

// [birthday] => 0 [pay_without_gst_coupon] => h-693 [coupon_id] => 14 [gst] => 123 [pay_with_gst_coupon] => 747
 

 $order = $api->order->create(array(
	'receipt' => $oid,
	'amount' => $PAY_AMT,
	'payment_capture' => 1,
	'currency' => 'INR',
	)
    );
    
 


$array=array(
    'payment_status' =>  $payment_status,
    'pay_without_gst_coupon' => $pay_without_gst_coupon,
    'booking_id' =>  $oid,
    'pay_with_gst_coupon' => $_POST['pay_with_gst_coupon'],
    'birthday' => $_POST['birthday'],
    'birthday_coupon_price' => $_POST['birthday_coupon_nightprice'],
    'coupon_id' => $_POST['coupon_id'],
    'gst' => $_POST['gst'],
    'final' => $_POST['final_price'],
    'existing_credits' => $_POST['credit_points']
);

$this->session->set_userdata('rp_payment_details',$array);

print_r($this->session->userdata('rp_payment_details'));




    

?>



<form action="<?=base_url().'Hotel/paymentsucnew'?>" method="POST">

<script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $keyId; ?>" // Enter the Test API Key ID generated from Dashboard → Settings → API Keys
    data-amount="<?php echo $order->amount ?>" // Amount is in currency subunits. Hence, 29935 refers to 29935 paise or ₹299.35.
    data-currency="INR"//You can accept international payments by changing the currency code. Contact our Support Team to enable International for your account
    data-order_id="<?php echo $order->id ?>"//Replace with the order_id generated by you in the backend.
	data-orderid = "<?php echo $oid; ?>"
    data-buttontext="Pay with Razorpay"
    data-name="Hotelmate"
    data-description="Hotel Booking"
    data-image="https://traidev.com/img/web-desgin-development.png"
    data-prefill.name="<?php echo $u_fullname?>"
    data-prefill.email="<?php echo $u_email?>"
    data-prefill.contact="<?php echo $u_mobile;?>"
    data-theme.color="#F37254"
>
</script>

</form>