<!DOCTYPE html>
<html lang="en">

    <head>
        <?php require("sections/header.php"); ?>
        <?php require("sections/css.php"); ?>
    </head>

    <body class="show sidebar-enable">
    <?php require("sections/preloader.php"); ?>
        <!-- Begin page -->
        <div class="wrapper">
        <?php require("sections/topbar.php"); ?>
        <?php require("sections/nav.php"); ?>
            
            

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
                                <?php require("sections/dash.php"); ?>
                            </div> <!-- end col-->
                        </div>
                        <!-- end row-->
                        
                    </div> <!-- container -->

                </div> <!-- content -->

                <?php require("sections/footer.php"); ?>
        
            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

        

        <?php require("sections/scripts.php"); ?>
    </body>
</html>
