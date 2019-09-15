		@foreach($topdeals1 as $topdeals1)
		@endforeach	
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Form Tour</h4>
					</div>
					<div class="modal-body">
						<form action="{{route('topdeals.update', $topdeals1)}}" class="bootstrap-modal-form" name="modal_popup" enctype="multipart/form-data" method="post">
						{{ csrf_field() }}
						{{ method_field('PATCH') }}
						<input type="hidden" name="id" id="id" value="">
							<div class="form-group">
								<label>Nama Tour Deals</label>
									<div class="input-group ">
										<div class="input-group-addon">
											<i class="fa fa-map-marker"></i>
										</div>
										<input id="nama_tour_deals" name="nama_tour_deals" type="text" class="form-control" value="">
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