<!DOCTYPE html>
<html lang="en">
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
      <meta charset="utf-8" />
      
   </head>
   <body>
		      
   <?= form_open("action_page/buscarBanda") ?>
   <?php echo form_label('Banda: '),form_dropdown('idBanda', $arrBanda);?>
   <?= form_submit('buscar','Buscar Videos')?>
   <?= form_close()?>
     
   </body>
</html>