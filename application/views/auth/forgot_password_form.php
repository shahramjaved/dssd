<?php
$login = array(
	'name'	=> 'login',
	'id'	=> 'login',
	'value' => set_value('login'),
	'maxlength'	=> 80,
	'class' => 'form-control',
	'placeholder' => 'Enter User Name ...',
);
if ($this->config->item('use_username', 'tank_auth')) {
	$login_label = 'Email or login';
} else {
	$login_label = 'Email';
}

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
            <div class="loginHeader"><h2>Forgot Password</h2></div>
        <div class="loginContainer">


            <?php echo form_open($this->uri->uri_string(),array('class' => 'form-horizontal', 'id' => 'loginForm', 'role' => 'form')); ?>
                <div class="form-group">
                    <label class="col-lg-12 control-label" for="username">Email:</label>
                    <div class="col-lg-12">
                        <?php echo form_input($login); ?>
                        <span class="icon16 icomoon-icon-user right gray marginR10"></span>
                    </div>
                </div><!-- End .form-group  -->
                
                <div class="form-group">
                    <div class="col-lg-12 clearfix form-actions">
                    	<a href="<?=site_url('auth/login');?>" class="btn btn-danger center" style="margin-bottom:10px;"> <span class="fa fa-times white"> Cancel</a>
                        <button type="submit" class="btn btn-info center" id="reset"><span class="fa fa-sign-in white"></span> Get a new password</button>
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
                        email: true
                    }
                }
            });
            <?if(validation_errors()){?>
                validator.showErrors({
                    <?if(form_error('login')){?>
                        "login": "<?=form_error('login');?>",
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