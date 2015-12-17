<head>
   <style type="text/css">
body {
    width: 100%;
    height: 400px;
    background-image: url("http://tenerifemusic.com/wp-content/uploads/2015/06/453190_tolpa_lyudi_koncert_ruki_vverx_1680x1050_www.GdeFon.ru_.jpg");
    background-size: cover;
    
    }
</style>
</head>
   <body>
   <div class="container">
    <div class="jumbotron">
		<?= form_open("action_page/buscarContenido") ?>

   <?php echo form_label('Titulo: '),form_dropdown('idContenido', $arrContenido);?>
   <?= form_submit('buscar','Mostrar video')?>
   <?= form_close()?>
      </div>
   </div>
   </body>
</html>