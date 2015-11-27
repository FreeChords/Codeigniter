<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<style type="text/css">
.button {
	position: absolute;
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 25px 60px;
    text-decoration: none;
    font-size: 24px;
    cursor: pointer;
    top: 300px;
    left:650px;
}
</style>
<body>
<div>
<?=form_open("action_page/buscando") ?>
<?php
$nombre= array(
    'name'=>'nombre',
    'placeholder'=>'titulo de video'
      ) ?>


<?= form_label('Titulo','nombre')?>
<?= form_input($nombre) ?>

<?= form_submit('','Buscar') ?>
<?= form_close()?>
</div>

<div>
<a href="Upload" class="button">Subir Video</a>

</div>


</body>
</html>