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
                            <div class="col-12">
                            <div class="card cta-box bg-primary text-white">
                                <div class="card-body">
                                    <div class="d-flex align-items-start align-items-center">
                                        <div class="w-100 overflow-hidden">
                                            <h2 class="mt-0"><i class="mdi mdi-bullhorn-outline"></i>&nbsp;</h2>
                                            <h3 class="m-0 fw-normal cta-box-title"><b><?php echo $page_data ?></b></h3>
                                        </div>
                                        <img class="ms-3" src="assets/images/svg/email-campaign.svg" width="120" alt="Generic placeholder image">
                                    </div>
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
