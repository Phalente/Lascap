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
        <title><?php isset($title)? $title : 'Lascapmarée'; ?></title>
    </head>
    <body>
        <header>

        </header>
