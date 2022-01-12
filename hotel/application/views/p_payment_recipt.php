<!-- payment_booking_succ.php -->

<div class="theme-page-section theme-page-section-xl theme-page-section-gray">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-md-offset-4">
            <div class="theme-payment-success">
              <div class="theme-payment-success-header">
                <i class="fa fa-check-circle theme-payment-success-header-icon"></i>
                <h1 class="theme-payment-success-title">Payment Successful</h1>
                <p class="theme-payment-success-subtitle">You can check your order details in your account
                  <a href="<?=base_url()?>booking_list">Go</a>.
                </p>
              </div>
              <div class="theme-payment-success-box"> 
                <ul class="theme-payment-success-summary">
                  <li>Booking ID
                    <span><?=$this->session->userdata('payment_recipt')['Booking ID']?></span>
                  </li>
                  <li>Payment Id 
                    <span><?=$this->session->userdata('payment_recipt')['razorpay_payment_id']?></span>
                  </li>
                 
                  <li>Amount paid  
                    <span>Rs.<?=$this->session->userdata('payment_recipt')['Amount paid']?></span>
                  </li>
                 
                </ul>
                <!-- <p class="theme-payment-success-check-order">You can check your order details in your
                  <a href="account-history.html">account page</a>.
                </p> -->
              </div>
              <ul class="theme-payment-success-actions">
                
              </ul>
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