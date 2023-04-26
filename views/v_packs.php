<?php
include("inc/header.php");
?>


<div class="title-packs">
    <h1>NOS PACKS</h1>
</div>

<div class="container-formules">  
    <img class="price-starter"src="../public/illustrations_site/price-starter.png" alt="price">
    <img class="price-premium" src="../public/illustrations_site/price-premium.png" alt="price">
    <img class="price-pro" src="../public/illustrations_site/price-pro.png" alt="price">
    <div class="starter">
        <h2>PACK <span class="pink-words">STARTER</span></h2>
        <p class="text-top"><span class="pink-words">Un CV professionnel</span> rédigé pour vous <br>démarquer des autres candidats.</p>
        <ul>
            <li><span class="pink-words">Rédaction de votre CV</span>, après vos réponses au questionnaire ou un entretien téléphonique d’environ 20/30 minutes</li>
            <li><span class="pink-words">Mise en forme du CV</span> selon les standards de votre secteur pour attirer l’attention des recruteurs</li>
            <li><span class="pink-words">Optimisation des mots-clés</span> pour que le CV remonte dans les résultats des CVthèques et soit compatible avec les ATS (Logiciels RH)</li>
            <li><span class="pink-words">Livraison du CV au format Word et PDF</span>. Possibilité de faire des allers-retours avec votre consultant jusqu’à ce que vous validiez la prestation.</li>
        </ul>
        <div class="button-starter"><a href="<?= \router\url('starter','afficher') ?>"><button>En savoir + sur le pack STARTER</button></a></div>
    </div>
    <div class="premium">
    
        <h2>PACK <span class="key-words">PREMIUM</span></h2>
        <p class="text-top">Un <span class="key-words">CV professionnel</span> + <span class="key-words">lettre de motivation</span> + <span class="key-words">Mails de candidature</span> et votre <span class="key-words">post Linkedin</span></p>
        <div class="text-packs">
            <h3>Formule STARTER</h3>
            <p> Création, mise en forme, optimisation et livraison du CV</p>
            <p class="plus">+</p>
            <h3>Rédaction des mails de candidature</h3>
            <p class="plus">+</p>
            <h3>Lettre de motivation</h3>
            <p>67% des recruteurs la demandent avant l’entretien</p>
            <p class="plus">+</p>
            <h3>Rédaction d'un post LinkedIn</h3>
            <p>97% des recruteurs utilisent Linkedin</p>
            <h2>Notre Formule la plus populaire !</h2>
            <div class="button-premium"><a href="<?= \router\url('premium','afficher') ?>"><button>En savoir + sur le pack PREMIUM</button></a></div>
        </div>
    </div>
    <div class="pro">
        <h2>PACK PRO</h2>
        <p class="text-top">Notre pack le plus complet: Un CV professionnel, une lettre de motivation, votre profil LinkedIn et  la liste de contacts d'entreprises</p>
       <div class="text-packs">
            <h3>Formule STARTER</h3>
            <p> Création, mise en forme, optimisation et livraison du CV</p>
            <p class="plus">+</p>
            <h3>Formule PREMIUM</h3>
            <p>Un CV professionnel + une lettre de motivation ou votre profil LinkedIn</p>
            <p class="plus">+</p>
            <h3>Rédaction des mails de candidature</h3>
            <p>La première impression est la plus importante</p>
            <p class="plus">+</p>
            <h3>Optimisation de votre profil LinkedIn</h3>
            <p>97% des recruteurs utilisent Linkedin</p>
            <p class="plus">+</p>
            <h3>Liste des contacts d’entreprises </h3>
            <p>de votre domaine et département</p>
            <div class="button-pro"><a href="<?= \router\url('pro','afficher') ?>"><button>En savoir + sur le pack PRO</button></a></div>
        </div>
    </div>

</div>

<?php include("inc/footer.php"); ?>