<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Toutes les rubriques</title>
</head>

<body>
    <?php
    include "inc/menu.inc.view.php";
    ?>
    <h1>Toutes les champs de toutes les rubriques</h1>
    <?php
    if (!isset($error)):
        foreach ($allArticles as $article): ?>
            <h2><?= $article['title']; ?></h2>
            <p><?= $article['text']; ?></p>
            <?php var_dump($allArticles) ?>
        <?php endforeach;
    else: ?>

        <h3><?= $error ?></h3>
    <?php endif; ?>
</body>

</html>