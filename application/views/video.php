
   <style type="text/css">
body {
    width: 100%;
    height: 400px;
    background-image: url("http://tenerifemusic.com/wp-content/uploads/2015/06/453190_tolpa_lyudi_koncert_ruki_vverx_1680x1050_www.GdeFon.ru_.jpg");
    background-size: cover;
    
    }
</style>
   <body>
    <div class="container">    
    <div class="jumbotron">

   	<?php foreach($linkVideo as $row){ ?>
    <table>
        <tr>
            <td><iframe width="640" height="360" src=<?php echo $row->linkVideo ;?> frameborder="0" allowfullscreen></iframe></td>
        </tr>
    </table>
<?= form_open("action_page/voto") ?>
 
   <?php
    $options = array(
                  '1'  => '1',
                  '2'    => '2',
                  '3'   => '3',
                  '4' => '4',
                  '5' => '5'
                );
 
echo form_label('Para votar seleccione nick: '),form_dropdown('selFan', $arrFan);


echo form_label(' Califique el contenido de 1 a 5: '),form_dropdown('selVoto', $options,'1')?>

<?= form_hidden('idContenido',$idContenido); ?>
<?= form_submit('Votar','Votar')?>
<?= form_close()?>

   <?php $cont=0; 
         $sum=0;
    if($arrValoracion!=NULL){
        
     foreach($arrValoracion as $row){ 
                  $sum=$sum+$row->valoracion;
                  $cont++;
                 }
       
      $promedio=round($sum/$cont);
      
      }else{
        $promedio='0';
        $cont='0';
      }           ?>  

      <?php echo 'Valoracion:'.$promedio; echo ' de un total de '.$cont.' Votos' ?>
   


<?php }?>
</div>
   </body>
</html>

