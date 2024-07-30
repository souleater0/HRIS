<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lob extends CI_Controller {

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
        $this->load->view('admin/add-lob');
        $this->load->view('admin/footer');
    }

    public function manage_lob()
    {
        $data['content']=$this->Lob_model->select_lob();
        $this->load->view('admin/header');
        $this->load->view('admin/manage-lob',$data);
        $this->load->view('admin/footer');
    }

    public function insert()
    {
        $lob=$this->input->post('txtlob');
        $data=$this->Lob_model->insert_lob(array('lob_name'=>$lob));
        if($data==true)
        {
            $this->session->set_flashdata('success', "New Line of business Added Succesfully"); 
        }else{
            $this->session->set_flashdata('error', "Sorry, New line of business Adding Failed.");
        }
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function update()
    {
        $id=$this->input->post('txtid');
        $lob=$this->input->post('txtlob');
        $data=$this->Lob_model->update_lob(array('lob_name'=>$lob),$id);
        if($this->db->affected_rows() > 0)
        {
            $this->session->set_flashdata('success', "Line of business Updated Succesfully"); 
        }else{
            $this->session->set_flashdata('error', "Sorry, Line of business Update Failed.");
        }
        redirect(base_url()."lob/manage_lob");
    }


    function edit($id)
    {
        $data['content']=$this->Lob_model->select_lob_byID($id);
        $this->load->view('admin/header');
        $this->load->view('admin/edit-lob',$data);
        $this->load->view('admin/footer');
    }


    function delete($id)
    {
        $data=$this->Lob_model->delete_lob($id);
        if($this->db->affected_rows() > 0)
        {
            $this->session->set_flashdata('success', "Line of business Deleted Succesfully"); 
        }else{
            $this->session->set_flashdata('error', "Sorry, line of business Delete Failed.");
        }
        redirect($_SERVER['HTTP_REFERER']);
    }



}
