<?php

require_once 'configDB.php';
echo '<pre>'; print_r($_POST);


echo "Payment ID".$_POST['razorpay_payment_id']."<br>";
echo "Order ID".$_POST['razorpay_order_id']."<br>";
echo "Siganture".$_POST['razorpay_signature'];
?>