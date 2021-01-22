<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sistema de quejas y sugerencias | Login</title>

<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('accet_url') ?>vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
        <link href="<?php echo $this->config->item('accet_url') ?>font-awesome/css/font-awesome.css" rel="stylesheet">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('accet_url') ?>vendor/animate/animate.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('accet_url') ?>vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('accet_url') ?>vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('accet_url') ?>vendor/select2/select2.min.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('accet_url') ?>vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('accet_url') ?>css/login/util.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('accet_url') ?>css/login/main.css">
<!--===============================================================================================-->


    </head>
<body style="background-color: #666666;">
       

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form action="" method="post" class="login100-form validate-form">
                    <span class="login100-form-title p-b-43">
                    Sistema de quejas y sugerencias

        <?php if ($this->session->flashdata('message')): ?>

            <div class="alert alert-success">
                <button type="button" class="close" data-close="alert"></button>
                <?php echo $this->session->flashdata('message'); ?>
            </div>

        <?php endif; ?>
                    </span>
                    
                    
                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                        <input class="input100" type="text" value="<?php echo set_value('identity'); ?>" name="identity" id='identity' required="">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Email</span>
                        <?php echo form_error('identity', '<span class="err-msg">', '</span>') ?>
                    </div>
                    
                    
                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input class="input100" type="password"  name='password' value="<?php echo set_value('password'); ?>">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Contraseña</span>
                        <?php echo form_error('password', '<span class="err-msg">', '</span>') ?>
                    </div>

                    <div class="flex-sb-m w-full p-t-3 p-b-32">
                        <div class="contact100-form-checkbox">
                            <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                            <label class="label-checkbox100" for="ckb1">
                                Recordarme
                            </label>
                        </div>

                        <!--<div>
                            <a href="#" class="txt1">
                                Forgot Password?
                            </a>
                        </div>-->
                    </div>
            

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Iniciar sesión
                        </button>
                    </div>
                    
                    <!--<div class="text-center p-t-46 p-b-20">
                        <span class="txt2">
                            Siguenos
                        </span>
                    </div>

                    <div class="login100-form-social flex-c-m">
                        <a href="#" class="login100-form-social-item flex-c-m bg1 m-r-5">
                            <i class="fa fa-facebook-f" aria-hidden="true"></i>
                        </a>

                        <a href="#" class="login100-form-social-item flex-c-m bg2 m-r-5">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                    </div>-->
                </form>

                <div class="login100-more bg-login">
                </div>
            </div>
        </div>
    </div>
    
    


<!--===============================================================================================-->
    <script src="<?php echo $this->config->item('accet_url') ?>vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="<?php echo $this->config->item('accet_url') ?>vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
    <script src="<?php echo $this->config->item('accet_url') ?>vendor/bootstrap/js/popper.js"></script>
    <script src="<?php echo $this->config->item('accet_url') ?>vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="<?php echo $this->config->item('accet_url') ?>vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="<?php echo $this->config->item('accet_url') ?>vendor/daterangepicker/moment.min.js"></script>
    <script src="<?php echo $this->config->item('accet_url') ?>vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
    <script src="<?php echo $this->config->item('accet_url') ?>vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
    <script src="<?php echo $this->config->item('accet_url') ?>js/main.js"></script>
</body>
</html>