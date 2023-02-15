$(document).ready(function () {
	$.ajax({
		type: "GET", 
		url: "http://localhost/Count/index", 
		dataType: 'json',
		success:
			function(data) {
				$("footer").html(data.count + " page visits");
			}
	})
})