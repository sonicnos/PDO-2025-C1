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
<h1>Toutes les champs de toutes  les rubriques</h1>
<?php 
     
            foreach ($response as $art):
        
            ?>
        <h3><?php echo $art ["section_title"] ?></h3>
        <p><?php echo $art ["section_slug"] ?></p>
        <p><?php echo $art["section_detail"] ?></p>
        
    
    <?php
    // fin du if/else
    endforeach;

    ?>

</body>
</html>