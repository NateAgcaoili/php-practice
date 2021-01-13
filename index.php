<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        function sayHi($name) {
            echo "Hello $name <br>";
        }
        sayHi("Nate");

        function cube($num) {
            return pow($num, 3);
        }
        echo cube(2);
        echo "<br>";

        $isMale = false;
        if ($isMale) {
            echo "He is male! <br>";
        } elseif (!$isMale) {
            echo "He is not male! <br>";
        }
        if ($isMale && !$isMale) {
            echo "This is impossible <br>";
        }
        if ($isMale || !$isMale) {
            echo "He might be a male, he might not be! <br>";
        }

        function getMax($numOne, $numTwo) {
            if ($numOne > $numTwo) {
                echo "$numOne is greater than $numTwo <br>";
            } elseif ($numOne < $numTwo) {
                echo "$numTwo is greater than $numOne <br>";
            } else {
                echo "$numOne is equal to $numTwo <br>";
            }
        }
        getMax(1,4);
        getMax(8,3);
        getMax(6,6);

    ?>

</body>
</html>