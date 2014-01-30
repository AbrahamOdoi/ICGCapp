$(device).ready(function() {
	// alert('yes');
	$.get('pick.php', function() {
		$('.wrapper1').html(data);
	})
});
