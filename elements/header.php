<?php

?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/Style/Lascap.css">
        <?php if(isset($page)) : ?>
            <link rel="stylesheet" href="../Style/<?= $page ?>.css">
        <?php endif; ?>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter&family=Press+Start+2P&display=swap" rel="stylesheet">
        <link rel="icon" href="../Images/logoscapmaree.png">
        <title>
            <?php if (isset($title)): ?>
                <?= $title ?>
            <?php else: ?>
                Lascapmarée
            <?php endif ?>
        </title>
    </head>
    <body>
        <header>
            <div class="img-header">
                <a href="../Lascap.php">
                <img src="../Images/logoscapmaree.png" alt="Logo Scapmarée">
            </div>
            </a>
            <div class="nav-bar">
                <ul>
                    <li><a href="../Lascap.php">La Scapmarée</a></li>
                    <li><a href="../Pages/page2.php">Les équipes</a></li>
                    <li><a href="../Pages/page3.php">Mes missions</a></li>
                    <li><a href="../Pages/page4.php">Conclusion</a></li>
                </ul>
            </div>
        </header>
