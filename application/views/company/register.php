

	<?php include 'includes/headerlink.php'; ?>



	<!-- <body data-layout="horizontal"> -->
	<div class="auth-page">
		<div class="container-fluid p-0">
			<div class="row g-0 justify-content-center">
				<div class="col-lg-10 col-md-12">
					<div class="auth-full-page-content d-flex p-sm-5 p-4">
						<div class="w-100 login-f">
							<div class="d-flex flex-column submit-form">
								<div class="mb-4 mb-md-5 text-center">
									<a href="<?= base_url('company') ?>" class="d-block auth-logo">
										<img src="<?= base_url() ?>assets/images/logo.png" alt="Hirbox">
									</a>
								</div>
								<div class="auth-content my-auto ">
									<div class="text-center">
										<h5 class="mb-0">Company? Register here</h5>

									</div>
									<?php
									if ($this->session->has_userdata('msg')) {
										echo $this->session->userdata('msg');
										$this->session->unset_userdata('msg');
									}
									?>
									<form class="needs-validation mt-4 pt-2" method="POST">
									    
									    <div class="form__group">

										<div class="form-floating form-floating-custom mb-4">
											<input type="text" class="form-control" name="company_name" id="input-username" placeholder="Enter Company Name" required>

											<label for="input-number">Company Name</label>
											<div class="form-floating-icon">
												<i data-feather="user"></i>
											</div>
										</div>
										<div class="form-floating form-floating-custom mb-4">
											<input type="email" class="form-control" name="email" id="company_email" onkeyup="validateInputs();" placeholder="Enter Email" required>
                                            <span id="emailError" class="text-danger"></span>
											<label for="input-email">Email</label>
											<div class="form-floating-icon">
												<i data-feather="mail"></i>
											</div>
										</div>
										</div>
                                        <div class="form__group">
										
										

									<div class="form-floating form-floating-custom mb-4">
                                            <select class="form-control" name="country_code" required data-trigger id="choices-single-default" placeholder="This is a search placeholder">

                                                <option selected disabled>Select country code</option>
                                                <?php
                                                if (!empty($country_code)) {
                                                    foreach ($country_code as $crow) {
                                                ?>
                                                        <option value="<?= $crow['id'] ?>"><?= $crow['name'] ?> &nbsp; (+<?= $crow['phonecode'] ?>) </option>
                                                <?php
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>


                                        <div class="form-floating form-floating-custom mb-4">
                                            <input type="tel" class="form-control" name="number" id="input-email" placeholder="Enter Email" required>

                                            <label for="input-email">Number</label>
                                            <div class="form-floating-icon">
                                                <i data-feather="phone"></i>
                                            </div>
                                        </div>
                                        </div>
                                        
                                        <div class="country_code_num_wrap">

                                        
                                    </div>

										<div class="form-floating form-floating-custom mb-4 password">
											<input type="password" class="form-control" name="password" id="input-password" placeholder="Enter Password" required>
											<i class="fas fa-eye"></i>

											<label for="input-password">Password</label>
											<div class="form-floating-icon">
												<i data-feather="lock"></i>
											</div>
										</div>

										<div class="form-floating form-floating-custom mb-4 cpassword">
											<input type="password" class="form-control" name="cpassword" id="input-cpassword" placeholder="Enter Password" required>
											<i class="fas fa-eye"></i>

											<label for="input-password">Confirm Password</label>
											<div class="form-floating-icon">
												<i data-feather="lock"></i>
											</div>
										</div>

										<div class="mb-3">
											<button class="btn btn-primary w-100 waves-effect waves-light" id="register_btn" type="submit" disabled>Register</button>
										</div>
									</form>



									<div class="mt-5 text-center">
										<p class="text-muted mb-0">Already have an account ? <a href="<?= base_url('company/login') ?>" class="fw-semibold"> Login </a> </p>
									</div>
								</div>

							</div>
						</div>
					</div>
					<!-- end auth full page content -->
				</div>

			</div>
			<!-- end row -->
		</div>
		<!-- end container fluid -->
	</div>






	<!-- JAVASCRIPT -->
	<?php include 'includes/footerlink.php'; ?>

	<script>
		$('input').attr('autocomplete', 'off');
		
	function regExpGmail() {
    return RegExp(/([a-zA-Z0-9]+)([\.{1}])?([a-zA-Z0-9]+)\@gmail([\.])com/g);
    }
    
    function regExpOutlook() {
    return RegExp(/([a-zA-Z0-9]+)([\.{1}])?([a-zA-Z0-9]+)\@outlook([\.])com/g);
    }
    
    function regExpYahoo() {
        return RegExp(/^[^@]+@(yahoo|ymail|rocketmail)\.(com|in|co\.uk)$/i);
    }
		
		function validateInputs() {
		    reGmail=regExpGmail();
            reYahoo=regExpYahoo();
            reOutlook=regExpOutlook();

            var result = true;
		    var emailCheck = $('#company_email').val();
		    if(!emailCheck) {
                result=false;
                $('#emailError').html('');
            }
            else if(reGmail.test(emailCheck)) {
                result=false;
                $('#emailError').html('Gmail is not allowed!');
            }
            else if(reYahoo.test(emailCheck)) {
                result=false;
                $('#emailError').html('Yahoo is not allowed!');
                
            }else if(reOutlook.test(emailCheck)) {
                result=false;
                $('#emailError').html('Outlook is not allowed!');
                
            }
            else {
                $('#emailError').html('');
                
            }
            
            if(result == true) {
                $('#register_btn').removeAttr('disabled');
                $('#register_btn').css("cursor", "");
            }else{
                $("#register_btn").attr("disabled", true);
                $('#register_btn').css("cursor", "");
            }
		}

		$(function() {
			$("input[name='number']").on('input', function(e) {
				$(this).val($(this).val().replace(/[^0-9]/g, ''));
			});
		});

		const pswrdField = document.querySelector(".submit-form .password input[type='password']"),
			toggleIcon = document.querySelector(".submit-form .password i");

		toggleIcon.onclick = () => {
			if (pswrdField.type === "password") {
				pswrdField.type = "text";
				toggleIcon.classList.add("active");
			} else {
				pswrdField.type = "password";
				toggleIcon.classList.remove("active");
			}
		}
		const pswrdField2 = document.querySelector(".submit-form .cpassword input[type='password']"),
			toggleIcon2 = document.querySelector(".submit-form .cpassword i");

		toggleIcon2.onclick = () => {
			if (pswrdField2.type === "password") {
				pswrdField2.type = "text";
				toggleIcon2.classList.add("active");
			} else {
				pswrdField2.type = "password";
				toggleIcon2.classList.remove("active");
			}
		}
	</script>

</body>



</html>