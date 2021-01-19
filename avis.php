<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<!------ Ceci est ma page avis.php ----------------------------------------------------------------------------------------------------------------------------------->
<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<!DOCTYPE html>
<html>
<head>
    <title>Avis</title>
    <meta charset="utf-8">
    <!-- liaison avec le fichier css-->
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body>
<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<!-------------------------------------------------------------------------------- Haut de page ---------------------------------------------------------------------->
<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------->
    <nav><!-- Explications sur la page principale-->
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
<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<!-------------------------------------------------------------------------------- Millieu de page ------------------------------------------------------------------->
<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------->
    <center>
        <div id="cookies"> <!-- Donne l'id cookies -->
        <h1 class="espacecom"><br>Espace commentaires:</h1><br/>
        <h4 class="textecom">Voici les avis de differentes personnes sur ce site,<br> n'hésitez pas à poster le votre, les critiques constructives sont acceptées,<br>et m'aideront à m'améliorer. Merci !</h4>
        <form action="avis.php" method="POST">
            <input type="text" name="pseudo" placeholder="Votre Nom"><br/><br/>
            <textarea name="commentaire" placeholder="Votre commentaire..."cols="40" rows="10"></textarea><br/><br/><br/>
            <input type="submit" name="submit_commentaire" value="Poster votre commentaire"><br><br>
<?php
require 'log.php';/* Connexion a la Base de donnée */
/* Formulaire de création d'un commentaire */
if (isset($_POST['pseudo']) )
{

    if (isset($_POST['submit_commentaire']))
    {
        if (isset($_POST['pseudo'], $_POST['commentaire']))/* Lor ce que submit_commentaire est activer on vérifie si le pseudo et le commentaire est bien présent */
        {/* Si ce n'est pas respecter on ajoute une erreur afin que l'internautes remplissent tous les champs */
            $pseudo = $_POST['pseudo'];
            $commentaire = $_POST['commentaire'];

            if (strlen($pseudo) < 25)/* On vérifie que le pseudo contient pas plus de 25 caracteres*/
            {
                $ins = $bdd->prepare("INSERT INTO commentaire(pseudo, commentaire) VALUE (?, ?)");/* On prépare la Base de donnée */
                $ins->execute(array($pseudo, $commentaire));/* On envoie les données du tableau ($pseudo et $commentaire) a la base de donnée*/
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

        <b><?= $c['pseudo'];?>:</b> <?= $c['commentaire'];?><br/><br/><!-- On affiche le commentaire envoyé dans la base de donnée (<.?= equivaut a un echo c'est la simplifications du <.?php)-->
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
<!--------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------- Footer ---------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<footer>
    <a href="MentionsLegales.html">Mentions légales</a>
    <p>©2020 copyright</p>
    <p>designed and producted by<span>&nbsp;Moignet Aurélien</span>
    </p>

</footer>
</html>