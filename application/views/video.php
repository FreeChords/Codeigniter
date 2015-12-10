
   <body>
   	<?php foreach($linkVideo as $row){?>
    <table>
        <tr>
            <td><iframe width="640" height="360" src=<?php echo $row->linkVideo ;?> frameborder="0" allowfullscreen></iframe></td>
        </tr>
    </table>
<?php }?>
   </body>
</html>

