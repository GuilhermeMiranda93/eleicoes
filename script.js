$(document).ready(function(){

	$('#vote').click(function(){

		var escolhido = $('input[name=imagem]:checked', '.radio-group').val();

		var data = {};

		data.voto = escolhido;

		if(escolhido){

			$.ajax({
				url: "controller.php",
				method: "POST",
				data:data,
				dataType: "json",
				success: function(data){

					if(data){

						var audio = new Audio('fim.m4a');
						audio.play();

						$("#sucesso").css('display','flex');
						setTimeout(function() { 
							$("#sucesso").css('display','none'); 
						}, 8000);

						$('input[name=imagem]:checked', '.radio-group').prop('checked',false);
						$('#pedro-img').css('filter','');
						$('#silvia-img').css('filter','');

					}
					else{
						$("#erro").css('display','flex');
						setTimeout(function() { 
							$("#erro").css('display','none'); 
						}, 8000);
					}


				}
			});
		}
		else{
			alert('Escolha um candidato');
		}

	});


	$('input[name=imagem]', '.radio-group').change(function(){

		if($('#pedro').is(':checked')){
			$('#pedro-img').css('filter','');
			$('#silvia-img').css('filter','grayscale()');
		}
		else if($('#silvia').is(':checked')){
			$('#pedro-img').css('filter','grayscale()');
			$('#silvia-img').css('filter','');
		}
	});



});