<!DOCTYPE html>
<html lang="en">

    <head>
        <?php require("sections/header.php"); ?>
        <?php require("sections/css.php"); ?>
    </head>

    <body class="show sidebar-disable">
    <?php require("sections/preloader.php"); ?>
        <!-- Begin page -->
            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid mt-4">
                        <div class="row">
                            <div class="col-12">
                                
                            <div class="d-flex justify-content-center align-items-center container">
                            
                                <div class="card py-5 px-3">
                                <center>
                                    <img src="<?php echo base_url(); ?>assets/images/logo.png" width="150" class="text-center mb-4">
                                </center>
                                    <h5 class="m-0">
                                        Email ID Verification
                                    </h5>
                                    <span class="mobile-text">
                                        Enter the code we just send on your Email ID 
                                        <b class="text-danger"><?php echo $this->session->userdata("email_id") ?></b>
                                    </span>
                                    <form method="post" action="<?php echo base_url(); ?>check_email">
                                        <div class="mb-3 mt-3">
                                            <input type="number" max="999999" min="100000" class="form-control" autofocus="" name="eotp_data" placeholder="Enter Your OTP" required>
                                        </div>
                                        <div class="mb-3">
                                            <input type="submit" class="btn btn-primary">
                                        </div>
                                        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                                     </form>
                                    <div class="text-center mt-3">
                                        <span class="d-block mobile-text">Kindly Refresh Page in</span><span class="font-weight-bold text-danger cursor">2 Mins to Resend Code!</span>
                                        <?php 
                                        $page_stats = $this->input->get('stats');
                                        if($page_stats == "failed"){?>
                                            <div class="alert alert-success alert-dismissible bg-danger text-white border-0 fade show mt-3" role="alert">
                                                <strong>Failed - </strong> Kindly Check PIN entered!
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            </div> <!-- end col-->
                        </div>
                        <!-- end row-->
                        
                    </div> <!-- container -->

                </div> <!-- content -->

        

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        <!-- END wrapper -->

        

        <?php require("sections/scripts.php"); ?>
    </body>
</html>
