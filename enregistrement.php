<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="style.css">
  <title>Bonjour et Bienvenue sur votre espace de réservation</title>
</head>
<body>

<!-- la creation de l'entete -->
<header>

 <div class="row">
<!-- le logo -->
<div class="col-md-3">
 <img src="Logo/VoitureLoc.png" alt="Logo de mon site web " width="200px" height="auto" >
 </div>
 <div class="col-md-6" style="text-align: left;">
 <h1>Location des voitures au Maroc</h1>
</div>
 <!-- permet de changer la langue du contenu affiché sur le site. -->
<div class="col-md-3" >
<!-- <a href="#">Traduction</a> -->
<!-- <div class="changer_lang">
<a id="fr" class="drapeau france" href="index.html"title="Version Française"> <img src="fr.png" width="50px" height="45px"> </a>
<a id ="en" class="drapeau anglais active" href="index.html" title="English version"> <img src="en.jpg" width="50px" height="45px"></a>
</div> -->
</div>

</div>


<!-- ************************************ Le formulaire ************************************************ -->

  <div class="row">
    <div class="col-md-6 offset-md-3">
        <br><br>
    <form>
      <h1 class="text-center mb-5">Bonjour et Bienvenue sur votre espace de réservation</h1>
      <center>  <p>Enregistrez-vous dès à présent pour gagner du temps lors de votre passage au comptoir de notre agence.
        Entrez dans votre espace en indiquant :</p>
      
      
          <div class="form-group">
            <label for="card-number">Votre Nom de Famille *</label>
            <input type="text" class="form-control" id="card-number">
          </div>
          <div class="form-group">
            <label for="card-expiration">Votre Numéro de Réservation *</label>
            <input type="text" class="form-control" id="card-expiration">
          </div>
        </center>
        <button type="submit" class="btn btn-warning btn-block mt-5">Valider</button>
     <br><br>
    </form>
      <br><br>
    </div>
  </div>

<br><br>
</body>
</html>
