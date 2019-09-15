			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title"> Edit Form Promo</h4>
					</div>
					<div class="modal-body">
						<form action="{{route('promo.update', $promo)}}" class="bootstrap-modal-form" name="modal_popup" enctype="multipart/form-data" method="post">
						{{ csrf_field() }}
						{{ method_field('PATCH') }}
						<input type="hidden" name="id" id="id" value="">
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