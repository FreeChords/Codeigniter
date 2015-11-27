<?=form_open("Upload/datainput") ?> 


<?php
	 $banda = array(
	 	'name' => 'banda',
	 	'placeholder'=>'Nombre Banda'
	 	);
	 $nombre = array(
		'name' => 'nombre' ,
		 'placeholder' =>'Titulo del Video' 
		 );

	 $video = array(
		'name' => 'video',
		'placeholder'=>'Ej:www.youtube.com/embed/f1C9'
				); 
	
?>
 <?=  form_label('Banda:','banda') ?>
 <?=  form_input($banda) ?>
 <br><br>

 <?=  form_label('Titulo:','nombre') ?>
 <?=  form_input($nombre) ?>
<br><br>
 <?=  form_label('Link del Video:','video') ?>
 <?=  form_input($video)?>
 <br><br>
 <?=  form_submit('Control','Subir Video')?>
 <?=  form_close()?>
</body>

</html>

