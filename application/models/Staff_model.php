<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff_model extends CI_Model {


    function insert_staff($data)
    {
        $this->db->insert("staff_tbl",$data);
        return $this->db->insert_id();
    }

    function select_staff()
    {
        $this->db->order_by('staff_tbl.id','DESC');
        $this->db->select("staff_tbl.*,department_tbl.department_name,lob_tbl.lob_name,employeestatus_tbl.employeestatus_name,position_tbl.position_name,modeofpayroll_tbl.modeofpayroll_name");
        $this->db->from("staff_tbl");
        $this->db->join("department_tbl",'department_tbl.id=staff_tbl.department_id');
         $this->db->join("lob_tbl",'lob_tbl.id=staff_tbl.lob_id');
         $this->db->join("employeestatus_tbl",'employeestatus_tbl.id=staff_tbl.emp_status_id');
         $this->db->join("position_tbl",'position_tbl.id=staff_tbl.emp_position_id');
         $this->db->join("modeofpayroll_tbl",'modeofpayroll_tbl.id=staff_tbl.emp_modeofpayroll_id');
       
        
        $qry=$this->db->get();
        if($qry->num_rows()>0)
        {
            $result=$qry->result_array();
            return $result;
        }
    }

    function select_staff_byID($id)
    {
        $this->db->where('staff_tbl.id',$id);
        $this->db->select("staff_tbl.*,department_tbl.department_name");
        $this->db->from("staff_tbl");
        $this->db->join("department_tbl",'department_tbl.id=staff_tbl.department_id');
        $qry=$this->db->get();
        if($qry->num_rows()>0)
        {
            $result=$qry->result_array();
            return $result;
        }
    }

    function select_staff_byEmail($email)
    {

        $this->db->where('email',$email);
        $qry=$this->db->get('staff_tbl');
        if($qry->num_rows()>0)
        {
            $result=$qry->result_array();
            return $result;
        }
    }

    function select_staff_byDept($dpt)
    {
        $this->db->where('staff_tbl.department_id',$dpt);
        $this->db->select("staff_tbl.*,department_tbl.department_name");
        $this->db->from("staff_tbl");
        $this->db->join("department_tbl",'department_tbl.id=staff_tbl.department_id');
        $qry=$this->db->get();
        if($qry->num_rows()>0)
        {
            $result=$qry->result_array();
            return $result;
        }
    }


    function delete_staff($id)
    {
        $this->db->where('id', $id);
        $this->db->delete("staff_tbl");
        $this->db->affected_rows();
    }

    
    function update_staff($data,$id)
    {
        $this->db->where('id', $id);
        $this->db->update('staff_tbl',$data);
        $this->db->affected_rows();
    }

    

    
    




}
