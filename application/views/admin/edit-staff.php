  <style>
  .floatybox {
     display: inline-block;
     width: 123px;
}
  </style>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Staff Management
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Staff Management</a></li>
        <li class="active">Edit Staff</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">

        <?php echo validation_errors('<div class="col-md-12">
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h4><i class="icon fa fa-check"></i> Failed!</h4>', '</div>
          </div>'); ?>

        <?php if($this->session->flashdata('success')): ?>
          <div class="col-md-12">
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h4><i class="icon fa fa-check"></i> Success!</h4>
                  <?php echo $this->session->flashdata('success'); ?>
            </div>
          </div>
        <?php elseif($this->session->flashdata('error')):?>
        <div class="col-md-12">
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h4><i class="icon fa fa-check"></i> Failed!</h4>
                  <?php echo $this->session->flashdata('error'); ?>
            </div>
          </div>
        <?php endif;?>

        <!-- column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Staff</h3>
            </div>
            <!-- /.box-header -->

            <?php if(isset($content)): ?>
              <?php foreach($content as $cnt): ?>
                  <!-- form start -->
                  <?php echo form_open_multipart('Staff/update');?>
                    <div class="box-body">

                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Employee ID</label>
                          <input type="hidden" name="txtid" value="<?php echo $cnt['id'] ?>" class="form-control" placeholder="EMPLOYEE ID">
                          <input type="text" name="txtempid" value="<?php echo $cnt['emp_id'] ?>" class="form-control" placeholder="eme">
                        </div>
                      </div>


                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Full Name</label>
                          <input type="hidden" name="txtid" value="<?php echo $cnt['id'] ?>" class="form-control" placeholder="Full Name">
                          <input type="text" name="txtname" value="<?php echo $cnt['staff_name'] ?>" class="form-control" placeholder="Full Name">
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Department</label>
                          <select class="form-control" name="slcdepartment">
                            <option value="">Select</option>
                            <?php
                            if(isset($department))
                            {
                              foreach($department as $cnt1)
                              {
                                if($cnt1['id']==$cnt['department_id'])
                                {
                                  print "<option value='".$cnt1['id']."' selected>".$cnt1['department_name']."</option>";
                                }
                                else{
                                  print "<option value='".$cnt1['id']."'>".$cnt1['department_name']."</option>";
                                }
                              }
                            } 
                            ?>
                          </select>
                        </div>
                      </div>


                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Position</label>
                          <select class="form-control" name="slcposition">
                            <option value="">Select</option>
                            <?php
                            if(isset($position))
                            {
                              foreach($position as $cnt1)
                              {
                                if($cnt1['id']==$cnt['emp_position_id'])
                                {
                                  print "<option value='".$cnt1['id']."' selected>".$cnt1['position_name']."</option>";
                                }
                                else{
                                  print "<option value='".$cnt1['id']."'>".$cnt1['position_name']."</option>";
                                }
                              }
                            } 
                            ?>
                          </select>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label>LINE OF BUSINESS</label>
                          <select class="form-control" name="slclob">
                            <option value="">Select</option>
                            <?php
                            if(isset($lob))
                            {
                              foreach($lob as $cnt1)
                              {
                                if($cnt1['id']==$cnt['lob_id'])
                                {
                                  print "<option value='".$cnt1['id']."' selected>".$cnt1['lob_name']."</option>";
                                }
                                else{
                                  print "<option value='".$cnt1['id']."'>".$cnt1['lob_name']."</option>";
                                }
                              }
                            } 
                            ?>
                          </select>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Gender</label>
                          <select class="form-control" name="slcgender">
                            <option value="">Select</option>
                            <?php
                            if($cnt['gender']=='Male')
                            {
                              print '<option value="Male" selected>Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Others">Others</option>';
                            }
                            elseif($cnt['gender']=='Femle')
                            {
                              print '<option value="Male">Male</option>
                                    <option value="Female" selected>Female</option>
                                    <option value="Others">Others</option>';
                            }
                            elseif($cnt['gender']=='Others')
                            {
                              print '<option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Others" selected>Others</option>';
                            }
                            else{
                              print '<option value="Male">Male</option>
                              <option value="Female">Female</option>
                              <option value="Others">Others</option>';
                            }
                            ?>
                          </select>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Email</label>
                          <input type="text" name="txtemail" value="<?php echo $cnt['email'] ?>" class="form-control" placeholder="Email">
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Mobile</label>
                          <input type="text" name="txtmobile" value="<?php echo $cnt['mobile'] ?>" class="form-control" placeholder="Mobile">
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label>SSS ID #</label>
                          <input type="text" name="txtsss" value="<?php echo $cnt['emp_sssid'] ?>" class="form-control" placeholder="sss id">
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label>PHILHEALTH ID #</label>
                          <input type="text" name="txtphlt" value="<?php echo $cnt['emp_phic'] ?>" class="form-control" placeholder="philhealth id">
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label>TIN ID #</label>
                          <input type="text" name="txttin" value="<?php echo $cnt['emp_tin'] ?>" class="form-control" placeholder="txttin id">
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label>PAGIBIG ID #</label>
                          <input type="text" name="txtpgbg" value="<?php echo $cnt['emp_pagibig'] ?>" class="form-control" placeholder="pagibig id">
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label>BANK ACCOUNT #</label>
                          <input type="text" name="txtbank" value="<?php echo $cnt['emp_bankacct'] ?>" class="form-control" placeholder="bank account id">
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label>MODE OF PAYROLL</label>
                          <select class="form-control" name="slcmodeofpayroll">
                            <option value="">Select</option>
                            <?php
                            if(isset($modeofpayroll))
                            {
                              foreach($modeofpayroll as $cnt1)
                              {
                                if($cnt1['id']==$cnt['emp_modeofpayroll_id'])
                                {
                                  print "<option value='".$cnt1['id']."' selected>".$cnt1['modeofpayroll_name']."</option>";
                                }
                                else{
                                  print "<option value='".$cnt1['id']."'>".$cnt1['modeofpayroll_name']."</option>";
                                }
                              }
                            } 
                            ?>
                          </select>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label>EMPLOYEE STATUS</label>
                          <select class="form-control" name="slcemployeestatus">
                            <option value="">Select</option>
                            <?php
                            if(isset($employeestatus))
                            {
                              foreach($employeestatus as $cnt1)
                              {
                                if($cnt1['id']==$cnt['emp_status_id'])
                                {
                                  print "<option value='".$cnt1['id']."' selected>".$cnt1['employeestatus_name']."</option>";
                                }
                                else{
                                  print "<option value='".$cnt1['id']."'>".$cnt1['employeestatus_name']."</option>";
                                }
                              }
                            } 
                            ?>
                          </select>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Photo</label>
                          <input type="file" name="filephoto" value="<?php echo base_url(); ?>uploads/profile-pic/<?php echo $cnt['pic'] ?>" class="form-control">
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Date of Birth</label>
                          <input type="date" name="txtdob" value="<?php echo $cnt['dob'] ?>" class="form-control" placeholder="DOB">
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Date of Joining</label>
                          <input type="date" name="txtdoj" value="<?php echo $cnt['doj'] ?>" class="form-control" placeholder="DOJ">
                        </div>
                      </div>
                      
                      <!-- <div class="col-md-6">
                        <div class="form-group">
                          <label>City</label>
                          <input type="text" name="txtcity" value="<?php echo $cnt['city'] ?>" class="form-control" placeholder="City">
                        </div>
                      </div> -->

                      <!-- <div class="col-md-6">
                        <div class="form-group">
                          <label>State</label>
                          <input type="text" name="txtstate" value="<?php echo $cnt['state'] ?>" class="form-control" placeholder="State">
                        </div>
                      </div -->>

                      <!-- <div class="col-md-6">
                        <div class="form-group">
                          <label>Country</label>
                          <select class="form-control" name="slccountry">
                            <option value="">Select</option>
                            <?php
                              if(isset($country))
                              {
                                foreach ($country as $cnt1)
                                {
                                  if($cnt1['country_name']==$cnt['country'])
                                  {
                                    print "<option value='".$cnt1['country_name']."' selected>".$cnt1['country_name']."</option>";
                                  }
                                  else{
                                    print "<option value='".$cnt1['country_name']."'>".$cnt1['country_name']."</option>";
                                  }
                                  
                                }
                              }
                            ?>
                          </select>
                        </div>
                      </div> -->

                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Address</label>
                          <textarea class="form-control" name="txtaddress"><?php echo $cnt['address'] ?></textarea>
                        </div>
                      </div>
                      
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                      <button type="submit" class="btn btn-success pull-right">Submit</button>
                    </div>
                  </form>
                <?php endforeach; ?>
            <?php endif; ?>
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (left) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->