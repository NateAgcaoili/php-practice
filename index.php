<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class Movie {
            public $name;
            private $rating;


            function __construct($name, $rating) {
                $this->name = $name;
                $this->rating = $rating;
            }

            function getRating() {
                return $this->rating;
            }

            function setRating($rating) {
                $this->rating = $rating;
            }
        }

        $avengers = new Movie("Avengers", "PG-13");
        echo $avengers->getRating();
        $avengers->setRating("G");
        echo $avengers->getRating();
        
    ?>
    
</body>
</html>