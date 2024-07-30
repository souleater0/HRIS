<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modeofpayroll extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        // $this->load->model('Position_model');
        if ( ! $this->session->userdata('logged_in'))
        { 
            redirect(base_url().'login');
        }
    }

    public function index()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/add-modeofpayroll');
        $this->load->view('admin/footer');
    }

    public function manage_modeofpayroll()
    {
        $data['content']=$this->Modeofpayroll_model->select_modeofpayroll();
        $this->load->view('admin/header');
        $this->load->view('admin/manage-modeofpayroll',$data);
        $this->load->view('admin/footer');
    }

    public function insert()
    {
        $modeofpayroll=$this->input->post('txtmodeofpayroll');
        $data=$this->Modeofpayroll_model->insert_modeofpayroll(array('modeofpayroll_name'=>$modeofpayroll));
        if($data)
        {
            $this->session->set_flashdata('success', "New 1 Added Succesfully"); 
        }else{
            $this->session->set_flashdata('error', "Sorry, New 1 Adding Failed.");
        }
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function update()
    {
        $id=$this->input->post('txtid');
        $modeofpayroll=$this->input->post('txtmodeofpayroll');
        $data=$this->Modeofpayroll_model->update_modeofpayroll(array('modeofpayroll_name'=>$modeofpayroll),$id);
        if($this->db->affected_rows() > 0)
        {
            $this->session->set_flashdata('success', "2 Updated Succesfully"); 
        }else{
            $this->session->set_flashdata('error', "Sorry, 2 Update Failed.");
        }
        redirect(base_url()."modeofpayroll/manage_modeofpayroll");
    }


    function edit($id)
    {
        $data['content']=$this->Modeofpayroll_model->select_modeofpayroll_byID($id);
        $this->load->view('admin/header');
        $this->load->view('admin/edit-modeofpayroll',$data);
        $this->load->view('admin/footer');
    }


    function delete($id)
    {
        $data=$this->Modeofpayroll_model->delete_modeofpayroll($id);
        if($this->db->affected_rows() > 0)
        {
            $this->session->set_flashdata('success', "3 Deleted Succesfully"); 
        }else{
            $this->session->set_flashdata('error', "Sorry, 3 Delete Failed.");
        }
        redirect($_SERVER['HTTP_REFERER']);
    }



}
