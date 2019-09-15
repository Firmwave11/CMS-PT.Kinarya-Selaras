 <!-- Main content -->
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
              <li><a href="{{ url ('/home') }}"><i class="fa fa-home"></i><span>Dashboard</span></a></li>
              <li class="active treeview">
                <a href="#">
                <i class="fa fa-dashboard"></i> <span>Form</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
                </span>
                </a>
             <ul class="treeview-menu">
                <li><a href="{{ url ('/tour') }}"><i class="fa fa-circle-o"></i> Form Tour</a></li>
                <li><a href="{{ url ('/explore') }}"><i class="fa fa-circle-o"></i> Form Explore</a></li>
                <li ><a href="{{ url ('/hotel') }}"><i class="fa fa-circle-o"></i> Form Hotel</a></li>
                <li><a href="{{ url ('/testimoni') }}"><i class="fa fa-circle-o"></i> Form Testimoni</a></li>
                <li><a href="{{ url ('/promo') }}"><i class="fa fa-circle-o"></i> Form Promo</a></li>
                <li><a href="{{ url ('/contactus') }}"><i class="fa fa-circle-o"></i> Form Contact Us</a></li>
                <li><a href="{{ url ('/topdeals') }}"><i class="fa fa-circle-o"></i> Form Top Deals</a></li>
                <li><a href="{{ url ('/tentang') }}"><i class="fa fa-circle-o"></i> Form Tentang</a></li>
                <li class="active"><a href="{{ url ('/background') }}"><i class="fa fa-circle-o"></i> Form Background</a></li>
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
     Form
    </h1>
    <ol class="breadcrumb">
      <li><i class="fa fa-wpforms"></i> Form background </li>
     </ol>
  </div>

        <div class="row">
           <div class="col-xs-12">
             <div class="box">
                <div class="box-body table-responsive">
                @if (session('status'))
					<div class="alert alert-success">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					  	<strong>Success!</strong> {{ session('status') }}
					</div>
				@endif
				<a href="#"><button class="btn btn-success" type="button" data-target="#ModalAdd" data-toggle="modal"><i class="fa fa-plus"></i> Add</button></a>
				  <br></br>
				  <table id="data" class="table table-bordered table-striped table-scalable">
			<thead>
					<tr>
						<th>No</th>
						<th>Background Awal(1920 X 1200)</th>
						<th>Background Tengah(1920 X 1200)</th>
						<th>Background Akhir(1920 X 1000)</th>
						<th>Background Testimoni(1920 X 500)</th>
						<th>Background Explore(1920 X 540)</th>
						<th>Contact (280 X 540)</th>
						<th>Pilihan</th>
					</tr>
				</thead>
				<tbody>
					@php $no=1; @endphp
					@foreach ($background as $background)
						<tr>
							<td>{{ $no++ }}.</td>
							<td><img src="{{ url('uploads/background/BackgroundAwal')}}/{{$background->background_awal}}" style="width: 100px; height: 100px"></td>
							<td><img src="{{ url('uploads/background/BackgroundTengah')}}/{{$background->background_tengah}}" style="width: 100px; height: 100px"></td>
							<td><img src="{{ url('uploads/background/BackgroundAkhir')}}/{{$background->background_akhir}}" style="width: 100px; height: 100px"></td>
							<td><img src="{{ url('uploads/background/BackgroundLatar')}}/{{$background->background_latar}}" style="width: 100px; height: 100px"></td>
							<td><img src="{{ url('uploads/background/Backgroundexplore')}}/{{$background->background_explore}}" style="width: 100px; height: 100px"></td>
							<td><img src="{{ url('uploads/background/Backgroundorang')}}/{{$background->background_orang}}" style="width: 100px; height: 100px"></td>														
							<td>
							<a href='#'><button type="button" class="btn btn-primary btn" 
							data-target="#ModalEditBackground" data-background_awal="{{$background->background_awal}}"data-background_tengah="{{ $background->background_tengah }}" data-background_akhir="{{ $background->background_akhir }}" data-background_latar="{{ $background->background_latar }}" data-background_explore="{{ $background->background_explore }}" data-background_orang="{{ $background->background_orang }}"  data-id="{{ $background->id }}" data-toggle="modal" >Edit </button></a>
							<a href='#'><button type="button" data-id="{{ $background->id }}" class="btn btn-danger" data-target="#ModalDelete" data-toggle="modal" >Delete </button></a>
							</td>
						</tr>
					@endforeach
				</tbody>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

		  <!-- Modal Popup Form -->
		<div id="ModalAdd" class="modal fade" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Form background</h4>
					</div>
					<div class="modal-body">
						<form action="{{route('background.store')}}" class="bootstrap-modal-form" name="modal_popup" enctype="multipart/form-data" method="post">
						{{ csrf_field() }}
							
							<div class="form-group">
								<label>Background Awal(1920 X 1200)</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-image"></i>
										</div>
										<input  name="background_awal" type="file" class="form-control" />
									</div>
							</div>
							<div class="form-group">
								<label>Background Tengah(1920 X 1200)</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-image"></i>
										</div>
										<input  name="background_tengah" type="file" class="form-control" />
									</div>
							</div>
							<div class="form-group">
								<label>Background Akhir(1920 X 1000)</label>
									<div class="input-group ">
										<div class="input-group-addon">
											<i class="fa fa-image"></i>
										</div>
										<input name="background_akhir" type="file" class="form-control" value="">
									</div>
							</div>
							<div class="form-group">
							<label>Background Testimoni(1920 X 500)</label>
									<div class="input-group ">
										<div class="input-group-addon">
											<i class="fa fa-dollar"></i>
										</div>
										<input name="background_latar" type="file" class="form-control" value="">
									</div>
							</div>
							<div class="form-group">
							<label>Background Explore(1920 X 540)</label>
									<div class="input-group ">
										<div class="input-group-addon">
											<i class="fa fa-dollar"></i>
										</div>
										<input name="background_explore" type="file" class="form-control" value="">
									</div>
							</div>
							<div class="form-group">
							<label>Contact(280 X 540)</label>
									<div class="input-group ">
										<div class="input-group-addon">
											<i class="fa fa-dollar"></i>
										</div>
										<input name="background_orang" type="file" class="form-control" value="">
									</div>
							</div>
							<div class="modal-footer">
								<button class="btn btn-success" type="submit">
									Save
								</button>
								<button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
									Cancel
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<div id="ModalEditBackground" class="modal fade" tabindex="-1" role="dialog">
			@include('edit-form-background')
		</div>
		
		<!-- Modal Popup untuk delete--> 
		<div id="ModalDelete" class="modal modal-danger fade " tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content" style="margin-top:100px;">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" style="text-align:center;">Are you sure to delete this information ?</h4>
					</div>
					<div class="modal-body">    
					<form action="{{route('background.destroy', 'test' )}}" method="post">
						{{ csrf_field() }}
						{{ method_field('DELETE') }}
					<div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
						<input type="hidden" name="id" id="id" value="">
						<button type="submit" class="btn btn-danger">Delete</button>
						<button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
					</div>
				</form>
				</div>
				</div>
			</div>
		</div>
</div>
@endsection
		
