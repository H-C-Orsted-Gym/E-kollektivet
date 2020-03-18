<?php

	include_once 'includes/php/classes/settings.inc.php';

	$settings = new SystemSettings();

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<meta name="description" content="" />
		<meta name="author" content="" />
		<title>E-Kollektivet - Login</title>
		<link href="includes/css/styles.css" rel="stylesheet" />
		<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
	</head>
	<body class="bg-dark">
		<div id="layoutAuthentication">
			<div id="layoutAuthentication_content">
				<main>
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-lg-5">
								<div class="card shadow-lg border-0 rounded-lg mt-5">
									<div class="card-header p-4">
										<h3 class="text-center font-weight-light">E-Kollektivet</h3>
										<h4 class="text-center font-weight-light">Login</h4>
									</div>
									<div class="card-body">
										<div id="loginFeedback"></div>
										<div class="form-group">
											<label class="small mb-1" for="loginUsername">Email</label>
											<input class="form-control py-4" id="loginUsername" type="text" placeholder="Enter username" />
										</div>
										<div class="form-group">
											<label class="small mb-1" for="loginPassword">Password</label>
											<input class="form-control py-4" id="loginPassword" type="password" placeholder="Enter password" />
										</div>
										<div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0"><a class="small" href="forgot-password.php">Forgot Password?</a><button class="btn btn-primary" id="loginSubmit">Login</button></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</main>
			</div>
			<div id="layoutAuthentication_footer">
				<footer class="py-4 bg-light mt-auto">
					<div class="container-fluid">
						<div class="d-flex align-items-center justify-content-between small">
							<div class="text-muted">Copyright &copy; E-kollektivet <?php print(date("Y")); ?></div>
							<div>
								<div class="text-muted">Version <?php print($settings->getVersion()) ?></div>
							</div>
						</div>
					</div>
				</footer>
			</div>
		</div>
		<script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
		<script src="includes/js/scripts.js"></script>
		<!-- Login Script -->
		<script src="includes/js/scripts/progress-login.js"></script>
	</body>
</html>
