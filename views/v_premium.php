<?php
include("inc/header.php");
?>

<h1 class="title-page-premium">PACK <span class="key-words">PREMIUM</span></h1>
<h2 class="sous-titre-premium">Notre formule la plus populaire 🔥</h2>
<div class="container-premium">
    <div class="text-premium">
        <img src="../public/illustrations_site/yellow-check.png" alt="">
        <h3>Pack STARTER</h3>
        <p>Création, mise en forme, optimisation et livraison du CV</p>
        <img src="../public/illustrations_site/yellow-check.png" alt="">
        <h3>Rédaction des mails de candidature</h3>
        <p>La première impression est la plus importante</p>
        <img src="../public/illustrations_site/yellow-check.png" alt="">
        <h3>Lettre de motivation</h3>
        <p>67% des recruteurs la demandent avant l’entretien</p>
        <img src="../public/illustrations_site/yellow-check.png" alt="">
        <h3>Rédaction d'un post LinkedIn</h3>
        <p>97% des recruteurs utilisent Linkedin</p>
    </div>
    <div class="div-price-premium">
        <div class="btn-price-premium"><a href="<?= \router\url('services','afficher') ?>"><button>59,99€</button></a></div>
    </div>
    <div class="img-premium">
        <img src="../public/illustrations_site/img-premium.png" alt="">
    </div>
</div>

<?php include("inc/footer.php"); ?>