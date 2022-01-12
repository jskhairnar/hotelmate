<!--DASHBOARD-->
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
    <!-- search bar js -->
    <script src="<?php echo searchjs; ?>/main.js"></script>