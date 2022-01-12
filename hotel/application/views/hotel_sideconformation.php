<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=jkcss?>assets/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet"/>
    <link rel="stylesheet" href="<?=new_ass?>css/font-awesome.css"/>
    <link rel="stylesheet" href="<?=new_ass?>css/lineicons.css"/>
    <link rel="stylesheet" href="<?=new_ass?>css/weather-icons.css"/>
    <link rel="stylesheet" href="<?=new_ass?>css/bootstrap.css"/>
    <link rel="stylesheet" href="<?=new_ass?>css/styles.css"/>
    <title>Document</title>
</head>
<body>
<div class="theme-page-section theme-page-section-xl theme-page-section-gray">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-md-offset-4">
            <div class="theme-payment-success">
              <div class="theme-payment-success-header" style="padding:0px">
            
             
              </div>
              <form action="<?=base_url()?>hotel/booking_confirmation" method="POST">
                <input type="hidden" name="email" value="<?=$email?>">
                <input type="hidden" name="bid" value="<?=$bid?>">
                <input type="hidden" name="status" value="<?=$status?>">

                <div class="theme-payment-success-box">
                    <ul class="theme-payment-success-summary">
                    <li>Date
                        <span> <?=$result->checkin_date?> - <?=$result->checkout_date?></span>
                    </li>
                    <li>Room Category  
                        <span> <?php $type=json_decode($result->room_type);  echo $type[0][0]?></span>
                    </li>
                    <li>No of Rooms 
                        <span><?php $room=json_decode($result->total_room);  echo $room[0][0]?> </span>
                    </li>
                    <li>No of Guest 
                        <span> <?php $guest=json_decode($result->total_guest);  echo $guest[0][0]?>  </span>
                    </li>
                    
                    <li>Meal Plan 
                        <span> 
                        <?php 

                            $type='';
                            $breakfast_status=json_decode($result->breakfast_status); 
                            if($breakfast_status[0][0])
                            {
                                $type .= "Breakfast,";
                            }

                            $breakfastdinner_status=json_decode($result->breakfastdinner_status); 
                            if($breakfastdinner_status[0][0])
                            {
                                $type .= "Breakfast+Dinner,";
                            }

                            echo $type;
                        
                        
                        ?> </span>
                    </li>
                    

                                    </ul>
                    <strong>Please enter hotel voucher code<strong>
                    <input type="text" class="form-control" placeholder="Please enter hotel voucher code " name="hotel_voucher_code" required>
                    <button type="submit" class="btn btn-block mt-3">Submit</button>
                    </p>
                </div>
              </form>  
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
</body>

</html>

