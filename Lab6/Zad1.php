<?php
    function prime($n)
    {
        for ($i = 2; $i <= $n-1; $i++) {

            if(($n%$i)==0){

                
                return false;
            }
        }
        return true;
    }
    $poczatek = 2;
    $koniec = 1000;

    for($n=$poczatek;$n<=$koniec;$n++){

        if(prime($n)){
            echo($n . '\n');
        }


    }
?>