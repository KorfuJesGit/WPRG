<?php
function Mnozenie($macierz1, $macierz2) {
    $wynik = array();<?php
    function Mnozenie($Matrix1, $Matrix2)
    {
        $Wiersz1 = count($Matrix1);
        $Kolumna1 = count($Matrix1[0]);
        $Wiersz2 = count($Matrix2);
        $Kolumna2 = count($Matrix2[0]);
    
        if ($Kolumna1 != $Wiersz2) { 
            echo "Error";
            return 0;
        }
    
        $wynik = array_fill(0, $Wiersz1, array_fill(0, $Kolumna2, 0));
        
        for ($i = 0; $i < $Wiersz1; $i++) {

            for ($j = 0; $j < $Kolumna2; $j++) {

                for ($k = 0; $k < $Kolumna1; $k++) {

                    $wynik[$i][$j] += $Matrix1[$i][$k] * $Matrix2[$k][$j];
                }
            }
        }

        return $wynik;
    }
    
    $Matrix1 = array( 
        array(1, 2, 3, 4),
        array(4, 5, 6, 7),
        array(7, 8, 9, 10),
        array(7, 8, 9, 11)
    );
    

    $Matrix2 = array( 
        array(7, 8, 9),
        array(9, 10, 11),
        array(11, 12, 13),
        array(13, 14, 15)
    );
    
    $wynik = Mnozenie($Matrix1, $Matrix2);
    if ($wynik) {
        
        echo "Wynik: \n";

        foreach ($wynik as $wiersz) {
            echo implode(" - ", $wiersz) . "\n";
        }
    }
    ?>
    $nWierszy1 = count($macierz1);
    $nKolumn1 = count($macierz1[0]);
    $nWierszy2 = count($macierz2);
    $nKolumn2 = count($macierz2[0]);

    if ($nKolumn1 != $nWierszy2) {
        return "Error, zle wymiary";
    }

    for ($i = 0; $i < $nWierszy1; $i++) {

        for ($j = 0; $j < $nKolumn2; $j++) {

            $wynik[$i][$j] = 0;
        }
    }


    for ($i = 0; $i < $nWierszy1; $i++) {

        for ($j = 0; $j < $nKolumn2; $j++) {

            for ($k = 0; $k < $nKolumn1; $k++) {

                $wynik[$i][$j] += $macierz1[$i][$k] * $macierz2[$k][$j];

            }
        }
    }


    return $wynik;
}

$macierz1 = array(
    array(2, 2),
    array(4, 4),
);
$macierz2 = array(
    array(6, 6),
    array(8, 8),
);

$wynik = Mnozenie($macierz1, $macierz2);
