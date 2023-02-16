<div class="modal fade show" id="edit_expmodal" tabindex="-1" role="dialog" aria-labelledby="composemodalTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title font-size-16" id="composemodalTitle">
						<div id="exp-error-message"></div>
					</h5>
					<button type="button" class="btn-close" id="editexpformclose" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<form method="POST" enctype="multipart/form-data" id="expform">
					<div class="modal-body">


						<div class="fieldGroup row">
							<div class="col-lg-12">
								<div class="mb-3">
									<label for="basicpill-lastname-input" class="form-label" required>
										Job Role </label>
									<select class="form-control exp_role" name="role" id="exp_role" data-trigger id="choices-single-default">
										<option value="">Select</option>
										<?php
										if ($role) {
											foreach ($role as $row) {
										?>
												<option value="<?= $row['rid'] ?>">
													<?= $row['role'] ?>
												</option>
										<?php
											}
										}
										?>
									</select>
								</div>
							</div>
							<div class="col-lg-12" id="ExpotherRole">
								<div class="mb-3">
									<label for="basicpill-email-input" class="form-label">Other Role</label>
									<input type="text" name="expotherrole" class="form-control" id="exp_other_role" placeholder="Mention Role">
								</div>
							</div>
							<div class="col-lg-12">
								<div class="mb-3">
									<label for="basicpill-email-input" class="form-label">Company</label>
									<input type="text" name="company" class="form-control" id="exp_company" placeholder="e.g. : Omnicorp">
								</div>
							</div>
							<div class="col-lg-12">
								<div class="mb-3">
									<label for="basicpill-lastname-input" class="form-label">
										Company Industry?</label>

									<select class="form-control" name="industry_company" id="exp_industry">
										<option value="">Select</option>

										<?php
										if ($industries) {
											foreach ($industries as $irow) {
												$options = json_decode($candidate_detail[0]['industries'], true);

										?>
												<option value="<?= $irow['cate_id'] ?>">
													<?= $irow['category'] ?>
												</option>
										<?php

											}
										}
										?>


									</select>
								</div>
							</div>


							<div class="col-lg-6">
								<div class="mb-3">
									<label for="basicpill-email-input" class="form-label">Joining date</label>
									<input type="date" name="joining_date" class="form-control" id="exp_joining_date">
								</div>
							</div>

							<div class="col-lg-6">
								<div class="mb-3">
									<input type="checkbox" name="still_work" class="still_work_checkbox" id="exp_still_work">
									<label for="basicpill-email-input" class="form-label">I am currently working here.</label>
								</div>
							</div>

							<div class="col-lg-6" id="exp_leave_date_wrapper">
								<div class="mb-3">
									<label for="basicpill-email-input" class="form-label">Leaving date</label>
									<input type="date" name="leaving_date" class="form-control" id="exp_leaving_date" required>
								</div>
							</div>


							<div class="col-lg-12">
								<div class="mb-3">
									<label for="basicpill-phoneno-input" class="form-label">
										Key Skills</label>
									<select class="form-control" name="" id="edit_exp_key_skill" data-triggerid="choices-multiple-remove-button" placeholder="This is a search placeholder" multiple>
										<option value="">Select</option>
										<?php
										if ($tech) {
											foreach ($tech as $techno) {
												$option = json_decode($candidate_detail[0]['technologies_used'], true);
										?>
												<option value="<?= $techno['tid'] ?>">
													<?= $techno['name'] ?>
												</option>
										<?php
											}
										}
										?>


									</select>
								</div>
							</div>

							<div class="col-lg-12">
								<div class="mb-3">
									<label for="basicpill-email-input" class="form-label">Notice Period (Notice Period in days)</label>
									<input type="number" name="notice_period" id="exp_notice_period" class="form-control" placeholder="ex:60" id="basicpill-email-input">
								</div>
							</div>

							<div class="col-lg-12">
								<div class="mb-3">
									<label for="basicpill-email-input" class="form-label">Description</label>
									<textarea name="description" id="exp_description" class="form-control"></textarea>
								</div>
							</div>



						</div>



					</div>
					<div class="modal-footer">
						<!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
						<button type="submit" class="btn btn-primary" id="save-button-exp">Submit</button>
					</div>
				</form>
			</div>

		</div>
	</div>