<!DOCTYPE html>
<html>
<head>
</head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="text" id="numbers" name="numbers"><br>
    <input type="submit" value="licz">
</form>
<?php
function licz($input) {
    $wspolgloski = array("b", "c", "d", "f", "g", "h", "i", "j", "k", "l", "m", "n", "p", "q", "r", "s", "t", "v", "w", "x", "y", "z", "ą", "ę", "ż", "ć", "ó", "ź");
    $wynik = str_replace($wspolgloski, "", $input);
    return $wynik;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = $_POST['numbers'];
    $Result = strlen(licz($input));
    echo "<p>Wynik: $Result</p>";
}
?>