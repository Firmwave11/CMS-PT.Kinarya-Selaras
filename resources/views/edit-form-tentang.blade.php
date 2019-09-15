			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Edit Form Tentang</h4>
					</div>
					<div class="modal-body">
						<form action="{{route('tentang.update', $tentang )}}" class="bootstrap-modal-form" name="modal_popup" enctype="multipart/form-data" method="post">
						{{ csrf_field() }}
						{{ method_field('PATCH') }}
						<input type="hidden" name="id" id="id" value="">
							<div class="form-group">
								<label>Gambar(450 X 370)</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-image"></i>
										</div>
										<input name="gambar" type="file" class="form-control" />
									</div>
										<img src="" id="gambar2" name="gambar2" class="img-thumbnail" width="100"/>										
							</div>
							<div class="form-group">
								<label>Title</label>
									<div class="input-group ">
										<div class="input-group-addon">
											<i class="fa fa-pencil"></i>
										</div>
										<input id="title" name="title" type="text" class="form-control" value="">
									</div>
							</div>
							<div class="form-group">
								<label>Subtitle</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-pencil"></i>
										</div>
										<input id="subtitle" name="subtitle" type="text" class="form-control" value=""/>
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