<section>
		<div class="tr-register">
			<div class="tr-regi-form">
				<h4>Create an Account</h4>
				<p>It's free and always will be.</p>
				<form class="col s12"  action="<?=base_url()?>Registration" method="POST">
					<div class="row">
						<div class="input-field col m6 s12">
							<label>First Name</label>
							<input type="text" class="validate" name="u_fname" value="<?php echo set_value('u_fname'); ?>">
							
                            <span class="login_error"> <?=form_error('u_fname');?> </span>
						</div>
						<div class="input-field col m6 s12">
							<label>Last Name</label>
							<input type="text" class="validate" name="u_lname" value="<?php echo set_value('u_lname'); ?>">
							
                            <span class="login_error"> <?=form_error('u_lname');?> </span>
						</div>
					</div>
					<div class="row">
						<div class="input-field col m6 s12">
							<label>Mobile</label>
							<input type="number" class="validate" name="u_mobile" value="<?php echo set_value('u_mobile'); ?>">
							
                            <span class="login_error"> <?=form_error('u_mobile');?> </span>
                        </div>
                        <div class="input-field col m6 s12">
							<label>BOD</label>
							<input type="date" class="validate" name="u_bod" value="<?php echo set_value('u_bod'); ?>">
                            <span class="login_error"> <?=form_error('u_bod');?> </span>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<label>Email</label>
							<input type="email" class="validate" name="u_email" value="<?php echo set_value('u_email'); ?>">
						
                            <span class="login_error"> <?=form_error('u_email');?> </span>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<label>Password</label>
							<input type="password" class="validate" name="u_password" value="<?php echo set_value('u_password'); ?>">
							
                            <span class="login_error"> <?=form_error('u_password');?> </span>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<label>Confirm Password</label>
							<input type="password" class="validate"  name="c_password" value="<?php echo set_value('c_password'); ?>">
							
                            <span class="login_error"> <?=form_error('c_password');?> </span>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input type="submit" value="submit" class="waves-effect waves-light btn-large full-btn"> </div>
					</div>
				</form>
				<?php if($this->session->flashdata('reg_succ')) { ?>
            			<div class="alert alert-success">
							<strong>Success !</strong>  <?php echo $this->session->flashdata('reg_succ')?>
            			</div>
        		<?php } ?>
				<p>Are you a already member ? <a href="<?=base_url().'Login'?>">Click to Login</a>
				</p>
			</div>
		</div>
	</section>


	<!-- search bar js -->
    <script src="<?php echo searchjs; ?>/main.js"></script>