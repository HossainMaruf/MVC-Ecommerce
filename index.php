<?php
// include_once('./Home.php');
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
        $books = [
            [
                'title' => 'Title 1',
                'author' => 'Maruf Hossain',
                'releaseYear' => 2020
            ],
            [
                'title' => 'Title 2',
                'author' => 'Mehedi Hasan',
                'releaseYear' => 2021
            ],
            [
                'title' => 'Title 3',
                'author' => 'Maruf Hossain',
                'releaseYear' => 2020
            ]
        ];

        function filter($items, $fn) {
            $filteredItems = [];
            foreach($items as $item) {
                if($fn($item)) {
                    $filteredItems[] = $item; // push the item
                }
            }
            return $filteredItems;
        }


        $filteredBooks = filter($books, function($book) {
            return $book['releaseYear'] === 2020;
        });

        ?>
        <ul>
            <?php foreach($filteredBooks as $book): ?>
            <li><?= $book['title'] ?></li>
            <?php endforeach; ?>
        </ul>
        
    </body>
</html>
