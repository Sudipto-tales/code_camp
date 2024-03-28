
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



        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

       <!-- <div class="row m-4"></div> -->
       <div class="row m-4">
        <div class="col-md-12">
            <div class="card mt-0">
                <div class="card-body">
                    <form action="<?php echo base_url()?>update/update_save" name="form" id="form" method="post">
                      <input type="hidden" value="<?php echo $this->uri->segment(2) ?>" name="navc_id">
                    <div class="form-group mb-2">
                        <label for="name">Old Data</label>
                        <input type="text" name="old_data" id="old_data" value="<?php echo $this->input->get("old_val");?>" class="form-control" Placeholder="Old Data" required readonly>
                    </div>
                    <div class="form-group mb-2">
                        <label for="name">New Data</label>
                        <input type="text" name="new_data" id="new_data" value="" class="form-control" Placeholder="New Data"required>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-block btn-primary">Submit</button>
                    </div>
                    <input type="hidden" name="tbl_name" value="<?php echo $this->input->get("tbl_name");?>" required>
                    <input type="hidden" name="tbl_ucol" value="<?php echo $this->input->get("tbl_ucol");?>" required>
                    <input type="hidden" name="tbl_uid" value="<?php echo $this->input->get("tbl_uid");?>" required>
                    <input type="hidden" name="tbl_col" value="<?php echo $this->input->get("tbl_col");?>" required>
                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                </div>
                </form>
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