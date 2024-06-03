<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $text = $_POST["text"];

    echo "duze litery" . strtoupper($text) . "<br>";

    echo "male litery: " . strtolower($text) . "<br>";

    echo "z duzej litery" . ucfirst($text) . "<br>";

    echo "wszystko z duzej litery" . ucwords($text) . "<br>";

}

?>

<form method="post">
    <label for="text">podaj ciag znakow</label><br>

    <input type="text" id="text" name="text"><br>

    <input type="submit" value="napisz">

</form>