		@foreach($hotel1 as $hotel1)
		@endforeach	
<!-- Modal Popup Form -->			
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Edit Form Hotel</h4>
					</div>
					<div class="modal-body">
						<form action="{{route('hotel.update', $hotel1 )}}" class="bootstrap-modal-form" name="modal_popup" enctype="multipart/form-data" method="post">
							{{ csrf_field() }}
							{{ method_field('PATCH') }}
							<input type="hidden" name="id" id="id" value="">
							<input id="persenbintang" name="persenbintang" type="hidden" value=""/>
							<div class="form-group">
								<label>Gambar(400 X 270)</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-image"></i>
										</div>
										<input name="gambar" type="file" class="form-control" />
									</div>
										<img src="" id="gambar2" name="gambar2" class="img-thumbnail" width="100"/>	
							</div>
							<div class="form-group">
								<label>Nama Hotel</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-home"></i>
										</div>
										<input id="nama" name="nama" type="text" class="form-control" value=""/>
									</div>
							</div>
							<div class="form-group">
								<label>Harga</label>
									<div class="input-group ">
										<div class="input-group-addon">
											<i class="fa fa-dollar"></i>
										</div>
										<input id="harga" name="harga" type="text" class="form-control" value="">
									</div>
							</div>
							<div class="form-group">
								<label>Keterangan Harga</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-money"></i>
										</div>
										<input id="ket_harga" name="ket_harga" type="text" class="form-control" value=""/>
									</div>
							</div>
							<div class="form-group">
								<label>Bintang</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-star"></i>
										</div>
										<input id="bintang" name="bintang" type="number" min="1" max="5" class="form-control" value=""/>										
									</div>
							</div>
							<div class="form-group">
								<label>Keterangan</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-comment-o"></i>
										</div>
										<textarea id="keterangan" name="keterangan" type="text" class="form-control" value=""></textarea>
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