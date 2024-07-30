<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Credentials_model extends CI_Model {


    function insert_credential($data)
    {
        $this->db->insert("login_tbl",$data);
        return $this->db->insert_id();
    }

    function select_credential()
    {
        $qry=$this->db->get('login_tbl');
        if($qry->num_rows()>0)
        {
            $result=$qry->result_array();
            return $result;
        }
    }

    function select_credential_byID($id)
    {

        $this->db->where('id',$id);
        $qry=$this->db->get('login_tbl');
        if($qry->num_rows()>0)
        {
            $result=$qry->result_array();
            return $result;
        }
    }

    function delete_credential($id)
    {
        $this->db->where('id', $id);
        $this->db->delete("login_tbl");
        $this->db->affected_rows();
    }

    

    function update_credential($data,$id)
    {
        $this->db->where('id', $id);
        $this->db->update('login_tbl',$data);
        $this->db->affected_rows();
    }

    




}
