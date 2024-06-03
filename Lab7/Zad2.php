<?php
function rozepchnij($tab, $n) {
    if ($n < 0 || $n >= count($tab)) {
        echo "BŁĄD.\n";
        return;
    }
    $new_tab = array_splice($tab, $n, 0, '$');
    foreach ($tab as $key => $value) {
        $new_tab[$key] = $value;
    }
    return $new_tab;
}
$tab = [1, 2, 3, 4, 5];
$n = 4;
$wynik = rozepchnij($tab, $n);
print_r($tab);
print_r($wynik);
?>