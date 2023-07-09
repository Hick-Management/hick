<!DOCTYPE html>
<html>
<head>
  <title>HICK MANAGEMENT</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="script.js"></script>
  <script src="lightbox.js"></script>
  <link rel="shortcut icon" href="02.jpeg">
  <link rel="stylesheet" type="text/css" href="lightbox.css">
</head>
</head>
<body>
  <header> 
    <h1>HICK MANAGEMENT</h1>
    <br>
    <br>
    <nav>
      <ul>
        <li><a href="">Accueil</a></li>
        <li><a href="">Produits</a></li>
        <li><a href="">Contact</a></li>
        <li><a href="">Prestations de Services</a></li>
        <li><a href="">Formations</a></li>
        <li><a href="">Apropos de Nous</a></li>
      </ul>
    </nav>
  </header><br>
  <p>Veuillez vous inscrire pour accéder au Marché </p><br><br>
  <p>MERCI !</p><br><br>
  <form action="login.php" method="post">
     	<h2>SE CONNECTER</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Nom d'utilisateur</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>Mot de passe</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">Login</button>
          <a href="signup.php" class="ca">Créér un compte</a>
		</form><br><br><br><br>
</body><br><br>
<footer><p>&copy;Contact : + (228) 93 83 20 10</p>
      <p>&copy;Adresse : Adidogomé-Amadahomé</p>
      <p>&copy; Adresse E-MAIL : hickmanagement@gmail.com</p>
      <p>&copy;2023 @AMENKEY| All Rights Reserved</p>
</footer>

</html>