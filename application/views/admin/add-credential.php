  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        CREDENTIAL
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">CREDENTIAL</a></li>
        <li class="active">Add CREDENTIALS</li>
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
              <h3 class="box-title">Add CREDENTIAL</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?php echo base_url(); ?>insert-credential" method="POST">
              <div class="box-body">
               
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="exampleInputPassword1">USERNAME</label>
                    <input type="text" name="txtusername" class="form-control" placeholder="USER NAME">
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <label for="exampleInputPassword1">PASSWORD</label>
                    <input type="text" name="txtpassword" class="form-control" placeholder="PASSWORD">
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
                                  foreach($usertype as $cnt)
                                  {
                                    print "<option value='".$cnt['id']."'>".$cnt['usertype']."</option>";
                                  }
                                } 
                                ?>
                              </select>
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