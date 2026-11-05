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
 
    <title>location</title>
    
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

<nav class="navbar navbar-expand-lg bg-warning">
<div class="container-fluid" >
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
 </div>
 <!-- slider et photos -->
<div id="slide">
<div class="row">       
<div class="col-md-8">
<div id="carouselExampleIndicators" class="carousel slide">
<div class="carousel-indicators">
<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Slide 7"></button>
<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="7" aria-label="Slide 8"></button> 
</div>
<div class="carousel-inner">
<div class="carousel-item active">
<img src="img/1.webp" class="d-block w-100" alt="">
</div>
<div class="carousel-item">
<img src="img/2.webp" class="d-block w-100" alt="">
</div>
<div class="carousel-item">
<img src="img/3.webp" class="d-block w-100" alt="">
</div>
<div class="carousel-item active">
<img src="img/4.webp" class="d-block w-100" alt="">
</div>
<div class="carousel-item">
<img src="img/5.webp" class="d-block w-100" alt="">
</div>
<div class="carousel-item">
<img src="img/6.webp" class="d-block w-100" alt="">
 </div>
<div class="carousel-item">
<img src="img/7.webp" class="d-block w-100" alt="">
</div>
<div class="carousel-itemd">
<img src="img/8.webp" class="d-block w-100" alt="">
</div>
</div>
<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="visually-hidden">Next</span>
</button>
   </div>
</div>     
<div class="col-md-4" style="text-align: left;">
<a href="loc_ramadane.php"> <img src="img/2-1.webp"> </a><br>
<a href="enregistrement.php"><img src="img/2-2.webp"> </a><br>
<a href="souscrivez.php"><img src="img/2-3.webp"> </a>
</div>
</div>
<br>
</div>

<center>

















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




















































<div class="col-md-8">
</div>
</form>
</div>
<br>
<h2>Bienvenue chez Hertz Maroc, location de voiture au Maroc.<br>
Partez à la découverte du Maroc à un prix avantageux.</h2></center>
<br><br>

<div class="row">
           
<div class="col-md-4" ><center>
 <div class="card" style="width: 18rem;">
<img src="img/V1.webp" class="card-img-top" alt="">
<div class="card-body">
<h5 class="card-title">Fiat Tipo - Offre en KM illimité</h5>
<p class="card-text">ou similaire <br><br>Catégorie EDMD | Diesel</p>
<a type="submit" href="#formulaire" class="btn btn-warning" >Louer cette catégorie</a>
</div>
</div>
</div>

 <div class="col-md-4" style="text-align: left;"><center>
<div class="card" style="width: 18rem;">
<img src="img/V2.webp" class="card-img-top" alt="">
<div class="card-body">
<h5 class="card-title">Peugeot 3008 BVA - Offre en KM illimité</h5>
<p class="card-text">ou similaire <br><br>Catégorie IXAD | Diesel</p>
<a type="submit" href="#formulaire" class="btn btn-warning" >Louer cette catégorie</a>
</div>
</div>
</div>

 <div class="col-md-4" style="text-align: left;"><center>
<div class="card" style="width: 18rem;">
<img src="img/V3.webp" class="card-img-top" alt="">
<div class="card-body">
<h5 class="card-title">Kia Carnival BVA 8PAX - Offre en KM illimité</h5>
<p class="card-text">ou similaire <br><br>Catégorie FVAD | Diesel</p>
<a type="submit" href="#formulaire" class="btn btn-warning" >Louer cette catégorie</a>
</div>
</div>
 <br><br>
</div>
<h5>Nos vidéos</h3>
<hr  id="he"><br>
   
<!-- les videos -->
<hr width="200px"  height="auto">

<br>
<div class="row">
                   
<div class="col-md-4">
<a href="Qui_nous_sommes.php"><img src="img/VD1.webp" alt=" " width="Auto" height="auto" ></a> <br>
<center>
<h5 class="lien"> SOMMES NOUS ? DÉCOUVREZ HERTZ MAROC</h5>
</center>
<hr  id="he"><br>
</div>

 <div class="col-md-4" >
<a href="Pack.php"><img src="img/VD2.webp" alt=" " width="Auto" height="auto" > <br></a>
<center><h5 class="lien"> PACK CONFORT +</h5></center>
<hr  id="he"><br>
</div>
                         
<div class="col-md-4" >               
<a href="Comment_louer.php"><img src="img/VD3.webp" alt=" " width="Auto" height="auto" > <br></a>  
<center><h5> COMMENT LOUER UNE VOITURE SUR NOTRE SITE ? TUTO HERTZ</h5></center>    
<hr id="he"><br>
 </div>
</div>
<br><br><br>
<!-- <h4>Prix location voiture Maroc  </h4><br>
-->
<table border="1" id="size">
<br><br><br>
<tr>
    <th>Catégorie de Voiture</th>
    <th>Basse Saison</th>
    <th>Haute Saison</th>
</tr>
<tr>
    <th>Citadine et Compacte</th>
    <td>140 dh - 210 dh / jour</td>
    <td>220 dh - 520 dh / jour</td>
</tr><tr>
    <th>SUV & 4x4</th>
    <td>180 dh  - 410 dh / jour</td>
    <td>420 dh - 920 dh / jour</td>
</tr><tr>
    <th>Familiale </th>
    <td>240 dh - 420 dh / jour</td>
    <td>430 dh - 870 dh / jour</td>
</tr><tr>
    <th>Premium </th>
    <td>410 dh - 670 dh / jour</td>
    <td>680 dh - 1500 dh / jour</td>
</tr><tr>
    <th>Utilitaires </th>
    <td>340 dh - 450 dh / jour</td>
    <td>460 dh - 540 dh / jour</td>
</tr>
</table>
<br><br><br>
<p class="brr">Voici une moyenne des tarifs de location de voiture au Maroc pratiqués ces dernières années. 
<br><br>
Les prix de location de voiture au Maroc évoluent selon les saisons et les disponibilités
des loueurs et les prix sont généralement similaires dans toutes les villes du Maroc : Marrakech,
Casablanca, Tanger, Agadir, Fes, Rabat, etc..
</p>
<br><br>
<h3 class="brr">Prix Location Voiture Maroc pendant 7 jours</h3>
<br><br>
<p >Pour une location de voitures au Maroc pendant 1 semaine, prévoyez en moyenne
entre 1180 dh et 3440 dh pour une voiture Citadine ou Compacte, et entre 2250 dh et 5810 dh pour une Familliale.</p>
<br><br>


<h3>Prix Location Voiture Maroc pendant 14 jours</h3>
<br><br>
<p>En moyenne, il faut compter entre 2500 dh et 5900 dh pour une location de voiture au Maroc pendant 2 semaines
pour un véhicule de la catégorie citadine.
Le tarif est le même dans toutes les villes : Casablanca, Marrakech, Agadir, Tanger, Rabat, Fes, etc.</p>
<br><br>

<h3>Prix Location Voiture Maroc pendant 30 jours</h3>
<br><br>
<p>En moyenne, comptez entre 7500 dh et 2.9000 dh pour louer un véhicule au Maroc pendant 1 mois peu importe la ville où
vous récupérer le véhicule : Casablanca, Marrakech, Fes, Agadir, Tanger, Ouarzazate, Rabat, etc. </p>
 <br><br>

<h3>Voiture de location la plus populaire au Maroc ?</h3> 

<br><br>
<p>- Pour les couples, la voiture de location la plus populaire au Maroc est la Renault Clio.<br>
- Pour les familles, le véhicule le plus loué au Maroc est la Citroën C3. </p>
<br><br>

<p>Location Voiture Maroc pas cher</p>
<h3>Astuces pour une location voiture pas cher au Maroc</h3><br><br>
                            
<p>Pour trouver une location voiture pas cher Maroc, voici quelques astuces à connaître :  </p>
                                   

<h3><u><br><br>Réserver sur internet :<br><br></u></h3>
<p>La concurrence entre les loueurs de voitures au Maroc étant bien plus féroce sur internet, 
les tarifs sont toujours plus intéressants que directement au comptoir des agences.  </p>


<h3><u>Réserver à l’avance :</u></h3><br><br>
<p>Les tarifs de location de voiture au Maroc sont définis selon le nombre de véhicules disponibles restants. 
Moins il reste de voitures, et plus les tarifs augmentent. Ainsi, plus vous réservez tôt,
plus vous profiterez de tarifs de location de voiture au Maroc avantageux. </p>
        
<h3><u>Récupérez votre voiture dans une agence à l’aéroport :</u></h3><br><br>
<p>Les tarifs de location sont toujours plus intéressants dans les aéroports que 
dans le centre ville ou dans un hôtel.  Ceci est valable pour chaque aéroport du Maroc.  </p>
        
<h3><u>Louer un véhicule approprié :</u></h3><br><br>
<p>Le prix de votre location de voiture au Maroc ne se limite pas seulement au tarif de location
journalier. Prenez aussi en compte la consommation de carburant au Maroc. <br>
A quoi bon choisir la voiture de location la moins chère (et donc la moins confortable) si vous doublez votre consommation
de carburant car le véhicule n’est pas adapté à ce que vous en faîtes ?  </p>

<h5>Quelle est la voiture de location la moins chère au Maroc ?</h5>
<p>- Pour une location de voiture pas cher au Maroc, la voiture la plus abordable dans la catégorie Citadine 
est généralement la Kia Picanto ou la Renault Clio. <br>
- Dans la catégorie SUV il s’agit du Dacia Duster.<br>
- Pour la catégorie familiale, il s’agit généralement de la Citroën C3.<br>
- Enfin, dans la catégorie Berline il s’agit de la Peugeot 508.<br></p>


<h5>Meilleur endroit pour récupérer sa voiture de location au Maroc ?</h5>
<p>Le meilleur endroit pour récupérer votre location voiture Maroc est à l’aéroport par lequel vous arrivez dans le Royaume : <br>
 C’est dans les aéroports que l’on trouve une location voiture pas cher au Maroc, les prix y sont bien plus intéressants qu’en ville ou dans les hôtels
 Le choix de véhicule est plus diversifié<br>
 Vous êtes certain que le véhicule de location que vous cherchez sera disponible contrairement aux petites
agences en centre ville ou près des hôtels où les disponibilités et le choix sont restreints<br>
La récupération d’une voiture de location à l’aéroport est très rapide<br>
L’aéroport est l’endroit idéal pour rendre la voiture de location à la fin de votre voyage au Maroc avant de prendre votre avion<br>
Cela vous évite de vous déplacer en agence pour récupérer une voiture pendant vos vacances au Maroc<br>
Les taxis au Maroc sont chers et les transports en commun limités, voir souvent inexistants, surtout autour des aéroports.<br></p>
<h4>Location Voiture Maroc - Assurance</h4><br>
<h3>Assurance collision et couverture vol</h3><br>
<p>Chez Hertz Maroc, tous nos véhicules de location sont loués avec une assurance collision et une assurance vol.
En cas de sinistre pendant avec votre voiture de location au Maroc (rayure, bris de glace, pneu crevé, vol de la voiture, etc.), 
le conducteur principal est responsable des dégâts à hauteur de la franchise de l’assurance.</p><br>
                                    
<h3>Franchise de la voiture de location au Maroc</h3>
<p>Le montant de la franchise d’un véhicule de location du Maroc dépend de la catégorie et du modèle de ce dernier.
Les franchises démarrent à 1.4000 dh pour les voitures de catégorie Citadine et montent jusqu’à 3.6000 dh pour les voitures familiales ou premium.
Pour vous éviter tout stress pendant votre voyage, Hertz Maroc propose les services de Rachat de Franchise Partiel ou Rachat de Franchise Totale, 
auxquels vous pouvez souscrire lorsque vous effectuez votre réservation ou avant la récupération de votre
voiture de location en agence. Ainsi en cas de sinistre, la franchise est réduite de 50% ou supprimée.</p><br>

<h5>Nos agences de location de voiture au Maroc</h5><br>
<p>Avec près de 24 agences dans plus de 10 villes, Hertz est le leader inconstesté de la location de voiture au Maroc.<br>
Ainsi, nous sommes capables de vous apporter assistance partout dans le royaume grâce à nos succursales si besoin.</p>
<br><br><br><br>

<a href="#"  style="color: #4f4f4f;">  Location voiture Casablanca  </br></a>
<a href="#"  style="color: #4f4f4f;">  Location voiture Marrakech </br></a>
<a href="#"  style="color: #4f4f4f;">  Location voiture Tanger </br></a>
<a href="#"  style="color: #4f4f4f;">  Location voiture Fès  </br></a>
<a href="#"  style="color: #4f4f4f;">  Location voiture  Rabat  </br></a>
<a href="#"  style="color: #4f4f4f;">  Location voiture Tétouan  </br></a>
<a href="#"  style="color: #4f4f4f;">  Location voiture Ouarzazate  </br></a>
<a href="#"  style="color: #4f4f4f;">  Location voiture Essaouira  </br></a>
<a href="#"  style="color: #4f4f4f;">  Location voiture Nador  </br></a>
<a href="#"  style="color: #4f4f4f;">  Location voiture Oudja  </br></a>
<br><br>
<p> Hertz Maroc possède une agence de location dans la plupart des aéroports du pays, ainsi que les centres-villes et les gares. </p><br>
<h4>FAQ – Location voiture Maroc pas cher</h4><br>
<h5>Documents nécessaires pour récupérer votre voiture de location au Maroc</h5><br>
<p>
Pour la prise en charge de votre voiture de location au Maroc vous devrez vous présenter
en agence avec les documents suivants : <br>
- Pièce d’identité valide (passeport ou carte d’identité)<br>
- Permis de conduire en cours de validité du titulaire du contrat et de chaque conducteur additionnel <br>
- Carte de crédit (et non carte de débit) pour la caution du véhicule<br>
Attention, seuls les documents originaux sont acceptés pour louer une voiture.<br>
</p>

<h5>Âge minimum pour une location voiture Maroc</h5>
<p>
 Pour louer une voiture au Maroc, le conducteur doit avoir au moins 21 ans et 12 mois d’ancienneté de permis de conduire.<br>
 conducteurs de moins de 23 ans doivent obligatoirement souscrire à l’Assurance Jeune Conducteur. <br>
Enfin, pour certains véhicules, l’âge minimum est de 25 ans.<br>
</p>

<h5>Location voiture Maroc en aller simple ?</h5>
<p>Oui, chez Hertz Maroc il est possible de louer une voiture dans une agence (Marrakech,
Casablanca, Fes, Agadir, Rabat, etc.) et de la rendre dans une agence de location différente.</p>

<h5>Caution de la voiture de location au Maroc</h5>
<p>
Avant la prise en charge de votre voiture de location au Maroc, vous devrez vous acquitter de la caution.<br>
La somme est bloquée sur votre carte de crédit pendant la durée de la location du véhicule au Maroc,
puis automatiquement débloquée à sa restitution en agence.<br><br>
Montant de la caution : <br>
- Voitures Catégorie Citadines : à partir de 1.4000 dh<br>
- Voitures Catégorie SUV et 4x4 : à partir de 2.0000 dh<br>
- Voitures Catégorie Premium et Berline : à partir de 3.4000 dh<br>
- Voitures Catégorie Familiale et Minibus : à partir de 2.0000 dh<br>
<br><br>
Assurez-vous d’avoir un plafond bancaire suffisant pour que la caution passe sur votre carte de crédit.<br>
Dans le cas où votre plafond bancaire serait insuffisant, vous avez la possibilité de souscrire à nos services
de Rachat de Franchise Total ou Partiel qui réduisent la caution de moitié ou annulent le besoin de laisser une
caution et votre responsabilité financière en cas de sinistre.<br>
</p>

<h5>Conditions de modification de votre location de voiture </h5>
<p>Si votre demande de modification de votre location de voiture au Maroc intervient plus de 48h avant
le jour de retrait du véhicule en agence, des frais de modification d’une valeur de 100 MAD/TTC (environ 100 dh) s’appliqueront.<br>
<br>
Si votre demande de modification de votre voiture de location au Maroc est transmise moins de 48h avant le 
jour de retrait, des frais de 150 MAD/TTC (environ 150 dh) s’appliqueront.<br><br>
                                        
Toute modification à posteriori de la date de prise en charge du véhicule de location en agence au Maroc sera traitée
au niveau de l’agence de livraison selon la disponibilité et les informations qui vous seront communiquées sur place. <br><br>
Aucun remboursement ne sera possible pour toute location plus courte que la durée prévue dans la réservation
(retour anticipé), en cas de retard dans la prise du véhicule, en cas de changement de la catégorie pour
une autre inférieure ou en cas d’annulation des frais de One-Way.<br><br>
                                        
En cas de modification de votre réservation, les prix de location de voiture journaliers en vigueur s’appliqueront.<br><br>
                                        
Pour toute modification d’une réservation effectuée auprès d’un comparateur ou acteur tiers, les démarches
se feront uniquement auprès de cet intermédiaire.<br><br></p>

<h5>Conditions d’annulation et de votre location de voiture : </h5><br>
<p>Si votre demande d’annulation de votre location de voiture au Maroc intervient 48H avant la date de prise
en charge du véhicule de location, des frais de dossier de 240 MAD/TTC (environ 250 dh) s’appliqueront.<br>
Le remboursement sera effectué sur la carte de crédit utilisée pour le règlement de la réservation.<br><br>
                                            
Si votre demande d’annulation est transmise moins de 48 heures précédant la date de début de la location 
au Maroc, aucun remboursement ne sera dû.<br>
Aucun remboursement ne sera dû pour toute demande d’annulation faite après la date et l’heure prévue de prise en charge
du véhicule dans une de nos agences au Maroc.<br>
Les conditions d’annulation sont les mêmes dans toutes nos agences de location de voiture au Maroc.<br>
Pour toute annulation d’une réservation de location de voiture chez Hertz Maroc effectuée auprès d’un 
comparateur ou acteur tiers, les démarches se feront uniquement auprès de cet intermédiaire.<br></p><br>

<h5>Combien de kilomètres puis-je rouler avec une voiture de location au Maroc ?</h5><br>
<p>Chez Hertz Maroc, vous pouvez choisir une location de voiture avec kilométrage limité à 100km/jour, ou kilométrage illimité.</p><br><br>

<h5><br>La conduite au Maroc</h5><br>
<p>Conduire au Maroc est parfois une aventure ! Les voitures arrivent de tous les côtés, le code de la route
est peu respecté par les conducteurs, et les rues sont parfois étroites dans la médina.<br> Mais le jeu en vaut la chandelle,
vous découvrirez des paysages magnifiques.<br>
Concernant l’alcool, c’est tolérance zéro ! Il est strictement interdit de conduire avec de l’alcool
dans le sang au Maroc et les autorités sont intraitables à ce sujet.<br></p>

<h5>Limite de vitesse au Maroc</h5><br>
<p>La limite de vitesse au Maroc est de :<br>
- 40 km/h dans les villes<br>
- 90-100 km/h sur les routes normales <br>
- 120 km/h sur les autoroutes.<br>
 Attention, il y a de plus en plus de radars au Maroc.<br> </p>
                                            
<h5>Puis-je sortir du Maroc avec une voiture de location ?</h5><br>
<p>Il est interdit de sortir du Maroc avec votre voiture de location.</p><br><br>

<h5>Stationnement avec votre voiture de location dans les villes marocaines</h5><br>
<p>En ville, le stationnement dans la rue est généralement payant. Vous trouverez facilement des 
parkings payants surveillés par un gardien. La journée de stationnement coûte généralement de
 5 à 10 dirhams. Si le gardien vous annonce plus, n’hésitez pas à négocier.<br>
Il arrive également que certains centres commerciaux ou grands commerces offrent des places de parking gratuitement.<br><br>
                                                
Certains gardiens demandent parfois à garder vos clés de voiture de location pour pouvoir déplacer le véhicule 
si besoin. Bien que ce soit monnaie courante ici, nous vous déconseillons de le faire.<br></p>
<br><br>
<h5>Puis-je conduire au Maroc avec un permis de conduire Français ou Européen ?</h5><br><br>
<p>Oui, si vous avez un permis de conduire délivré par un pays comme la France ou un
 membre de l’Union Européenne, vous êtes autorisé à conduire au Maroc.</p><br><br>
                                                    
<h5>Code de la route au Maroc</h5><br><br>
<p>Le code de la route au Maroc est un peu différent de celui de la France, mais on ne remarque pas de différence majeure.<br><br></p>

<h5>Etat des routes au Maroc</h5><br><br>
<p>Les routes dans les grandes villes et les autoroutes sont généralement bien entretenues au Maroc. <br>
En revanche, ce n’est pas toujours le cas dans les villages isolés.<br>
Si vous prévoyez de vous aventurer dans les montagnes ou le désert, optez plutôt pour
la location d’un SUV ou d’un 4x4 au Maroc pour plus de confort.<br></p><br>

<h5>Péages autoroutiers au Maroc</h5><br>
<p>Le Maroc dispose d’un vaste réseau d’autoroutes de plus de 1.000km reliant Tantan à Oujda, en passant
par Agadir, Essaouira, Marrakech, Casablanca, Rabat, Meknes, Tanger, Nador, et Fès.<br>
Pour régler les péages, vous pouvez utiliser une carte bancaire ou des espèces.</p><br><br>

<h5>Faire un Voyage au Maroc</h5><br>
<p>Le Maroc est un pays d'Afrique du Nord qui attire les touristes depuis des années avec son mélange de cultures africaines,
 arabes et européennes. Si le climat se veut très chaud, il n'en demeure pas moins que les paysages sont variés : du désert 
à la mer mer méditerranée au Détroit de Gibraltar, en passant par les villes à l'architecture orientale.<br>
 Avec ses paysages variés et sa culture riche, tout le monde trouvera son compte au Maroc : du souk de Marrakech
débordant d’épices colorées dans une architecture ancienne, aux ruines historiques de Fès, en passant par la ville
animée de Casablanca ou un village berbère traditionnel dans un paysage désertique, les choses à faire au Maroc
 ne manquent pas ! Sans oublier sa gastronomie considérée comme une des meilleures au monde !<br>
Que vous soyez à la recherche d'une aventure culturelle ou que vous souhaitiez simplement vous détendre
sur de belles plages, le Maroc est la destination qui répondra aux attentes de chacun.<br>
 <br>
Vous venez au Maroc dans un contexte professionnel ? Vous serez séduit par l’énergie débordante 
et Casablanca, poumon économique du royaume, avec toutes les opportunités que la capitale économique a à offrir. <br></p>

<!-- Remove the container if you want to extend the Footer to full width. -->
<div class="container my-5">

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
</div>
</html>





