<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<head>
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
<?=form_open("login/verify") ?>
<?php
	 
	 $nombre = array(
		'name' => 'nombre' ,
		 'placeholder' =>'Ingrese su Nick' ,
		 'required'=>'TRUE'
		 );

	 $clave = array(
		'name' => 'clave',
		'placeholder'=>'ingrese su clave',
		'required'=>'TRUE',
		'type'=>'password'

				); 
	
?>





 <br><br>
 
 <?=  form_label('Nick:','nombre') ?>
 <?=  form_input($nombre) ?>
<br><br>
 <?=  form_label('Clave:','clave') ?>
 <?=  form_input($clave)?>
 <br><br>
 <?=  form_submit('Control','Iniciar Sesion')?>
 <?=  form_close()?>

 
 </div>
</div>
</body>

</html>

