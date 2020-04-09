$(document).ready(function () {
	$("#loginSubmit").click(function () {
		var Username = $("#loginUsername").val();
		var Password = $("#loginPassword").val();

		if (Username != "" && Password != "") {
			$.ajax({
				url: "includes/php/scripts/progress-login.php",
				method: "POST",
				data: {
					loginUsername: Username,
					loginPassword: Password,
				},
				success: function (data) {
					if (data == "500") {
						$("#loginFeedback").fadeIn(1000, function () {
							$("#loginFeedback").html(
								'<div class="alert alert-danger"><div class="alert-title">Error</div>Unknown Error. Contact support.</div>'
							);
						});
					} else if (data == "401") {
						$("#loginFeedback").fadeIn(1000, function () {
							$("#loginFeedback").html(
								'<div class="alert alert-warning"><div class="alert-title">Warning</div>Wrong Details.</div>'
							);
						});
					} else if (data == "200") {
						$("#loginFeedback").fadeIn(1000, function () {
							window.location = "./dashboard.php";
							$("#loginUsername").hide();
							$("#loginPassword").val("");
							$("#loginFeedback").html(
								'<div class="alert alert-success"><div class="alert-title">Success</div>You are now logged in.</div>'
							);
						});
					} else {
						$("#loginFeedback").fadeIn(1000, function () {
							$("#loginFeedback").html(
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
			$("#loginFeedback").fadeIn(1000, function () {
				$("#loginFeedback").html(
					'<div class="alert alert-danger text-center"><strong><i class="fas fa-exclamation"></i> Error</strong><br> Fill out all the details.</div>'
				);
			});
		}
	});
});