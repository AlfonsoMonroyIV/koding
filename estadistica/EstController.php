<?php
/**
 * Created by PhpStorm.
 * User: Ãe
 * Date: 1/10/14
 * Time: 11:16 AM
 */
class EstController{
    public  $muestra;
    public  $rmedia;
    public $rmoda;
    public  $rvarianza;
    public  $rdesviacion;
    public  $rmediana;
    public  $emuestra;
    public  $tammuestra;
    public  $sumuestra;

     public function EstController($muestra)
     {
        $this->emuestra = explode(",", $muestra);
        $this->tammuestra = count($this->emuestra);
        $this->sumuestra = array_sum($this->emuestra);
     }

    public function media()
    {
        $this->rmedia=$this->sumuestra / $this->tammuestra;
        return $this->rmedia;
    }

    public function varianza()
    {
		if($this->tammuestra>1){
        for ($v=0;$v<=$this->tammuestra-1;$v++)
        {
            $this->rvarianza = $this->rvarianza + pow($this->emuestra[$v]-$this->rmedia,2);
        }
        $this->rvarianza = $this->rvarianza / ($this->tammuestra-1);
		}else{
		$this->rvarianza=0;
		}
        return $this->rvarianza;
    }

    public function desviacion()
    {
        $this->rdesviacion = sqrt($this->rvarianza);
        return $this->rdesviacion;
    }

    public function mediana()
    {
        sort($this->emuestra);
        if($this->tammuestra%2 == 1)
        {
            $pos = ($this->tammuestra-1)/2;
            $this->rmediana = $this->emuestra[$pos];
        }
        else
        {
            $pos = $this->tammuestra/2;
            $this->rmediana = ($this->emuestra[$pos] + $this->emuestra[$pos-1])/2;
        }
        return $this->rmediana;
    }
    public function moda()
    {
        $muestra=array_count_values($this->emuestra);
        arsort($muestra);
        $moda=array();
        $contador="0";
        $frecuencia="0";
        foreach($muestra as $key => $valor)
        {
            if ($valor >= $contador)
            {
                $moda[]=$key;
                $contador = $valor;
                $frecuencia=$valor;
            }
        }
        $tipomoda="";
        if (count($moda)==1)
        {
            $tipomoda='moda modal';
        }

        if (count($moda)==2)
        {
            $tipomoda='moda bimodal';
        }

        if (count($moda) == count($muestra))
        {
            $tipomoda='no hay moda';
        }

        if (count($moda) < count($muestra) && count($moda) > 2)
        {
            $tipomoda='moda multimodal';
        }

        if ($tipomoda != 'no hay moda')
        {
            $val = "";
            for ($v=0;$v<count($moda);$v++)
            {
                $val = $val." ".$moda[$v];
            }
            $this->rmoda = $val." ";
            $this->rmoda.= "Tipo de Moda: ".$tipomoda."<br>";
            $this->rmoda.= "Frecuencia: ".$frecuencia;

            return $this->rmoda;
        }
        else {
            return $this->rmoda =  'no hay moda';
        }
    }
}
