<!-- ========== Left Sidebar Start ========== -->
<div class="leftside-menu">

    <!-- LOGO -->
    <a href="<?php echo base_url() ?>" class="logo text-center logo-light">
        <span class="logo-lg">
            <img src="<?php echo base_url() ?>assets/images/logo.png" alt="" height="50">
        </span>
        <span class="logo-sm">
            <img src="<?php echo base_url() ?>assets/images/favicon.png" alt="" height="45">
        </span>
    </a>

    <!-- LOGO -->
    <a href="<?php echo base_url() ?>" class="logo text-center logo-dark">
        <span class="logo-lg">
            <img src="<?php echo base_url() ?>assets/images/logo.png" alt="" height="50">
        </span>
        <span class="logo-sm">
            <img src="<?php echo base_url() ?>assets/images/favicon.png" alt="" height="45">
        </span>
    </a>

<!-- Sidebar -left -->
<div class="h-100" id="leftside-menu-container" data-simplebar>
    <!--- Sidemenu -->
    <ul class="side-nav">
        <?php 
        $data_navc = $this->db->order_by('navc_level', 'ASC')->like('navc_grp',$u_type)->get_where('navc_tbl',array('navc_status'=>"active"))->result_array();
        if ((is_array($data_navc) || is_object($data_navc))){
			foreach($data_navc as $k_navc=>$v_navc) {
			$navc_type = $data_navc[$k_navc]["navc_type"];
			$navc_id = $data_navc[$k_navc]["navc_id"];
        ?>
        <li class="side-nav-item">
        <?php if($navc_type == "no_sub"){?>
            <a href="<?php echo base_url() ?><?php echo $data_navc[$k_navc]["navc_data"]; ?>" class="side-nav-link">
                <i class="<?php echo $data_navc[$k_navc]["navc_icon"]; ?>"></i>
                <span> <?php echo $data_navc[$k_navc]["navc_name"]; ?> </span>
            </a>
		</li>
		<?php }elseif($navc_type == "sub"){?>
            <a data-bs-toggle="collapse" href="#<?php echo $data_navc[$k_navc]["navc_name"]; ?>" aria-expanded="false" aria-controls="<?php echo $data_navc[$k_navc]["navc_name"]; ?>" class="side-nav-link">
                    <i class="<?php echo $data_navc[$k_navc]["navc_icon"]; ?>"></i>
                    <span> <?php echo $data_navc[$k_navc]["navc_name"]; ?> </span>
                    <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="<?php echo $data_navc[$k_navc]["navc_name"]; ?>">
                <ul class="side-nav-second-level">
                    <?php
                    $data_navm = $this->db->order_by('navm_level', 'ASC')->like('navm_grp',$u_type)->get_where('navm_tbl',array('navc_id'=>$navc_id, 'navm_status'=>"active"))->result_array();
                    if ((is_array($data_navm) || is_object($data_navm))){
                        foreach($data_navm as $k_navm=>$v_navm) {
                    ?>
                    <li><a href="<?php echo base_url() ?><?php echo $data_navm[$k_navm]["navm_data"]; ?>"><?php echo $data_navm[$k_navm]["navm_name"]; ?></a></li>
                    <?php 
					}
					}
					?>
                </ul>
            </div>
        </li>
        <?php 
                }
            }
        }
        ?>
        <!-- <li class="side-nav-item">
            <a href="#" class="side-nav-link">
                <i class="uil-layer-group"></i>
                <span> Widgets </span>
            </a>
        </li> -->
    </ul>
    <!--- End Sidemenu -->

    <div class="clearfix"></div>
</div>
</div>
<!-- ========== Left Sidebar End ========== -->