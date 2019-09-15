
@extends('layouts.app')
@section('content')
       <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <p></p>
            </div>
          </div><!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
              <li class="header"><h4><b><center>Menu Panel</center></b></h4></li>
              <li class="active"><a href="{{ url ('/home') }}"><i class="fa fa-home"></i><span>Dashboard</span></a></li>
              <li class="treeview">
                <a href="#">
                <i class="fa fa-dashboard"></i> <span>Form</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
                </span>
                </a>
             <ul class="treeview-menu">
                <li class="active"><a href="{{ url ('/tour') }}"><i class="fa fa-circle-o"></i> Form Tour</a></li>
                <li><a href="{{ url ('/explore') }}"><i class="fa fa-circle-o"></i> Form Explore</a></li>
                <li><a href="{{ url ('/hotel') }}"><i class="fa fa-circle-o"></i> Form Hotel</a></li>
                <li><a href="{{ url ('/testimoni') }}"><i class="fa fa-circle-o"></i> Form Testimoni</a></li>
                <li><a href="{{ url ('/promo') }}"><i class="fa fa-circle-o"></i> Form Promo</a></li>
                <li><a href="{{ url ('/contactus') }}"><i class="fa fa-circle-o"></i> Form Contact Us</a></li>      
                <li><a href="{{ url ('/topdeals') }}"><i class="fa fa-circle-o"></i> Form Top Deals</a></li>         
                <li><a href="{{ url ('/tentang') }}"><i class="fa fa-circle-o"></i> Form Tentang</a></li>
                <li><a href="{{ url ('/background') }}"><i class="fa fa-circle-o"></i> Form Background</a></li>            
            </ul>
            </li>
              <li><a href="{{ url ('/kinarya') }}" target="_blank" rel="nofollow"><i class="fa fa-eye"></i><span>View Website</span></a></li>
              <li><a href=""><i class="fa fa-info-circle"></i><span>Tentang Aplikasi</span></a></li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <h1>
     Dashboard
    </h1>
    <ol class="breadcrumb">
      <li><i class="fa fa-home"></i> Dashboard</li>
     </ol>
  </div>

        <!-- Main content -->
        <div class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
          <h1><center><b>Content Management System</b></center></h1>
          <b></b>
          <b></b>
          <b></b>
          <center><h2><b>Copyright &copy;</b></h2></center>
          <center><h4><b>By </b></h4></center>
                </div><!-- /.box-header -->
                <div class="box-body">
          
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.content -->
    </div><!-- /.content-wrapper -->
  @endsection