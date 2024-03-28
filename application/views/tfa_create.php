<!DOCTYPE html>
<html lang="en">

    <head>
        <?php $this->load->view("panel_base/sections/header.php"); ?>
        <?php $this->load->view("panel_base/sections/css.php"); ?>
    </head>

    <body class="show sidebar-enable">
    <?php $this->load->view("panel_base/sections/preloader.php"); ?>
        <!-- Begin page -->
        <div class="wrapper">
        <?php $this->load->view("panel_base/sections/topbar.php"); ?>
        <?php $this->load->view("panel_base/sections/nav.php"); ?>
            
            

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page" >
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <h4 class="page-title"><?php echo $page_name ?></h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-6">
                            <?php 
                            $page_stats = $this->input->get('stats');
                            if($page_stats == "failed"){?>
                                <div class="alert alert-success alert-dismissible bg-danger text-white border-0 fade show mt-3" role="alert">
                                    <strong>Failed - </strong> Kindly Check PIN entered!
                                </div>
                            <?php } ?>
                            <div class="card cta-box">
                                <div class="card-body">
                                    <form action="<?php echo base_url()?>tfa_ibox/save" method="POST">
                                    <div class="mb-3">
                                        <label for="tfa_pin" class="form-label">Enter PIN</label>
                                        <input type="password" id="tfa_pin" name="tfa_pin" placeholder="Enter 4 Digit Numeric PIN" class="form-control" pattern="[0-9]*" inputmode="numeric" maxlength="4" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="tfa_cpin" class="form-label">Confirm PIN</label>
                                        <input type="password" id="tfa_cpin" name="tfa_cpin" placeholder="Confirm 4 Digit Numeric PIN" class="form-control" pattern="[0-9]*" inputmode="numeric" maxlength="4" required>
                                    </div>
                                    <div class="mb-3">
                                        <input type="submit" class="form-control btn btn-success">
                                    </div>
                                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                                    </form>
                                </div>
                                <!-- end card-body -->
                            </div> <!-- end card-box-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row-->
                        
                    </div> <!-- container -->

                </div> <!-- content -->

                <?php $this->load->view("panel_base/sections/footer.php"); ?>
        
            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

        

        <?php $this->load->view("panel_base/sections/scripts.php"); ?>
    </body>
</html>
