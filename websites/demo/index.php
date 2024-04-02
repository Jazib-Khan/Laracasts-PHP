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
                "year" => "1864",
                "url" => "https://en.wikipedia.org/wiki/Notes_from_Underground"
            ],
            [
                "name" => "Crime and Punishment",
                "author" => "Fyodor Dostoevsky",
                "year" => "1866",
                "url" => "https://en.wikipedia.org/wiki/Crime_and_Punishment"
            ],
            [
                "name" => "The Brothers Karamazov",
                "author" => "Fyodor Dostoevsky",
                "year" => "1880",
                "url" => "https://en.wikipedia.org/wiki/The_Brothers_Karamazov"
            ],
        ];
    ?>

    <ul>
        <?php foreach ($books as $book) : ?>
            <li>
                <a href="<?= $book['url']; ?>" />
                <?= $book['name']; ?>
            </li>
        <?php endforeach; ?>
    </ul>

</body>
</html>