
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

    <div class="container">
       <!-- <div class="row m-4"></div> -->
       <div class="row m-4">
        <div class="col-md-6">
            <div class="card mt-0">
                <div class="card-body">
                <h3 class="mb-3"> <?php echo $page_data ?></h3>  
                    <form action="<?php echo base_url()?>update_save" name="form" id="form" method="post">
                    <div class="form-group">
                        <label for="name">Old Value</label>
                        <input type="text" name="old_val" id="old_val" value="" class="form-control" Placeholder="Old Value" required>
                    </div>
                    <div class="form-group">
                        <label for="name">New Value</label>
                        <input type="text" name="new_value" id="new_value" value="" class="form-control" Placeholder="New Value" required>
                    </div>
                    <input type="hidden" name="data_tbl" value="<?php echo $this->input->get("data_tbl") ?>" required>
                    <input type="hidden" name="data_id" value="<?php echo $this->input->get("data_id") ?>" required>
                    <input type="hidden" name="data_ucol" value="<?php echo $this->input->get("data_ucol") ?>" required>
                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                </div>
                </form>
            </div>
           
        </div>
        </div>
        <div class="row m-4"></div>

       </div>
    </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->



    <?php $this->load->view("panel_base/sections/scripts.php"); ?>
</body>

</html>