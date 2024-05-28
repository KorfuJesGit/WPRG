<?php
function sumaCyfr($liczba) {

    while (true) {
        $suma = 0;
        while ($liczba > 0) {
            $suma += $liczba % 10;
            $liczba = (int)($liczba / 10);
        }

        if ($suma < 10) {
            return $suma;
        } else {
            $liczba = $suma;
        }
    }
}


$liczba = 12345;
echo "Suma: " . sumaCyfr($liczba);