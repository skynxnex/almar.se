$(function () {
	$('#content').html('');
	var editid;
	$('.menu').click(function(e) {
		editid = $(this).attr("id");
		$('#content').html("<h2>Din ruta har id: "+editid+"</h2>");
	}); 
});
