<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<<<<<<< HEAD


   <style type="text/css">
body {
    width: 100%;
    height: 400px;
    background-image: url("http://tenerifemusic.com/wp-content/uploads/2015/06/453190_tolpa_lyudi_koncert_ruki_vverx_1680x1050_www.GdeFon.ru_.jpg");
    background-size: cover;
    
    }
</style>

<div class="container">    
    <div class="jumbotron">
=======




>>>>>>> origin/Diego
<?=form_open("Upload/datainput") ?>
<?php
	 
	 $nombre = array(
		'name' => 'nombre' ,
		 'placeholder' =>'Titulo del Video' ,
		 'required'=>'TRUE'
		 );

	 $video = array(
		'name' => 'video',
		'placeholder'=>'Ej:www.youtube.com/embed/f1C9',
		'required'=>'TRUE',
		'type'=>'url'

				); 
	
?>




<?php 
echo form_label('Banda: '),form_dropdown('idBanda', $arrBanda);

?>

<<<<<<< HEAD

=======
FALTA VALIDAR
>>>>>>> origin/Diego

 <br><br>
 
 <?=  form_label('Titulo:','nombre') ?>
 <?=  form_input($nombre) ?>
<br><br>
 <?=  form_label('Link del Video:','video') ?>
 <?=  form_input($video)?>
 <br><br>
 <?=  form_submit('Control','Subir Video')?>
 <?=  form_close()?>

 
<<<<<<< HEAD
 </div>
</div>
=======
  
>>>>>>> origin/Diego
</body>

</html>

