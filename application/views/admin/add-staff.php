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
        <li class="active">Add Staff</li>
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
              <h3 class="box-title">Add Staff</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php echo form_open_multipart('Staff/insert');?>
            <div class="box-body">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>EMPLOYEE ID</label>
                    <input type="text" name="txtempid" class="form-control" placeholder="EX:ECS010101">
                  </div>
                </div>

              <div class="box-body">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Full Name</label>
                    <input type="text" name="txtname" class="form-control" placeholder="Full Name">
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
                                  foreach($department as $cnt)
                                  {
                                    print "<option value='".$cnt['id']."'>".$cnt['department_name']."</option>";
                                  }
                                } 
                                ?>
                              </select>
                            </div>
                          </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>POSITION</label>
                    <select class="form-control" name="slcposition">
                      <option value="">Select</option>
                      <!-- maggagaw ng pang position na management -->
                      <?php
                      if(isset($position))
                      {
                        foreach($position as $cnt)
                        {
                          print "<option value='".$cnt['id']."'>".$cnt['position_name']."</option>";
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
                      <!-- maggagaw ng pang position na management -->
                      <?php
                      if(isset($lob))
                      {
                        foreach($lob as $cnt)
                        {
                          print "<option value='".$cnt['id']."'>".$cnt['lob_name']."</option>";
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
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                      <option value="Others">Others</option>
                    </select>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="txtemail" class="form-control" placeholder="Email">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label>Mobile</label>
                    <input type="text" name="txtmobile" class="form-control" placeholder="Mobile">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label>SSS ID #</label>
                    <input type="text" name="txtsss" class="form-control" placeholder="sss">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label>PHILHEALTH ID #</label>
                    <input type="text" name="txtphlt" class="form-control" placeholder="phil id">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label>TIN ID #</label>
                    <input type="text" name="txttin" class="form-control" placeholder="Mobile">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label>PAGIBIG ID #</label>
                    <input type="text" name="txtpbg" class="form-control" placeholder="PAGIBIG">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label>BANK ACCOUNT # </label>
                    <input type="text" name="txtbank" class="form-control" placeholder="bank">
                  </div>
                </div>

                 <div class="col-md-6">
                  <div class="form-group">
                    <label>MODE OF PAYROLL</label>
                    <select class="form-control" name="slcmodeofpayroll">
                      <option value="">Select</option>
                      <!-- maggagaw ng pang MODE OF PAYROLL na management -->
                      <?php
                      if(isset($modeofpayroll))
                      {
                        foreach($modeofpayroll as $cnt)
                        {
                          print "<option value='".$cnt['id']."'>".$cnt['modeofpayroll_name']."</option>";
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
                      <!-- maggagaw ng pang STATUS na management -->
                      <?php
                      if(isset($employeestatus))
                      {
                        foreach($employeestatus as $cnt)
                        {
                          print "<option value='".$cnt['id']."'>".$cnt['employeestatus_name']."</option>";
                        }
                      } 
                      ?>
                    </select>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label>Photo</label>
                    <input type="file" name="filephoto" class="form-control">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label>Date of Birth</label>
                    <input type="date" name="txtdob" class="form-control" placeholder="DOB">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label>Date of Joining</label>
                    <input type="date" name="txtdoj" class="form-control" placeholder="DOJ">
                  </div>
                </div>
              
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Address</label>
                    <textarea class="form-control" name="txtaddress"></textarea>
                  </div>
                </div>
                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-success pull-right">Submit</button>
              </div>
            </form>
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