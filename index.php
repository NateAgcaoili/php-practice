<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class Book {
            var $title;
            var $author;
            var $pages;

            function __construct($title, $author, $pages) {
                $this->title = $title;
                $this->author = $author;
                $this->pages = $pages;
            }
        }

        $book1 = new Book("Harry Potter", "JK Rowling", 520);
        $book2 = new Book("Nate's Book", "Nate", 69);

        echo $book2->pages;
        echo $book1->title;
    ?>
    
</body>
</html>