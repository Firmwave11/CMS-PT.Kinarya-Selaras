			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Form background</h4>
					</div>
					<div class="modal-body">
						<form action="{{route('background.update', $background)}}" class="bootstrap-modal-form" name="modal_popup" enctype="multipart/form-data" method="post">
						{{ csrf_field() }}
						{{ method_field('PATCH') }}	
						<input type="hidden" name="id" id="id" value="">
							<div class="form-group">
								<label>Background Awal(1920 X 1200)</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-image"></i>
										</div>
										<input  name="background_awal" type="file" class="form-control" />
									</div>
									<img src="" id="background_awal2" name="background_awal2" class="img-thumbnail" width="100"/>
							</div>
							<div class="form-group">
								<label>Background Tengah(1920 X 1200)</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-image"></i>
										</div>
										<input  name="background_tengah" type="file" class="form-control" />
									</div>
									<img src="" id="background_tengah2" name="background_tengah2" class="img-thumbnail" width="100"/>
							</div>
							<div class="form-group">
								<label>Background Akhir(1920 X 1000)</label>
									<div class="input-group ">
										<div class="input-group-addon">
											<i class="fa fa-dollar"></i>
										</div>
										<input  name="background_akhir" type="file" class="form-control" value="">
									</div>
									<img src="" id="background_akhir2" name="background_akhir2" class="img-thumbnail" width="100"/>
							</div>
							<div class="form-group">
							<label>Background Testimoni(1920 X 500)</label>
									<div class="input-group ">
										<div class="input-group-addon">
											<i class="fa fa-dollar"></i>
										</div>
										<input name="background_latar" type="file" class="form-control" value="">
									</div>
									<img src="" id="background_latar2" name="background_latar2" class="img-thumbnail" width="100"/>
							</div>
							<div class="form-group">
							<label>Background Explore(1920 X 540)</label>
									<div class="input-group ">
										<div class="input-group-addon">
											<i class="fa fa-dollar"></i>
										</div>
										<input name="background_explore" type="file" class="form-control" value="">
									</div>
									<img src="" id="background_explore2" name="background_explore2" class="img-thumbnail" width="100"/>
							</div>
							<div class="form-group">
							<label>Contact(280 X 540)</label>
									<div class="input-group ">
										<div class="input-group-addon">
											<i class="fa fa-dollar"></i>
										</div>
										<input name="background_orang" type="file" class="form-control" value="">
									</div>
									<img src="" id="background_orang2" name="background_orang2" class="img-thumbnail" width="100"/>
							</div
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