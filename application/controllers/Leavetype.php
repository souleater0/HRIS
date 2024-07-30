<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Leavetype extends CI_Controller {

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
        $this->load->view('admin/add-leavetype');
        $this->load->view('admin/footer');
    }

    public function manage_leavetype()
    {
        $data['content']=$this->Leavetype_model->select_leavetype();
        $this->load->view('admin/header');
        $this->load->view('admin/manage-leavetype',$data);
        $this->load->view('admin/footer');
    }

    public function insert()
    {
        $leavetype=$this->input->post('txtleavetype');
        $data=$this->Leavetype_model->insert_leavetype(array('leavetype_name'=>$leavetype));
        if($data==true)
        {
            $this->session->set_flashdata('success', "New leave type Added Succesfully"); 
        }else{
            $this->session->set_flashdata('error', "Sorry, New leave type Adding Failed.");
        }
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function update()
    {
        $id=$this->input->post('txtid');
        $leavetype=$this->input->post('txtleavetype');
        $data=$this->Leavetype_model->update_leavetype(array('leavetype_name'=>$leavetype),$id);
        if($this->db->affected_rows() > 0)
        {
            $this->session->set_flashdata('success', "leave type Updated Succesfully"); 
        }else{
            $this->session->set_flashdata('error', "Sorry, leave type Update Failed.");
        }
        redirect(base_url()."leavetype/manage_leavetype");
    }


    function edit($id)
    {
        $data['content']=$this->Leavetype_model->select_leavetype_byID($id);
        $this->load->view('admin/header');
        $this->load->view('admin/edit-leavetype',$data);
        $this->load->view('admin/footer');
    }


    function delete($id)
    {
        $data=$this->Leavetype_model->delete_leavetype($id);
        if($this->db->affected_rows() > 0)
        {
            $this->session->set_flashdata('success', "leave type Deleted Succesfully"); 
        }else{
            $this->session->set_flashdata('error', "Sorry, leave type Delete Failed.");
        }
        redirect($_SERVER['HTTP_REFERER']);
    }



}
