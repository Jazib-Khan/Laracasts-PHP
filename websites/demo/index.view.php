<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

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