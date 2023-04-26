<?php
include("inc/header.php");
?>

<h1 class="title-page-premium">SERVICES <span class="key-words">INDIVIDUELS</span></h1>
<div class="container-services">
<a href="<?= \router\url('home','afficher') ?>"><img src="../public/illustrations_site/service-linkedin.png" alt="" class="services"></a>
    <img src="../public/illustrations_site/2.png" alt="" class="services">
    <img src="../public/illustrations_site/3.png" alt="" class="services">
    <img src="../public/illustrations_site/4.png" alt="" class="services">
    <a href="<?= \router\url('lettre','afficher') ?>"><img src="../public/illustrations_site/5.png" alt="" class="services"></a>
    <img src="../public/illustrations_site/6.png" alt="" class="services">
    <a href="<?= \router\url('CV','afficher') ?>"><img src="../public/illustrations_site/7.png" alt="" class="services"></a>
    <img src="../public/illustrations_site/8.png" alt="" class="services">
</div>

<?php include("inc/footer.php"); ?>