<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>Register</title>
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
                    <h2 class="form-title">Register</h2>
                    <form action="" method="POST" enctype="<?= base_url() ?>login/verify">
                        <div class="form-group">
                            <label for="email_id" class="form-label"><i class="zmdi zmdi-email"></i></label>
                            <input class="form-control" type="email" id="email_id" name="email_id" required
                                placeholder="Enter your email">
                                <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                        </div>
                        <div class="form-group form-button">
                            <input type="submit" name="register" id="signup" class="form-submit" value="Submit" />
                        </div>

                    </form>
                </div>
                <div class="signup-image">
                    <figure><img src="assets/login/images/signup-image.jpg" alt="sing up image"></figure>
                </div>
            </div>
        </div>


    </div>

    <!-- JS -->
    <script src="<?= base_url() ?>assets/login/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/login/js/main.js"></script>
</body>

</html>