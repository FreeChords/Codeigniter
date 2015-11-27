<?php form_open("/datainput") ?> 


<?php
	$nombre = array(
		'name' => 'nombre' ,
		 'placeholder' =>'Ingrese su nombre' 
		 );

	$video = array(
		'name' => 'video',
		'placeholder'=>'Escribe tu video'
		); 
	
?>

 <?=form_label('Nombre:','nombre') ?>
 <?=form_input($nombre) ?>
<br><br>
 <?=form_label('Video:','video') ?>
 <?=form_input($video)?>
 <?=form_submit('','Subir Video')?>
 <?=form_close()?>
</body>

</html>

