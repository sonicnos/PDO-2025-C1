<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../public/style.css">
    <title>Les utilisateurs</title>
</head>

<body>
    <?php
    include "inc/menu.inc.view.php";
    ?>
    <div class="user">
        <h1>Les utilisateurs</h1>
        <?php if (!isset($error)): ?>
            <?php foreach ($allUser as $article): ?>
                <p><?= $article['username']; ?> : <?= $article['fullname']; ?></p>
            <?php endforeach; ?>
        <?php else: ?>
            <p><?= $error; ?></p>
        <?php endif; ?>
    </div>

</body>

</html>