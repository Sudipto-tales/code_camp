<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Update_m extends CI_Model{
    
    public function index(){
        //Nothing to run here
    }
    public function save_data($tbl_name, $tbl_ucol, $tbl_uid, $tbl_col, $new_data){
        $data = array(
            $tbl_col=> $new_data,
        );
        $this->db->where($tbl_ucol, $tbl_uid);
        if($this->db->update($tbl_name, $data)){
            return true;
        }else{
            return false;
        }
    }
}