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


<!-- le formulaire -->
<div class="row">
    <div class="col-md-4">
            <div class="container">
               
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
            </div>
            </div>


    <div class="col-md-8">
    <br>
    <center><h3>Découvrir la beauté de Ouarzazate</h3></center>
    <hr >
    <br>

<p>Ouarzazate, la porte du désert, une ville construite par la France en 1928 comme
base militaire. La particularité de cette ville est qu'elle a hébergé de
nombreux films hollywoodiens célèbres, ce qui lui a valu le surnom de "Ouallywood",
mais ce n'est pas la seule chose pour laquelle Ouarzazate est connue, car les touristes
y viennent souvent pour découvrir le désert marocain et la riche culture berbère.
<br><br>
Le but de ce guide est de vous aider à visiter Ouarzazate sans manquer aucune place
intéressante, ainsi que de vous aider à trouver le bon endroit pour vous loger et les
meilleurs restaurants où manger. Avant de commencer la visite, nous devons souligner 
le fait que pour se rendre à Ouarzazate une voiture est nécessaire, de plus, comme
la ville est pratiquement au milieu du désert, nous vous recommandons d'obtenir
une de nos voitures de catégorie SUV pour plus de confort.
<br><br>
Commençons le voyage en passant en revue les activités à faire dans cette ville merveilleuse.</p>
<br><br>   


<div class="row">
    <div class="col-md-4">
    <img src="img/o1.webp" width="275px" height="200px">
    </div>
    <div class="col-md-8">
     <h6>Kasbah de Tifoultoute</h6><br>
    <p>
    Une forteresse construite au 17ème siècle et agrandie au 18ème siècle,
     d'où l'on peut profiter d'une vue panoramique sur la vallée de l'Oued.
      Actuellement, une partie de la Kasbah est toujours ouverte au public
       en tant que site touristique tandis que 
    l'autre partie a été rénovée pour devenir un hôtel-restaurant.
    </p>
    </div>
    </div>
<br><br>

<div class="row">
    <div class="col-md-4">
    <img src="img/o2.webp" width="275px" height="200px">
    </div>
    <div class="col-md-8">
     <h6>Kasbah de Taourirt</h6><br>
    <p>
    Un ancien palais qui appartenait au Pacha de Marrakech.
     La Kasbah de Taourirt est un endroit qui attire beaucoup
      de touristes par son charme et son mystère. En effet,
       deux films célèbres ont eu lieu dans ce palais, à savoir Prince of
        Persia, Sheltering Sky et Gladiator.
    </p>
    </div>
    </div>
<br><br>


<div class="row">
    <div class="col-md-4">
    <img src="img/o3.webp" width="275px" height="200px">
    </div>
    <div class="col-md-8">
     <h6>Musée du cinéma</h6><br>
    <p>
    Créé en 1981, ce musée était auparavant un studio qui avait
     travaillé sur plusieurs films à fort succès. À l'intérieur,
      vous y trouverez une grande variété de décorations et d'anciens outils
     de filmage qui vous éclaireront sur cette industrie.
    </p>
    </div>
    </div>
<br><br>

<div class="row">
    <div class="col-md-4">
    <img src="img/o4.webp" width="275px" height="200px">
    </div>
    <div class="col-md-8">
     <h6>CLA Studios</h6><br>
    <p>
    Un célèbre studio où de nombreux films hollywoodiens ont été tournés.
     En visitant les CLA Studios, vous aurez sans doute l'impression
      d'être à l'intérieur d'un film. Vous pourrez également vous amuser
       en prenant des photos ou des vidéos comme un pro
     grâce aux incroyables décorations qui s'y trouvent.
    </p>
    </div>
    </div>
<br><br>

<div class="row">
    <div class="col-md-4">
    <img src="img/o5.webp" width="275px" height="200px">
    </div>
    <div class="col-md-8">
     <h6>Oasis de Fint</h6><br>
    <p>
    Si vous avez envie de respirer de l'air frais et de vous détendre,
     cette Oasis est ce qu'il vous faut. Dans cet endroit, vous aurez
      la chance d'admirer de merveilleux paysages naturels et de 
      visiter des villages traditionnels et vous serez 
    attiré par son atmosphère paisible et calme.  
    </p>
    </div>
    </div>
<br><br>

<div class="row">
    <div class="col-md-4">
    <img src="img/o6.webp" width="275px" height="200px">
    </div>
    <div class="col-md-8">
     <h6>Gorges de Toudra</h6><br>
    <p>
    La visite de cet endroit est absolument indispensable. Les Gordes de 
     vous feront certainement vivre la fantaisie. Dans ce site naturel de
     premier ordre, vous allez comprendre pourquoi les producteurs de films du monde entier 
    ont pu réaliser des chefs-d'œuvre à Ouarzazate.
    </p>
    </div>
    </div>
<br><br>
<p>Après avoir déterminé les sites à visiter, il ne vous reste plus 
    qu'à savoir où vous loger et où manger. Dans ce sens, voici nos recommandations :
<br><br>
Où se loger : À Ouarzazate, deux options s'offrent à vous 
en matière d'hébergement : vous pouvez séjourner dans un hôtel 
ou dans un Riad traditionnel.    
<br><br>
Pour les hôtels, nous vous suggérons la liste suivante :
<br><br>
Le Berbère Palace ;
<br><br>
Hôtel Temple des Arts ;
<br><br>
Hôtel Sultana Royal Golf.
<br><br>
Si vous souhaitez loger dans un Riad, nous vous recommandons les suivants :
<br><br>
Riad Tama & Spa ;
<br><br>
Dar Daif ;
<br><br>
Riad Chay.
<br><br>
Où manger : nous vous proposons les restaurants ci-dessous :
<br><br>
Restaurant DOUYRIA ;
<br><br>
Le Jardin des Aromes ;
<br><br>
Restaurant Kasbah Tafarnout.         
<br><br>
C'était tout pour le guide de Ouarzazate, nous espérons 
que nous vous avons aidé à passer un voyage plus agréable.
<br><br>
<center>
   <a href="destinations.php"> <button class="btn btn-warning" id="brt"
    type="submit" name="Page précédante"  width="50%">Page précédante</button></a>
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

































