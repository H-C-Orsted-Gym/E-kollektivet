$(document).ready(function () {
	$("#Login_Submit").click(function () {
		var Username = $("#Student_Username").val();
		var Password = $("#Student_Password").val();

		if (Username != "" && Password != "") {
			$.ajax({
				url: "../includes/php/scripts/progress-student-login.php",
				method: "POST",
				data: {
					Username: Username,
					Password: Password,
				},
				success: function (data) {
					if (data == "500") {
						$("#Login_Feedback").fadeIn(1000, function () {
							$("#Login_Feedback").html(
								'<div class="alert alert-danger text-center"><strong><i class="fas fa-exclamation"></i> Error</strong><br> Unknown error. Contact support for help.</div>'
							);
						});
					} else if (data == "401") {
						$("#Login_Feedback").fadeIn(1000, function () {
							$("#Login_Feedback").html(
								'<div class="alert alert-danger text-center"><strong><i class="fas fa-exclamation"></i> Error</strong><br> Wrong Details.</div>'
							);
						});
					} else if (data == "200") {
						$("#Login_Feedback").fadeIn(1000, function () {
							window.location = "../Student/index.php";
							$("#Student_Username").hide();
							$("#Student_Password").val("");
							$("#Login_Feedback").html(
								'<div class="alert alert-success text-center"><strong><i class="fas fa-trophy"></i> You are now logged in! Click <a href="dashboard.php">HERE</a> if not redirected.</div>'
							);
						});
					} else {
						$("#Login_Feedback").fadeIn(1000, function () {
							$("#Login_Feedback").html(
								'<div class="alert alert-danger text-center">' + data + "</div>"
							);
						});
					}
				},
				error: function (xhr, status, error) {
					console.log(xhr);
					console.log(status);
					console.log(error);
				}
			});
		} else {
			$("#Login_Feedback").fadeIn(1000, function () {
				$("#Login_Feedback").html(
					'<div class="alert alert-danger text-center"><strong><i class="fas fa-exclamation"></i> Error</strong><br> Fill out all the details.</div>'
				);
			});
		}
	});
});