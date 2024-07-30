<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends CI_Controller {

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
        $data['department']=$this->Department_model->select_departments();
        $data['position']=$this->Position_model->select_position();
        $data['country']=$this->Home_model->select_countries();
        $data['modeofpayroll']=$this->Modeofpayroll_model->select_modeofpayroll();
        $data['lob']=$this->Lob_model->select_lob();
        $data['employeestatus']=$this->Employeestatus_model->select_employeestatus();
        $this->load->view('admin/header');
        $this->load->view('admin/add-staff',$data);
        $this->load->view('admin/footer');
    }

    public function manage()
    {
        $data['content']=$this->Staff_model->select_staff();
        $this->load->view('admin/header');
        $this->load->view('admin/manage-staff',$data);
        $this->load->view('admin/footer');
    }

    public function insert()
    {
        // $this->form_validation->set_rules('txtname', 'Full Name', 'required');
        // $this->form_validation->set_rules('slcgender', 'Gender', 'required');
        // $this->form_validation->set_rules('slcdepartment', 'Department', 'required');
        // $this->form_validation->set_rules('txtemail', 'Email', 'trim|required|valid_email');
        
         $this->form_validation->set_rules('txtempid', 'Employee ID', 'required');
        $this->form_validation->set_rules('txtname', 'Full Name', 'required');
        $this->form_validation->set_rules('slcgender', 'Gender', 'required');
         $this->form_validation->set_rules('slcposition', 'Position', 'required');
         $this->form_validation->set_rules('slclob', 'LINE OF BUSINESS', 'required');
        $this->form_validation->set_rules('slcdepartment', 'Department', 'required');
        $this->form_validation->set_rules('txtemail', 'Email');
        $this->form_validation->set_rules('txtmobile', 'Mobile Number', 'required');
        $this->form_validation->set_rules('txtdob', 'Date of Birth', 'required');
        $this->form_validation->set_rules('txtdoj', 'Date of Joining', 'required');
        $this->form_validation->set_rules('txtsss', 'SSS ID #', 'required');
        $this->form_validation->set_rules('txtphlt', 'PHILHEALT ID #', 'required');
        $this->form_validation->set_rules('txttin', 'TIN ID #', 'required');
        $this->form_validation->set_rules('txtbank','BANK ACCOUNT #', 'required');
        $this->form_validation->set_rules('slcmodeofpayroll', 'MODE OF PAYROLL', 'required');
        $this->form_validation->set_rules('slcemployeestatus', 'EMPLOYEE STATUS', 'required');

    
        $empid=$this->input->post('txtempid');
        $name=$this->input->post('txtname');
        $gender=$this->input->post('slcgender');
        $position=$this->input->post('slcposition');
        $department=$this->input->post('slcdepartment');
        $lob=$this->input->post('slclob');
        $email=$this->input->post('txtemail');
        $mobile=$this->input->post('txtmobile');
        $dob=$this->input->post('txtdob');
        $doj=$this->input->post('txtdoj');
        $sssid=$this->input->post('txtsss');
        $phltid=$this->input->post('txtphlt');
        $tinid=$this->input->post('txttin');
        $pgbgid=$this->input->post('txtpgbg');
        $bank=$this->input->post('txtbank');
        $modeofpayroll=$this->input->post('slcmodeofpayroll');
        $employeestatus=$this->input->post('slcemployeestatus');
        $address=$this->input->post('txtaddress');
        $added=$this->session->userdata('userid');

        if($this->form_validation->run() !== false)
        {
            $this->load->library('image_lib');
            $config['upload_path']= 'uploads/profile-pic/';
            $config['allowed_types'] ='gif|jpg|png|jpeg';
            $this->load->library('upload', $config);
            if ( ! $this->upload->do_upload('filephoto'))
            {
                $image='default-pic.jpg';
            }
            else
            {
                $image_data =   $this->upload->data();

                $configer =  array(
                  'image_library'   => 'gd2',
                  'source_image'    =>  $image_data['full_path'],
                  'maintain_ratio'  =>  TRUE,
                  'width'           =>  150,
                  'height'          =>  150,
                  'quality'         =>  50
                );
                $this->image_lib->clear();
                $this->image_lib->initialize($configer);
                $this->image_lib->resize();
                
                $image=$image_data['file_name'];
            }
            $login=$this->Home_model->insert_login(array('username'=>$email,'password'=>$mobile,'usertype'=>2));
            if($login>0)
            {
                $data=$this->Staff_model->insert_staff(array('id'=>$login,'emp_id'=>$empid,'staff_name'=>$name,'gender'=>$gender,'emp_position_id'=>$position,'lob_id'=>$lob,'email'=>$email,'mobile'=>$mobile,'dob'=>$dob,'doj'=>$doj,'address'=>$address,'department_id'=>$department,'pic'=>$image,'emp_sssid'=>$sssid,'emp_phic'=>$phltid,'emp_pagibig'=>$pgbgid,'emp_tin'=>$tinid,'emp_bankacct'=>$bank,'emp_modeofpayroll_id'=>$modeofpayroll,'emp_status_id'=>$employeestatus,'added_by'=>$added));
            }
            
            if($data==true)
            {
                
                $this->session->set_flashdata('success', "New Staff Added Succesfully"); 
            }else{
                $this->session->set_flashdata('error', "Sorry, New Staff Adding Failed.");
            }
            redirect($_SERVER['HTTP_REFERER']);
        }
        else{
            $this->index();
            return false;

        } 
    }

    public function update()
    {
        // $this->load->helper('form');
        // $this->form_validation->set_rules('txtname', 'Full Name');
        // $this->form_validation->set_rules('slcgender', 'Gender');
        // $this->form_validation->set_rules('slcdepartment', 'Department');
        // $this->form_validation->set_rules('txtemail', 'Email', 'trim|valid_email');
        // $this->form_validation->set_rules('txtmobile', 'Mobile Number');
        // $this->form_validation->set_rules('txtdob', 'Date of Birth',);
        // $this->form_validation->set_rules('txtdoj', 'Date of Joining',);
       
        
        // $id=$this->input->post('txtid');
        // $name=$this->input->post('txtname');
        // $gender=$this->input->post('slcgender');
        // $department=$this->input->post('slcdepartment');
        // $email=$this->input->post('txtemail');
        // $mobile=$this->input->post('txtmobile');
        // $dob=$this->input->post('txtdob');
        // $doj=$this->input->post('txtdoj');
        // $address=$this->input->post('txtaddress');

         $this->form_validation->set_rules('txtempid', 'Employee ID', 'required');
        $this->form_validation->set_rules('txtname', 'Full Name', 'required');
        $this->form_validation->set_rules('slcgender', 'Gender', 'required');
         $this->form_validation->set_rules('slcposition', 'Position', 'required');
        $this->form_validation->set_rules('slcdepartment', 'Department', 'required');
        $this->form_validation->set_rules('slclob', 'LINE OF BUSINESS', 'required');
        $this->form_validation->set_rules('txtemail', 'Email');
        $this->form_validation->set_rules('txtmobile', 'Mobile Number', 'required');
        $this->form_validation->set_rules('txtdob', 'Date of Birth', 'required');
        $this->form_validation->set_rules('txtdoj', 'Date of Joining', 'required');
        $this->form_validation->set_rules('txtsss', 'SSS ID #', 'required');
        $this->form_validation->set_rules('txtphlt', 'PHILHEALT ID #', 'required');
        $this->form_validation->set_rules('txttin', 'TIN ID #', 'required');
        $this->form_validation->set_rules('txtbank','BANK ACCOUNT #', 'required');
        $this->form_validation->set_rules('slcmodeofpayroll', 'MODE OF PAYROLL', 'required');
        $this->form_validation->set_rules('slcemployeestatus', 'EMPLOYEE STATUS', 'required');

        $id=$this->input->post('txtid');
        $empid=$this->input->post('txtempid');
        $name=$this->input->post('txtname');
        $gender=$this->input->post('slcgender');
        $position=$this->input->post('slcposition');
        $lob=$this->input->post('slclob');
        $department=$this->input->post('slcdepartment');
        $email=$this->input->post('txtemail');
        $mobile=$this->input->post('txtmobile');
        $dob=$this->input->post('txtdob');
        $doj=$this->input->post('txtdoj');
        $sssid=$this->input->post('txtsss');
        $phltid=$this->input->post('txtphlt');
        $tinid=$this->input->post('txttin');
        $pgbgid=$this->input->post('txtpgbg');
        $bank=$this->input->post('txtbank');
        $modeofpayroll=$this->input->post('slcmodeofpayroll');
        $employeestatus=$this->input->post('slcemployeestatus');
        $address=$this->input->post('txtaddress');

        if($this->form_validation->run() !== false)
        {
            $this->load->library('image_lib');
            $config['upload_path']= 'uploads/profile-pic/';
            $config['allowed_types'] ='gif|jpg|png|jpeg';
            $this->load->library('upload', $config);
            if ( ! $this->upload->do_upload('filephoto'))
            {
                $data=$this->Staff_model->update_staff(array('emp_id'=>$empid,'staff_name'=>$name,'gender'=>$gender,'emp_position_id'=>$position,'lob_id'=>$lob,'email'=>$email,'mobile'=>$mobile,'dob'=>$dob,'doj'=>$doj,'address'=>$address,'department_id'=>$department,'emp_sssid'=>$sssid,'emp_phic'=>$phltid,'emp_pagibig'=>$pgbgid,'emp_tin'=>$tinid,'emp_bankacct'=>$bank,'emp_modeofpayroll_id'=>$modeofpayroll,'emp_status_id'=>$employeestatus,'added_by'=>$added),$id);
            }
            else
            {
                $image_data =   $this->upload->data();

                $configer =  array(
                  'image_library'   => 'gd2',
                  'source_image'    =>  $image_data['full_path'],
                  'maintain_ratio'  =>  TRUE,
                  'width'           =>  150,
                  'height'          =>  150,
                  'quality'         =>  50
                );
                $this->image_lib->clear();
                $this->image_lib->initialize($configer);
                $this->image_lib->resize();

                $data=$this->Staff_model->update_staff(array('emp_id'=>$empid,'staff_name'=>$name,'gender'=>$gender,'emp_position_id'=>$position,'lob_id'=>$lob,'email'=>$email,'mobile'=>$mobile,'dob'=>$dob,'doj'=>$doj,'address'=>$address,'department_id'=>$department,'pic'=>$image_data['file_name'],'emp_sssid'=>$sssid,'emp_phic'=>$phltid,'emp_pagibig'=>$pgbgid,'emp_tin'=>$tinid,'emp_bankacct'=>$bank,'emp_modeofpayroll_id'=>$modeofpayroll,'emp_status_id'=>$employeestatus),$id);
            }
            
            if($this->db->affected_rows() > 0)
            {
                $this->session->set_flashdata('success', "Staff Updated Succesfully"); 
            }else{
                $this->session->set_flashdata('error', "Sorry, Staff Updated Failed.");
            }
            redirect(base_url()."manage-staff");
        }
        else{
            $this->index();
            return false;

        } 
    }


    function edit($id)
    {
         $data['department']=$this->Department_model->select_departments();
         $data['lob']=$this->Lob_model->select_lob();
        $data['position']=$this->Position_model->select_position();
        $data['country']=$this->Home_model->select_countries();
        $data['modeofpayroll']=$this->Modeofpayroll_model->select_modeofpayroll();
        $data['employeestatus']=$this->Employeestatus_model->select_employeestatus();
        $data['content']=$this->Staff_model->select_staff_byID($id);
        $this->load->view('admin/header');
        $this->load->view('admin/edit-staff',$data);
        $this->load->view('admin/footer');
    }


    function delete($id)
    {
        $this->Home_model->delete_login_byID($id);
        $data=$this->Staff_model->delete_staff($id);
        if($this->db->affected_rows() > 0)
        {
            $this->session->set_flashdata('success', "Staff Deleted Succesfully"); 
        }else{
            $this->session->set_flashdata('error', "Sorry, Staff Delete Failed.");
        }
        redirect($_SERVER['HTTP_REFERER']);
    }

    



}
