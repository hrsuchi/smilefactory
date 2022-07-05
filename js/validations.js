//Validacion form inicio
var validinicio = jQuery.noConflict();
	validinicio().ready(function() {

		validinicio("#theForm").validate({
			rules: {
        password_confirm: {
					required: true,
					equalTo: "#password"
				}
			},
			messages: {
        password_confirm: {
					required: "Required",
					equalTo: "Verify your password"
				}
			}
		});
	});

///Validacion form inicio
