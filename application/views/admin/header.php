<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Employee Management System</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/skins/_all-skins.min.css">
  

  <!-- jQuery 3 -->
  <script src="<?php echo base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-purple sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>EM</b>S</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Employee</b> M S</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Notifications: style can be found in dropdown.less -->
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url(); ?>assets/dist/img/admin-user.png" class="user-image" alt="User Image">
              <span class="hidden-xs">Admin</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url(); ?>assets/dist/img/admin-user.png" class="img-circle" alt="User Image">
                <p>Admin</p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="<?php echo base_url(); ?>logout" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url(); ?>assets/dist/img/admin-user.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Administrator</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>

        <li class="active"><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-th-large"></i> <span>ANNOUNCEMENT</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>add-department"><i class="fa fa-circle-o"></i> Add ANNOUNCEMENT</a></li>
            <li><a href="<?php echo base_url(); ?>manage-department"><i class="fa fa-circle-o"></i> Manage ANNOUCEMENT</a></li>
          </ul>
        </li>

<li class="treeview">
          <a href="#">
            <i class="fa fa-th-large"></i> <span>ACCOUNTABILITY</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>add-accountablity"><i class="fa fa-circle-o"></i> Add Accountability</a></li>
            <li><a href="<?php echo base_url(); ?>manage-accountability"><i class="fa fa-circle-o"></i> Manage ACCOUNTABILITY</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-th-large"></i> <span>INCIDENT REPORT</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>add-incidentreport"><i class="fa fa-circle-o"></i> Add INCIDENT REPORT</a></li>
            <li><a href="<?php echo base_url(); ?>manage-incidentreport"><i class="fa fa-circle-o"></i> Manage INCIDENT REPORT</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-th-large"></i> <span>MEMOS</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>add-memo"><i class="fa fa-circle-o"></i> FILE MEMO</a></li>
            <li><a href="<?php echo base_url(); ?>manage-memo"><i class="fa fa-circle-o"></i> Manage MEMO</a></li>
          </ul>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-th-large"></i> <span>Department</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>add-department"><i class="fa fa-circle-o"></i> Add Department</a></li>
            <li><a href="<?php echo base_url(); ?>manage-department"><i class="fa fa-circle-o"></i> Manage Department</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i> <span>Staff</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>add-staff"><i class="fa fa-circle-o"></i> Add Staff</a></li>
            <li><a href="<?php echo base_url(); ?>manage-staff"><i class="fa fa-circle-o"></i> Manage Staff</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i> <span>Position</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>add-position"><i class="fa fa-circle-o"></i> Add Position</a></li>
            <li><a href="<?php echo base_url(); ?>manage-position"><i class="fa fa-circle-o"></i> Manage Position</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i> <span>LINE OF BUSINESS</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>add-lob"><i class="fa fa-circle-o"></i> add lob</a></li>
            <li><a href="<?php echo base_url(); ?>manage-lob"><i class="fa fa-circle-o"></i> Manage lob</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i> <span>MODE OF PAYROLL</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>add-modeofpayroll"><i class="fa fa-circle-o"></i> Add MODE</a></li>
            <li><a href="<?php echo base_url(); ?>manage-modeofpayroll"><i class="fa fa-circle-o"></i> Manage MODE OF PAYROLL</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i> <span>EMPLOYEE STATUS</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>add-employeestatus"><i class="fa fa-circle-o"></i> Add STATUS</a></li>
            <li><a href="<?php echo base_url(); ?>manage-employeestatus"><i class="fa fa-circle-o"></i> Manage MODE OF PAYROLL</a></li>
          </ul>
        </li>

        <li class="treeview"> 
          <a href="#">
            <i class="fa fa-usd"></i> <span>Salary</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>add-salary"><i class="fa fa-circle-o"></i> Add Salary</a></li>
            <li><a href="<?php echo base_url(); ?>manage-salary"><i class="fa fa-circle-o"></i> Manage Salary</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-usd"></i> <span>RESIGNED</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            
            <li><a href="<?php echo base_url(); ?>manage-resigned"><i class="fa fa-circle-o"></i> Manage resigned</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-usd"></i> <span>BLACKLIST</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            
            <li><a href="<?php echo base_url(); ?>manage-blacklist"><i class="fa fa-circle-o"></i> Manage Blacklist</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-usd"></i> <span>ID BARCODE</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>add-idbarcode"><i class="fa fa-circle-o"></i> generate barcode </a></li>
            <li><a href="<?php echo base_url(); ?>manage-idbarcode"><i class="fa fa-circle-o"></i> Manage id barcode</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-usd"></i> <span>FOOD STUB</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>add-foodstub"><i class="fa fa-circle-o"></i> Add Food Stub</a></li>
            <li><a href="<?php echo base_url(); ?>manage-foodstub"><i class="fa fa-circle-o"></i> Manage Food Stub</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-usd"></i> <span>SD STUB</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>add-sdstub"><i class="fa fa-circle-o"></i> Add Salary deduction</a></li>
            <li><a href="<?php echo base_url(); ?>manage-sdstub"><i class="fa fa-circle-o"></i> Manage Salary deduction</a></li>
          </ul>
        </li>


        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Leave</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>add-leavetype"><i class="fa fa-circle-o"></i> ADD Leave TYPE</a></li>
            <li><a href="<?php echo base_url(); ?>manage-leavetype"><i class="fa fa-circle-o"></i> Manage Leave TYPE</a></li>
            <li><a href="<?php echo base_url(); ?>approve-leave"><i class="fa fa-circle-o"></i> Manage Staff's Leave</a></li>
            <li><a href="<?php echo base_url(); ?>leave-history"><i class="fa fa-circle-o"></i> Leave History</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-usd"></i> <span>OVERTIME</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>add-overtime"><i class="fa fa-circle-o"></i> FILE OVERTIME</a></li>
            <li><a href="<?php echo base_url(); ?>manage-credential"><i class="fa fa-circle-o"></i> Manage OVERTIME</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-usd"></i> <span>USER CREDENTIALS</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>add-credential"><i class="fa fa-circle-o"></i> Add CREDENTIAL</a></li>
            <li><a href="<?php echo base_url(); ?>manage-credential"><i class="fa fa-circle-o"></i> Manage CREDENTIALS</a></li>
          </ul>
        </li>


      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <?php
    if ($this->session->userdata('usertype')!=1)
    { 
      redirect('login');
    }
  ?>