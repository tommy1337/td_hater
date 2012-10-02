$(function() {
	$('#addUser').click(function() {
		$.get($(this).attr('href'), function(data) {
			$(data).dialog();
		});
		return false;
	});
});