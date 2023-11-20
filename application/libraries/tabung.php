<?php
 class tabung {

    function volume($pi,$jari,$tinggi)
    {
        $vTabung = $pi * $jari * $jari * $tinggi;
        echo "vTabung = ".$vTabung ;  
        echo"</br>";
    }

    function laTabung ($pi,$jari,$tinggi)
    {
        $laTabung = 2 * $pi * $jari * ($jari + $tinggi);
        echo "laTabung = ".$laTabung ;  
        echo"</br>";


    }
    
    function lSelimut ($pi,$jari,$tinggi)
    {
        $lSelimut = 2 *$pi * $jari  * $tinggi;
        echo "lSelimut = ".$lSelimut ;  
        echo"</br>";

    }

    function hasil ($pi,$jari,$tinggi)
    {
        echo "pi = " . $pi ;
        echo"</br>";
        echo "jari = ".$jari ;
        echo"</br>";
        echo "tinggi = ".$tinggi ;
        echo"</br>";

        $this->volume($pi,$jari,$tinggi);
       $this->laTabung($pi,$jari,$tinggi);
        $this->lSelimut($pi,$jari,$tinggi);

    }
    

 }
?>
