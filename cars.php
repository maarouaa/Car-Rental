<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="http://127.0.0.1/numelion/img/fontawesome/css/font-awesome.min.css">
    <title>Nos vehicules</title>
    <?php
    $con = mysqli_connect('localhost', 'root', '', 'location') or die(mysqli_error($con));
    $query="select * from voiture";
    $result = mysqli_query($con, $query) or die(mysqli_error($con));
    ?>
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
<!-- menu -->
<nav id="nav" class="navbar navbar-expand-lg bg-warning">
<div class="container-fluid">
<a class="navbar-brand" href="index.php">Tarifs et réservations</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
 aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNavDropdown">
<ul class="navbar-nav">
       
<li class="nav-item">
<a class="nav-link" href="nos_vehicules.php">Nos vehicules</a>
</li>

<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
Nos agences
</a>
<ul class="dropdown-menu">
<li><a class="dropdown-item" href="agence-casablanca.php">Agence casablanca aéroport</a></li>
<li><a class="dropdown-item" href="agence-fes.php">Agence fès aéroport</a></li>
<li><a class="dropdown-item" href="agence-tanger.php">Agence tanger aéroport</a></li>
<li><a class="dropdown-item" href="agence-rabat.php">Agence rabat aéroport</a></li>
<li><a class="dropdown-item" href="agence-marrakech.php">Agence marrakech aéroport</a></li>
<li><a class="dropdown-item" href="agence-agadir.php">Agence agadir aéroport</a></li>
</ul>
</li>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
Visite du maroc 
</a>
<ul class="dropdown-menu">
<li><a class="dropdown-item" href="avantage.php">Avantages avec Hertz Maroc</a></li>
<li><a class="dropdown-item" href="destinations.php">Destinations incontournables</a></li>
</ul>
</li>
<li class="nav-item">
<a class="nav-link" href="comment_louer.php">Location internationale</a>
</li>
<li class="nav-item">
<a class="nav-link" href="loc_ramadane.php">Train + Auto</a>
</li>
<li class="nav-item">
 <a class="nav-link" href="gastronomie.php">Gastronomie marocaine</a>
</li>
<li class="nav-item">
<a class="nav-link" href="contact.php">Nous contacter</a>
</li>
<!-- <li class="nav-item">
<a class="nav-link" href="administration.php">Administration</a>
</li> -->
</ul>
</div>
</div>
</nav>
</header>











<div class="row">
    <div class="col-md-4">
          
                
    <!-- içi le formulaire -->
<div id="formulaire"> 
<!-- <div class="col-md-4"> -->
<div class="container">
<form  action="cars.php" method="POST" >
<center>
<br>
 <div class="form-group" >
    <label for="nom"><h5> Votre agence de location</h5></label> <br><br>
    
        <label > <h6>Agence de départ : </h6>  </label>
          <select name="carsD" id="carsD">
                <option value="agence1">Agence casablanca aéroport</option>
                <option value="agence2">Agence fès aéroport</option>
                <option value="agence3">Agence tanger aéroport</option>
                <option value="agence4">Agence rabat aéroport</option>
                <option value="agence5">Agence marrakech aéroport</option>
                <option value="agence4">Agence agadir aéroport</option>
          </select>
          <br><br>
         
        <label ><h6>  Agence de retour : </h6> </label>
          <select name="carsR" id="carsR">
                   <option value="agence1">Agence casablanca aéroport</option>
                <option value="agence2">Agence fès aéroport</option>
                <option value="agence3">Agence tanger aéroport</option>
                <option value="agence4">Agence rabat aéroport</option>
                <option value="agence5">Agence marrakech aéroport</option>
                <option value="agence4">Agence agadir aéroport</option>
          </select>
          <br>

 </div>
 <div class="form-group">
  <label for="periode-location"><h5>Période de location</h5></label>
  <br>
  <div class="row">
    <div class="col-md-2">
    <label for="date1">Du</label>
    </div>
    <div class="col-md-5">
      <input type="date" class="form-control" name="date_debut" id="date1" placeholder="Date de début" value="<?php echo date('Y-m-d'); ?>">
    </div>
    <div class="col-md-5">
      <select name="time_debut" id="time_debut">
        <option value="07:00">7:00</option>
        <option value="08:00">8:00</option>
        <option value="09:00">9:00</option>
        <option value="10:00">10:00</option>
        <option value="11:00">11:00</option>
        <option value="12:00">12:00</option>
        <option value="13:00">13:00</option>
        <option value="14:00">14:00</option>
        <option value="15:00">15:00</option>
        <option value="16:00">16:00</option>
        <option value="17:00">17:00</option>
        <option value="18:00">18:00</option>
        <option value="19:00">19:00</option>
        <option value="20:00">20:00</option>
        <option value="21:00">21:00</option>
        <option value="22:00">22:00</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="col-md-2">

      <label for="date2">Au</label>
    </div>
    <div class="col-md-5">
      <input type="date" class="form-control" id="date2" name="date_fin" placeholder="Date de fin" value="<?php echo date('Y-m-d'); ?>">
    </div>
    <div class="col-md-5">
      <select name="time_fin" id="time_fin">
        <option value="07:00">7:00</option>
        <option value="08:00">8:00</option>
        <option value="09:00">9:00</option>
        <option value="10:00">10:00</option>
        <option value="11:00">11:00</option>
        <option value="12:00">12:00</option>
        <option value="13:00">13:00</option>
        <option value="14:00">14:00</option>
        <option value="15:00">15:00</option>
        <option value="16:00">16:00</option>
        <option value="17:00">17:00</option>
        <option value="18:00">18:00</option>
        <option value="19:00">19:00</option>
        <option value="20:00">20:00</option>
        <option value="21:00">21:00</option>
        <option value="22:00">22:00</option>
</select>
</div>
</div>
<div class="row">
<div class="col-md-6">
<label for="codepromo"><h5>Code promo</h5></label>
<input type="text" class="form-control" id="codepromo" placeholder="Code promo">
</div>
<div class="col-md-6">
<label ><h5>Mon age</h5></label>
<br>
<select name="age" > 
 <option value="18" >18</option>
<option  value="19" >19</option>
<option  value="20" >20</option>
<option  value="21" >21</option>
<option  value="22" >22</option>
<option  value="23" >23</option>
<option  value="24" >24</option>
<option  value="25" >25</option>
<option  value="26" >+ 26</option>
</select> 
</div>
<button id="btn" type="submit" name="rechercher" class="btn btn-warning" width="50%">Rechercher</button>
<br>
</div> 

</center> 
</form>
</div>
</div>
</div>








<script>
        const date1 = document.getElementById('date1');
        const date2 = document.getElementById('date2');
        const result = document.getElementById('result');
        const btn = document.getElementById('btn');

        // Empêcher la sélection d'une date antérieure à la date d'aujourd'hui dans le premier input
        const today = new Date().toISOString().split('T')[0];
        date1.setAttribute('min', today);

        // Empêcher la sélection d'une date antérieure ou égale à la date sélectionnée dans le premier input dans le deuxième input
        date1.addEventListener('change', () => {
            date2.setAttribute('min', date1.value);
            if (date2.value < date1.value) {
                date2.value = date1.value;
            }
        });

        // Calculer le nombre de jours entre les deux dates sélectionnées
        btn.addEventListener('click', () => {
            const selectedDate1 = new Date(date1.value);
            const selectedDate2 = new Date(date2.value);
            const timeDiff = Math.abs(selectedDate2.getTime() - selectedDate1.getTime());
            const diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24));

            if (diffDays === 0) {
                result.innerText = "Les deux dates sélectionnées sont identiques.";
            } else if (diffDays === 1) {
                result.innerText = "Le nombre de jours entre les deux dates est : 1 jour.";
            } else {
                result.innerText = `Le nombre de jours entre les deux dates est : ${diffDays} jours.`;
            }
        });
    </script>
          
          














    <div class="col-md-8">
    <br>
    <br>
    <center><h3>Découvrez notre gamme de voiture de location 
                                    <br>"Citadines et Compactes"</h3></center>
    <hr >
                        <?php
                        $con = mysqli_connect('localhost', 'root', '', 'location') or die(mysqli_error($con));
                        $query="select * from voiture";
                        // include_once("index.php");
                        // Vérifier si le formulaire a été soumis

                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            
                            // Récupérer la valeur sélectionnée dans le ComboBox d'âge
                            $age = $_POST["age"];
                            // $nbjrs = $_POST["result"];
                            // Effectuer une action en fonction de la valeur sélectionnée
                            switch ($age) {
                                case "18":
                                    $query ="SELECT * FROM voiture WHERE age = 18";
                                    break;
                                case "19":
                                    $query ="SELECT * FROM voiture WHERE age >= 18 AND age < 20";
                                    break;
                                case "20":
                                    $query ="SELECT * FROM voiture WHERE age >= 18 AND age < 21";
                                    break;
                                case "21":
                                    $query ="SELECT * FROM voiture WHERE age >= 18 AND age < 22";
                                    break;
                                case "22":
                                    $query ="SELECT * FROM voiture WHERE age >= 18 AND age < 23";
                                    break;
                                case "23":
                                    $query ="SELECT * FROM voiture WHERE age >= 18 AND age < 24";
                                    break;
                                case "24":
                                    $query ="SELECT * FROM voiture WHERE age >= 18 AND age < 25";
                                    break;
                                case "25":
                                    $query ="SELECT * FROM voiture WHERE age >= 18 AND age < 26";
                                    break;
                                case "+26":
                                    $query ="SELECT * FROM voiture WHERE age >= 18 AND age < 26";
                                    break;
                                default:
                                    echo "Merci de selectionner votre age";
                                    break;
                            }
                        }
                        $result = mysqli_query($con, $query) or die(mysqli_error($con));
                        ?>
                    
                        
                        <!-- <style>
                            form {
                                display: none;
                            }
                        </style>



                        <style>
                            form {
                                display: none;
                            }
                        </style> -->



                            <header id="tit"  >
                            <div class="container my-5">
                                <!-- <br><br>
                                <h1 class="text-center mb-5">Découvrez notre gamme de voiture de location 
                                    <br>"Citadines et Compactes"</h1>
                                <br> -->
                            </header>
                                <table class="table table-striped">
                                    <thead>
                                        <tr >
                                            <th>Photo</th>
                                            <th>Modéle</th>
                                            <th>Prix de location</th>
                                            <th>Prix total</th>
                                            <th>Louer</th>
                                        
                                        </tr>
                                    </thead>
                                
                <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><img src="<?php echo $row['photo']; ?>" alt="<?php echo $row['modéle']; ?>" width="200px" height="auto"></td>
                        <td><?php echo $row['modéle']; ?></td>
                        <td><?php echo $row['prix_loc'] . ' Dh/Jour'; ?></td>
                                            <td><?php
                                        // $prixLocation = $row['prix_loc']; // récupère le prix de lancement depuis la base de données
                                        $nombreJours = 5; // nombre de jours de location, à remplacer par votre propre variable
                                        // $prixTotal = $prixLancement * $nombreJours ; // calcule le prix total en multipliant le prix de lancement par le nombre de jours
                                        $prixTotalAvecDH = $row['prix_loc'] * $nombreJours . "Dh"; // concatène "dh" à la fin du prix total
                                        echo "Le coût de location pour $nombreJours jours est  $prixTotalAvecDH"; // affiche le résultat final
                                        ?>
                                            </td>
                        <td>
                        <a href="contact.php"> 
                    <button  id="brrrt" class="btn btn-warning" type="submit" name="loc"  width="70px">Louer</button>
                    </a>
                        </td>
                                
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
         <br>
        <div>
                 <!-- <center>
                    <a href="index.php"> 
                    <button  id="brrrt" class="btn btn-warning" type="submit" name="Retour"  width="100px">Retour</button>
                    </a>
                </center> -->
            <br>
        </div>
        </div>
        </div>
                                                        
    </body>
</html>
