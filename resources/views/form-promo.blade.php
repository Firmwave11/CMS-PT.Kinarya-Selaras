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
                <li><a href="{{ url ('/hotel') }}"><i class="fa fa-circle-o"></i> Form Hotel</a></li>
                <li><a href="{{ url ('/testimoni') }}"><i class="fa fa-circle-o"></i> Form Testimoni</a></li>
                <li class="active"><a href="{{ url ('/promo') }}"><i class="fa fa-circle-o"></i> Form Promo</a></li>
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
      <li><i class="fa fa-wpforms"></i> Form Promo </li>
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
					<div class="col-md-2 text-left">                	
               		<a href="#"><button class="btn btn-success" type="button" data-target="#ModalAdd" data-toggle="modal"><i class="fa fa-plus"></i> Add</button></a>
               		</div>
				  <br></br>
				  <table id="data" class="table table-bordered table-striped table-scalable">
			<thead>
					<tr>
						<th>No</th>
						<th>Judul Promo</th>
						<th>Diskon</th>
						<th>Keterangan</th>
					</tr>
				</thead>
				<tbody>
					@php $no=1; @endphp
					@foreach ($promo as $promo)
						<tr>
							<td>{{ $no++ }}.</td>
							<td>{{ $promo->judul}}</td>
							<td>{{ $promo->diskon}}</td>
							<td>{{ $promo->keterangan }}</td>
							<td>
							<a href='#'><button type="button" class="btn btn-primary btn" data-target="#ModalEditPromo" data-judul="{{ $promo->judul }}" data-keterangan="{{ $promo->keterangan }}" data-diskon="{{ $promo->diskon }}" data-id="{{ $promo->id }}"  data-toggle="modal" >Edit </button></a>
							<a href='#'><button type="button" data-id="{{ $promo->id }}" class="btn btn-danger" data-target="#ModalDelete" data-toggle="modal" >Delete </button></a>
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
						<h4 class="modal-title"> Form Promo</h4>
					</div>
					<div class="modal-body">
						<form action="{{route('promo.store')}}" class="bootstrap-modal-form" name="modal_popup" enctype="multipart/form-data" method="post">
						{{ csrf_field() }}
							<div class="form-group">
								<label>Judul Promo</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-pencil"></i>
										</div>
										<input id="judul" name="judul" type="text" class="form-control" value=""/>
									</div>
							</div>
							<div class="form-group">
								<label>Diskon</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-percent"></i>
										</div>
										<input id="diskon" name="diskon" type="text" class="form-control" value=""/>
									</div>
							</div>
							<div class="form-group">
								<label>Keterangan</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-comment-o"></i>
										</div>
										<textarea id="keterangan" name="keterangan" class="form-control" value=""></textarea>
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

		<div id="ModalEditPromo" class="modal fade" tabindex="-1" role="dialog">
			@include('edit-form-promo')
		</div>
		<div id="ModalDelete" class="modal modal-danger fade " tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content" style="margin-top:100px;">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" style="text-align:center;">Are you sure to delete this information ?</h4>
					</div>
					<div class="modal-body">    
					<form action="{{route('promo.destroy', 'test' )}}" method="post">
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
		
