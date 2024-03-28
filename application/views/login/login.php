<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Infovue Team" name="author">
    <!-- Font Icon -->
    <link rel="stylesheet"
        href="<?= base_url() ?>assets/login/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/login/css/style.css">
</head>

<body>

    <div class="main">
        <!-- Sing in  page-->

        <div class="container">
            <div class="signin-content">
                <div class="signin-image">
                    <figure><img src="<?= base_url() ?>assets/login/images/signin-image.jpg" alt="sing up image">
                    </figure>
                    <a href="<?= base_url() ?>register" class="signup-image-link">Create an account</a>
                </div>
                <?php
                if ($this->session->flashdata('message')) {
                    echo '
                    <div class="alert alert-success">
                        ' . $this->session->flashdata("message") . '
                    </div>
                    ';
                }
                ?>
                <div class="signin-form">
                    <h2 class="form-title">Login</h2>
                    <form method="POST" class="register-form" id="login-form">
                        <div class="form-group">
                            <label for="email"><i class="zmdi zmdi-email"></i></label>
                            <input type="text" name="user_email" class="form-control"
                                value="<?php echo set_value('user_email'); ?>" />
                            <span class="text-danger">
                                <?php echo form_error('user_email'); ?>
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="user_password" class="form-control"
                                value="<?php echo set_value('user_password'); ?>" />
                            <span class="text-danger">
                                <?php echo form_error('user_password'); ?>
                            </span>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                            <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember
                                me</label>
                        </div>
                        <div class="form-group form-button">
                            <input type="submit" name="login" value="Login"
                                class="form-submit" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a
                                href="<?php echo base_url(); ?>signup"></a>
                        </div>
                    </form>
                    <div class="social-login">
                        <span class="social-label">Or login with</span>
                        <ul class="socials">
                            <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                            <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                            <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <!-- JS -->
    <script src="<?= base_url() ?>assets/login/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/login/js/main.js"></script>
</body>

</html>