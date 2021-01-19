<!DOCTYPE html>
<html>
<head>
    <title>Avis</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body>
    <!-- Haut de page -->
    <nav>
        <div class="logo">
            <a href="index.php#first_page">🏠 Accueil </a>
        </div>
        <ul class="nav-links">
            <li><a href="index.php#portfolio">Projet réalisés</a></li>
            <li><a href="index.php#contact">Me contacter</a></li>
            <li><a href="avis.php?id=3" target="_blank">Avis</a></li>
        </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav><br><br><br>
    <script type="text/javascript">
        const navSlide = () => {
            const burger = document.querySelector('.burger');
            const nav = document.querySelector('.nav-links');
            const navLinks = document.querySelectorAll('.nav-links li')
            
            burger.addEventListener('click',()=>{

                nav.classList.toggle('nav-active');

                navLinks.forEach((link, index) => {
                    if(link.style.animation) {
                        link.style.animation = '';
                    } else {
                        link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 +0.5}s`;
                    }
                });
            });
        }
        navSlide();
    </script>
    <!--millieu de page-->
    <center>
        <div id="cookies">
        <h1 class="espacecom"><br>Avis sur le projet 1:</h1><br/>
        <h4 class="textecom">Merci de laisser un avis constructif afin que je puisse m'améliorer et que je puisse avoir des retours sur ce que vous pensez</h4>
        <form action="avis.php" method="POST">
            <input type="text" name="pseudo" placeholder="Votre Nom"><br/><br/>
            <textarea name="commentaire" placeholder="Votre commentaire..."cols="40" rows="10"></textarea><br/><br/><br/>
            <input type="submit" name="submit_commentaire" value="Poster votre commentaire"><br><br>
<?php
require 'log.php';

if (isset($_POST['pseudo']) )
{

    if (isset($_POST['submit_commentaire']))
    {
        if (isset($_POST['pseudo'], $_POST['commentaire']))
        {
            $pseudo = $_POST['pseudo'];
            $commentaire = $_POST['commentaire'];

            if (strlen($pseudo) < 25)
            {
                $ins = $bdd->prepare("INSERT INTO commentaire(pseudo, commentaire) VALUE (?, ?)");
                $ins->execute(array($pseudo, $commentaire));
                        $error = "Votre commentaire a bien été posté !";
            }
            else
                $error = "Le pseudo doit faire moins de 25 caractères !";
        }
        else
        {
            $error = "Tous les champs doivent être complétés !";
        }
    }

    $commentaires = $bdd->prepare("SELECT * FROM commentaire ORDER BY id_article DESC");
    $commentaires->execute(array());

    while ($c = $commentaires->fetch())
    {
        ?>

        <b><?= $c['pseudo'];?>:</b> <?= $c['commentaire'];?><br/><br/>
        <?php
    }
}
if(isset($error))
{
echo "<script> alert($error) </script>";
}?>
        </form>
    </center>

    <br/>
</body>
<footer>
    <a href="MentionsLegales.html">Mentions légales</a>
    <p>©2020 copyright</p>
    <p>designed and producted by<span>&nbsp;Moignet Aurélien</span>
    </p>

</footer>
</html>