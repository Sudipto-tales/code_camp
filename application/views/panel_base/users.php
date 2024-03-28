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
                            <div class="card">
                                <div class="card-body">
                                    <table id="users_list" class="table table-striped dt-responsive nowrap w-100" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>First name</th>
                                                <th>Last name</th>
                                                <th>Email ID</th>
                                                <th>Phone</th>
                                                <th>Type</th>
                                                <th>Stats</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th></th>
                                                <th>First name</th>
                                                <th>Last name</th>
                                                <th>Email ID</th>
                                                <th>Phone</th>
                                                <th>Type</th>
                                                <th>Stats</th>
                                                <th>Actions</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    </div>
                                </div>
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

        <input type="hidden" id="csrf_token" value="<?php echo $this->security->get_csrf_hash(); ?>">

        <?php require("sections/scripts.php"); ?>
        
        <script>
            function fetch_csrf(){
                        $.ajax({
                           url: "<?php echo base_url()?>csrf_security_token",
                           type: "GET",
                           success: function(response) {
                        //    console.log(response);
                           document.getElementById("csrf_token").value = response;
                           tokenValue = response;
                           return response;
                           }
                        });
                     }
                     
        </script>
        <script>
        $(document).ready(function(){
            // setInterval(fetch_csrf, 100);
            var tokenName = "<?php echo $this->security->get_csrf_token_name(); ?>";
            var tokenVal = document.getElementById("csrf_token").value;
            var tokenValue;
            console.log(tokenValue);
            $('#users_list').DataTable({
                // Processing indicator
                "processing": true,
                // DataTables server-side processing mode
                "serverSide": true,
                // Initial no order.
                "order": [],
                "preDrawCallback": function (){
                        $.ajax({
                           url: "<?php echo base_url()?>csrf_security_token",
                           type: "GET",
                           success: function(response) {
                        //    console.log(response);
                           document.getElementById("csrf_token").value = response;
                           tokenValue = response;
                           return response;
                           }
                        });
                     },
                // Load data from an Ajax source
                "ajax": {
                    "url": "<?php echo base_url('manage/getLists/'); ?>",
                    "type": "POST",
                    // "dataSrc": fetch_csrf(),
                    data: function (d) {
                        d.<?php echo $this->security->get_csrf_token_name(); ?> = $('#csrf_token').val();
                    },
                    "error" : function (){
                        $.ajax({
                           url: "<?php echo base_url()?>csrf_security_token",
                           type: "GET",
                           success: function(response) {
                           //alert(response);
                           $("#csrf_token").val(response);

                           }
                        });
                     }
                },
                // "initComplete": fetch_csrf(),
                "fnDrawCallback" : function (){
                        $.ajax({
                           url: "<?php echo base_url()?>csrf_security_token",
                           type: "GET",
                           success: function(response) {
                        //    console.log(response);
                           document.getElementById("csrf_token").value = response;
                           tokenValue = response;
                           return response;
                           }
                        });
                     }
                
            });
        });
        </script>
        
    </body>
</html>
