<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //string practice
        $phrase = "Let's GOOOO";
        echo strtolower($phrase);
        echo strtoupper($phrase);
        echo strlen($phrase);
        echo $phrase[0];
        echo str_replace("GOOOO", "not.", $phrase);
        echo substr($phrase, 6, 5);
        //number practice
        echo 5 + 9;
        $demoNum = 1;
        $demoNum++;
        echo $demoNum;
        $demoNum += 10;
        echo $demoNum;
        echo abs(-100);
        echo pow(2, 4);
        echo sqrt(16);
        echo pow(16, 0.5);
        echo max(2, 10);
        echo min(2, 10);
        echo round(1.5);
        echo round(1.44);
        echo ceil(1.5);
        echo ceil(1.44);
        echo floor(1.5);
        echo floor(1.44);
    ?>
</body>
</html>