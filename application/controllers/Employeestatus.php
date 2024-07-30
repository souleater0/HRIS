<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employeestatus extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        if ( ! $this->session->userdata('logged_in'))
        { 
            redirect(base_url().'login');
        }
    }

    public function index()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/add-employeestatus');
        $this->load->view('admin/footer');
    }

    public function manage_employeestatus()
    {
        $data['content']=$this->Employeestatus_model->select_employeestatus();
        $this->load->view('admin/header');
        $this->load->view('admin/manage-employeestatus',$data);
        $this->load->view('admin/footer');
    }

    public function insert()
    {
        $employeestatus=$this->input->post('txtemployeestatus');
        $data=$this->Employeestatus_model->insert_employeestatus(array('employeestatus_name'=>$employeestatus));
        if($data==true)
        {
            $this->session->set_flashdata('success', "New employee status Added Succesfully"); 
        }else{
            $this->session->set_flashdata('error', "Sorry, New employee status Adding Failed.");
        }
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function update()
    {
        $id=$this->input->post('txtid');
        $employeestatus=$this->input->post('txtemployeestatus');
        $data=$this->Employeestatus_model->update_employeestatus(array('employeestatus_name'=>$employeestatus),$id);
        if($this->db->affected_rows() > 0)
        {
            $this->session->set_flashdata('success', "employee status Updated Succesfully"); 
        }else{
            $this->session->set_flashdata('error', "Sorry, employee status Update Failed.");
        }
        redirect(base_url()."department/manage_employeestatus");
    }


    function edit($id)
    {
        $data['content']=$this->Employeestatus_model->select_employeestatus_byID($id);
        $this->load->view('admin/header');
        $this->load->view('admin/edit-employeestatus',$data);
        $this->load->view('admin/footer');
    }


    function delete($id)
    {
        $data=$this->Employeestatus_model->delete_employeestatus($id);
        if($this->db->affected_rows() > 0)
        {
            $this->session->set_flashdata('success', "employee status Deleted Succesfully"); 
        }else{
            $this->session->set_flashdata('error', "Sorry, employee status Delete Failed.");
        }
        redirect($_SERVER['HTTP_REFERER']);
    }



}
