<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./layout/style/Home.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light style=background-color:#cacaca">
            <img src="./layout/Image/logo.png">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" style="color: #EBBE2A;" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" style="color: white;" href="#Services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: white;" href="#AboutUs">About-Us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" style="color: white;" href="#AboutUs">gestion de stock</a>
                  </li>
                <li class="nav-item">
                  <a class="nav-link" style="color: white;" href="#Contact">Contact</a>
                </li>
              </ul>
              <span class="navbar-text">
                <a  href="index.php"><button class="btnConnexion"> Se connecter </button></a>
              </span>
            </div>
          </nav>




            <div class="home">
                <div class="slider">
                    <div class="slide active" style="background-image: url('./layout/Image/supermarket.jpg')">
                        <div class="container">
                            <div class="caption">
                                <h1 >Bienvenue dans Health&Food  </h1>
                                <p>Plus de 1000 produits </p>
                                <a href="">Commandes maintenant !</a>
                            </div>
                        </div>
                    </div>

                    <div class="slide" style="background-image: url('./layout/Image/LEGUMES.jpg')">
                        <div class="container">
                            <div class="caption">
                                <h1> Perte de temps en faisant les courses?</h1>
                                <p> Livraison jusqu'à votre maison </p>
                                <a href="">Commandes maintenant !</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="slide" style="background-image: url('./layout/Image/fruit.jpg')">
                        <div class="container">
                            <div class="caption">
                                <h1>Des produits 100% naturels</h1>
                                <p>Pour une bonne santé.</p>
                                <a href="">Commandes maintenant !</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="slide" style="background-image: url('./layout/Image/market.jpg')">
                        <div class="container">
                            <div class="caption">
                                <h1> Des offres et des promotions pour vous! </h1>
                                <p> Des prix convenables</p>
                                <a href="">Commandes maintenant !</a>
                            </div>
                        </div>
                    </div>

                    <div class="slide" style="background-image: url('./layout/Image/achat.jpg')">
                        <div class="container">
                            <div class="caption">
                                <h1> Nous sommes toujours à votre disposition </h1>
                                <p> N'importe quel temps, N'importe quel lieu !</p>
                                <a href="">Commandes maintenant !</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="controls">
                    <div class="prev">&#10094;</div>
                    <div class="next">&#10095;</div>
                </div>
            </div>
    </header>

     

    <div class="espace"></div>
    <div class="description">
        <h2 id="AboutUs">A propos de nous </h2>
        <hr><br>
        <p> Faire ses courses n'est plus un sujet de préoccupation! <br><b>Food&Health</b> vous donne la possibilité de faire vos courses en ligne. De notre temps, 
            une simple visite aux hypermarchés est devenue un véritable défi quand on est pressé par le temps. Plus besoin de faire un long trajet pour 
            faire vos courses, vous pouvez commander facilement tout ce dont vous avez besoin depuis notre épicerie en ligne et on se charge de la livraison 
            de votre liste de courses. 
        </p>
    </div>
    <div class="espace"></div>
    <div class="espace"></div>


    <div class="commande">
        <h2 id="Services">Notre service </h2>
        <hr><br>
        <div class="commander">
            <div class="part">
                <p> 
                    <ul>
                        <li>Livraison dans les 24h (commande du matin livrée l'après midi).</li>
                        <li>Tous les produits sont de bonne qualité.</li>
                        <li>Tous les produits que vous avez l'habitude d'acheter sur les grandes surfaces sont disponibles.</li>
                        <li>Inscris-toi d'abord et connectes-toi pour passer une commande. </li>
                    </ul>
                    <button > Commandes maintenant !</button>
                </p>
            </div>
            <div  class="part"><img src="./layout/Image/delivreur.svg" alt="market"></div>
        </div>
    </div>

    <div class="espace"></div>
    <div class="espace"></div>


    <div class="aside9">
        <h2>Ensemble, nous bâtissons Food&Health !</h2>
    </div>
    <div class="espace"></div>
    <div class="tbls-a">
        <div class="tbl-a">
            <div class="tbl-a1"></div>
            <div class="tbl-a4">
                <h1>Coursiers</h1>
                <div class="blank2"></div>
                <h2>Les horaires de votre choix</h2>
                <div class="blank2"></div>
                <h3>Devenez votre propre patron. Choisissez vos horaires, générez un chiffre d'affaire compétitif et
                    découvrez votre ville en effectuant des livraisons. Inscrivez-vous pour collaborer avec nous !</h3>
                <div class="blank2"></div>
            </div>
            <div class="tbl-a5">
                <a href="#" style="font-weight: normal; font-size: 20px;">Devenir coursier</a>
            </div>
        </div>
        <div class="tbl-a">
            <div class="tbl-a2"></div>
            <div class="tbl-a4">
                <h1>Commerces partenaires</h1>
                <div class="blank2"></div>
                <h2>Trouvez de nouveaux clients</h2>
                <div class="blank2"></div>
                <h3>Boostez vos affaires en devenant partenaire et en exploitant les outils, la technologie et la
                    clientèle qui font venir une ville tout entière jusqu'à chez vous.</h3>
                <div class="blank2"></div>
            </div>
            <div class="tbl-a5">
                <a href="#" style="font-weight: normal; font-size: 20px;">Devenir partenaire</a>
            </div>
        </div>
        <div class="tbl-a">
            <div class="tbl-a3"></div>
            <div class="tbl-a4">
                <h1>Emploi</h1>
                <div class="blank2"></div>
                <h2>Des défis à la hauteur de votre talent</h2>
                <div class="blank2"></div>
                <h3>Nous faisons des vagues dans un espace compétitif. Cela exige de l'énergie, du cœur et
                    beaucoup de travail d'équipe. Vous êtes prêt à sauter dans le grand bain ?</h3>
                <div class="blank2"></div>
            </div>
            <div class="tbl-a5">
                <a href="#" style="font-weight: normal; font-size: 20px;">Nous rejoindre</a>
            </div>
        </div>
    </div>
    <div class="espace"></div>
    <div class="espace"></div>

    <footer id="Contact">
        <div class="block">
                <div class="block1">  
                        <img src="./layout/Image/logo.png" alt="logo">
                        <p> Suivez-nous sur les réseaux sociaux</p>
                        <a><img style="cursor: pointer;" id="facebook" src="./layout/Image/facebook.png" alt="facebook" ></a>
                        <a ><img style="cursor: pointer;" src="./layout/Image/twitter.png" alt="twitter" ></a>
                        <a><img style="cursor: pointer;" src="./layout/Image/linkedin-in.png" alt="linkedin" ></a>
                </div>

                <div class="block1"> 
                        <strong>QUICK LINKS</strong><br>
                        <p style="cursor: pointer;">HOME</p>
                        <p style="cursor: pointer;">ABOUT US</p>
                        <p style="cursor: pointer;">CITY GUIDE</p>
                        <p style="cursor: pointer;">BLOG</p>
                        <p style="cursor: pointer;">FAQ's</p>
                </div>

                <div class="block1">
                                <strong style="font-size: 30px;">CONTACT US</strong>
                                <p>Feel free to get in touch with us via phone or send<br> us a message</p>
                                <div class="contact">
                                        <p>+1 800 123 1234</p>
                                        <p><b>Food-health@website.com</b></p>
                                 </div>
                </div>
        </div>
        <div class="copy">
            <div class="p">
                    <p>@Copyright 2020. All Right Reserved</p>
                    <div class="p2">
                            <p>Privacy Policy </p>
                            <p>Terms & Conditions</p>
                    </div>
            </div>
        </div>

        <div class="footer2">
                <img id="logo" src="./layout/Image/logo.png" alt="logo"><br>
                <p>CONTACT US</p>
                <strong>+1 800 123 1234</strong><br>
                <strong>Food-health@website.com</strong>
                <p> Suivez-nous sur les réseaux sociaux</p>
                <a ><img id="facebook" src="./layout/Image/facebook.png" alt="facebook" ></a>
                <a ><img src="./layout/Image/twitter.png" alt="twitter" ></a>
                <a><img src="./layout/Image/linkedin-in.png" alt="linkedin" ></a>
                <p>@Copyright 2020</p>
                <p> All Right Reserved</p>
        </div>
    </footer>


    <script src="./layout/js/script.js"></script>
</body>
</html>