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
        <title>Page Title - SB Admin</title>
        <link href="includes/css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                                    <div class="card-body">
                                        <form action="includes/php/scripts/progress-create.php" method="POST">
                                            <div class="form-row">
                                                <div class="col-md-6">
													<div class="form-group"><label class="small mb-1" for="signupUsername">Username</label>
													<input class="form-control py-4 signupUsername" id="signupUsername" name="signupUsername" type="text" placeholder="Enter username" /></div>
                                                </div>
                                                <div class="col-md-6">
													<div class="form-group"><label class="small mb-1" for="signupPassword">Password</label>
													<input class="form-control py-4 signupPassword" id="signupPassword" name="signupPassword" type="text" placeholder="Enter password" /></div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6">
													<div class="form-group"><label class="small mb-1" for="signupFirstname">Firstname</label>
													<input class="form-control py-4 signupFirstname" id="signupFirstname" name="signupFirstname" type="text" placeholder="Enter Firstname" /></div>
                                                </div>
                                                <div class="col-md-6">
													<div class="form-group"><label class="small mb-1" for="signupLastname">Lastname</label>
													<input class="form-control py-4 signupLastname" id="signupLastname" name="signupLastname" type="text" placeholder="Enter Lastname" /></div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6">
													<div class="form-group"><label class="small mb-1" for="signupEmail">Email</label>
													<input class="form-control py-4 signupEmail" id="signupEmail" name="signupEmail" type="text" placeholder="Enter Email" /></div>
                                                </div>
                                                <div class="col-md-6">
													<div class="form-group"><label class="small mb-1" for="signupCPR">CPR Number</label>
													<input class="form-control py-4 signupCPR" id="signupCPR" name="signupCPR" type="text" placeholder="Enter CPR Number" /></div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6">
													<div class="form-group"><label class="small mb-1" for="signupBirthday">Birthday</label>
													<input class="form-control py-4 signupBirthday" id="signupBirthday" name="signupBirthday" type="text" placeholder="Enter Birthday" /></div>
                                                </div>
                                                <div class="col-md-6">
													<div class="form-group"><label class="small mb-1" for="signupGender">Gender</label>
													<input class="form-control py-4 signupGender" id="signupGender" name="signupGender" type="text" placeholder="Enter Gender" /></div>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group mt-4 mb-0"><button type="submit" class="btn btn-primary btn-block">Create Account</button></div>
                                        </form>
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
                            <div class="text-muted">Copyright &copy; E-Kollektivet <?php print(date("Y")); ?></div>
                            <div>
								<div class="text-muted">Version <?php print($settings->getVersion()) ?></div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
		</div>
		<!-- Cleave.js -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/cleave.js/1.5.7/cleave.min.js"></script>
		<script>
			new Cleave('.signupCPR', {
				delimiter: '-',
				blocks: [6, 4],
				uppercase: true
			});
			new Cleave('.signupBirthday', {
				date: true,
				delimiter: '-',
				datePattern: ['Y', 'm', 'd']
			});
		</script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="includes/js/scripts.js"></script>
    </body>
</html>
