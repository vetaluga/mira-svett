$(document).ready(function() {
	$('form').submit(function(){
		var form = $(this),
		data = {
			name: $('.nameApi', form).val(),
			tel: $('.telApi', form).val(),
		};
		console.log(data);
		$.ajax({  url: 'form.php', type: 'POST', dataType: 'json', data: data, 
			success: function(d){
				console.log('ok');
			},
			error: function(){
			
			},
		});
		return false;
	});
	

});