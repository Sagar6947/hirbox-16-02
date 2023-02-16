<div class="modal fade show" id="edit_acamodal" tabindex="-1" role="dialog" aria-labelledby="edit_acamodalTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title font-size-16" id="">
						<div id="error-message"></div>
						<div id="success-message"></div>
					</h5>
					<button type="button" class="btn-close" id="close_edit_modal" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<form method="POST" enctype="multipart/form-data" id="editacadmicesform">
					<div class="modal-body">

						<div class="fieldGroup row">
							<div class="col-md-6 mb-3">
								<div class="form-group">
									<label>Degree/Class</label>
									<input type="text" class="form-control" id="degree" value="<?= $aca_data[0]['degree'] ?>"  placeholder="Ex:B.Tech/12th" required>
								</div>
							</div>
							<div class="col-md-6 mb-3">
								<div class="form-group">
									<label>Specialization/Education Board</label>
									<input type="text" class="form-control" id="edu-board" value="<?= $aca_data[0]['specialization'] ?>"  placeholder="Ex: Data Analytics/Digital Marketing/CEBE">
								</div>
							</div>
							<div class="col-md-12 mb-3">
								<div class="form-group">
									<label>College/School/Institute</label>
									<input type="text" class="form-control" id="institute" value="<?= $aca_data[0]['institute'] ?>"  placeholder="Ex: IIT Bombay/BITS Pilani/NIT Trichy" required>
								</div>
							</div>
							<div class="col-md-6 mb-3">
								<div class="form-group">
									<label>City/Country</label>
									<input type="text" class="form-control" id="city" value="<?= $aca_data[0]['city'] ?>"  placeholder="Ex: Mumbai/Delhi">
								</div>
							</div>
							<div class="col-md-6 mb-3">
								<div class="form-group">
									<label>Year of Passing</label>
									<input type="text" class="form-control" id="passing-year" value="<?= $aca_data[0]['pass_year'] ?>"  placeholder="Ex: 2010">

								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
					    <input type="hidden" value="<?= $aca_data[0]['ace_id'] ?>" id="ace_id">
						<button  class="btn btn-primary" type="button" id="edit-button-aca">Submit</button>
					</div>
				</form>
			</div>

		</div>
	</div>