<style type="text/css">
img{
  width: 100%;
  height: auto;
}body {
    width: 100%;
    height: 400px;
    background-image: url("http://tenerifemusic.com/wp-content/uploads/2015/06/453190_tolpa_lyudi_koncert_ruki_vverx_1680x1050_www.GdeFon.ru_.jpg");
    background-size: cover;
    
    }
</style>
   <body>
  <div class="container">    
    <div class="jumbotron">
   <?= form_open("action_page/buscarBanda") ?>
   <?php echo form_label('Banda: '),form_dropdown('idBanda', $arrBanda);?>
   <?= form_submit('buscar','Buscar Videos')?>
   <?= form_close()?>
   </div> 
   </div>  
   </body>
</html>