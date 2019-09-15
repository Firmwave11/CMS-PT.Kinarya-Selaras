		@foreach($testimoni1 as $testimoni1)
		@endforeach	
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Edit Form Testimoni</h4>
					</div>
					<div class="modal-body">
						<form action="{{route('testimoni.update', $testimoni1)}}" class="bootstrap-modal-form" name="modal_popup" enctype="multipart/form-data" method="post">
						{{ csrf_field() }}
						{{ method_field('PATCH') }}
						<input type="hidden" name="id" id="id" value="">	
							<div class="form-group">
								<label>Foto</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-image"></i>
										</div>
										<input name="foto" type="file" class="form-control" />
									</div>
										<img src="" id="foto2" name="foto2" class="img-thumbnail" width="100"/>
							</div>
							<div class="form-group">
								<label>Background</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-image"></i>
										</div>
										<input name="background" type="file" class="form-control" />
									</div>
										<img src="" id="background2" name="background2" class="img-thumbnail" width="100"/>
							</div>
							<div class="form-group">
								<label>Nama</label>
									<div class="input-group ">
										<div class="input-group-addon">
											<i class="fa fa-dollar"></i>
										</div>
										<input id="nama" name="nama" type="text" class="form-control" value="">
									</div>
							</div>
							<div class="form-group">
								<label>Tempat Asal</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-globe"></i>
										</div>
										<input id="kota" name="kota" type="text" class="form-control" value=""/>
									</div>
							</div>
							<div class="form-group">
								<label>Testimoni</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-comment-o"></i>
										</div>
										<textarea id="testimoni" name="testimoni" class="form-control" value=""></textarea>
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