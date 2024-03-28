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

        <!-- Sing in  Form -->

        <div class="container">
            <div class="signup-content">
                <div class="signup-form">
                    <h2 class="form-title">Sign up</h2>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <input type='hidden' name="<?php echo $this->security->get_csrf_token_name(); ?>"
                            value="<?php echo $this->security->get_csrf_hash(); ?>" />
                        <div class="form-group">
                            <label for="full_name" class="form-label"><i
                                    class="zmdi zmdi-account material-icons-name"></i></label>
                            <input class="form-control" type="text" id="full_name" name="full_name"
                                placeholder="Enter your name" required>
                        </div>
                        <div class="form-group">
                            <label for="email_id" class="form-label"><i class="zmdi zmdi-email"></i></label>
                            <input class="form-control" type="email" id="email_id" name="email_id" required
                                placeholder="Enter your email">
                        </div>
                        <div class="form-group">
                            <label for="pass_id" class="form-label"><i class="zmdi zmdi-lock"></i></label>
                            <div class="input-group input-group-merge">
                                <input class="form-control" type="password" required id="pass_id" name="pass_id"
                                    placeholder="Enter your password">
                                <div class="input-group-text" data-password="false">
                                    <span class="password-eye"></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="cnf_pass_id" class="form-label"><i class="zmdi zmdi-lock"></i></label>
                            <div class="input-group input-group-merge">
                                <input type="password" required id="cnf_pass_id" name="cnf_pass_id"
                                    placeholder="Enter your password" />
                                <span class="text-danger">
                                    <?php echo form_error('user_password'); ?>
                                </span>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password" />
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all
                                statements in <a href="#" class="term-service">Terms of service</a></label>
                        </div>
                        <div class="form-group form-button">
                            <input type="submit" name="register" id="signup" class="form-submit" value="Register" />
                        </div>
                    </form>

                </div>
                <div class="signup-image">
                    <figure><img src="assets/login/images/signup-image.jpg" alt="sing up image"></figure>
                    <a href="<?= base_url() ?>login" class="signup-image-link">I am already member</a>
                </div>
            </div>
        </div>


    </div>

    <!-- JS -->
    <script src="<?= base_url() ?>assets/login/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/login/js/main.js"></script>
</body>

</html>