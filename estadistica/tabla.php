	<div class='widget-box'>
            <div class='widget-header widget-header-flat'>
                <h4 class='widget-title'>Tabla de Datos</h4>
            </div>
            <div class='widget-body'>
                <div class='widget-main'>
			<?php
				include_once ('EstController.php');
				$muestra = new EstController($_REQUEST['lmuestra']);
				foreach($muestra->emuestra as $m)
				{
					echo $m."<br>";	
				}
			?>
		</div>
            </div>
        </div>
