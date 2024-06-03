
<!DOCTYPE html>
<head>
</head>
<body>
<form method="POST">
        <input type="text" name="cyfry">
        <button type="submit">wypisz</button>
    </form>
    <?php
        if (isset($_POST['cyfry']))
        {
            if (isset($_POST['cyfry']))
        {
            $a=$_POST['cyfry'];
            $b=explode('.',$a);
            if (count($b)!= 1)
            {
                echo strlen($b[1]);
            }
            else
            {
                echo 'brak';
            }
        }
        }
    ?>
</body>
</html>