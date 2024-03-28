<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Verify_m extends CI_Model{
    
    function __construct() {
        $this->table = 'users_tbl';
        $this->column_order = array('u_id');
        $this->order = array('u_id' => 'desc');
    }
    public function update_user($u_id, $type){
        $this->db->where('u_id', $u_id);
        if($this->db->update($this->table, array($type => "valid"))){
            return true;
        }else{
            return false;
        }
    }
}