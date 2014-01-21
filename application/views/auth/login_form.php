    <?php
$login = array(
	'name'	=> 'login',
	'id'	=> 'login',
	'value' => set_value('login'),
	'maxlength'	=> 80,
	'class' => 'form-control',
	'placeholder' => 'Enter User Name ...',
);
if ($login_by_username AND $login_by_email) {
	$login_label = 'Email or login';
} else if ($login_by_username) {
	$login_label = 'Login';
} else {
	$login_label = 'Email';
}
$password = array(
	'name'	=> 'password',
	'id'	=> 'password',
	'class' => "form-control",
	'placeholder' => 'Enter Password ...',

);
$remember = array(
	'name'	=> 'remember',
	'id'	=> 'remember',
	'value'	=> 1,
	'checked'	=> set_value('remember'),
	'style' => 'margin:0;padding:0',
	'class' => 'styled',
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
            <div class="loginHeader"><h2>Login</h2></div>
        <div class="loginContainer">


            <?php echo form_open($this->uri->uri_string(),array('class' => 'form-horizontal', 'id' => 'loginForm', 'role' => 'form')); ?>
                <div class="form-group">
                    <label class="col-lg-12 control-label" for="username">Username:</label>
                    <div class="col-lg-12">
                        <?php echo form_input($login); ?>
                        <span class="icon16 icomoon-icon-user right gray marginR10"></span>
                    </div>
                </div><!-- End .form-group  -->
                <div class="form-group">
                    <label class="col-lg-12 control-label" for="password">Password:</label>
                    <div class="col-lg-12">
                        <?php echo form_password($password); ?>
                        <div class="checkbox left">
                            <label style="font-size:11px;"><?php echo form_checkbox($remember); ?>Remember me</label>
                        </div>
                        <span class="icon16 icomoon-icon-lock right gray marginR10"></span>
                        <span class="forgot help-block"><a href="<?=site_url('/auth/forgot_password/')?>">Forgot your password?</a></span>
                    </div>
                </div><!-- End .form-group  -->
                <div class="form-group">
                    <div class="col-lg-12 clearfix form-actions">
                        <button type="submit" class="btn btn-info center" id="loginBtn"><span class="fa fa-sign-in white"></span> Login</button>
                        <?php if ($this->config->item('allow_registration', 'tank_auth')){?>
                        <a href="<?=site_url('auth/register');?>" class="btn btn-success center" style="margin-top:10px;"><span class="fa fa-upload white" ></span> Sign up</a>
                        <?}?>
                    </div>
                </div><!-- End .form-group  -->
            </form>
        </div>

    </div><!-- End .container -->

    

    </body>

     <!-- Le javascript
    ================================================== -->
     <script type="text/javascript">
        // document ready function
        $(document).ready(function() {
            
            $("input, textarea, select").not('.nostyle').uniform();
            <?if(isset_flash_data('display')){?>
                    $.pnotify({
                                type: '<?=flash_message_type("display");?>',
                                text: '<?=flash_message("display");?>',
                                opacity: 0.95,
                                history: false,
                                sticker: false
                            });
                            
            <?}?>      
            validator = $("#loginForm").validate({
             
                rules: {
                    login: {
                        required: true,
                        minlength: 4
                    },
                    password: {
                        required: true,
                        minlength: 6
                    }  
                },
                messages: {
                    login: {
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
                    <?if(form_error('login')){?>
                        "login": "<?=form_error('login');?>",
                    <?}?>
                    
                    <?if(form_error('password')){?>
                        "password": "<?=form_error('password');?>",
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