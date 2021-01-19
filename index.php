<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<!------ Ceci est un site portfolio que j'ai coder en regardant different codes deja existants et que----------------------------------------------------------------->
<!----- j'ai repris sur internet ce code bien qu'il est existant je l'ai remis selon ce que je voulais, -------------------------------------------------------------->
<!---------- ce projet m'a mis enormement de temps à le réaliser. Cette page est mma page principale(index.php) ------------------------------------------------------>
<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<!DOCTYPE html>
<html>
<head>
    <title>amcv</title><!-- Titre de la page -->
    <meta charset="utf-8">
    <!-- liaison avec le fichier css-->
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>  
<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<!-------------------------------------------------------------------------------- Haut de page ---------------------------------------------------------------------->
<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------->
    <nav>
        <div class="logo">  <!-- Donne la classe logo au bouton accueil afin de lui rendre un style dans le css -->
            <a href="index.php#first_page">🏠 Accueil </a> <!-- Création du bouton Accueil je le lie avec le href à la page principale qui s'appelle index.php-------->
        </div>
        <ul class="nav-links"> <!-- Donne la classe nav-links au bouton Projets réalisés ; Me contacter ; Avis afin de lui rendre un style dans le css --------------->
            <li><a href="index.php#portfolio">Projets réalisés</a></li><!-- Création du bouton Projets réalisés je le lie avec un href à la partie concerné sur la page-->
            <li><a href="index.php#contact">Me contacter</a></li><!-- Création du bouton Me contacter je le lie avec un href à la partie concerné sur la page--------->
            <li><a href="avis.php?id=3" target="_blank" >Avis</a></li><!-- Création du bouton avis je le lie avec un href à la partie concerné sur la page le target permet d'ouvrir la page avis.php dans une autre page ----------------------------------------------------------------------------------------------------->
        </ul>
        <div class="burger"><!----------------------------------------- Donne la classe burger ----------------------------------------------------------------------->
            <div class="line1"></div><!--------- Donne la classe line 1 en faisant 3 sous divisions afin quel subisse aussi  la classe  burger------------------------>
            <div class="line2"></div><!--------- Donne la classe line 2 ---------------------------------------------------------------------------------------------->
            <div class="line3"></div><!--------- Donne la classe line 3 ---------------------------------------------------------------------------------------------->
        </div>
    </nav><br><br><br>
    <!------------------------------------ Execution de mon script java script --------------------------------------------------------------------------------------->
    <script type="text/javascript">
        const navSlide = () => {
            const burger = document.querySelector('.burger');
            const nav = document.querySelector('.nav-links');
            const navLinks = document.querySelectorAll('.nav-links li')
            
            burger.addEventListener('click',()=>{ 
            // Basculement de la barre de navigation
                nav.classList.toggle('nav-active');
                // Animation de navlinks 
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
<!--------------------------------------------------------------------------- Premier page --------------------------------------------------------------------------->
<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------->
    <div id="first_page"><!---------------- Definis un id à ma page afin de pouvoir faire le css de ma page ------------------------------------------- -------------->
        <section><!-- Crée une section qui contient le contenue de ma page -->
            <h1>Bienvenue !</h1><!-- Titre -->
            <p>
                Salut !<br><br>je suis un élève du Lycée Félix Le Dantec à Lannion<br>j'ai décidé de créer un site avec mon cv que vous pouvez<br> télécharger juste en dessous si vous souhaitez mieux me<br>connaitre.<br><br>Vous pouvez trouver aussi mes projets réalisés notamment<br>en Sciences de l’ingénieur dans la partie Projets réalisés.<br><br>Je vous souhaite une bonne découverte de mon site.<!-- Description --> 
            </p><br><br>
            <a href="AurelienMoignet.pdf" target="_blank">télécharger mon cv</a> <!---------------- Création du bouton qui permet de télécharger mon cv -------------->
        </section>
    </div>
<!--------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------- Deuxieme page --------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------------------------------------------------------------------------------------------->
    <div id="portfolio"><!---------------- Definis un id à ma page afin de pouvoir faire le css de ma page ------------------------------------------------------------>
        <h1 class="titre">Projet</h1><!-- Le titre de ma page je lui donne une class afin de l'editer dans mon css----------------------------------------------------->
        <div id="containeur"><!-- Crée l'id containeur qui serviras dans mon css a faire la mise en page -------------------------------------------------------------->
            <div class="projet"><!-- Crée la classe projet qui serviras à la mise en forme de mes cases projets-------------------------------------------------------->
                <img src="IMG/sitecv.bmp" alt="intégration maquette cv" />
                <article>
                    <p>Ce site est ma première réalisation. Je vous explique mon déroulement dans "Voir" n'hésite pas à laisser un avis sur mon projet.</p>
                    <div class="boutons"><!-- Création de la class boutons qui agis sur mes deux boutons suivants-->
                        <a href="projet1.php" target="_blank">Voir</a><!-- Bouton qui redirige vers la page projet1.php en ouvrant une page en Parallèle ------------->
                        <a href="aviss.php?id=1">Avis</a><!-- Bouton qui redirige vers la page avis.php en ouvrant une page en Parallèle ----------------------------->
                    </div>
                </article>
            </div>
            <div class="projet">
                <img src="IMG/projetcovid.bmp" alt="intégration maquette"/>
                <article>
                    <p>Ceci est un projet de SI, le projet est la création d'un systeme afin de limiter la propagation du virus dans le self. Le projet est en cour de création.</p>
                    <div class="boutons">
                        <a href="" target="_blank">Voir</a>
                        <a href="">Avis</a>
                    </div>
                </article>
            </div>
        </div>
    </div>
<!--------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------- Bas de page ----------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------------------------------------------------------------------------------------------->    <div id="contact"><!---------------- Definis un id à ma page afin de pouvoir faire le css de ma page -------------------------------------------------------------->
        <h1 class="titre">Me contacter</h1>
        <?php
        $action=$_REQUEST['action'];
        if ($action=="")    /* afficher le formulaire de contact */
        {
            ?>
            <form  action="" method="POST" enctype="multipart/form-data"><!-- Ici je crée le formulaire html -->
                <input type="hidden" name="action" value="submit">
                <input name="Nom" type="text" class="input" placeholder="Nom"/><br>
                <input name="email" type="text" class="input" placeholder="Email"/><br>
                <textarea name="message" id="message" placeholder="Votre message"></textarea><br>
                <input type="submit" value="Envoyer" id="envoyer"/><br><br>
            </form>
            <?php
        } 
        else /* envoyer les données du formulaire */
        {
            $name=$_REQUEST['Nom'];
            $email=$_REQUEST['email'];
            $message=$_REQUEST['message'];
            if (($name=="")||($email=="")||($message==""))
            {
                echo "Tous les champs doivent être rempli, veuillez remplir le <a href='index.php#contact'>formulaire</a> à nouveau.";
            }
            else{       
                $from="From: $name<$email>\r\nReturn-path: $email";
                $subject="Message envoyé depuis le amcv";
                mail("aurelien.moignet22470@gmail.com", $subject, $message, $from);
                echo "Email envoyé !";
                header("Refresh:0");
            }
        }
        ?>
<!--------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------- Cookie ---------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------------------------------------------------------------------------------------------->
        <div class="cookie-container">
          <p><!--message du cookie-->
            En poursuivant votre navigation sur ce site, vous acceptez l'utilisation de cookies vous permettant d'accéder à des services et offres adaptées à vos centres d'intérêt, partager du contenu et nous permettre de mesurer l'audience. Pour en savoir plus:  
            <a href="MentionsLegales.html">Mentions Légales</a> & <a href="cookies.html">Politique de cookies</a>.
           </p>

        <button class="cookie-btn"> <!--boutton accepter-->
            J'accepte
        </button>
    </div>

    <script src="main.js"></script> <!-- script js pour la page popup pour les cookies -->
    </div>
<!--------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------- Footer ---------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------------------------------------------------------------------------------------------->
    <footer>
        <a href="MentionsLegales.html">Mentions légales</a>
        <p>©2020 copyright</p>
        <p>designed and producted by<span>&nbsp;Moignet Aurélien</span>
        </p>

</footer>
</body>
</html>