<?php

    include_once ('EstController.php');
    $est = new EstController($_REQUEST['lmuestra']);
    //$est->muestra = $_REQUEST['lmuestra'];
    //"565,568,569,570,572,572,573,575";
    if(!empty($_REQUEST['opc'])){
    echo "<div class='widget-box'>
            <div class='widget-header widget-header-flat'>
                <h4 class='widget-title'>Resultados</h4>
            </div>
            <div class='widget-body'>
                <div class='widget-main'>";
    foreach($_REQUEST['opc'] as $opc){
    //se hace una revisión por cada mat que fue seleccionado
    //echo "opciones"."->".$opc."<br>";
        
   
        switch($opc)
        {
            case 'm1': echo "La media es: ".$est->media()."<br>"; break;
            case 'm2': echo "la Mediana es: ".$est->mediana()."<br>"; break;
            case 'm3': echo "la Moda es: ".$est->moda()."<br>"; break;
            case 'm4': echo "la varianza es: ".$est->varianza()."<br>"; break;
            case 'm5': echo "la Desviacion Estandar es: ".$est->desviacion()."<br>"; break;
        }
    }
        echo "</div>
            </div>
        </div>";
    }else{
        echo "<div class='alert alert-danger' style='margin-top: 1%;'>
                <button type='button' class='close' data-dismiss='alert'>
				    <i class='ace-icon fa fa-times'></i>
				</button>
                <strong>
			     <i class='ace-icon fa fa-times'></i>
			         Oh rayos!
			     </strong>
	               Debes de eligir alguna opcion para poder calcular :(.
				</div>";
    }
?>
