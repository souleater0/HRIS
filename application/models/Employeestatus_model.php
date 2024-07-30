<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employeestatus_model extends CI_Model {


    function insert_employeestatus($data)
    {
        $this->db->insert("employeestatus_tbl",$data);
        return $this->db->insert_id();
    }

    function select_employeestatus()
    {
        $qry=$this->db->get('employeestatus_tbl');
        if($qry->num_rows()>0)
        {
            $result=$qry->result_array();
            return $result;
        }
    }

    function select_employeestatus_byID($id)
    {

        $this->db->where('id',$id);
        $qry=$this->db->get('employeestatus_tbl');
        if($qry->num_rows()>0)
        {
            $result=$qry->result_array();
            return $result;
        }
    }

    function delete_employeestatus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete("employeestatus_tbl");
        $this->db->affected_rows();
    }

    

    function update_employeestatus($data,$id)
    {
        $this->db->where('id', $id);
        $this->db->update('employeestatus_tbl',$data);
        $this->db->affected_rows();
    }

    




}
