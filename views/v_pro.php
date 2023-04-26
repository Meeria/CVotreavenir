<?php
include("inc/header.php");
?>

<h1 class="title-page-pro">PACK <span class="pink-words">PRO</span></h1>
<h2 class="sous-titre-pro" style="color:black">Notre pack le plus complet !</h2>
<div class="container-pro">
    <div class="img-pro">
        <img src="../public/illustrations_site/img-pro.png" alt="">  
    </div>
    <div class="div-price-pro">
        <div class="btn-price-pro"><a href="<?= \router\url('services','afficher') ?>"><button>119,99€</button></a></div>
    </div>
    <div class="text-pro">
    <img src="../public/illustrations_site/pink-check.png" alt="">
        <h3>Pack STARTER & PREMIUM </h3>
        <p>Création, mise en forme, optimisation et livraison du CV</p>
        <img src="../public/illustrations_site/pink-check.png" alt="">
        <h3>Rédaction des mails de candidature</h3>
        <p>La première impression est la plus importante</p>
        <img src="../public/illustrations_site/pink-check.png" alt="">
        <h3>Liste des contacts d’entreprises </h3>
        <p>de votre domaine et département</p>
        <img src="../public/illustrations_site/pink-check.png" alt="">
        <h3>Optimisation de votre profil LinkedIn</h3>
        <p>97% des recruteurs utilisent Linkedin</p>
    </div>
</div>

<?php include("inc/footer.php"); ?>