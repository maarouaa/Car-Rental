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
    
                <h3>Découvrez le pionnier de la location de voiture au monde !</h3>
                <hr>
                <br>
                <video width="100%" height="auto" controls>
                <source src="img/Hertz.mp4" type="video/mp4">
                </video>
     
                <br><br>
                    <center>
                     <a href="index.php"> 
                    <button  id="brrrt" class="btn btn-warning" type="submit" name="Retour"  width="50%">Retour</button>
                     </a>
                     </center>
                <br><br>
    </div>

























    <footer style="background-color: #deded5; bottom: 0; width: 100%;">
<div class="container p-4">
 <div class="row">
 <div class="col-lg-3 col-md-6 mb-4">
 <h5 class="mb-3" style="letter-spacing: 2px; color: #818963;">Location de voiture en ville</h5>
<p>
<a href="#" style="color: #4f4f4f;"> Location de voiture à Casa voyageurs gare</a><br>
<a href="#" style="color: #4f4f4f;">Location de voiture à Fès gare</a><br>
<a href="#" style="color: #4f4f4f;">Location de voiture à Tanger gare</a><br>
<a href="#" style="color: #4f4f4f;">Location de voiture à Rabat gare agdal</a><br>
<a href="#" style="color: #4f4f4f;">Location de voiture à Marrakech gare</a><br>
<a href="#" style="color: #4f4f4f;">Location de voiture à Kenitra gare</a><br>
<a href="#" style="color: #4f4f4f;">Location de voiture à Casablanca</a><br>
<a href="#" style="color: #4f4f4f;">Location de voiture à Fes</a><br>
<a href="#" style="color: #4f4f4f;">Location de voiture à Tanger ville</a><br>
<a href="#" style="color: #4f4f4f;">Location de voiture à Rabat</a><br>
<a href="#" style="color: #4f4f4f;">Location de voiture à Marrakech</a><br>
<a href="#" style="color: #4f4f4f;">Location de voiture à Agadir</a><br>
<a href="#" style="color: #4f4f4f;">Location de voiture à Ouarzazate</a>
</p>
 </div>
<div class="col-lg-3 col-md-6 mb-4" >
<h5 class="mb-3" style="letter-spacing: 2px; color: #818963;">Location de voiture à l'aéroport</h5>
<p >
<a href="#" style="color: #4f4f4f;"> Aeroport de Casablanca</a><br>
<a href="#" style="color: #4f4f4f;">Aeroport de Fès</a><br>
<a href="#" style="color: #4f4f4f;">Aeroport de Tanger</a><br>
<a href="#" style="color: #4f4f4f;">Aeroport de Rabat</a><br>
<a href="#" style="color: #4f4f4f;">Aeroport de Marrakech</a><br>
<a href="#" style="color: #4f4f4f;">Aeroport de Agadir aéroport</a><br>
<a href="#" style="color: #4f4f4f;">Aeroport de Ouarzazate</a><br>
<a href="#" style="color: #4f4f4f;">Aeroport de Essaouira</a><br>
<a href="#" style="color: #4f4f4f;">Aeroport de Nador</a><br>
<a href="#" style="color: #4f4f4f;">Aeroport de Oujda</a><br>
<a href="#" style="color: #4f4f4f;">Aeroport de Tetouan</a>
</p>
 </div>
<div class="col-lg-3 col-md-6 mb-4">
<h5 class="mb-3" style="letter-spacing: 2px; color: #818963;">links</h5>
<ul class="list-unstyled mb-0">
<li class="mb-1">
<a href="#!" style="color: #4f4f4f;">Nous contacter</a>
</li>
<li class="mb-1">
<a href="#!" style="color: #4f4f4f;">Conditions générales de location</a>
 </li>
 <li class="mb-1">
<a href="#!" style="color: #4f4f4f;">Qui sommes nous</a>
</li>
<li>
<a href="#!" style="color: #4f4f4f;">Nos promos</a>
</li>
</ul>
</div>
<div class="col-lg-3 col-md-6 mb-4">
<h5 class="mb-1" style="letter-spacing: 2px; color: #818963;">Nos réseaux</h5><br><br>
<table class="table" style="color: #4f4f4f; border-color: #666;">
<tbody>
<tr>
<td> <a href="#" class="fa fa-instagram"><img src="img/instagram.svg" width="50%" height="10%"></a> </td>
<td> <a href="#" class="fa fa-linkedin"><img src="img/linkedin.svg "  width="50%" height="50%"></a> </td>
<td> <a href="#" class="fa fa-facebook"><img src="img/facebook.svg"  width="50%" height="50%"></a> </td>
<td> <a href="#" class="fa fa-youtube"><img src="img/youtube.svg"  width="50%" height="50%"></a> </td>
</tr> 
</tbody> 
</table>
</div>
</div>
</div>
<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
© 2020 Copyright:
<a class="text-dark" href="#"> locvoiture.com </a>
</div>
<!-- Copyright -->
</footer>


</body>
</html>