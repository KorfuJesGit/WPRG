<!DOCTYPE html>
<head>
    <style>
        body {
            background-color: lightgray;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: auto;
            padding: 10px;
            background-color: white;
            border: 1px solid gray;
            border-radius: 15px;
        }

        form {
            display: flex;
            flex-direction: column;
            border-radius: 15px;
        }

        label, input, select, button {
            margin-bottom: 10px;
        }

        input, select, button {
            padding: 5px;
            border: 1px solid gray;
        }

        button {
            background-color: blue;
            color: white;
            border-radius: 15px;
        }

        
    </style>
</head>
<body>
<div class="container">
    <form method="post" action="">
        <label for="ciag">wpisz:</label>
        <input type="text" id="ciag" name="ciag" required>

        <label for="akcja">wybierz dzialanie:</label>
        <select id="akcja" name="akcja" required>
            <option value="odwroc">odwroc</option>
            <option value="male litery">male litery</option>
            <option value="duze litery">duze litery</option>
            <option value="dlugosc">dlugosc</option>
            <option value="biale znaki">biale znaki</option>
        </select>

        <button type="submit">napisz</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $ciag = $_POST['ciag'];
        $akcja = $_POST['akcja'];
        $wynik = "";

        switch ($akcja) {
            case "odwroc":
                $wynik = strrev($ciag);
                break;
            case "duze litery":
                $wynik = strtoupper($ciag);
                break;
            case "male litery":
                $wynik = strtolower($ciag);
                break;
            case "dlugosc":
                $wynik = strlen($ciag);
                break;
            case "biale znaki":
                $wynik = trim($ciag);
                break;
        }

        echo "<div class='wynik'>$wynik</div>";
    }
    ?>
</div>
</body>
</html>
