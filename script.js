$(device).ready(function() {
	// alert('yes');
	$('.span_menu').click(function() {
		$.get('pick.php', function(data) {
			$('#display').show();
			$('#display').html(data);
			// alert(data);
		});
	});
});
