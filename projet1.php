<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<!------ Ceci est ma page de mon projet 1 (projet1.php)--------------------------------------------------------------------------------------------------------------->
<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<!DOCTYPE html>
<html>
<head>
    <title>Projet site</title>
    <meta charset="utf-8">
    <!-- liaison avec le fichier css-->
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body>
<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<!-------------------------------------------------------------------------------- Haut de page ---------------------------------------------------------------------->
<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------->
    <div id="ccharges">
        <nav><!-- Explications sur la page principale-->
            <div class="logo">
                <a href="index.php#first_page">🏠 Accueil </a>
            </div>
            <ul class="nav-links">
                <li><a href="index.php#portfolio">Projet réalisés</a></li>
                <li><a href="Mecontacter.php#contact">Me contacter</a></li>
                <li><a href="avis.php?id=3">Avis</a></li>
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
<!-------------------------------------------------------------------------------- Page ------------------------------------------------------------------------------>
<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------->
            <div class="bouton"><!-- Création de la class boutons qui agis sur mes boutons suivants-->
                <br><br>
                <a href="projet1.php#cahier_des_charges" class="action-button">Cahier des charges</a><!-- Bouton qui redirige vers la partie en question de ma page -->
                <a href="projet1.php#wireframe" class="action-button">Wireframe</a>
                <a href="projet1.php#maquette" class="action-button">Maquette</a>
                <a href="projet1.php#integration" class="action-button">Intégration</a>
                <a href="projet1.php#le_developpement" class="action-button">Le développement</a>
                <a href="projet1.php#recette_interne" class="action-button">Les recettes internes</a>
                <a href="projet1.php#mise_en_ligne" class="action-button">La mise en ligne</a>
                <a href="projet1.php#bilan" class="action-button">Bilan</a>
            </div>
        <div id="ccharges">
            <div id="cahier_des_charges">
                <div id="containeur">
                    <div class="projet">
                        <a href="IMG/Cahier_des_charges_site.odt"><img src="IMG/cahier_des_charges.bmp"></a>
                        <article>
                            <h1 class="tcharge">I|Cahier des charges: </h1>
                            <p>Avants tous j'ai commencé par faire un cahier des charges que vous pouvez télécharger en cliquant sur l'image à gauche de ce texte. Le cahier des charges était une chose indispensable car ça m'a fait réfléchir réellement sur comment serait mon site, à qui va réellement fréquenter mon site, à comment je vais faire pour me ressourcer afin d'avancer sur mon site. Ça me fait aussi réfléchir à comment est-ce-qu'il va fonctionner.</p> 
                        </div>
                    </article>
                </div>
            </div>
            <div id="wirframe">
                <div id="containeur">
                    <div class="projet">
                        <a href="IMG/Wireframe.odt"><img src="IMG/wireframe.bmp"></a>
                        <article>
                            <h1 class="tcharge">II|Le wirframe: </h1>
                            <p>Après avoir fini le cahier des charges j'ai créé le wirframes qui est une sorte de maquette du site, pas une maquette visuelle mais plus une maquette des différentes fonctionalités des boutons... J'ai faits ceci avec le logiciel Axure. </p>  
                        </div>
                    </article>
                </div>
            </div>
            <div id="maquette">
                <div id="containeur">
                    <div class="projet">
                        <img src="IMG/cvss.jpg">
                        <article>
                            <h1 class="tcharge">III|La maquette: </h1>
                            <p>Ensuite je me suis attaqués aux différentes photos, plus généralement au designe de mon site j'ai utilisé Photofiltre pour faire quelque retouche photos. J'ai aussi fais mon cv.</p> 
                        </div>
                    </article>
                </div>
            </div>
            <div id="integration">
                <div id="containeur">
                    <div class="projet">
                        <img src="IMG/logohtmlcss.jpg"></a>
                        <article>
                            <h1 class="tcharge">IV|L'intégration: </h1>
                            <p>C'était le moment le plus long car ça à consister à mettre le site que j'ai imaginé dans un langage de façon à ce que le navigateur le comprenne, le code je l'ai écrit avec le logiciel Sublime texte, cette étape je l'ai codé en HTML accompagné du CSS. Le site était dans le même état que vous le voyez actuellement seulement rien n'étaient fonctionnels</p> 
                        </div>
                    </article>
                </div>
            </div>
            <div id="le_developpement">
                <div id="containeur">
                    <div class="projet">
                        <img src="IMG/developpement.jpg"></a>
                        <article>
                            <h1 class="tcharge">V|Le Développement: </h1>
                            <p>Le développement était sans aucun doute la partie la plus difficile et là où j'ai rencontré le plus de problèmes en effet, le développement est tout ce que l'on ne voit pas sur les sites, ce qui est derrière. J'ai commencé par le Javascript puis je me suis attaqués au Php qui a servi par exemple à ce que le formulaire de contact soit envoyé sur ma boîte mail. Là où j'ai rencontré le plus de difficultés est la fonctionnalité avec les avis en effet cela était assez dur car il faut configurer et connecter la base de données.</p> 
                        </div>
                    </article>
                </div>
            </div>
            <div id="recette_interne">
                <div id="containeur">
                    <div class="projet">
                        <img src="IMG/responsive.jpg"></a>
                        <article>
                            <h1 class="tcharge">VI|La recette interne: </h1>
                            <p>La recette interne est une des parties les plus longues car je test le site sous differents ordinateur, smartphones, navigateurs afin de ne laisser aucun ecarts, je vérifie les fonctions si elle marche bien je vérifie aussi si le site s'affiche bien comme il faut.</p> 
                        </div>
                    </article>
                </div>
            </div>
            <div id="mise_en_ligne">
                <div id="containeur">
                    <div class="projet">
                        <img src="IMG/hebergeur.jpg"></a>
                        <article>
                            <h1 class="tcharge">VII|La mise en ligne: </h1>
                            <p>C'est surement le moment le plus satisfaisant, on est plus tous seul a voir notre travail... Pour information j'ai développé tous mon sites via wamp qui est un serveur local ça nous permet de gagner énormément de temps.</p> 
                        </div>
                    </article>
                </div>
            </div>
            <div id="bilan">
                <div id="containeur">
                    <div class="projet">
                        <img src="IMG/bilan.jpg"></a>
                        <article>
                            <h1 class="tcharge">VIII|Bilan: </h1>
                            <p>Ce projet m'aura donc permis d'avoir un premier contact avec la programmation ce site m’a permis de confirmer le fait que j'aime l'informatique et plus particulièrement la programmation. Ce qui m'a plus est le fait que je cherche par moi-même des solutions afin de réussir au mieux le développement de mon site.</p> 
                        </div>
                    </article>
                    <h1 class="tcharge"><br><br>
                    </div>
                </div>
            </div>        
        </center2>
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