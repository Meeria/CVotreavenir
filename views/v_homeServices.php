<?php
include("inc/header.php");
?>

<div class="page-homeServices">
    <div class="text-homeServices">
        <h1><span class="key-words">CV</span>otreavenir, <br>saisissez le !</h1>
        <div class="btn-services">
            <div><a href="<?= \router\url('packs','afficher') ?>"><button class="btn-packs">Choisir un pack</button></a></div>
            <div><a href="<?= \router\url('services','afficher') ?>"><button class="services">Découvrez nos <br>services phares</button></a></div>
        </div>
    </div>

    <div class="img-homeServices">
        <img src="../public/illustrations_site/astronaute.png" alt="">
    </div>
</div>

<?php include("inc/footer.php"); ?>