<!DOCTYPE html>
<head>
</head>
<body>
<form name="formu" method="POST">
        <input type="text" name="znaki">
        <button type="submit">napisz</button>
    </form>
    <?php
        if (isset($_POST['znaki']))
        {
            $a=$_POST['znaki'];
            $find=array('+','\\','/',':','*','?','"','<','>','|','-');
            echo str_replace($find, '', $a);

            
        }
    ?>
</body>
</html>