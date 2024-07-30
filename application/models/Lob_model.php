<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lob_model extends CI_Model {


    function insert_lob($data)
    {
        $this->db->insert("lob_tbl",$data);
        return $this->db->insert_id();
    }

    function select_lob()
    {
        $qry=$this->db->get('lob_tbl');
        if($qry->num_rows()>0)
        {
            $result=$qry->result_array();
            return $result;
        }
    }

    function select_lob_byID($id)
    {

        $this->db->where('id',$id);
        $qry=$this->db->get('lob_tbl');
        if($qry->num_rows()>0)
        {
            $result=$qry->result_array();
            return $result;
        }
    }

    function delete_lob($id)
    {
        $this->db->where('id', $id);
        $this->db->delete("lob_tbl");
        $this->db->affected_rows();
    }

    

    function update_lob($data,$id)
    {
        $this->db->where('id', $id);
        $this->db->update('lob_tbl',$data);
        $this->db->affected_rows();
    }

    




}
