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
                  <br><?=$profile_details->u_fname?>
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
          <div class="col-md-9">
          <div class="theme-payment-page-sections-item">
                <h3 class="theme-payment-page-sections-item-title">Profile Details</h3>
                <div class="theme-payment-page-form _mb-20">
                  <div class="row row-col-gap" data-gutter="20">
                    <div class="col-md-6 ">
                      <div class="theme-payment-page-form-item form-group">
                        <input class="form-control" type="text" value="<?=$profile_details->u_fname?> <?=$profile_details->u_lname?>" placeholder="Full name">
                      </div>
                    </div>
                    <div class="col-md-6 ">
                      <div class="theme-payment-page-form-item form-group">
                        <input class="form-control" type="text" value="<?=$profile_details->u_mobile?>" placeholder="Mobile Number">
                      </div>
                    </div>
                    <div class="col-md-6 ">
                      <div class="theme-payment-page-form-item form-group">
                        <input class="form-control" type="text" value="<?=$profile_details->u_bod?>" placeholder="Bod">
                      </div>
                    </div>
                    <div class="col-md-6 ">
                      <div class="theme-payment-page-form-item form-group">
                        <input class="form-control" type="text" value="<?=$profile_details->u_email?>" placeholder="Email">
                      </div>
                    </div>
                    
                  </div>
                </div>

              
                
              
              </div>
              <div class="spacing" style="height:200px; width:100%">
              
              </div>
              
        </div>
      </div>
</div>
  </div>
</div>

</div>
</div>
</div>