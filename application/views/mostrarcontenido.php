
   <body>
		<?= form_open("action_page/buscarContenido") ?>

   <?php echo form_label('Titulo: '),form_dropdown('idContenido', $arrContenido);?>
   <?= form_submit('buscar','Mostrar video')?>
   <?= form_close()?>
      
   </body>
</html>