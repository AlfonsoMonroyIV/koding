<?php
$a = array('1','2','1','2','23','0','2');
//[valor, frecuencia],[nvalor, frecuencia]
?>

<script type="text/javascript">
       var array_js = new Array();
       <?php
              foreach($a as $indice=>$valor){
                     echo " array_js[$indice] = $valor;\n";
                     
              }
       ?>
       document.write(array_js);
</script>