<?php 
$dash_array =  $this->db->order_by('dash_level', 'ASC')->like('dash_grp',$u_type)->get_where('dash_tbl',array('dash_status'=>"active"))->result_array();

if ((is_array($dash_array) || is_object($dash_array)) && count($dash_array) > '0'){
    foreach($dash_array as $k_dash=>$v_dash) {
        require "snips/".$dash_array[$k_dash]["dash_data"];
    }
}else{
    echo "<i><b>No Dashboard Data Available</i></b>";
}
?>