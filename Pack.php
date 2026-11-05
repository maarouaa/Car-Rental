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
    <title>QUI SOMMES NOUS ? DÉCOUVREZ HERTZ MAROC</title>

</head>
<body>
    <header>
        
<!-- menu -->
<nav class="navbar navbar-expand-lg bg-warning">
<div class="container-fluid">
<a class="navbar-brand" href="index.php">Tarifs et réservations</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
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
            <div class="container">
                <form  action="cars.php" method="POST" >
                    <center><br>
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
                        </select><br><br>
                        <label ><h6>  Agence de retour : </h6> </label>
                        <select name="carsR" id="carsR">
                            <option value="agence1">Agence casablanca aéroport</option>
                            <option value="agence2">Agence fès aéroport</option>
                            <option value="agence3">Agence tanger aéroport</option>
                            <option value="agence4">Agence rabat aéroport</option>
                            <option value="agence5">Agence marrakech aéroport</option>
                            <option value="agence4">Agence agadir aéroport</option>
                        </select><br>
                        </div>
                        <div class="form-group"><h5>Période de location </h5></label><br>
                            <div class="row">
                                <div class="col-md-2">
                                <label for="prenom">Du</label>
                                </div>
                                <div class="col-md-5">
                                <input type="date" class="form-control" id="datedepart" placeholder="Date départ"
                                value="<?php echo date('Y-m-d'); ?>">
                                </div>
                                <div class="col-md-5">
                                <select name="time" id="time">
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
                                <label for="prenom">Au</label>
                                </div>
                                <div class="col-md-5">
                                <input type="date" class="form-control" id="datedepart" placeholder="Date départ"
                                value="<?php echo date('Y-m-d'); ?>">
                                </div>
                                <div class="col-md-5">
                                <select name="time" id="time">
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
                                    <label ><h5>Mon age</h5></label><br>
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
                            </div>
                                <button id="btn" type="submit" name="rechercher" class="btn btn-warning" width="50%">Rechercher</button>
                                <br>
                        </div> 
                </center>
            </form> 
            </div>
            </div>











    <div class="col-md-8">

                <h3>Le pack confort + vous permet de rouler en toute tranquillité</h3>
                <hr>
                <br>
     
                <video width="100%" height="auto" controls>
                <source src="img/confort.mp4" type="video/mp4">
                </video>
     
                <br><br>
                    <center>
                     <a href="index.php"> 
                    <button  id="brrrt" class="btn btn-warning" type="submit" name="Retour"  width="50%">Retour</button>
                     </a>
                     </center>
                <br><br>
    </div>


