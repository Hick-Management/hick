<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
  <title>HICK MANAGEMENT <?php echo $_SESSION['name']; ?></title>
  <link rel="stylesheet" type="text/css" href="prod/style1.css">
  <link rel="short-cut icon" href="shorticon.png">
  <script src="script.js"></script>
</head>
<body>
<header> 
    <h1>HICK MANAGEMENT</h1>
    <br>
    <br>
    <nav>
      <ul>
        <li><a href="home.php">Accueil</a></li>
        <li><a href="prod/index2.php">Produits</a></li>
        <li><a href="">Prestations</a></li>
        <li><a href="">Formations</a></li>
      <div>
        <ul>
          <li><a href="prod/index3.php">Maplenou Market</a></li>
          <li><a href="prod/index3.php">Restauration</a></li>
          <li><button><a href="logout.php">se deconnecter</a></button></li>
        </ul>
      </div>
      </ul>
    </nav>
  </header>

  <h1>Bienvenue dans votre espace Maplenou Market  <em>Mr/Mme <?php echo $_SESSION['name']; ?></h1>
    <div class="user-details">
      <div class="user-icon">
        <img src="icon.png" alt="User Icon">
      </div>
      <div class="user-info">
        <h2 id="username"></h2>
        <p id="email"></p>
      </div>
    </div>
  </div>    
  <section id="content">
    <h2><u>NOS PRODUITS</u></h2>
    <p1>  - Nos produits sont de qualités supérieures</p1>
    <br>
    <br>
    <p2>  - Commander les produits de votre Choix</p2>
    <br>
    <br>
    <p3>   - Ajoutez vos produits avec leur codes dans le panier</p3>
    <br>
    <br>
    <br>
    <p4>Nous avons de divers produits et vous pouvez nous appeler ou nous contacter dans notre section contact pour plus d'information</p4>
    <br>
    <br>
    <br>
    <br>
    <div class="product">
      <img src="img/ph01.jpg" alt="Produit 1">
      <h3>Tissus coupon (00##AA1)</h3>
      <p>3.500 FCFA/ YARD</p>
      <a class="nav-link" href="https://docs.google.com/forms/d/e/1FAIpQLSdUb0xiEN5zvZ8svucJdgmRhn0-5UNOqYmqpi2Hnc8nZKW4yg/viewform"><button>Ajouter au panier</button></a>
    </div>

    <div class="product">
      <img src="img/ph02.jpg" alt="Produit 2">
      <h3>Tissus coupon (00##AA1)</h3>
      <p>3.500 FCFA/ YARD</p>
      <a class="nav-link" href="https://docs.google.com/forms/d/e/1FAIpQLSdUb0xiEN5zvZ8svucJdgmRhn0-5UNOqYmqpi2Hnc8nZKW4yg/viewform"><button>Ajouter au panier</button></a>
    </div>

    <div class="product">
      <img src="img/ph03.jpg" alt="Produit 3">
      <h4>Tissus coupon (00##AA1)</h4>
      <p>3.500 FCFA/ YARD</p>
      <a class="nav-link" href="https://docs.google.com/forms/d/e/1FAIpQLSdUb0xiEN5zvZ8svucJdgmRhn0-5UNOqYmqpi2Hnc8nZKW4yg/viewform"><button>Ajouter au panier</button></a>
    </div>

    <div class="product">
      <img src="img/ph04.jpg" alt="Produit 4">
      <h3>Tissus coupon (00##AA1)</h3>
      <p>3.500 FCFA/ YARD</p>
      <a class="nav-link" href="https://docs.google.com/forms/d/e/1FAIpQLSdUb0xiEN5zvZ8svucJdgmRhn0-5UNOqYmqpi2Hnc8nZKW4yg/viewform"><button>Ajouter au panier</button></a>
    </div>

    <div class="product">
      <img src="img/ph05.jpg" alt="Produit 5">
      <h3>Tissus coupon (00##AA1)</h3>
      <p>3.500 FCFA/ YARD</p>
      <a class="nav-link" href="https://docs.google.com/forms/d/e/1FAIpQLSdUb0xiEN5zvZ8svucJdgmRhn0-5UNOqYmqpi2Hnc8nZKW4yg/viewform"><button>Ajouter au panier</button></a>
    </div>

    <div class="product">
      <img src="img/ph06.jpg" alt="Produit 6">
      <h3>Tissus coupon (00##AA1)</h3>
      <p>3.500 FCFA/ YARD</p>
      <a class="nav-link" href="https://docs.google.com/forms/d/e/1FAIpQLSdUb0xiEN5zvZ8svucJdgmRhn0-5UNOqYmqpi2Hnc8nZKW4yg/viewform"><button>Ajouter au panier</button></a>
    </div>

    <div class="product">
      <img src="img/ph07.jpg" alt="Produit 7">
      <h3>Tissus coupon (00##AA1)</h3>
      <p>3.500 FCFA/ YARD</p>
      <a class="nav-link" href="https://docs.google.com/forms/d/e/1FAIpQLSdUb0xiEN5zvZ8svucJdgmRhn0-5UNOqYmqpi2Hnc8nZKW4yg/viewform"><button>Ajouter au panier</button></a>
    </div>

    <div class="product">
      <img src="img/ph08.jpg" alt="Produit 8">
      <h3>Tissus coupon (00##AA1)</h3>
      <p>3.500 FCFA/ YARD</p>
      <a class="nav-link" href="https://docs.google.com/forms/d/e/1FAIpQLSdUb0xiEN5zvZ8svucJdgmRhn0-5UNOqYmqpi2Hnc8nZKW4yg/viewform"><button>Ajouter au panier</button></a>
    </div>

    <div class="product">
      <img src="img/ph09.jpg" alt="Produit 9">
      <h3>Tissus coupon (00##AA1)</h3>
      <p>3.500 FCFA/ YARD</p>
      <a class="nav-link" href="https://docs.google.com/forms/d/e/1FAIpQLSdUb0xiEN5zvZ8svucJdgmRhn0-5UNOqYmqpi2Hnc8nZKW4yg/viewform"><button>Ajouter au panier</button></a>
    </div>

    <div class="product">
      <img src="img/ph10.jpg" alt="Produit 10">
      <h3>Tissus coupon (00##AA1)</h3>
      <p>3.500 FCFA/ YARD</p>
      <a class="nav-link" href="https://docs.google.com/forms/d/e/1FAIpQLSdUb0xiEN5zvZ8svucJdgmRhn0-5UNOqYmqpi2Hnc8nZKW4yg/viewform"><button>Ajouter au panier</button></a>
    </div>

    <div class="product">
      <img src="img/ph11.jpg" alt="Produit 11">
      <h3>Tissus coupon (00##AA1)</h3>
      <p>3.500 FCFA/ YARD</p>
      <a class="nav-link" href="https://docs.google.com/forms/d/e/1FAIpQLSdUb0xiEN5zvZ8svucJdgmRhn0-5UNOqYmqpi2Hnc8nZKW4yg/viewform"><button>Ajouter au panier</button></a>
    </div>

    <div class="product">
      <img src="img/ph12.jpg" alt="Produit 12">
      <h3>Tissus coupon (00##AA1)</h3>
      <p>3.500 FCFA/ YARD</p>
      <a class="nav-link" href="https://docs.google.com/forms/d/e/1FAIpQLSdUb0xiEN5zvZ8svucJdgmRhn0-5UNOqYmqpi2Hnc8nZKW4yg/viewform"><button>Ajouter au panier</button></a>
    </div>

    <div class="product">
      <img src="img/ph13.jpg" alt="Produit 13">
      <h3>Tissus coupon (00##AA1)</h3>
      <p>3.500 FCFA/ YARD</p>
      <a class="nav-link" href="https://docs.google.com/forms/d/e/1FAIpQLSdUb0xiEN5zvZ8svucJdgmRhn0-5UNOqYmqpi2Hnc8nZKW4yg/viewform"><button>Ajouter au panier</button></a>
    </div>

    <div class="product">
      <img src="prod/06.jpeg" alt="Produit 2">
      <h3>cahiers toutes pages</h3>
      <p>Prix selon la quantité souhaitée</p>
      <a class="nav-link" href="https://docs.google.com/forms/d/e/1FAIpQLSdUb0xiEN5zvZ8svucJdgmRhn0-5UNOqYmqpi2Hnc8nZKW4yg/viewform"><button>Ajouter au panier</button></a>
    </div>

    <div class="product">
      <img src="prod/10.jpeg" alt="Produit 2">
      <h3>Stylo Schnider Couleur Bleu(00##AA8)</h3>
      <p>150 FCFA / Unité</p>
      <a class="nav-link" href="https://docs.google.com/forms/d/e/1FAIpQLSdUb0xiEN5zvZ8svucJdgmRhn0-5UNOqYmqpi2Hnc8nZKW4yg/viewform"><button>Ajouter au panier</button></a>
    </div>

    <div class="product">
      <img src="prod/10.jpeg" alt="Produit 2">
      <h3>Stylo Schnider Couleur Bleu(00##AA8)</h3>
      <p>150 FCFA / Unité</p>
      <a class="nav-link" href="https://docs.google.com/forms/d/e/1FAIpQLSdUb0xiEN5zvZ8svucJdgmRhn0-5UNOqYmqpi2Hnc8nZKW4yg/viewform"><button>Ajouter au panier</button></a>
    </div>

    <div class="product">
      <img src="prod/10.jpeg" alt="Produit 2">
      <h3>Stylo Schnider Couleurs(00##AA9)</h3>
      <p>150 FCFA / Unité</p>
      <a class="nav-link" href="https://docs.google.com/forms/d/e/1FAIpQLSdUb0xiEN5zvZ8svucJdgmRhn0-5UNOqYmqpi2Hnc8nZKW4yg/viewform"><button>Ajouter au panier</button></a>
    </div>

    <div class="product">
      <img src="prod/10.jpeg" alt="Produit 2">
      <h3>Stylo Schnider Couleurs(00##AA10)</h3>
      <p>150 FCFA / Unité</p>
      <a class="nav-link" href="https://docs.google.com/forms/d/e/1FAIpQLSdUb0xiEN5zvZ8svucJdgmRhn0-5UNOqYmqpi2Hnc8nZKW4yg/viewform"><button>Ajouter au panier</button></a>
    </div>
  </section>
  </section>
  <br>
    <br>
    <section>
      <p><u><strong>NB</strong></u>: Notez le code du produits pour enfin mieux faire la commande sur la page de commande.</p>
      <p>Après avoir ajouter dans le panier et precisez la quantité de produits souhaités<p><br><br><br>
      <p><strong>Votre sourire est notre joie !!!</strong></p>
      <br>
      <br>
      <br>
    </section>
    <br>
    <br>
    <br>
    <br>
    <script src="script.js"></script>
    </div>

    <footer class="footer">
      <div class="waves">
        <div class="wave" id="wave1"></div>
        <div class="wave" id="wave2"></div>
        <div class="wave" id="wave3"></div>
        <div class="wave" id="wave4"></div>
        <div class="wave" id="wave5"></div>
      </div>
      <ul class="social-icon">
        <li class="social-icon__item"><a class="social-icon__link" href="https://www.facebook.com/100093492467209/">
            <ion-icon name="logo-facebook"></ion-icon>
          </a></li>
        <li class="social-icon__item"><a class="social-icon__link" href="#">
            <ion-icon name="logo-twitter"></ion-icon>
          </a></li>
        <li class="social-icon__item"><a class="social-icon__link" href="https://www.tiktok.com/@transform13">
            <ion-icon name="logo-TikTok"></ion-icon>
          </a></li>
        <li class="social-icon__item"><a class="social-icon__link" href="#">
            <ion-icon name="logo-instagram"></ion-icon>
          </a></li>
        <li class="social-icon__item"><a class="social-icon__link" href="">
            <ion-icon name="logo-whatsapp"></ion-icon>
          </a></li>
      </ul>
      <ul class="menu">
        <li class="menu__item"><a class="menu__link" href="prod/home.php">Home</a></li>
        <li class="menu__item"><a class="menu__link" href="index5.php">About</a></li>
        <li class="menu__item"><a class="menu__link" href="">Services</a></li>
        <!-- <li class="menu__item"><a class="menu__link" href="#">Team</a></li> -->
        <li class="menu__item"><a class="menu__link" href="mailto:strenghthapk120@gmail.com">Contact</a></li>
      </ul>
      <p>&copy;Contact : + (228) 93 83 20 10</p>
      <p>&copy;Adresse : Adidogomé-Amadahomé</p>
      <p>&copy; Adresse E-MAIL : hickmanagement@gmail.com</p>
      <p>&copy;2023 @AMENKEY| All Rights Reserved</p>
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>