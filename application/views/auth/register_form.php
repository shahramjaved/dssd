<?php
if ($use_username) {
	$username = array(
		'name'	=> 'username',
		'id'	=> 'username',
		'value' => set_value('username'),
		'maxlength'	=> $this->config->item('username_max_length', 'tank_auth'),
		'class' => 'form-control',
		'placeholder' => 'Enter username ...'
	);
}
$email = array(
	'name'	=> 'email',
	'id'	=> 'email',
	'value'	=> set_value('email'),
	'maxlength'	=> 80,
	'class' => 'form-control',
	'placeholder' => 'Enter email ...'
);
$password = array(
	'name'	=> 'password',
	'id'	=> 'password',
	'value' => set_value('password'),
	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
	'class' => 'form-control',
	'placeholder' => 'Enter password ...'
);
$confirm_password = array(
	'name'	=> 'confirm_password',
	'id'	=> 'confirm_password',
	'value' => set_value('confirm_password'),
	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
	'class' => 'form-control',
	'placeholder' => 'Retype password ...'
);
$captcha = array(
	'name'	=> 'captcha',
	'id'	=> 'captcha',
	'maxlength'	=> 8,
);
?>

    <body class="loginPage">

    <div class="container">

        <div id="header">

            <div class="row">

                <div class="navbar">
                    <div class="container">
                        <a class="navbar-brand" href="<?=base_url();?>"><?=$this->config->item('site_title');?>.<span class="slogan">DSSD</span></a>
                    </div>
                </div><!-- /navbar -->

            </div><!-- End .row -->

        </div><!-- End #header -->

    </div><!-- End .container -->    

    <div class="container">
    	<div class="loginHeader"><h2>Sign Up</h2></div>
        <div class="loginContainer">

        	<?php echo form_open($this->uri->uri_string(),array('class' => 'form-horizontal', 'id' => 'loginForm', 'role' => 'form')); ?>
                <div class="form-group">
                    <label class="col-lg-12 control-label" for="username"><?php echo form_label('Username', $username['id']); ?>:</label>
                    <div class="col-lg-12">
                        <?php echo form_input($username); ?>
                        <span class="icon16 icomoon-icon-user right gray marginR10"></span>
                    </div>
                </div><!-- End .form-group  -->
                <div class="form-group">
                    <label class="col-lg-12 control-label" for="password">
                    	<?php echo form_label('Email Address', $email['id']); ?>:
                    </label>
                    <div class="col-lg-12">
                        <?php echo form_input($email); ?>
                        <span class="icon16 fa fa-envelope-o right gray marginR10"></span>
                    </div>
                </div><!-- End .form-group  -->
                
                <div class="form-group">
                    <label class="col-lg-12 control-label" for="password">
                    	<?php echo form_label('Password', $password['id']); ?>:
                    </label>
                    <div class="col-lg-12">
                        <?php echo form_password($password); ?>
                    </div>
                </div><!-- End .form-group  -->
                <div class="form-group">
                    <label class="col-lg-12 control-label" for="password">
                    	<?php echo form_label('Confirm Password', $confirm_password['id']); ?>:</label>
                    <div class="col-lg-12">
                        <?php echo form_password($confirm_password); ?>
                    </div>
                </div><!-- End .form-group  -->
                <div class="form-group">
                    <div class="col-lg-12 clearfix form-actions">
                    	<a href="<?=site_url('auth/login');?>" class="btn btn-danger center" style="margin-bottom:10px;"> <span class="fa fa-times white"> Cancel</a>
                        <button type="submit" class="btn btn-info center" id="loginBtn" ><span class="fa fa-upload white"></span> Sign Up</button>
                        
                    </div>
                </div><!-- End .form-group  -->
            </form>
        </div>


    </div><!-- End .container -->

    
    </body>



     <script type="text/javascript">
        // document ready function
        $(document).ready(function() {
            
            $("input, textarea, select").not('.nostyle').uniform();

           // validator = $("#loginForm").validate();
            validator = $("#loginForm").validate({
                
                rules: {
                    username: {
                        required: true,
                        minlength: 4
                    },
                    email  : {
                        required: true,
                        email: true
                    },
                    password: {
                        required: true,
                        minlength: 6
                    },
                    confirm_password: {
                    	equalTo: "#password"
                    },  
                },
                messages: {
                    username: {
                        required: "Username is required",
                        minlength: "Username mustbe atleast 4 chracters"
                    },
                    password: {
                        required: "Please provide a password",
                        minlength: "Password mustbe atleast 6 charcters"
                    }
                }   
            });
			<?if(validation_errors()){?>
				validator.showErrors({
					<?if(form_error('username')){?>
				  		"username": "<?=form_error('username');?>",
				  	<?}?>
				  	<?if(form_error('email')){?>
				  		"email": "<?=form_error('email');?>",
				  	<?}?>
				  	<?if(form_error('password')){?>
				  		"password": "<?=form_error('password');?>",
				  	<?}?>	
				  	<?if(form_error('confirm_password')){?>
				  		"confirm_password": "<?=form_error('confirm_password');?>"
				  	<?}?>

				});
			<?}?>
            <?if(isset($errors)){?>
                 validator.showErrors({
                <?foreach ($errors as $key => $value){?>
                    "<?=$key?>": "<?=$value;?>",

                <?}?>
                });
            <?}?>
        });
    </script>