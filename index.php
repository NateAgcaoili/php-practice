<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="text" name="grade">
        <input type="submit">
    </form>
    <?php
        $index = 1;
        while($index <= 5) {
            echo "$index <br>";
            $index++;
        }
        for ($i = 0; $i <= 5; $i++) {
            echo "$i <br>";
        }
    ?>

</body>
</html>