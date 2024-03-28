<?php


class Home_model extends CI_Model
{

    // public function get_comments($id)
    // {
    //     $this->db->select("*");
    //     $this->db->from("campaign_adata_tbl");
    //     $this->db->where("campaign_code", $id);
    //     $query = $this->db->get();
    //     return $query->result_array();
    // }
    public function get_competition_deatils(){
        $this->db->select('*');
        $this->db->from('comp_tbl');
        $this->db->join('sub_tbl','sub_tbl.sub_id = comp_tbl.sub_id');
        $this->db->where('comp_stats','ongoing' or 'upcoming' or 'active');
        $query = $this->db->get();
        return $query->result();    
  
    }

    public function add_to_msg_tbl($data)
    {
        $this->db->insert("msg_tbl", $data);
        return $this->db->insert_id();
    }

}
