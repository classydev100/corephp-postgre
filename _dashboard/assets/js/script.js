$(function () {

	// Checking for CSS 3D transformation support
	$.support.css3d = supportsCSS3D();

	var formContainer = $('#formContainer');

	// Listening for clicks on the ribbon links
	$('.flipLink').click(function (e) {

		// Flipping the forms
		formContainer.toggleClass('flipped');

		// If there is no CSS3 3D support, simply
		// hide the login form (exposing the recover one)
		if (!$.support.css3d) {
			$('#login').toggle();
		}
		e.preventDefault();
	});

	// formContainer.find('form').submit(function(e){

	// 	e.preventDefault();
	// });


	// A helper function that checks for the 
	// support of the 3D CSS3 transformations.
	function supportsCSS3D() {
		var props = [
			'perspectiveProperty', 'WebkitPerspective', 'MozPerspective'
		], testDom = document.createElement('a');

		for (var i = 0; i < props.length; i++) {
			if (props[i] in testDom.style) {
				return true;
			}
		}

		return false;
	}
});
function Delproduct(id) {
	$.ajax({
		method: "GET",
		url: "/backend/ceilo.php",
		data: {
			operation: 'del',
			id: id
		}
	}).done(function (msg) {
		if (msg == "ok") {
			location.reload();
		}
	})
}
function DelVisitors() {
	$.ajax({
		method: "GET",
		url: "/backend/ceilo.php",
		data: {
			operation: 'vistordel',
			id: 'vistordel'
		}
	}).done(function (msg) {
		if (msg == "ok") {
			location.reload();
		}
	})
}
function Logout() {
	window.location = "index.php";
}

