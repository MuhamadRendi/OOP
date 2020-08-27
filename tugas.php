<?php
class pulsa{
  public $operator="Axis",  
            $harga=100000;
            // membuat method
            public function cetakPulsa(){
                return "$this->operator, $this->harga";
            }
}
$pulsa1 = new pulsa();

var_dump($pulsa1);
echo "<br>";
echo $pulsa1->cetakPulsa();
?>