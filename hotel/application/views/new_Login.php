<!-- 
<section>
		<div class="tr-register">
			<div class="tr-regi-form">
				<h4>Sign In</h4>
				<p>It's free and always will be.</p>
				<form class="col s12" action="<?=base_url()?>Login" method="POST">
					
					
					<div class="row">
						<div class="input-field col s12">
						<label>Email</label>
							<input type="text" class="validate" name="u_email" >
							
						</div>
                        <span class="login_error"> <?=form_error('u_email');?> </span>
					</div>
					<div class="row">
						<div class="input-field col s12">
						<label>Password</label>
							<input type="password" class="validate" name="u_password" >
							
						</div>
                        <span class="login_error"> <?=form_error('u_password');?> </span>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input type="submit" value="submit" class="waves-effect waves-light btn-large full-btn"> </div>
					</div>
				</form>
				<?php if($this->session->flashdata('login_fail')) { ?>
            			<div class="alert alert-danger">
							<strong>Error !</strong>  <?php echo $this->session->flashdata('login_fail')?>
            			</div>
        		<?php } ?>
				<p><a href="forgot-pass.html">forgot password</a> | Are you a new user ? <a href="<?= base_url().'Registration' ?>">Register</a>
				</p>
				<div class="soc-login">
					<h4>Sign in using</h4>
					<ul>
						<li><a href="#"><i class="fa fa-facebook fb1"></i> Facebook</a> </li>
						<li><a href="#"><i class="fa fa-twitter tw1"></i> Twitter</a> </li>
						<li><a href="#"><i class="fa fa-google-plus gp1"></i> Google</a> </li>
					</ul>
				</div>
			</div>
		</div>
    </section>
    
    <script src="<?php echo searchjs; ?>/main.js"></script> -->


    <style>
		.login_error{
			color:red;
		}
	</style>


	  
    <div class="theme-page-section theme-page-section-xl theme-page-section-gray">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-md-offset-4">
            <div class="theme-login">
              <div class="theme-login-header">
                <h1 class="theme-login-title">Sign In</h1>
                <p class="theme-login-subtitle">Login into your Hotelmate account</p>
              </div>
              <div class="theme-login-box">
                <div class="theme-login-box-inner">
                  <form class="theme-login-form" action="<?=base_url()?>Login" method="POST">
                    <div class="form-group theme-login-form-group">
                      <input class="form-control" type="text" placeholder="Email Address" name="u_email"/>
					  <span class="login_error"> <?=form_error('u_email');?> </span>
                    </div>
					
                    <div class="form-group theme-login-form-group">
                      <input class="form-control" type="password" placeholder="Password" name="u_password"/>
					  <span class="login_error"> <?=form_error('u_password');?> </span>
                      <p class="help-block">
                        <a href="pwd-reset.html">Forgot password?</a>
                      </p>
                    </div>
                    <div class="form-group">
                      <div class="theme-login-checkbox">
                        <label class="icheck-label">
                          <input class="icheck" type="checkbox"/>
                          <span class="icheck-title">Keep me logged in</span>
                        </label>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-uc btn-dark btn-block btn-lg" href="#">Sign In</button>
                  </form>

				  <?php if($this->session->flashdata('login_fail')) { ?>
            			<div class="alert alert-danger">
							<strong>Error !</strong>  <?php echo $this->session->flashdata('login_fail')?>
            			</div>
        		 <?php } ?>
               
                </div>
                <div class="theme-login-box-alt">
                  <p>Don't have an account? &nbsp;
                    <a href="<?= base_url().'Registration/reg1' ?>">Sign up.</a>
                  </p>
                </div>
              </div>
              <p class="theme-login-terms">By logging in you accept our
                <a href="#">terms of use</a>
                <br/>and
                <a href="#">privacy policy</a>.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>



