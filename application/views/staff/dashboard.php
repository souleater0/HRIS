  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php 
              if(isset($leave))
              {
                echo sizeof($leave);
              }
              else{
                echo 0;
              }
              ?></h3>

              <p>Leaves</p>
            </div>
            <div class="icon">
              <i class="ionicons ion-log-out"></i>
            </div>
            
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php 
              if(isset($leave))
              {
                echo sizeof($leave);
              }
              else{
                echo 3;
              }
              ?></h3>

              <p>NEW ANNOUCEMENTS</p>
            </div>
            <div class="icon">
              <i class="ionicons ion-log-out"></i>
            </div>
            <a href="<?php echo base_url(); ?>manage-annoucement" class="small-box-footer">SEE ANNOUCEMENTS <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>


        <!-- ./col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
