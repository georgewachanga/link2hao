
<!DOCTYPE html>
<html>
<head>
<title>property add </title>
<!-- for-mobile-apps -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Job Application Form Widget Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- //for-mobile-apps -->
<link href='//fonts.googleapis.com/css?family=Questrial' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="advertise/css/j-forms.css">
<link href="advertise/css/style.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<div class="content">
		<h1>POST YOUR PROPERTY HERE FOR FREE</h1>
		<div class="main">
			<form class="contact-forms">
				<!-- end /.header-->

					<!-- start name -->
					<div class="first-line">
						<div class="span6 main-row">
							<div class="input">
								
								<input type="text" id="first_name" name="first_name" placeholder="First name">
							</div>
						</div>
						<div class="span6 main-row">
							<div class="input">
								
								<input type="text" id="last_name" name="last_name" placeholder="Last name">
							</div>
						</div>
					</div>
					<!-- end name -->

					<!-- start email phone -->
					<div class="first-line">
						<div class="span6 main-row">
							<div class="input">
								
								<input type="email" placeholder="Email" id="email" name="email">
							</div>
						</div>
						<div class="span6 main-row">
							<div class="input">
								
								<input type="text" placeholder="Phone" id="phone" name="phone">
							</div>
						</div>
					</div>
				

					<!-- start country -->
					<div class="main-row">
						<label class="input select">
							<select name="country">
								<option value="none" selected="" disabled="">Select country</option>
								
								<option value="Philippines">Philippines</option>
								<option value="Portugal">Portugal</option>
								<option value="South Africa">South Africa</option>
								<option value="Spain">Spain</option>
								<option value="Switzerland">Switzerland</option>
							</select>
							<i></i>
						</label>
					</div>
					<!-- end country -->

					<!-- start city post code -->
					<div class="first-line">
						<div class="span8 main-row">
							<div class="input">
								
								<input type="text" id="city" placeholder="City" name="city">
							</div>
						</div>
						
					</div>
					<!-- end city post code -->

					<!-- start address -->
					<div class="main-row">
						<div class="input">
							
							<input type="text" id="address" placeholder="Address" name="address">
						</div>
					</div>
					<!-- end address -->


					<!-- start position -->
					<div class="main-row">
						<label class="input select">
							<select name="position">
								<option value="none" selected disabled="">Choose desired position</option>
								<option value="tech lead">Operator</option>
								<option value="product manager"> Manager</option>
								<option value="senior developer"> Developer</option>
								<option value="QA specialist">Designer</option>
							</select>
							<i></i>
						</label>
					</div>
					<!-- end position -->

					<!-- start message -->
					<div class="main-row">
						<div class="input">
							<textarea placeholder="Additional info" spellcheck="false" name="message"></textarea>
								<span class="tooltip tooltip-right-top">Key Skills</span>
						</div>
					</div>
					<!-- end message -->

					<!-- start files -->
					
						<div class=" main-row">
							<label class="input append-small-btn">
								<div class="upload-btn">
									Browse
									<input type="file" name="file1" onchange="document.getElementById('file1_input').value = this.value;">
								</div>
								<input type="text" id="file1_input" readonly="" placeholder="Add your CV">
								<span class="hint">Only: pdf / doc Size: lessthan 1 Mb</span>
							</label>
						</div>
						
					
					<!-- end files -->

			
				<!-- end /.content -->

				<div class="footer">
					<button type="submit" class="primary-btn">Send</button>
					<button type="reset" class="secondary-btn">Reset</button>
				</div>
				<!-- end /.footer -->

			</form>
		</div>

</div>
		<!-- Scripts -->
		<script src="js/jquery.1.11.1.min.js"></script>

		<!--[if lt IE 10]>
				<script src="j-folder/js/jquery.placeholder.min.js"></script>
			<![endif]-->

		<script>
			$(document).ready(function(){

				// Phone masking
				$('#phone').mask('(999) 999-9999', {placeholder:'x'});

				// Post code masking
				$('#post').mask('999-9999', {placeholder:'x'});

			});
		</script>
</body>
</html>
