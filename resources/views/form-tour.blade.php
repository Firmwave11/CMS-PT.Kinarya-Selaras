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
     Form
    </h1>
    <ol class="breadcrumb">
      <li><i class="fa fa-wpforms"></i> Form Tour </li>
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
            		<div class="col-md-10 ">
						<form method="get" action="{{url('/search')}}">
							<div class="input-group">
								<input type="search" name="search" class="form-control" placeholder="Kata Kunci">
								<span class="input-group-btn">
									<button class="btn btn-success" type="submit">Cari</button>
								</span>
							</div>
						</form>
					</div>
					<div class="col-md-2 text-left">                	
               		<a href="#"><button class="btn btn-success bootstrap-modal-form-open" type="button" data-target="#ModalAdd" data-toggle="modal"><i class="fa fa-plus"></i> Add</button></a>
               		</div>
				  <br></br>
				  <table id="data" class="table table-bordered table-striped table-scalable">
			<thead>
					<tr>
						<th>No</th>
						<th>Gambar(400 X 270)</th>
						<th>Nama Tour</th>
						<th>Harga</th>
						<th>Waktu Tour</th>
						<th>Keterangan</th>
						<th>Pilihan</th>
					</tr>
				</thead>
				<tbody>
					@php $no=1; @endphp
					@foreach ($tourlist as $tourlists)
						<tr>
							<td>{{ $no++ }}.</td>
							<td><img src="{{ url('uploads/tour')}}/{{$tourlists->gambar}}" style="width: 100px; height: 100px"></td>
							<td>{{ $tourlists->nama_tour }}</td>
							<td>{{ $tourlists->harga }}</td>
							<td>{{ $tourlists->waktutour }}</td>
							<td>{{ $tourlists->keterangan }}</td>
							<td>
							<a href='#'><button type="button" class="btn btn-primary btn" data-target="#ModalEditTour" data-nama_tour="{{ $tourlists->nama_tour }}" data-keterangan="{{ $tourlists->keterangan }}" data-waktutour="{{ $tourlists->waktutour }}" data-harga="{{ $tourlists->harga }}" data-id="{{ $tourlists->id }}" data-gambar="{{ $tourlists->gambar}}" data-toggle="modal" >Edit </button></a>
							<a href='#'><button type="button" data-id="{{ $tourlists->id }}" class="btn btn-danger" data-target="#ModalDelete" data-toggle="modal" >Delete </button></a>
							</td>
						</tr>
					@endforeach
				</tbody>
                  </table>
                  <div class="text-center">
                  {{  $tourlist->links()  }}
                  </div>
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
						<h4 class="modal-title">Form Tour</h4>
					</div>
					<div class="modal-body">
						<form action="{{route('tour.store')}}" class="bootstrap-modal-form" name="modal_popup" enctype="multipart/form-data" method="post">
						{{ csrf_field() }}
							<div class="form-group">
								<label>Gambar(400 X 270)</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-image"></i>
										</div>
										<input name="gambar" type="file" class="form-control" />
									</div>
							</div>
							<div class="form-group">
								<label>Nama Tour</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-home"></i>
										</div>
										<input name="nama_tour" type="text" class="form-control" value=""/>
									</div>
							</div>
							<div class="form-group">
								<label>Harga</label>
									<div class="input-group ">
										<div class="input-group-addon">
											<i class="fa fa-dollar"></i>
										</div>
										<input name="harga" type="text" class="form-control" value="">
									</div>
							</div>
							<div class="form-group">
								<label>Waktu Tour</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-clock-o"></i>
										</div>
										<input name="waktutour" type="text" class="form-control" value=""/>
									</div>
							</div>
							<div class="form-group">
								<label>Keterangan</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-comment-o"></i>
										</div>
										<textarea name="keterangan" class="form-control" value=""></textarea>
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

		<div id="ModalEditTour" class="modal fade" tabindex="-1" role="dialog">
			@include('edit-form-tour')
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
					<form action="{{route('tour.destroy', 'test' )}}" method="post">
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
		
