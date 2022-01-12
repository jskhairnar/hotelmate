<!-- payment_booking_succ.php -->

<style>
    @media print {
  .theme-footer{
    display:none;
  }
  .theme-copyright{
      display:none;
  }
  .theme-payment-success-subtitle{
      display:none;
  }
  .theme-payment-success-check-order{
      display:none;
  }
  .btn {
      display:none;
  }
}

 @page {
    size: auto;  
    margin: 0;  
  }
</style>



<?php 

// print_r($this->session->userdata('bookingdd'));


// $payment_receipt=$this->session->userdata('fist_payment_receipt');

// echo "<pre>";
// print_r($payment_receipt);

?>
<div class="theme-page-section theme-page-section-xl theme-page-section-gray">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-md-offset-4">
            <div class="theme-payment-success">
              <div class="theme-payment-success-header">
                <i class="fa fa-check-circle theme-payment-success-header-icon"></i>
                <h1 class="theme-payment-success-title">Payment Successfully</h1>
                <p class="theme-payment-success-subtitle">You'r get confirmation in 1 hour..! <a href="<?= base_url()?>Home">Goto Home</a></p>
              </div>
              <div class="theme-payment-success-box">
                <ul class="theme-payment-success-summary">
                  <li>Booking ID
                    <span><?= $booking_details_show['booking_id'] ?></span>
                  </li>
                  <li>Date
                    <span><?=  $booking_details_show['booking_details_show']['checkin_date']  ?></span>
                  </li>
                  <li>Payment status
                    <span><?php
                    
                    if($booking_details_show['payment_status'] == 'h') {
                        echo "Token Payment";
                     }else{
                        echo "Full Payment";
                     }  ?> </span>
                  </li>
                  <li>Payment Id
                    <span><?= $booking_details_show['booking_details_show']['razorpay_payment_id'] ?></span>
                  </li>
                 
                  <li>Amount paid  
                    <span>Rs. <?= $booking_details_show['pay_with_gst_coupon'] ?></span>
                  </li>
                 <?php    if($booking_details_show['payment_status'] == 'h') { ?>
                  <li>Remaining Amout  
                    <span>Rs. <?= $booking_details_show['booking_details_show']['remaining_amt'] ?></span>
                  </li>

                 <?php } ?>
                </ul>
                <p class="theme-payment-success-check-order">You can check your order details in your account
                  <a href="<?=base_url()?>booking_list">Go</a>.
                </p>
               
                <button  class="btn _tt-uc btn-primary-inverse btn-md btn-block _mt-20" onclick="print1()" >Print</button>
                
              </div>
              <ul class="theme-payment-success-actions">
                
              </ul>
              <ul class="theme-payment-success-actions">
                
              </ul>
              <ul class="theme-payment-success-actions">
                
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <script>
        function print1(){
           
            window.print()
        }
    </script>