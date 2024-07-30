<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modeofpayroll_model extends CI_Model {


    function insert_modeofpayroll($data)
    {
        $this->db->insert("modeofpayroll_tbl",$data);
        return $this->db->insert_id();
    }

    function select_modeofpayroll()
    {
        $qry=$this->db->get('modeofpayroll_tbl');
        if($qry->num_rows()>0)
        {
            $result=$qry->result_array();
            return $result;
        }
    }

    function select_modeofpayroll_byID($id)
    {

        $this->db->where('id',$id);
        $qry=$this->db->get('modeofpayroll_tbl');
        if($qry->num_rows()>0)
        {
            $result=$qry->result_array();
            return $result;
        }
    }

    function delete_modeofpayroll($id)
    {
        $this->db->where('id', $id);
        $this->db->delete("modeofpayroll_tbl");
        $this->db->affected_rows();
    }

    

    function update_modeofpayroll($data,$id)
    {
        $this->db->where('id', $id);
        $this->db->update('modeofpayroll_tbl',$data);
        $this->db->affected_rows();
    }

    




}
