<style>
h5 span{
  font-weight: 500;
}

.badge {
    display: inline-block;
    padding: .35em .65em;
    font-size: .75em;
    font-weight: 700;
    line-height: 1;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: .25rem;
}
.bg-success {
    background-color: #00b74a!important;
}
.bg-danger {
    background-color: #f93154!important;
}
.bg-primary {
    background-color: #1266f1!important;
}
.bg-secondary {
    background-color: #b23cfd!important;
}
</style>

<?php 



?>
<div class="theme-page-section theme-page-section-lg">
      <div class="container">
        <div class="row row-col-static row-col-mob-gap" id="sticky-parent" data-gutter="60">
        <div class="col-md-3 ">
            <div class="sticky-col">
              
              <div class="theme-sidebar-section _mb-10">
              <div class="theme-account-sidebar">
              <div class="theme-account-avatar">
                <img class="theme-account-avatar-img" src="<?=new_ass?>img/amaze_70x70.jpg" alt="Image Alternative text" title="Image Title">
                <p class="theme-account-avatar-name">Welcome,
                <br><?=$this->session->userdata('userdata')['u_fname']?>
                </p>
              </div>
              <nav class="theme-account-nav">
                <ul class="theme-account-nav-list">
                 
                  <li>
                    <a href="<?=base_url()?>Profile">
                      <i class="fa fa-user-circle-o"></i>Profile
                    </a>
                  </li>
                  <li>
                    <a href="<?=base_url()?>booking_list">
                      <i class="fa fa-history"></i>History
                    </a>
                  </li>
                
                </ul>
              </nav>
            </div>
              </div>
              
            </div>
          </div>
          <div class="col-md-9 ">
          <h3 class="theme-payment-page-sections-item-title">Booking History</h3>
          
      <?php
      
      if($booking_list){
      
      
      foreach( $booking_list as $b) { 
            
            // print_r($b);
            //booking statues
            $booking_status;
            $color;
            if($b['status'] == 0)
            {
            //   $booking_status = "pending";
              $booking_status = "No Response";
              $booking_status_color = "bg-danger";

            }elseif($b['status'] == 1) {

              $booking_status = "Confirmed";
              $booking_status_color = "bg-success";


            }elseif($b['status'] == 2){

              $booking_status = "not available";
              $booking_status_color = "bg-primary";

            }elseif($b['status'] == 3){

              $booking_status = "Cancelled";
              $booking_status_color = "bg-primary";

            }  

            //payment status
            $payment_status;
            $payment_status_color;
            if($b['payment_status'] == "h")
            {
              $payment_status = "half payment";
              $payment_status_color = "bg-secondary";

            }elseif($b['payment_status'] == "f") {
              $payment_status = "full payment";
              $payment_status_color = "bg-success";

            }


            //dinner - dinner+breakfast
            $breakfast;
            $dinnerfastwithdinner;

            $breakfast=json_decode($b['breakfast'])[0][0];
            // echo $breakfast;
            // exit;
            $dinnerfastwithdinner=json_decode($b['breakfastdinner'])[0][0];



              
              
            ?>
              
              

              <div class="theme-search-results">
                  <div class="theme-search-results-item theme-search-results-item-">
                    <div class="theme-search-results-item-preview">
                   
                      <a class="theme-search-results-item-mask-link collapsed" href="#<?=$b['booking_id']?>" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="<?=$b['booking_id']?>"></a>
                      <div class="row" data-gutter="20">
                        <div class="col-md-10 ">
                          <div class="theme-search-results-item-flight-sections">
                            <div class="theme-search-results-item-flight-section">
                            
                              <div class="row row-no-gutter row-eq-height" style="display: inline!important;">
                                <h5>Booking Id &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <span> <?=$b['booking_id']?> </span> </h5>
                                
                                <h5>Booking Status : <span class="badge rounded-pill <?=$booking_status_color?>"><?= $booking_status ?></span></h5>
                                <h5>Payment Status : <span class="badge rounded-pill <?=$payment_status_color?>"><?= $payment_status ?></span> </h5>
                                <h5>Remaining Amt. : <span>Rs.<?=$b['remaining_amt']?> </span></h5>
                                <h5>Checkin-Checkout : <span><?= $b['checkin_date'] ?> - <?=$b['checkout_date']?> </span></h5>

                                <a href="#">see more...</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-2 ">
                          <div class="theme-search-results-item-book">
                              
                            <?php if($b['status'] == 3 ){ ?>

                            <a class="btn btn-block theme-search-results-item-price-btn" href="#" style="background-color: #3b5998;color:white">Cancelled</a>
                            
                           <?php } elseif($b['status'] == 1 || $b['status']==0 || $b['status']==2) {?>
                           
                              <!-- <a class="btn btn-primary-inverse btn-block theme-search-results-item-price-btn" href='<?=base_url()?>booking_list/cancel_booking/<?=$b['booking_tbl_id']?>'>Cancel Booking</a> -->
                              <a class="btn btn-primary-inverse btn-block theme-search-results-item-price-btn" onclick="passid('<?=$b['booking_id']?>')"  data-toggle="modal" data-target="#myModal">Cancel Booking</a>
                              
                            <?php } ?>
                            

                            <?php if($b['payment_status'] == "h" && $b['status'] == 1) { ?>
                            <a class="btn btn-primary-inverse btn-block theme-search-results-item-price-btn" href='<?=base_url()?>booking_list/remaining_payment/<?=$b['booking_tbl_id']?>'> Pay Remaining Payment</a>
                              <?php } ?>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="theme-search-results-item-collapse collapse" id="<?=$b['booking_id']?>" aria-expanded="false" style="height: 0px;">
                      <div class="theme-search-results-item-extend">
                        <a class="theme-search-results-item-extend-close collapsed" href="#<?=$b['booking_id']?>" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="<?=$b['booking_id']?>">✕</a>
                        <div class="theme-search-results-item-extend-inner">
                          <div class="theme-search-results-item-flight-detail-items">
                            <div class="theme-search-results-item-flight-details">
                              <div class="row">
                                  <div class="col-md-10">
                                    <?php if($b['type'] == "weekend" ) { ?>
    
                                          <h5>Name : <span><?=$b['name']?> </span></h5>
                                          <h5>Room Type : <span><?= json_decode($b['room_type'])[0][0] ?> </span></h5>
                                          <h5>Address : <span><?= $b['address'] ?>  </span></h5>
    
                                    <?php } elseif($b['type'] == "sightseeing" ) { ?>
    
                                          <h5>Name : <span><?=$b['name']?> </span></h5>
                                          <!-- <h5>Room Type : <span><?= json_decode($b['room_type'])[0][0] ?> </span></h5> -->
                                          <h5>Total Guest : <span><?= json_decode($b['total_guest'])[0][0] ?> </span></h5>
                                          <h5>Address : <span><?= $b['address'] ?>  </span></h5>
                                        
                                    <?php } else{ ?>
    
                                        <h5>Name : <span><?=$b['name']?> </span></h5>
                                        <h5>Room Type : <span><?= json_decode($b['room_type'])[0][0] ?> </span></h5>
                                        <h5>Total Room : <span><?= json_decode($b['total_room'])[0][0] ?> </span></h5>
                                        <h5>Total Guest : <span><?= json_decode($b['total_guest'])[0][0] ?> </span></h5>
                                        <h5>Meals : <span><?php if($breakfast){ echo "Breakfast, "; } if($dinnerfastwithdinner) {echo "Breakfast + Dinner";} ?></span><h5>
                                        <h5>Address : <span><?= $b['address'] ?>  </span></h5>
    
                                    <?php } ?>
                                </div>    
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>        
              </div>

          <?php }

            }else {
              echo "Not available...";
            }
          
          ?>
        </div>
      </div>
    </div>
  </div>
</div>

</div>
</div>
</div>
<div class="spacing" style="height:200px; width:100%">
              
              </div>



              <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Confirmation</h4>
        </div>
        <div class="modal-body">
          <form action="<?=base_url()?>booking_list/cancel_booking" method="POST">

            <input type="hidden" id="b_id_n" name="booking_id">

            <textarea placeholder="Reason" class="form-control" name="reason" required></textarea>

          
        </div>
        <div class="modal-footer">

          <input type="submit" class="btn btn-default btn-info" value="Submit">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          
        </div>
        </form>
      </div>
      
    </div>
  </div>



  <script>
    function passid(id)
    {

      document.getElementById('b_id_n').value = id;
      
    }
  </script>
                