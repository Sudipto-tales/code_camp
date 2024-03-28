<!DOCTYPE html>
<html lang="en">

    <head>
        <?php $this->load->view("gf_console/sections/header.php"); ?>
        <?php $this->load->view("gf_console/sections/css.php"); ?>
    </head>

    <body class="show sidebar-enable">
    <?php $this->load->view("gf_console/sections/preloader.php"); ?>
        <!-- Begin page -->
        <div class="wrapper">
        <?php $this->load->view("gf_console/sections/topbar.php"); ?>
        <?php $this->load->view("gf_console/sections/nav.php"); ?>

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page" >
           
                <div class="content">
                <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">
                                        <span class="float-end">
                                            <a href="<?php echo base_url() ?>dashform" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="left" title="Create Organisation"onclick="modal_show()" target="_innerpage2">+</a>
                                

                                        </span>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    <!-- Start Content-->
                    <div class="container-fluid">
                        <?php 
                        $page_stats = $this->input->get('stats');
                        if($page_stats == "success"){?>
                          <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show mt-3" role="alert">
                                <strong>Success - </strong> Successfully!
                            </div>
                        <?php } ?>
                        <!-- start page title -->
                        
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                            <div class="card shadow-none m-0">
                                <div class="card-body">
                                    <table id="table_data" class="table table-sm table-centered mb-0 text-wrap">
                                        <thead>
                                            <tr>
                                                <th>#ID</th>
                                                <th>Name</th>
                                                <th>Group</th>
                                             <th>Level</th>
                                             <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                        if(!empty($dash_tbl)){ foreach($dash_tbl->result() as $std_row){ ?>
                                            <tr>
                                            <td>ST#<?php echo $std_row->dash_id ?></td>
                                                <td>
                                                    Name - <?php echo $std_row->dash_name ?> <br/>
                                                    Status - <?php echo $std_row->dash_status ?>
                                                </td>
                                                <td>
                                                    <?php
                                                    $roles_d = explode(",",$std_row->dash_grp);
                                                    // print_r($roles_d);
                                                    foreach ($roles_d as $v) {
                                                        ?>
                                                        <a href="#" class="btn btn-primary"><?php echo $v ?></a>
                                                      <?php
 
                                                    }
                                                    // echo $std_row->dash_grp
                                                    ?>
                                                </td>
                                                
                                                <td><?php echo $std_row->dash_level ?></td>
                                                <td>
                                                    
                                                    <a href="<?php echo base_url('$std_row->dash_data') ?>" class="btn btn-success">View</a>
                                                   
                                                </td>
                                                </tr>
                                                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                                                

                        <?php }
                    } else { ?>
                        <tr>
                            <td colspan="5">No data found...</td>
                        </tr>
                    <?php } ?>
                    
                                        
                                        </tbody>
                                    </table>
                                </div> 
                            </div> 
                            </div> <!-- end col-->
                        </div>
                        <!-- end row-->
                        
                    </div> <!-- container -->

                </div> <!-- content -->

                <?php $this->load->view("gf_console/sections/footer.php"); ?>
        
            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

        

        <?php $this->load->view("gf_console/sections/scripts.php"); ?>
    </body>
</html>
