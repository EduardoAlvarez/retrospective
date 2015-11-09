<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>Retrospectiva Eduardo e Patricia - Adicionar evento</title>
  <meta name="description" content="Retrospectiva Eduardo e Patricia">
  <meta name="author" content="Eduardo">
  <link rel="stylesheet" href="css/styles.css">
  <script src="js/jquery-1.11.2.min.js"></script>
  <script src="lib/jquery-ui/jquery-ui.min.js"></script>	
  <link rel="stylesheet" href="lib/jquery-ui/jquery-ui.min.css">
  <link rel="stylesheet" href="css/add.css">
</head>
<body>
	<script>
		$(function(){
			/*$( "#datepicker" ).datepicker({
				format: 'dd/mm/yyyy',
				language: 'pt-BR'
			});*/
			$( "#enviar" ).button();
			$('input:text, input:password, textarea')
			  .button()
			  .css({
			          'font' : 'inherit',
			         'color' : 'inherit',
			    'text-align' : 'left',
			    'background' : 'white',
			       'outline' : 'none',
			        'cursor' : 'text'
			  });
			  $("#enviar").click(function(){
			  	$.ajax({
				  url: "ajax/ajaxDispatcher.php?classe=eventoBusiness&metodo=persistEvento",
				  data: $("#add").serialize()
				}).done(function(result) {
				  alert('Salvo com  sucesso!');
				  $('textarea').val("");
				});
			  });
		})
	</script>
	<div class='content'>
	<form id='add' >
		<fieldset>
			<legend>Adicionar evento</legend>
			<textarea name='desc_evento' placeholder='Descrição do evento'></textarea>
			<input type='text'  name='data_evento' value='<?php echo date("d/m/Y");?>' id='datepicker'/>
			<input type='button' value='Salvar' id='enviar'/>
		</fieldset>
	</form>
	<small>
		Essa é nossa retrospectiva, 
		imagina ter todos os eventos que passamos juntos em um só lugar, 
		e ainda com nossa trilha sonora!?
	</small>
	</div>
</body>
</html>