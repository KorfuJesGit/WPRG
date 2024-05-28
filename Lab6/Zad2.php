<?php
    function dane($wyraz, $roznica, $n)
    {
        $ciagA = $wyraz;

        echo("ciag arytmentyczny:" . "\n");

        for($i=$ciagA; $i<$n; $i++){

            echo($ciagA ." ");
            $ciagA = $ciagA + $roznica;

        }

        echo("ciag geometryczny:" . "\n");

        for($i=$wyraz; $i<$n; $i++){

            echo($wyraz ." ");
            
            $wyraz = $wyraz * $roznica;
        }
    }
    $wyraz = 3;
    $roznica = 2;
    $n = 5;

    dane($wyraz, $roznica, $n);
?>