<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= router\web(); ?>css/style.css">
    <link rel="shortcut icon" href="../public/illustrations_site/logo.png" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/0f4f993d73.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <title>CVotreAvenir</title>
</head>
<div class="logo">
        <a href="<?= \router\url('home','afficher') ?>"><img src="../public/illustrations_site/logo-long.png" ></a>
</div>
    <nav>
    
            <a href="<?= \router\url('homeServices','afficher') ?>">Nos services</a>
            <a href="<?= \router\url('cvotreavenir','afficher') ?>">Qui sommes-nous ?</a>
            <a href="<?= \router\url('realisations','afficher') ?>">Nos réalisations</a>
            <a href="<?= \router\url('blog','afficher') ?>">Blog / FAQ</a>
            <a href="<?= \router\url('contact','afficher') ?>">Contact</a>      
    </nav>
<body>
