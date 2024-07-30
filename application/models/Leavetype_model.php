<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Leavetype_model extends CI_Model {


    function insert_leavetype($data)
    {
        $this->db->insert("leavetype_tbl",$data);
        return $this->db->insert_id();
    }

    function select_leavetype()
    {
        $qry=$this->db->get('leavetype_tbl');
        if($qry->num_rows()>0)
        {
            $result=$qry->result_array();
            return $result;
        }
    }

    function select_leavetype_byID($id)
    {

        $this->db->where('id',$id);
        $qry=$this->db->get('leavetype_tbl');
        if($qry->num_rows()>0)
        {
            $result=$qry->result_array();
            return $result;
        }
    }

    function delete_leavetype($id)
    {
        $this->db->where('id', $id);
        $this->db->delete("leavetype_tbl");
        $this->db->affected_rows();
    }

    

    function update_leavetype($data,$id)
    {
        $this->db->where('id', $id);
        $this->db->update('leavetype_tbl',$data);
        $this->db->affected_rows();
    }

    




}
