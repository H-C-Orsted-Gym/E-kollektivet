<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
	<title>E-Kollektivet - Reset Password</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- Font Awesome -->
	<script src="https://kit.fontawesome.com/614436aae0.js" crossorigin="anonymous"></script>

	<!-- Template CSS -->
	<link rel="stylesheet" href="./includes/css/style.css">
</head>

<body>
	<div id="app">
		<section class="section">
			<div class="container mt-5">
				<div class="row">
					<div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
						<div class="login-brand">
							<img src="./includes/images/logo.png" alt="logo" width="100" class="rounded-circle">
						</div>

						<div class="card card-primary">
							<div class="card-header">
								<h4>Reset Password</h4>
							</div>

							<div class="card-body">
								<p class="text-muted">Please enter your new email and a new password to reset your password.</p>
								<form method="POST">
									<div class="form-group">
										<label for="email">Email</label>
										<input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
									</div>

									<div class="form-group">
										<label for="password">New Password</label>
										<input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password" tabindex="2" required>
										<div id="pwindicator" class="pwindicator">
											<div class="bar"></div>
											<div class="label"></div>
										</div>
									</div>

									<div class="form-group">
										<label for="password-confirm">Confirm Password</label>
										<input id="password-confirm" type="password" class="form-control" name="confirm-password" tabindex="2" required>
									</div>

									<div class="form-group">
										<button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
											Reset Password
										</button>
									</div>
								</form>
							</div>
						</div>
						<div class="simple-footer">
						Copyright &copy; E-Kollektivet <?php print(date("Y")); ?>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>

	<!-- Bootstrap JS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

	<!-- General JS Scripts -->
	<script src="./includes/js/stisla.js"></script>

	<!-- Template JS File -->
	<script src="./includes/js/main.js"></script>
</body>

</html>