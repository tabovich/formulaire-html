<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>formulaire</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    type="text/css" />
  <link href="style.css" type="text/css" />
  <!-- BootstrapJS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
  <div class="container">
    <h1>Formulaire d'inscription</h1>
    
    <form method="post" action="traitement_form.php">
      
      <div class="col-md-6">
        <label for="name">Votre nom:</label><br>
        <input class="form-control" type="text" id="name" nom="name">
      </div>
      <label for="firstname">Votre prénom:</label><br>
      <input class="form-control" type="text" id="firstname" nom="firstname">
      
      <div class="col-md-6">
        <label for="age">Votre date de naissance:</label><br>
        <select name="age" id="age">
          <?php for ($i = 1920; $i <= 2020; $i++) { ?>
             <option value ="<?php echo $i ?>"><?php echo $i ?></option>
          <?php } ?>
        </select>
      </div>
      
      <div class="col-md-6">
      <label for="username">Votre nom d'utilisateur</label><br>
      <input class="form-control" type="text" id="username" nom="username">
      </div>

      <div class="col-md-6">
      <label for="email">Votre adresse mail:</label><br>
      <input class="form-control" type="text" id="email" nom="email">
      </div>
      
      <div class="col-md-6">
      <label for="password">Votre mot de passe:</label><br>
      <input class="form-control" type="text" id="password" nom="password">
      </div>  
      
      <br>
      <div class="col-md-6">
      <label for="confirmedPassword">Confirmez votre mot de passe:</label><br>
      <input class="form-control" type="text" id="confirmedPassword" nom="confirmedPassword">
      </div>

      <div class="col-md-6" class="form-check">
        <p>Vous êtes un(e)</p>
        <input class="form-check-input" type="radio" id="sexeMan" name="sexeRadio" value="man">
        <label class="form-check-label" for="sexeMan">Homme</label>
      </div>
      <div class="col-md-6" class="form-check">
       <input class="form-check-input" type="radio" id="sexeWomen" name="sexeRadio" value="women">
       <label class="form-check-label" for="sexeWomen">Femme</label>
      </div>
    </form>
  </div>
</body>
</html>