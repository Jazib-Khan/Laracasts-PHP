<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        body {
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-family: sans-serif;
        }
    </style>
</head>
<body>

    <?php 
        $name = "Notes from Underground";
        $read = true;

        if($read) {
            $message = "You have read $name";
        } else {
            $message = "You have not read $name";
        }
    ?>

    <h1><?= $message ?></h1>
        
</body>
</html>