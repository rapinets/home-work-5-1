<?php
require 'SortName.php';
?>

<!doctype html>
<html lang="ua">
<head>
    <meta chF-8">
    <meta name="viewport"
          content="widtharset="UT=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        Ваше ім'я: <input type="text" name="name"><br>
        <input type="submit">
    </form>

    <br>

    <?php

        $sort = new SortName();
        $sort->sort();
        echo "<br>";
        echo "<hr>";
        $sort->sortLocate();

    ?>

</body>
</html>

