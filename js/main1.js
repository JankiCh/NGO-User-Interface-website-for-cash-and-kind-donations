
    $(document).ready(function () {

		$("#new_pass").on("blur", function() {
			if (/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/.test($("new_#pass").val())) {
				$("#error_password").hide();
			} else {
				$("#error_password").html("Invalid password format!");
			}
		});

		$('#show_password').click(function() {
			if ($('#old_pass').attr('type') == 'text') {
				$('#old_pass').attr('type', 'password');
			} else {
				$('#old_pass').attr('type', 'text');
			}
			if ($('#new_pass').attr('type') == 'text') {
				$('#new_pass').attr('type', 'password');
			} else {
				$('#new_pass').attr('type', 'text');
			}
		});
    });