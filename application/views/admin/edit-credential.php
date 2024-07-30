  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        CREDENTIAL
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Departments</a></li>
        <li class="active">Edit CREDENTIALS</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">

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
              <h3 class="box-title">Edit CREDENTIAL</h3>
            </div>
            <!-- /.box-header -->

            <?php if(isset($content)): ?>
              <?php foreach($content as $cnt): ?>
                <!-- form start -->
                <form role="form" action="<?php echo base_url(); ?>update-credential" method="POST">
                  <div class="box-body">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>USER Name</label>
                        <input type="hidden" name="txtid" value="<?php echo $cnt['id']; ?>" class="form-control">
                        <input type="text" name="txtusername" value="<?php echo $cnt['username']; ?>" class="form-control" placeholder="username">
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-group">
                        <label>PASSWORD</label>
                        <input type="hidden" name="txtid" value="<?php echo $cnt['id']; ?>" class="form-control">
                        <input type="text" name="txtpassword" value="<?php echo $cnt['password']; ?>" class="form-control" placeholder="password">
                      </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                          <label>USER TYPE</label>
                          <select class="form-control" name="slcusertype">
                            <option value="">Select</option>
                            <?php
                            if(isset($usertype))
                            {
                              foreach($usertype as $cnt1)
                              {
                                if($cnt1['id']==$cnt['usertype'])
                                {
                                  print "<option value='".$cnt1['id']."' selected>".$cnt1['usertype']."</option>";
                                }
                                else{
                                  print "<option value='".$cnt1['id']."'>".$cnt1['usertype']."</option>";
                                }
                              }
                            } 
                            ?>
                          </select>
                        </div>
                      </div>
                    
                  </div>
                  <!-- /.box-body -->
                  <div class="box-footer">
                    <button type="submit" class="btn btn-success pull-right">Update</button>
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