<style>
.label_style{
    margin-bottom: 5px!important;
    font-size: 14px;
    font-weight: 400;
}

span p {
  color:red;
}

</style>

<div class="theme-page-section theme-page-section-xl theme-page-section-gray">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <div class="theme-login">
              <div class="theme-login-header">
                <h1 class="theme-login-title">Sign Up</h1>
                <p class="theme-login-subtitle">Create new Hotelmate account</p>
              </div>
              <div class="theme-login-box">
                <div class="theme-login-box-inner">
                <?php if($this->session->flashdata('reg_succ')) { ?>
            			<div class="alert alert-success">
							        <strong>Success !</strong>  <?php echo $this->session->flashdata('reg_succ')?>
            			</div>
        		    <?php } ?>

                <?php if($this->session->flashdata('reg_err')) { ?>
            			<div class="alert alert-danger">
							        <strong>Success !</strong>  <?php echo $this->session->flashdata('reg_err')?>
            			</div>
        		    <?php } ?>
                  

                  <form class="theme-login-form"  action="<?=base_url()?>Registration" method="POST">

                    <div class="row">
                
                        <div class="col-md-6 form-group theme-login-form-group">
                            <label class="label_style">First Name</label>
                            <input class="form-control" type="text" name="u_fname"  value="<?php echo set_value('u_fname'); ?>" placeholder="First Name">
                            <span class="login_error"> <?=form_error('u_fname');?> </span>

                        </div>
                        <div class="col-md-6 form-group theme-login-form-group">
                            <label class="label_style">Last Name</label>
                            <input class="form-control" type="text" name="u_lname"  value="<?php echo set_value('u_lname'); ?>" placeholder="Last Name">
                            <span class="login_error"> <?=form_error('u_lname');?> </span>

                        </div>
                    
                    </div>
                    
                    <div class="row">
                        <div class=" col-md-6 form-group theme-login-form-group">
                            <label class="label_style">Mobile</label>
                            <input class="form-control" type="number" name="u_mobile" value="<?php echo set_value('u_mobile'); ?>" placeholder="Mobile Name">
                            <span class="login_error"> <?=form_error('u_mobile');?> </span>

                        </div>
                        <div class="col-md-6 form-group theme-login-form-group">
                            <label class="label_style">BOD</label>
                            <input class="form-control" type="date" name="u_bod"  value="<?php echo set_value('u_bod'); ?>" placeholder="Mobile Name">
                            <span class="login_error"> <?=form_error('u_bod');?> </span>

                        </div>
                    </div>
                   

                    <div class="form-group theme-login-form-group">
                      <label class="label_style">Email</label>
                      <input class="form-control" type="text" name="u_email"  value="<?php echo set_value('u_email'); ?>" placeholder="Email Address">
                      <span class="login_error"> <?=form_error('u_email');?> </span>

                    </div>
                    <div class="form-group theme-login-form-group">
                      <label class="label_style">Password</label>
                      <input class="form-control" type="text" name="u_password" value="<?php echo set_value('u_password'); ?>" placeholder="Password">
                      <span class="login_error"> <?=form_error('u_password');?> </span>
                    
                    </div>
                    <div class="form-group theme-login-form-group">
                      <label class="label_style">Confirm Password</label>
                      <input class="form-control" type="text" name="c_password" value="<?php echo set_value('c_password'); ?>" placeholder="Confirm Password">
                      <span class="login_error"> <?=form_error('c_password');?> </span>

                    </div>
                   




                    <button type="submit" class="btn btn-uc btn-dark btn-block btn-lg" href="#">Create Account</button>
                  </form>
                  
                  
                </div>
                <div class="theme-login-box-alt">
                  <p>Already have an account? &nbsp;
                    <a href="<?=base_url()?>Login">Sign in.</a>
                  </p>
                </div>
              </div>
              <p class="theme-login-terms">By signing up you accept our
                <a href="#">terms of use</a>
                <br>and
                <a href="#">privacy policy</a>.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>