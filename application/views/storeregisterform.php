<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register Your Store!!!</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>/assets/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/main.css">
<!--===============================================================================================-->
</head>
<body>
<?php echo validation_errors(); ?>


	<div class="container-contact100">
		<div class="wrap-contact100">
			<!-- <form class="contact100-form  validate-form"> -->
			<?php echo form_open_multipart('Getdetails/getstoredetails',array('class'=>'contact100-form validate-form','name'=>'registration'))?>	
			<span class="contact100-form-title">
					Register Your Store
				</span>

				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Your Store Name</span>
					<input class="input100" type="text" name="store_name" placeholder="Enter your store name">
					<span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Your Store Email</span>
					<input class="input100" type="email" name="store_email" placeholder="Enter your store Email ID">
					<span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Your Store Mobilenumber</span>
					<input class="input100" type="mobilenumber" name="store_mobilenumber" placeholder="Enter your store mobilenumber">
					<span class="focus-input100"></span>
				</div>
				
				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Your Password</span>
					<input class="input100" type="password"  placeholder="Enter your password">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Re-confirm Password</span>
					<input class="input100" type="password" name="store_password" placeholder="Enter your re-confirm password">
					<span class="focus-input100"></span>
                </div>
                
                <div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Your Store Location</span>
					<input class="input100" type="text" name="store_location" placeholder="Enter your store location">
					<span class="focus-input100"></span>
				</div>
				<!-- <div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Upload Documents</span>
					<input class="input100" type="file" name="upload_file" placeholder="Enter your name">
					<span class="focus-input100"></span>
				</div> -->

				<!-- <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<span class="label-input100">Email</span>
					<input class="input100" type="text" name="email" placeholder="Enter your email addess">
					<span class="focus-input100"></span>
				</div> -->

				<!-- <div class="wrap-input100 input100-select">
					<span class="label-input100">Needed Services</span>
					<div>
						<select class="selection-2" name="service">
							<option>Choose Services</option>
							<option>Online Store</option>
							<option>eCommerce Bussiness</option>
							<option>UI/UX Design</option>
							<option>Online Services</option>
						</select>
					</div>
					<span class="focus-input100"></span>
				</div> -->

				<!-- <div class="wrap-input100 input100-select">
					<span class="label-input100">Budget</span>
					<div>
						<select class="selection-2" name="budget">
							<option>Select Budget</option>
							<option>1500 $</option>
							<option>2000 $</option>
							<option>2500 $</option>
						</select>
					</div>
					<span class="focus-input100"></span>
				</div> -->

				<!-- <div class="wrap-input100 validate-input" data-validate = "Message is required">
					<span class="label-input100">Message</span>
					<textarea class="input100" name="message" placeholder="Your message here..."></textarea>
					<span class="focus-input100"></span>
				</div> -->

				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn" value="getstoredetails" name="register">
							<span>
								Register
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>



	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>/assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>/assets/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>/assets/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo base_url(); ?>/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>/assets/vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>/assets/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>/assets/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<!-- <script src="<?php echo base_url(); ?>/assets/js/main.js"></script> -->
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>assets/js/jquery-validation-1.15.0/dist/jquery.validate.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/js/form-validation.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script> -->

</body>
</html>
