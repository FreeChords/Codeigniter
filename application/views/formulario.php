<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>




<?=form_open("Upload/datainput") ?>
<?php
	 
	 $nombre = array(
		'name' => 'nombre' ,
		 'placeholder' =>'Titulo del Video' 
		 );

	 $video = array(
		'name' => 'video',
		'placeholder'=>'Ej:www.youtube.com/embed/f1C9'
				); 
	
?>




<?php 
echo form_label('Banda: '),form_dropdown('idBanda', $arrBanda);

?>

FALTA VALIDAR

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

