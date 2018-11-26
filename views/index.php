<?php session_start();?>
<html lang="en">
    <head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link rel="icon" type="image/png" href="../assets/2.ico"/>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
   <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
<!------ Include the above in your HEAD tag ---------->

    <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css"> -->
        <link rel="stylesheet" href="assets/css/test.css">
    </head>
    <body>
        
<header>
<!-- Image and text -->

<div class="overlay"></div>
  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <source src="http://clips.vorwaerts-gmbh.de/big_buck_bunny.mp4" type="video/mp4">
  </video>
  <div class="container h-100">
    <div class="d-flex text-center h-100">
      <div class="my-auto w-100 text-white">
        

        <div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Connexion</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Inscription</label>
		<div class="login-form">
		<form action="models/connexion1.php" method="POST">
			<div class="sign-in-htm">
				<div class="group">
					<label for="user"  class="label">pseudonyme/email</label>
					<input id="user" name="username" type="text" class="input" >
				</div>
				<div class="group">
					<label for="pass" class="label">Mot de passe</label>
					<input id="pass"  name="pwd" type="password" class="input" data-type="password">
				</div>
				
				<div class="group">
					<input name="send" type="submit" class="button" value="Se connecter">
				</div>
				<div class="hr"></div>

			</div>
			</form>
			<form action="models/connexion1.php" method="POST">
			<div class="sign-up-htm">
				<div class="group">
					<label for="user" class="label">Votre non</label>
					<input id="user"  name="nom" type="text" class="input" required="required">
				</div>
				<div class="group">
					<label for="user" class="label">Votre prenon</label>
					<input id="user" name="prenom" type="text" class="input" required="required">
				</div>
				<div class="group">
					<label for="user" class="label">Votre Pseudo</label>
					<input id="user"  name="pseudo" type="text" class="input" required="required">
				</div>
				<div class="group">
					<label for="pass" class="label">Email Address</label>
					<input id="pass" name="email" type="text" class="input" required="required">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" name="password" type="password" class="input" data-type="password" required="required">
				</div>
				<div class="group">
					<input type="submit"  name="submit" class="button" value="S'inscrire">
				</div>
				
			</div>
			</form>
		</div>
	</div>
</div>
<br>
<br>
</div>
      </div>
    </div>
  </div>

</header>

</body>
   
</html>