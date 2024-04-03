<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <?php
        $books = [
            [
                "name" => "Notes from Underground",
                "author" => "Fyodor Dostoevsky",
                "year" => 1864,
                "url" => "https://en.wikipedia.org/wiki/Notes_from_Underground"
            ],
            [
                "name" => "Crime and Punishment",
                "author" => "Fyodor Dostoevsky",
                "year" => 1866,
                "url" => "https://en.wikipedia.org/wiki/Crime_and_Punishment"
            ],
            [
                "name" => "Slaughter House V",
                "author" => "Kurt Vonnegut",
                "year" => 1969,
                "url" => "https://en.wikipedia.org/wiki/Slaughterhouse-Five"
            ],
            [
                "name" => "Moby Dick",
                "author" => "Herman Melville",
                "year" => 1851,
                "url" => "https://en.wikipedia.org/wiki/Mobdy-Dick"
            ],
        ];

        // function filter($items, $fn) {

        //     $filteredItems = [];

        //     foreach ($items as $item) {
        //         if ($fn($item)) {
        //             $filteredItems[] = $item;
        //         }
        //     }

        //     return $filteredItems;
        // }


        $filteredBooks = array_filter($books, function ($book) {
            return $book['author'] === 'Fyodor Dostoevsky';
        });

    ?>

    <ul> 
        <?php foreach ($filteredBooks as $book) : ?>
            <li>
                <a href="<?= $book['url']; ?>" >
                    <?= $book['name']; ?> (<?= $book['year']; ?>) - By <?= $book['author']; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>


</body>
</html>