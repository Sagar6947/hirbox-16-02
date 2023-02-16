<?php include 'includes/header-link.php' ?>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA5eG5oC5cOUcQ3qPkjPE7vlmnrTOmI05A&sensor=false&libraries=places"></script>

<!-- Begin page -->
<div id="layout-wrapper">
	<?php include 'includes/header.php' ?>

	<div class="main-content">
		<div class="page-content">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="page-title-box d-sm-flex align-items-center justify-content-between">
							<h4 class="mb-sm-0 font-size-18">Welcome <?= sessionId('cname'); ?> ! </h4>

							<div class="page-title-right">
								<ol class="breadcrumb m-0">
									<li class="breadcrumb-item"><a href="javascript: void(0);">Hirbox</a></li>
									<li class="breadcrumb-item active">Candidate Dashboard</li>
								</ol>
							</div>

						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<h3 class="text-center">Edit your Hirbox profile</h3>
					</div>
					<div class="col-lg-1"></div>
					<div class="col-lg-10 mt-2">
						<?php if ($msg = $this->session->flashdata('msg')) :
							$msg_class = $this->session->flashdata('msg_class') ?>
							<div class="row">
								<div class="col-lg-12">
									<div class="alert  <?= $msg_class; ?>"><?= $msg; ?></div>
								</div>
							</div>
						<?php
							$this->session->unset_userdata('msg');
						endif; ?>
						<div id="basic-pills-wizard" class="twitter-bs-wizard ">
							<ul class="twitter-bs-wizard-nav" style="box-shadow: rgb(100 100 111 / 20%) 0px 7px 29px 0px;     border-radius: 30px; background: white;">
								<li class="nav-item">
									<a href="#profile" class="nav-link" data-toggle="tab">
										<div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Profile">
											Profile
										</div>
									</a>
								</li>
								<li class="nav-item">
									<a href="#Resume" class="nav-link" data-toggle="tab">
										<div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Resume/CV">
											Resume/CV
										</div>
									</a>
								</li>
								<li class="nav-item">
									<a href="#Academic_Experience" class="nav-link" data-toggle="tab">
										<div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Academic/Experiences">
											Academic/Experiences
										</div>
									</a>
								</li>
								<li class="nav-item">
									<a href="#Preferences" class="nav-link" data-toggle="tab">
										<div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Preferences">
											Preferences
										</div>
									</a>
								</li>

								<li class="nav-item">
									<a href="#Culture" class="nav-link" data-toggle="tab">
										<div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Culture">
											Culture
										</div>
									</a>
								</li>


							</ul>

							<form method="POST" enctype="multipart/form-data" action="">
								<div class="card mt-5">
									<div class="card-body">
										<div class="tab-content twitter-bs-wizard-tab-content ">
											<div class="tab-pane" id="profile">




												<div class="row">
													<div class="col-lg-12 mb-3">
														<label for="1" class="form-label">Profile Summary</label>
														<textarea class="form-control" name="profile_summary" rows="5"><?= $candidate_detail[0]['profile_summary'] ?> </textarea>
													</div>
													<div class="col-lg-6">
														<div class="mb-3">
															<label for="basicpill-firstname-input" class="form-label">Full Name</label>
															<input type="text" name="name" class="form-control txtPlaces" value="<?= $candidate_detail[0]['name'] ?>" id="">
														</div>
													</div>
													<div class="col-lg-6">
														<div class="mb-3">
															<label for="basicpill-firstname-input" class="form-label">Email Id</label>
															<input type="text" name="email" class="form-control txtPlaces" value="<?= $candidate_detail[0]['email'] ?>" id="">
														</div>
													</div>
													<div class="col-lg-6">
														<div class="mb-3">
															<label for="basicpill-firstname-input" class="form-label">Country Code</label>
															<div class="form-floating form-floating-custom">
																<select class="form-control" name="country_code" data-trigger id="choices-single-default" placeholder="This is a search placeholder">

																	<?php
																	if (!empty($country_code)) {
																		foreach ($country_code as $crow) {
																	?>
																			<option value="<?= $crow['id'] ?>" <?= (($candidate_detail[0]['country_code'] == $crow['id']) ? 'selected' : '') ?>><?= $crow['name'] ?> &nbsp; (+<?= $crow['phonecode'] ?>) </option>


																	<?php
																		}
																	}
																	?>
																</select>
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="mb-3">
															<label for="basicpill-firstname-input" class="form-label">Mobile Number</label>
															<input type="text" name="number" class="form-control txtPlaces" value="<?= $candidate_detail[0]['number'] ?>" id="">
														</div>
													</div>
													<div class="col-lg-6">
														<div class="mb-3">
															<label for="basicpill-firstname-input" class="form-label">Date of Birth</label>
															<input type="date" name="dob" class="form-control txtPlaces" value="<?= $candidate_detail[0]['dob'] ?>">

														</div>
													</div>

													<div class="col-lg-6">
														<div class="mb-3">
															<label for="basicpill-firstname-input" class="form-label">Profile Image</label>
															<input type="file" class="form-control" name="img" accept=".png, .jpg, .jpeg">
															<input type="hidden" class="form-control" name="image" value="<?= $candidate_detail[0]['image'] ?>">

															<br>
															<?php
															if ($candidate_detail[0]['image'] != '') { ?>
																<img src="<?= base_url() ?>/uploads/candidate/<?= $candidate_detail[0]['image'] ?>" width="60" />


															<?php
															}
															?>
														</div>
													</div>
												</div>


												<div class="row">
													<div class="col-lg-6">
														<label for="basicpill-firstname-input" class="form-label">
															Where are you based?</label>
														<div class="mb-3">
															<label for="basicpill-firstname-input" class="form-label">*
																Country</label>
															<input type="text" name="country" class="form-control txtPlaces" id="" value="<?= $candidate_detail[0]['country'] ?>">
														</div>
													</div>
													<div class="col-lg-6">
														<label for="basicpill-firstname-input" class="form-label" style="visibility: hidden;">
															Where are you based?</label>
														<div class="mb-3">
															<label for="basicpill-firstname-input" class="form-label">*
																City</label>
															<input type="text" name="city" class="form-control txtPlaces" id="" value="<?= $candidate_detail[0]['city'] ?>">
														</div>
													</div>
												</div>
												<div class="row">
													<h4 class="form-label">I am</h4>
													<div class="col-lg-6 row">
														<div class="mb-3">
															<input type="radio" name="fre_exp" value="0" class="still_work_checkbox" id="fresher" <?= (($candidate_detail[0]['fre_exp'] == '0') ? "checked='checked'" : "") ?>>
															<label for="basicpill-email-input" class="form-label">Fresher</label>
														</div>
														<div class="mb-3">
															<input type="radio" name="fre_exp" value="1" class="still_work_checkbox <?= (($candidate_detail[0]['fre_exp'] == '1') ? "expchecked" : "") ?>" id="experienced" <?= (($candidate_detail[0]['fre_exp'] == '1') ? "checked='checked'" : "") ?>>
															<label for="basicpill-email-input" class="form-label">Experienced</label>
														</div>
													</div>
												</div>
												<div class="row role-info-wrapper">
													<div class="col-lg-6">
														<div class="mb-3">
															<label for="basicpill-lastname-input" class="form-label">*
																Current Role </label>
															<select class="form-control current_role is_require" name="designation" data-trigger id="choices-single-default" placeholder="This is a search placeholder">
																<option value="">Select</option>
																<?php
																if ($role) {
																	foreach ($role as $row) {
																?>
																		<option value="<?= $row['rid'] ?>" <?= (($candidate_detail[0]['designation'] == $row['rid'])
																												? 'selected' : '') ?>>
																			<?= $row['role'] ?>
																		</option>
																<?php
																	}
																}
																?>

															</select>

														</div>
													</div>
													<div class="col-lg-6" id="otherRole">

														<div class="mb-3">
															<label for="basicpill-firstname-input" class="form-label">*
																Mention you current role</label>
															<input type="text" name="other_role" class="form-control txtPlaces is_require" id="" value="<?= $candidate_detail[0]['other_role'] ?>">
														</div>

													</div>
												</div>
												<div class="row role-info-wrapper">
													<div class="col-lg-6">
														<label for="basicpill-lastname-input" class="form-label">
															Experience </label>
														<div class="mb-3">
															<label for="basicpill-lastname-input" class="form-label">*
																Year </label>
															<select class="form-control" name="exp_year" data-trigger id="choices-single-default" placeholder="This is a search placeholder">
																<option value="">Select</option>
																<?php
																for ($i = 1; $i <= 9; $i++) {

																?>
																	<option value="<?= $i ?>" <?= (($candidate_detail[0]['exp_year'] == $i)
																									? 'selected' : '') ?>>
																		<?= $i ?> Year<?= (($i == 1) ? '' : 's') ?>
																	</option>
																<?php
																}

																?>
																<option value="10" <?= (($candidate_detail[0]['exp_year'] == 10)
																						? 'selected' : '') ?>>10+ Years</option>

															</select>

														</div>
													</div>
													<div class="col-lg-6">
														<label for="basicpill-lastname-input" class="form-label" style="visibility: hidden;">
															Experience </label>
														<div class="mb-3">
															<label for="basicpill-lastname-input" class="form-label">*
																Month </label>
															<select class="form-control" name="exp_months" data-trigger id="choices-single-default" placeholder="This is a search placeholder">
																<option value="">Select</option>
																<?php
																for ($i = 1; $i <= 11; $i++) {

																?>
																	<option value="<?= $i ?>" <?= (($candidate_detail[0]['exp_months'] == $i)
																									? 'selected' : '') ?>>
																		<?= $i ?> Month<?= (($i == 1) ? '' : 's') ?>
																	</option>
																<?php
																}
																?>

															</select>

														</div>
													</div>
												</div>

												<ul class="pager wizard twitter-bs-wizard-pager-link">
													<li class="next"><a href="javascript: void(0);" class="btn btn-primary orange_btn" onclick="nextTab()">Next <i class="bx bx-chevron-right ms-1"></i></a></li>
												</ul>
											</div>

											<div class="tab-pane" id="Resume">

												<div class="col-lg-12">
													<div class="mb-3">
														<input type="file" class="form-control" name="resume_temp" accept=".pdf, .doc, .docx, .rtf , .wp , .txt">
														<input type="hidden" class="form-control" name="resume" value="<?= $candidate_detail[0]['resume'] ?>">

														<br>
														<?php
														if ($candidate_detail[0]['resume'] != '') { ?>
															<a href="<?= base_url() ?>/uploads/resume/<?= $candidate_detail[0]['resume'] ?>" target="_blank" class="btn btn-dark">

																View
																Resume</a>
														<?php
														}
														?>

													</div>
												</div>

												<ul class="pager wizard twitter-bs-wizard-pager-link">
													<li class="previous"><a href="javascript: void(0);" class="btn btn-primary orange_btn" onclick="nextTab()"><i class="bx bx-chevron-left me-1"></i> Previous</a>
													</li>
													<li class="next"><a href="javascript: void(0);" class="btn btn-primary orange_btn" onclick="nextTab()">Next <i class="bx bx-chevron-right ms-1"></i></a></li>
												</ul>
											</div>


											<div class="tab-pane" id="Academic_Experience">

												<div class="row">
													<div class="col-xl-12">
														<div class="card">
															<div class="card-header align-items-center row">
																<div class="col-sm-9">
																	<h3 class="mb-0 flex-grow-1">Academic Details</h3>
																</div>
																<div class="col-sm-3">
																	<button type="button" class="btn btn-dark w-100 waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#composemodal">
																		Add Academics
																	</button>
																</div>
															</div>
															<div class="card-body px-0">
																<div class="px-3" id="show_acadmices">
																</div>
															</div>
														</div>
													</div>
												</div>



												<div class="row">
													<div class="col-xl-12">
														<div class="card">
															<div class="card-header align-items-center row">
																<div class="col-sm-9">
																	<h3 class="mb-0 flex-grow-1">Experience Details</h3>
																</div>
																<div class="col-sm-3">
																	<button type="button" class="btn btn-dark w-100 waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#composexpemodal">
																		Add Experience
																	</button>
																</div>
															</div>

															<div class="card-body px-0">
																<div class="px-3" id="show_experience">

																</div>
															</div>
														</div>
													</div>
												</div>

												<ul class="pager wizard twitter-bs-wizard-pager-link">
													<li class="previous"><a href="javascript: void(0);" class="btn btn-primary orange_btn" onclick="nextTab()"><i class="bx bx-chevron-left me-1"></i> Previous</a>
													</li>
													<li class="next"><a href="javascript: void(0);" class="btn btn-primary orange_btn" onclick="nextTab()">Next <i class="bx bx-chevron-right ms-1"></i></a></li>
												</ul>
											</div>


											<div class="tab-pane" id="Preferences">


												<div class="row">
													<div class="col-lg-4">
														<div class="mb-3">
															<input type="radio" id="1" name="job_search_position" value="Ready to interview" <?= (($candidate_detail[0]['job_search_position'] == 'Ready to interview') ? 'checked' : '') ?>>
															<label for="1" class="">Ready to interview</label>
															<div class="border-left">
																<!-- <div class="text-muted">This Means</div> -->
																<div>You’re actively looking for new work and ready
																	to interview. Your job profile will be visible
																	by startups.</div>
															</div>
														</div>
													</div>
													<div class="col-lg-4">
														<div class="mb-3">
															<input type="radio" id="2" name="job_search_position" value="Open to offers" <?= (($candidate_detail[0]['job_search_position'] == 'Open to offers'
																																			) ? 'checked' : '') ?>>
															<label for="2">Open to offers</label>
															<div class="border-left">
																<!-- <div class="text-muted">This Means</div> -->
																<div>You’re not looking but open to hear about new
																	opportunities. Your job profile will be visible
																	to startups.</div>
															</div>
														</div>
													</div>

													<div class="col-lg-4">
														<div class="mb-3">
															<input type="radio" id="3" name="job_search_position" value="Closed to offers" <?= (($candidate_detail[0]['job_search_position'] == 'Closed to offers') ? 'checked' : '') ?>>
															<label for="3">Closed to offers</label>
															<div class="border-left">
																<!-- <div class="text-muted">This Means</div> -->
																<div>You’re not looking and don’t want to hear about
																	new opportunities. Your job profile will be
																	hidden to startups.</div>
															</div>
														</div>
													</div>
												</div>
												<hr>

												<div class="col-lg-12 mt-3">
													<div class="mb-3">
														<label for="basicpill-firstname-input" class="form-label">*
															What type of job are you interested in?
														</label>
														<p>Choose just one for now. You can change this or add more
															types later</p>
														<input type="radio" id="1" name="job_interest" value="Full-time Job" <?= (($candidate_detail[0]['job_interest'] == 'Full-time Job'
																																) ? 'checked' : '') ?>>
														<label for="1">Full-time Job</label>
														<input type="radio" id="1" name="job_interest" value="Part-time Job" <?= (($candidate_detail[0]['job_interest'] == 'Part-time Job'
																																) ? 'checked' : '') ?>>
														<label for="1">Part-time Job</label>
														<input type="radio" id="2" name="job_interest" value="Contractor" <?= (($candidate_detail[0]['job_interest'] == 'Contractor'
																															) ? 'checked' : '') ?>>
														<label for="2">Contractor</label>

														<input type="radio" id="3" name="job_interest" value="Intern" <?= (($candidate_detail[0]['job_interest'] == 'Intern')
																															? 'checked' : '') ?>>
														<label for="3">Intern</label>

														<input type="radio" id="1" name="job_interest" value="Co-founder" <?= (($candidate_detail[0]['job_interest'] == 'Co-founder'
																															) ? 'checked' : '') ?>>
														<label for="1">Co-founder</label>
													</div>
												</div>

												<hr>
												<div class="row">
													<label for="basicpill-cstno-input" class="form-label">What
														is your desired salary?</label>
													<p>This information will never be shown on your public
														profile</p>
													<div class="col-lg-6">
														<div class="mb-3">

															<select class="form-control currency" name="salary_currency" data-trigger id="choices-single-default" placeholder="This is a search placeholder">
																<option value="">Select</option>
																<?php
																if ($currency) {
																	foreach ($currency as $cur) {
																?>
																		<option value="<?= $cur['c_id'] ?>" <?= (($candidate_detail[0]['salary_currency'] == $cur['c_id']) ? 'selected' : '') ?>><?= $cur['name'] ?>(<?= $cur['code'] ?>)</option>
																<?php
																	}
																}
																?>

															</select>

														</div>
													</div>

													<div class="col-md-4">
														<div class="mb-3 position-relative">

															<div class="input-group">
																<span class="input-group-text" id="currencyid"></span>
																<input type="text" class="form-control" name="salary" placeholder="Salary" aria-describedby="validationTooltipUsernamePrepend" value="<?= $candidate_detail[0]['salary'] ?>">
																<div class="invalid-tooltip">
																	Please Enter desired salary
																</div>
															</div>
														</div>
													</div>


												</div>
												<hr>
												<div class="row">
													<div class="col-lg-6">
														<div class="mb-3">
															<label for="basicpill-lastname-input" class="form-label">*
																Preferred Role?</label>
															<p>
																Tip: You can select more than one
															</p>
															<select class="form-control" name="role_looking_for[]" data-trigger id="choices-multiple-remove-button" placeholder="This is a search placeholder" multiple>
																<option value="">Select</option>

																<?php
																if ($role) {
																	foreach ($role as $rl) {
																		$optionss = json_decode($candidate_detail[0]['role_looking_for'], true);


																?>
																		<option value="<?= $rl['rid'] ?>" <?php if ($optionss != null) { ?> <?= ((in_array($rl['rid'], $optionss)) ? 'selected' : '') ?> <?php } ?>>
																			<?= $rl['role'] ?>
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
															<label for="basicpill-lastname-input" class="form-label">*
																Preferred Industry?</label>
															<p>
																Tip: You can select more than one
															</p>
															<select class="form-control" name="industries[]" data-trigger id="choices-multiple-remove-button" placeholder="This is a search placeholder" multiple>
																<option value="">Select</option>

																<?php
																if ($industries) {
																	foreach ($industries as $irow) {
																		$options = json_decode($candidate_detail[0]['industries'], true);

																?>
																		<option value="<?= $irow['cate_id'] ?>" <?php if ($options != null) { ?> <?= ((in_array($irow['cate_id'], $options)) ? 'selected' : '') ?> <?php } ?>>
																			<?= $irow['category'] ?>
																		</option>
																<?php

																	}
																}
																?>


															</select>
														</div>
													</div>
												</div>
												<hr>
												<div class="col-lg-6">
													<div class="mb-3">
														<label for="basicpill-firstname-input" class="form-label">*
															Preferred Location</label>

														<input type="text" name="work_location" class="form-control txtPlaces" value="<?= $candidate_detail[0]['work_location'] ?>">
														<datalist id="browsers"></datalist>
													</div>
												</div>
												<hr>
												<div class="row ">
													<div class="col-lg-8 us">
														<h3>* Countries work authorization </h3>
														<table class="table">
															<thead>
																<tr>

																	<th scope="col"></th>
																	<th scope="col">Yes</th>
																	<th scope="col">No</th>
																</tr>
															</thead>
															<tbody>
																<tr>

																	<td>Are you legally authorized to work in the Countries?</td>
																	<td><input type="radio" id="1" name="authorized_us" value="Yes" <?= (($candidate_detail[0]['authorized_us'] == 'Yes'
																																	) ? 'checked' : '') ?>></td>
																	<td><input type="radio" id="2" name="authorized_us" value="No" <?= (($candidate_detail[0]['authorized_us'] == 'No'
																																	) ? 'checked' : '') ?>></td>
																</tr>
																<tr>

																	<td>Do you or will you require sponsorship for a
																		employment visa (e.g. H‑1B)?</td>
																	<td><input type="radio" id="1" name="sponsorship_us" value="Yes" <?= (($candidate_detail[0]['sponsorship_us'] == 'Yes'
																																		) ? 'checked' : '') ?>> </td>
																	<td> <input type="radio" id="2" name="sponsorship_us" value="No" <?= (($candidate_detail[0]['sponsorship_us'] == 'No'
																																		) ? 'checked' : '') ?>></td>
																</tr>

															</tbody>
														</table>

													</div>
												</div>

												<hr>
												<div class="row ">


													<div class="col-lg-12">
														<h3>Would you like to work at companies of these sizes?</h3>
														<table class="table">
															<thead>
																<tr>

																	<th scope="col"></th>
																	<th scope="col">Ideal</th>
																	<th scope="col">Yes</th>
																	<th scope="col">No</th>
																</tr>
															</thead>
															<tbody>
																<tr>

																	<td>Seed (1 - 10 employees)</td>
																	<td><input type="radio" id="0" name="seed" value="Ideal" <?= (($candidate_detail[0]['seed'] == 'Ideal'
																																) ? 'checked' : '') ?>> </td>
																	<td><input type="radio" id="1" name="seed" value="Yes" <?= (($candidate_detail[0]['seed'] == 'Yes'
																															) ? 'checked' : '') ?>> </td>
																	<td><input type="radio" id="2" name="seed" value="No" <?= (($candidate_detail[0]['seed'] == 'No'
																															) ? 'checked' : '') ?>> </td>
																</tr>
																<tr>

																	<td>Early (11 - 50 employees)</td>
																	<td><input type="radio" id="3" name="early" value="Ideal" <?= (($candidate_detail[0]['early'] == 'Ideal'
																																) ? 'checked' : '') ?>> </td>
																	<td><input type="radio" id="4" name="early" value="Yes" <?= (($candidate_detail[0]['early'] == 'Yes'
																															) ? 'checked' : '') ?>> </td>
																	<td><input type="radio" id="5" name="early" value="No" <?= (($candidate_detail[0]['early'] == 'No'
																															) ? 'checked' : '') ?>> </td>
																</tr>

																<tr>

																	<td>Mid-size (51 - 200 employees)</td>
																	<td><input type="radio" id="6" name="mid_size" value="Ideal" <?= (($candidate_detail[0]['mid_size'] == 'Ideal'
																																	) ? 'checked' : '') ?>> </td>
																	<td><input type="radio" id="7" name="mid_size" value="Yes" <?= (($candidate_detail[0]['mid_size'] == 'Yes'
																																) ? 'checked' : '') ?>> </td>
																	<td><input type="radio" id="8" name="mid_size" value="No" <?= (($candidate_detail[0]['mid_size'] == 'No'
																																) ? 'checked' : '') ?>> </td>
																</tr>

																<tr>

																	<td>Large (201 - 500 employees)</td>
																	<td><input type="radio" id="9" name="large" value="Ideal" <?= (($candidate_detail[0]['large'] == 'Ideal'
																																) ? 'checked' : '') ?>> </td>
																	<td><input type="radio" id="10" name="large" value="Yes" <?= (($candidate_detail[0]['large'] == 'Yes'
																																) ? 'checked' : '') ?>> </td>
																	<td><input type="radio" id="11" name="large" value="No" <?= (($candidate_detail[0]['large'] == 'No'
																															) ? 'checked' : '') ?>> </td>
																</tr>

																<tr>

																	<td>Very Large (501 - 1000 employees)</td>
																	<td><input type="radio" id="12" name="very_large" value="Ideal" <?= (($candidate_detail[0]['very_large'] == 'Ideal'
																																	) ? 'checked' : '') ?>> </td>
																	<td><input type="radio" id="13" name="very_large" value="Yes" <?= (($candidate_detail[0]['very_large'] == 'Yes'
																																	) ? 'checked' : '') ?>> </td>
																	<td><input type="radio" id="14" name="very_large" value="No" <?= (($candidate_detail[0]['very_large'] == 'No'
																																	) ? 'checked' : '') ?>> </td>
																</tr>


																<tr>

																	<td>Massive (1001+ employees)</td>
																	<td><input type="radio" id="15" name="massive" value="Ideal" <?= (($candidate_detail[0]['massive'] == 'Ideal'
																																	) ? 'checked' : '') ?>> </td>
																	<td><input type="radio" id="16" name="massive" value="Yes" <?= (($candidate_detail[0]['massive'] == 'Yes'
																																) ? 'checked' : '') ?>> </td>
																	<td><input type="radio" id="17" name="massive" value="No" <?= (($candidate_detail[0]['massive'] == 'No'
																																) ? 'checked' : '') ?>> </td>
																</tr>

															</tbody>
														</table>

													</div>
												</div>

												<ul class="pager wizard twitter-bs-wizard-pager-link">
													<li class="previous"><a href="javascript: void(0);" class="btn btn-primary orange_btn" onclick="nextTab()"><i class="bx bx-chevron-left me-1"></i> Previous</a>
													</li>
													<li class="next"><a href="javascript: void(0);" class="btn btn-primary orange_btn" onclick="nextTab()">Next <i class="bx bx-chevron-right ms-1"></i></a></li>
												</ul>
											</div>

											<div class="tab-pane" id="Culture">

												<div class="col-lg-7">
													<div class="mb-3">
														<label for="basicpill-phoneno-input" class="form-label"> Which
															technologies are you most interested in working
															with?</label>
														<select class="form-control" name="technologies_used[]" data-trigger d="choices-multiple-remove-button" placeholder="This is a search placeholder" multiple>
															<option value="">Select</option>
															<?php
															if ($tech) {
																foreach ($tech as $techno) {
																	$option = json_decode($candidate_detail[0]['technologies_used'], true);

															?>
																	<option value="<?= $techno['tid'] ?>" <?= ((in_array($techno['tid'], $option)) ? 'selected' : '') ?>>
																		<?= $techno['name'] ?>
																	</option>
															<?php

																}
															}
															?>


														</select>
													</div>
												</div>
												<hr>
												<div class="col-lg-12">
													<div class="mb-3">

														<label for="basicpill-phoneno-input" class="form-label">What's
															most important to you in your next job? </label>
														<br>
														<div>


															<div class="list_items_wrapper">


																<div class="list_items">


																	<input type="radio" id="html" name="important_next_job" value="Having a say in what I work on and how I work" <?= (($candidate_detail[0]['important_next_job'] == 'Having a say in what I work on and how I work') ? 'checked' : '') ?>>


																	<label for="html">Having a say in what I work on and how I
																		work</label>


																</div>

																<div class="list_items">

																	<input type="radio" id="css" name="important_next_job" value="Opportunities to progress within the company" <?= (($candidate_detail[0]['important_next_job'] == 'Opportunities to progress within the company') ? 'checked' : '') ?>>
																	<label for="css">Opportunities to progress within the
																		company</label>

																</div>


																<div class="list_items">

																	<input type="radio" id="css" name="important_next_job" value="Team members I can learn from" <?= (($candidate_detail[0]['important_next_job'] == 'Team members I can learn from'
																																									) ? 'checked' : '') ?>>
																	<label for="css">Team members I can learn from</label>

																</div>


																<div class="list_items">

																	<input type="radio" id="css" name="important_next_job" value="A company with a good growth trajectory" <?= (($candidate_detail[0]['important_next_job'] == 'A company with a good growth trajectory'
																																											) ? 'checked' : '') ?>>
																	<label for="css">A company with a good growth trajectory</label>

																</div>

																<div class="list_items">

																	<input type="radio" id="css" name="important_next_job" value="Having a say in the company's and/or my team's direction" <?= (($candidate_detail[0]['important_next_job'] == "Having a say in the company's and/or my team's direction") ? 'checked' : '') ?>>
																	<label for="css">Having a say in the company's and/or my team's direction</label>
																</div>

																<div class="list_items">
																	<input type="radio" id="css" name="important_next_job" value="Mentorship opportunities" <?= (($candidate_detail[0]['important_next_job'] == 'Mentorship opportunities'
																																							) ? 'checked' : '') ?>>
																	<label for="css">Mentorship opportunities</label>
																</div>


																<div class="list_items">
																	<input type="radio" id="css" name="important_next_job" value="Learn new things and develop my skills" <?= (($candidate_detail[0]['important_next_job'] == 'Learn new things and develop my skills'
																																											) ? 'checked' : '') ?>>
																	<label for="css">Learn new things and develop my skills</label>
																</div>

																<div class="list_items">

																	<input type="radio" id="css" name="important_next_job" value="Challenging problems to work on" <?= (($candidate_detail[0]['important_next_job'] == 'Challenging problems to work on'
																																									) ? 'checked' : '') ?>>
																	<label for="css">Challenging problems to work on</label>
																</div>

																<div class="list_items">
																	<input type="radio" id="css" name="important_next_job" value="A diverse team" <?= (($candidate_detail[0]['important_next_job'] == 'A diverse team'
																																					) ? 'checked' : '') ?>>
																	<label for="css">A diverse team</label>
																</div>

															</div>
														</div>
													</div>
													<hr>

													<div class="col-lg-12">
														<div class="mb-3">
															<label for="basicpill-phoneno-input" class="form-label">How
																important is it that your next job has a flexible remote
																work policy?</label>
															<br>
															<input type="radio" id="html" name="flexible_remote_work" value="Very important" <?= (($candidate_detail[0]['flexible_remote_work'] == 'Very important'
																																				) ? 'checked' : '') ?>>
															<label for="html">Very important</label> <br>
															<input type="radio" id="css" name="flexible_remote_work" value="Important" <?= (($candidate_detail[0]['flexible_remote_work'] == 'Important'
																																		) ? 'checked' : '') ?>>
															<label for="css">Important</label><br>
															<input type="radio" id="css" name="flexible_remote_work" value="Not important" <?= (($candidate_detail[0]['flexible_remote_work'] == 'Not important'
																																			) ? 'checked' : '') ?>>
															<label for="css">Not important</label>
														</div>
													</div>
													<hr>

													<ul class="pager wizard twitter-bs-wizard-pager-link">
														<li class="previous"><a href="javascript: void(0);" class="btn btn-primary orange_btn" onclick="nextTab()"><i class="bx bx-chevron-left me-1"></i> Previous</a>
														</li>

														<li class="next"><a href="<?= base_url('Candidate/view_profile') ?>" class="btn btn-primary orange_btn">Preview Profile <i class="bx bx-spreadsheet ms-1"></i></a></li>
													</ul>
												</div>

											</div>

										</div>
									</div>

									<div class="card mt-5 update_btn_wrapper">

										<div class="col-sm-12"> <input type="submit" class="btn btn-outline-success" value="Update Now"></div>
									</div>
								</div>
							</form>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- ========Modals=========== -->


	<!--===Edit modal===-->
	<div id="edit_aca_wrapper">

	</div>

	<div id="edit_exp_wrapper">

	</div>



	<!-- ====acadmics Modal====== -->
	<div class="modal fade" id="composemodal" tabindex="-1" role="dialog" aria-labelledby="composemodalTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title font-size-16" id="composemodalTitle">
						<div id="error-message"></div>
						<div id="success-message"></div>
					</h5>
					<button type="button" class="btn-close" id="acadmicesformclose" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<form method="POST" enctype="multipart/form-data" id="acadmicesform">
					<div class="modal-body">



						<div class="fieldGroup row">
							<div class="col-md-6 mb-3">
								<div class="form-group">
									<label>Degree/Class</label>
									<input type="text" class="form-control" id="degree" name="degree" placeholder="Ex:B.Tech/12th" required>
								</div>
							</div>
							<div class="col-md-6 mb-3">
								<div class="form-group">
									<label>Specialization/Education Board</label>
									<input type="text" class="form-control" id="edu-board" name="specialization" placeholder="Ex: Data Analytics/Digital Marketing/CEBE">
								</div>
							</div>
							<div class="col-md-12 mb-3">
								<div class="form-group">
									<label>College/School/Institute</label>
									<input type="text" class="form-control" id="institute" name="institute" placeholder="Ex:	IIT Bombay/BITS Pilani/NIT Trichy" required>
								</div>
							</div>
							<div class="col-md-6 mb-3">
								<div class="form-group">
									<label>City/Country</label>
									<input type="text" class="form-control" id="city" name="city" placeholder="Ex: Mumbai/Delhi">
								</div>
							</div>
							<div class="col-md-6 mb-3">
								<div class="form-group">
									<label>Year of Passing</label>
									<input type="text" class="form-control" id="passing-year" name="pass_year" placeholder="Ex: 2010">

								</div>
							</div>
						</div>



					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-primary" id="save-button-aca">Submit</button>
					</div>
				</form>
			</div>

		</div>
	</div>

	<!-- ====exp Modal====== -->
	<div class="modal fade" id="composexpemodal" tabindex="-1" role="dialog" aria-labelledby="composemodalTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title font-size-16" id="composemodalTitle">
						<div id="exp-error-message"></div>
					</h5>
					<button type="button" class="btn-close" id="expformclose" data-bs-dismiss="modal" aria-label="Close"></button>
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
									<select class="form-control" name="key_skill[]" id="exp_key_skill" data-trigger d="choices-multiple-remove-button" placeholder="This is a search placeholder" multiple>
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

	<?php include 'includes/footer-link.php'; ?>

	</body>

	</html>


	<script type="text/javascript">
		$(document).ready(function() {
			var roleval = $('.current_role').val();
			if (roleval == "14") {
				$('#otherRole').show();
			} else {
				$('#otherRole').hide();
			}

			$('.current_role').change(function() {
				var v = $(this).val();
				if (v == "14") {
					$('#otherRole').show();
				} else {
					$('#otherRole').hide();
				}
			})

			$('#exp_still_work').click(function() {
				if ($(this).is(':checked')) {
					$("#exp_leave_date_wrapper").hide();
				} else {
					$("#exp_leave_date_wrapper").show();
				}
			});

			$(".role-info-wrapper").hide();

			$('#fresher').click(function() {
				if ($(this).is(':checked')) {
					//hide
					$(".role-info-wrapper").slideUp(300);
					$(".is_require").attr("required", "false");
				} else {
					//show
					$(".role-info-wrapper").slideDown(300);
					$(".is_require").attr("required", "true");
				}
			});



			$('#experienced').click(function() {
				if ($(this).is(':checked')) {
					//show
					$(".role-info-wrapper").slideDown(300);
					$(".is_require").attr("required", "true");
				} else {
					//hide
					$(".role-info-wrapper").slideUp(300);
					$(".is_require").attr("required", "false");
				}
			});

			if ($('#experienced').hasClass('expchecked')) {
				$('.role-info-wrapper').css('display', 'block');
			}


		});
	</script>

	<script>
		$(document).ready(function() {
			var exproleval = $('.exp_role').val();
			if (exproleval == "14") {
				$('#ExpotherRole').show();
			} else {
				$('#ExpotherRole').hide();
			}

			$('.exp_role').change(function() {
				var e = $(this).val();
				if (e == "14") {
					$('#ExpotherRole').show();
				} else {
					$('#ExpotherRole').hide();
				}
			})
		})
	</script>

	<script>
		$(document).ready(function() {
			loadTable();
			loadTableExp();

			// ===Load Acadmics===
			function loadTable() {
				$.ajax({
					url: "<?= base_url('Candidate/show_acadmices') ?>",
					type: "POST",
					beforeSend: function() {
						$("#show_acadmices").html(`<p class="card-text placeholder-glow"><span class="placeholder col-2"></span><span class="placeholder col-1"></span><br><span class="placeholder col-1"></span><span class="placeholder col-3"></span><br><span class="placeholder col-5"></span></p>`);
					},
					success: function(get) {
						$("#show_acadmices").html(get);
					}
				});
			}

			function loadTableExp() {
				$.ajax({
					url: "<?= base_url('Candidate/show_experience') ?>",
					type: "POST",
					beforeSend: function() {
						$("#show_experience").html(`<p class="card-text placeholder-glow"><span class="placeholder col-2"></span><span class="placeholder col-1"></span><br><span class="placeholder col-1"></span><span class="placeholder col-3"></span><br><span class="placeholder col-5"></span></p>`);
					},
					success: function(get) {
						$("#show_experience").html(get);
					}
				});
			}
			// ===Add Acadmics===

			$("#save-button-aca").on("click", function(e) {
				e.preventDefault();
				console.log("button clicked")
				var degree = $("#degree").val();
				var eduboard = $("#edu-board").val();
				var institute = $("#institute").val();
				var city = $("#city").val();
				var passingyear = $("#passing-year").val();
				if (degree == "" || eduboard == "" || institute == "" || city == "" || passingyear == "") {
					$("#error-message").html("All fields are required.").slideDown();
					$("#success-message").slideUp();
				} else {
					$.ajax({
						url: "<?= base_url('Candidate/academic_add') ?>",
						type: "POST",
						data: {
							degree: degree,
							eduboard: eduboard,
							institute: institute,
							city: city,
							passingyear: passingyear
						},
						success: function(data) {
							console.log(data);
							if (data == 1) {
								$("#acadmicesform").trigger("reset");
								$('#acadmicesformclose').trigger('click');
								$("#composemodal").removeClass("show");
								$("#success-message").html("Data Inserted Successfully.").slideDown();
								loadTable();
							} else {
								$("#error-message").html("Can't Save Record.").slideDown();
							}
						}
					});
				}
			});




			// ===Add Exp===
			$("#save-button-exp").on("click", function(e) {
				e.preventDefault();

				var exprole = $("#exp_role").val();
				var otherexproles = $("#exp_other_role").val();
				var expcompany = $("#exp_company").val();
				var expindustry = $("#exp_industry").val();
				var expjoindate = $("#exp_joining_date").val();
				var expleavedate = $("#exp_leaving_date").val();
				var expkeyskill = $("#exp_key_skill").val();
				var expnoticeperiod = $("#exp_notice_period").val();
				var expdesc = $("#exp_description").val();
				if ($('#exp_still_work').is(':checked')) {
					var stillwork = '1';
				} else {
					var stillwork = '0';
				}

				if (exprole == "" || expcompany == "" || expindustry == "" || expjoindate == "" || expkeyskill == "" || expnoticeperiod == "" || expdesc == "") {
					$("#exp-error-message").html("All fields are required.").slideDown();
					$("#success-message").slideUp();
				} else {
					$.ajax({
						url: "<?= base_url('Candidate/experience_add') ?>",
						type: "POST",
						data: {
							exprole: exprole,
							otherexproles: otherexproles,
							expcompany: expcompany,
							expindustry: expindustry,
							expjoindate: expjoindate,
							expleavedate: expleavedate,
							expkeyskill: expkeyskill,
							expnoticeperiod: expnoticeperiod,
							expdesc: expdesc,
							stillwork: stillwork
						},
						success: function(data) {
							console.log(data);
							if (data == 1) {
								$("#expform").trigger("reset");
								$('#expformclose').trigger('click');
								$("#composexpemodal").removeClass("show");
								$("#success-message").html("Data Inserted Successfully.").slideDown();
								loadTableExp();
							} else {
								$("#error-message").html("Can't Save Record.").slideDown();
							}
						}
					});
				}
			});



			//===Edit Aca===
			$(document).on("click", ".aca_edit", function(e) {
				e.preventDefault();
				if (confirm("Do you really want to Edit this record ?")) {
					var editcandidateId = $(this).data("editcandidateid");
					var editacaId = $(this).data("editacaid");
					console.log(editcandidateId);
					console.log(editacaId);
					$.ajax({
						url: "<?= base_url('Candidate/edit_acadmices') ?>",
						type: "POST",
						data: {
							editcandidateId: editcandidateId,
							editacaId: editacaId
						},
						success: function(get) {
							$("#edit_aca_wrapper").html(get);
							$("#edit_acamodal").slideDown(300);
						}
					});
				}
			});

			$(document).on("click", "#close_edit_modal", function(e) {
				$("#edit_acamodal").slideUp(300);
			});

			// 		 ===Update Aca===
			$(document).on("click", "#edit-button-aca", function(e) {
				e.preventDefault();
				console.log('data');
				var degree = $("#degree").val();
				var eduboard = $("#edu-board").val();
				var institute = $("#institute").val();
				var city = $("#city").val();
				var passingyear = $("#passing-year").val();
				var aceid = $("#ace_id").val();
				if (degree == "" || eduboard == "" || institute == "" || city == "" || passingyear == "") {
					$("#error-message").html("All fields are required.").slideDown();
					$("#success-message").slideUp();
				} else {
					$.ajax({
						url: "<?= base_url('Candidate/academic_edit') ?>",
						type: "POST",
						data: {
							degree: degree,
							eduboard: eduboard,
							institute: institute,
							city: city,
							passingyear: passingyear,
							aceid: aceid
						},
						success: function(data) {
							console.log(data);
							if (data == 1) {
								$("#edit_acamodal").hide();
								loadTable();
							} else {
								alert("not update yet");
							}
						}
					});
				}
			});

			// 			===Edit Exp===

			$(document).on("click", ".exp_edit", function(e) {
				e.preventDefault();
				if (confirm("Do you really want to Edit this record ?")) {
					var editcandidateId = $(this).data("editcandidateid");
					var editexpid = $(this).data("editexpid");
					console.log(editcandidateId);
					console.log(editexpid);
					$.ajax({
						url: "<?= base_url('Candidate/edit_exp') ?>",
						type: "POST",
						data: {
							editcandidateId: editcandidateId,
							editexpid: editexpid
						},
						success: function(response) {
							$("#edit_exp_wrapper").html(response);
							$("#edit_expmodal").slideDown(300);
						}
					});
				}
			});

			$(document).on("click", "#editexpformclose", function(e) {
				$("#edit_expmodal").slideUp(300);
			});

			// ===Delete Aca===
			$(document).on("click", ".aca_delete", function(e) {
				e.preventDefault();
				if (confirm("Do you really want to delete this record ?")) {
					var candidateId = $(this).data("candidateid");
					var acaId = $(this).data("acaid");
					var element = this;
					$.ajax({
						url: "<?= base_url('Candidate/delete_acadmices') ?>",
						type: "POST",
						data: {
							candidateId: candidateId,
							acaId: acaId
						},
						success: function(data) {
							if (data == 1) {
								$(element).closest(".acadmices_wrapper").fadeOut();
								loadTable();
							} else {
								$("#error-message").html("Can't Delete Record.").slideDown();
								$("#success-message").slideUp();
							}
						}
					});
					loadTable();
				}
			});

			// ===Delete Exp===
			$(document).on("click", ".delete_exp_btn", function(e) {
				e.preventDefault();
				if (confirm("Do you really want to delete this record ?")) {
					var expcandidateId = $(this).data("expcandidateid");
					var expId = $(this).data("expid");

					$.ajax({
						url: "<?= base_url('Candidate/delete_experience') ?>",
						type: "POST",
						data: {
							expcandidateId: expcandidateId,
							expId: expId
						},
						success: function(response) {
							if (response == 1) {
								// $(elements).closest(".experience_wrapper").fadeOut();
								loadTableExp();
							} else {
								console.log("not deleted");
							}
						}
					});

				}
			});

			//group add limit
			var maxGroup = 200;

			//add more fields group
			$(".addMore").click(function() {
				if ($('body').find('.fieldGroup').length < maxGroup) {
					var fieldHTML = '<div class="fieldGroup row">' + $(".fieldGroupCopy").html() + '</div>';
					$('body').find('.fieldGroup:last').after(fieldHTML);
				} else {
					alert('Maximum ' + maxGroup + ' groups are allowed.');
				}
			});

			//remove fields group
			$("body").on("click", ".remove", function() {
				$(this).parents(".fieldGroup").remove();
			});
		});
	</script>
	<script>
		google.maps.event.addDomListener(window, 'load', function() {
			var places = new google.maps.places.Autocomplete(document.querySelectorAll('.txtselector .txtPlaces'));
			google.maps.event.addListener(places, 'place_changed', function() {
				var place = places.getPlace();
				var address = place.formatted_address;
				var latitude = place.geometry.location.lat();
				var longitude = place.geometry.location.lng();

			});
		});



		$('#not_employeed').click(function() {
			if ($(this).is(':checked')) {
				$('#not_employeed').attr('checked', true);
				$('input[type=checkbox]:checked').attr('value', 1);
			} else {
				$('#not_employeed').attr('checked', false);
				$('input[type=checkbox]').attr('value', 0);
			}
		});
	</script>