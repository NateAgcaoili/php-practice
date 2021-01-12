<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="madlibs.php" method="get">
        Enter a color: <input type="text" name="color">
        <br>
        Enter a plural noun: <input type="text" name="pluralNoun">
        <br>
        Enter a celebrity: <input type="text" name="celebrity">
        <input type="submit">
    </form>
    <?php
        $color = $_GET["color"];
        $pluralNoun = $_GET["pluralNoun"];
        $celebrity = $_GET["celebrity"];
        echo "Roses are $color <br>";
        echo "$pluralNoun are blue <br>";
        echo "I love $celebrity <br>";
    ?>
</body>
</html>