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
    <title>Location ramadane</title>
<style>  
#ip{
   
    border:0.01px solid grey;
    padding-bottom:30%;
    margin-left:20px;
    padding-left:20px;
    padding-right:20px;
    padding-top:20px;
}
</style>
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
    <h3>Location voiture aéroport tanger</h3>
    <hr>
    <br>
    <p>Notre Agence de location de voiture à l'aéroport de Tanger Ibn Batouta<br><br>
    Notre agence de location de voiture à Tanger est installée au cœur du terminal de l’aéroport
     international, à seulement 12km du centre et tout proche des autoroutes. 
    Dès que vous aurez passé les douanes, des panneaux dans le terminal indiqueront notre
    agence où nos agents vous accueilleront. Le service de prise en charge du véhicule
     est très rapide : le contrat de location est déjà prêt et vous n’avez qu’à le signer et à faire
    l’état des lieux de la voiture sur le parking avec notre agent.<br><br>

    Après cela, libre à vous d’aller où bon vous semble : votre hébergement, 
    le centre ville de Tanger, les plages, les grottes d’hercules, le cap Spartel
    , à Tétouan, le port industriel, ou même de prendre la route vers d’autres grandes
     villes du Maroc. <br>
    <br>
    <hr>
    <br>
    <div class="row">
    <div class="col-md-6">
    <img src="img/at.jpg" width="100%" height="auto">
    </div>
    <div class="col-md-6">
    Aeroport Tanger Ibn Battouta
    90000 ✈ Aéroport Tanger<br><br>
    +212 8 02 00 77 78<br>
            Horaires d'ouverture :<br><br>
            <b>Heures d’ouverture:</b><br>
            Lun Dim 07:00-22:00<br><br>
            <b>Responsable agence :</b><br>
            reservation@hertz.ma<br>
    </div>
    </div>
    <br>
<hr>
<br><br>
<div class="row">
<br><br>
    <div class="col-md-6">
    <p id="ip"><b>Nos Agences de location de voiture dans le centre ville de Tanger</b><br><br>
    Hertz Maroc possède également 2 agences de location de voiture dans le centre de Tanger.<br>

    <b>Agence au 36 avenue Mohamed V - Tanger :</b>
    L’agence de location de voiture se situe au 36 avenue Mohamed V, juste à côté 
    de la Place des Nations et du Jardin des Nations Unies. Le lieu est
     facile d’accès en transports en commun ou en taxi.<br>

    Sur place, nous proposons tous types de véhicules de location. Plus vous 
    réservez à l’avance, plus il y a de chance qu’il reste des véhicules disponibles 
    dans la catégorie qui vous intéresse (Renault Clio 5
    portes, Dacia Duster, etc.) pour votre location voiture Tanger. <br>
<br>
    <b>Agence Gare Ferroviaire ONCF de Tanger</b>
  Notre agence de location de voiture est installée à
    l’intérieur de la gare de Tanger, juste à côté de l’entrée principale.<br>
    Sur place, chaque catégorie de véhicule de location est proposée, de la petite
    citadine 5 portes à la voiture familiale.<br>
    Pensez à réserver à l’avance, il y a beaucoup de demandes dans cette 
    agence en raison de son emplacement stratégique à Tanger.
<br><br>
Vous voulez réserver une voiture à Marrakech, Casablanca, Fès, Agadir, etc.
 ? Demandez-nous, nous avons des agences succursales dans tout le Maroc ! <br></p>
    </div>
    <div class="col-md-6">
        <border>
    <img src="img/tt.jpg" width="60%" height="auto" ></border>
    </div>
    </div>
<br><br>
<h4>Voitures de location à l’Aéroport de Tanger</h4>
        <p>
        Toutes les catégories de voitures de location sont disponibles à l’aéroport
         international de Tanger dans notre agence Hertz. Les véhicules sont
          neufs ou très récents, très bien entretenus, et renouvellés 
        régulièrement pour assurer une fiabilité de nos voitures optimale.  <br>
        Si vous venez à Tanger en vacances ou dans le cadre d’un voyage d’affaire,
         nous avons le véhicule qu’il vous faut :<br>
        </p>
        <ul>
            <li> <b>Location voiture Citadines & Compactes :</b> Si 
            vous venez à Tanger en couple ou avec des enfants en bas
             âge (Kia Picanto, Renault Clio, Peugeot 308, Citroën C3…)
            </li>
            <li><b>Location voiture SUV & 4x4 :</b> la voiture
             parfaite pour un voyage dans le royaume en partant depuis
              Tanger (Citroën C4, Dacia Duster 4x2,
             Peugeot 3008, Jeep Grand Cherokee, Toyota Prado, etc.)
            </li>
            <li><b>Location voiture Familiales : </b> Les véhicules conçus pour les
             familles nombreuses ou les groupes, avec un coffre suffisament large
             pour transporter les bagages de chacun (Dacia Duster 4x2, Peugeot 3008, 
            Kia Carens 6PAX, Kia Carnival BVA, Renault Trafic 9 places)
            </li>
            <li><b>Location voiture Premium : </b> Pour un confort optimal en 
            conduite à Tanger (berline Alpha Romeo, Peugeot 508…)
            </li>
            <li><b>Location voiture Hybride : </b>Pour une conduire souple et écologique
             à Tanger (Kia Niro Hybride BVA, Kia K5 BVA Hybride, etc.)</li>
            <li><b>Location voiture Utilitaires : </b> Pour déplacer des marchandises
             ou des meubles (Citroen Berlingo 3m3, Peugeot Expert L1H1, Peugeot Boxer,
              Citroen Jumper, etc.)</li>
        </ul>
       
        

<br>
<div class="row">
<div class="col-md-3">
    <img src="img/1.jpg" width="90%" height="auto">
</div>
<div class="col-md-3">
    <img src="img/2.jpg" width="90%" height="auto">
</div>
<div class="col-md-3">
    <img src="img/3.jpg" width="90%" height="auto">
</div>
<div class="col-md-3">
    <img src="img/4.jpg" width="90%" height="auto">
</div>
</div>
<div class="row">
<div class="col-md-4">
</div>
<div class="col-md-4">
    <img src="img/5.jpg" width="90%" height="auto">
</div>
<div class="col-md-4">
</div>
</div>
<br><br>
<h5>Quel véhicule louer à Tanger ?</h5>
<p>Le choix du véhicule de location à Tanger dépend surtout de ce que vous 
    prévoyez de faire pendant vos vacances au Maroc. Si vous prévoyez de
     rester en ville ou de ne pas beaucoup rouler, optez pour une voiture compacte
      ou citadine. À l’inverse, si vous prévoyez un road trip dans le royaume,
       privilégiez un SUV ou une familiale pour plus de confort 
    sur la route et une moindre consommation d’essence.</p>
    <br><u>Nos recommandations :</u><br>
<p>
_Si vous venez à Tanger en couple ou avec des enfants en bas âges, une Renault
 Clio 5 portes sera parfaite pour votre séjour.<br>
_Si venez à Tanger à plusieurs adultes ou en famille avec des
 adolescents : optez pour un Dacia Duster ou la location d’un Peugeot 2008. 
</p>
<u>Essence ou diesel ?</u><br>
<p>
Les moteurs diesel ont une meilleure autonomie si vous faîtes
 de la route. Vous pourrez conduire plus longtemps. En revanche,
  le diesel est mal adapté à la conduite en ville à Tanger, et est
   plus polluant. <br>
Si vous prévoyez de ne pas beaucoup rouler au Maroc, optez pour
 un moteur essence plutôt qu’un diesel. 
</p>

<p>Top 10 Location Voiture Fes les plus populaires</p>
<h6>Kia Picanto BVA 5 Portes Essence</h6>
<img src="img/kia.jpg" width="20%" height="auto"><br>
<p>La Kia Picanto est une voiture de location confortable, polyvalente et facile
     à conduire. De plus, avec des prix commençant très bas, c'est un véhicule
      abordable pour les voyageurs soucieux de leur budget. Peu large et légère, cette citadine est
     parfaitement adaptée à la ville et très facile à garer partout à Fes.</p>
     <br>
    <br>
     <h6>Renault Clio – Manuelle 5 Portes Essence</h6>
<img src="img/clio.jpg" width="20%" height="auto"><br>
<p>Parfait pour pour les conducteurs qui recherchent une voiture pratique et 
    passe-partout pour un séjour à Fes. La Clio dispose d'une tonne d'équipements
     et options en tous genres pour vous faciliter la conduite. De plus, l'intérieur 
     est très confortable et spacieux, cequi convient aussi bien aux adultes qu’aux
      enfants.</p>
      <br>
    <br>
     <h6>Dacia Duster 4X2 Essence</h6>
<img src="img/dacia.jpg" width="20%" height="auto"><br>
<p>Le duster est le meilleur compromis voiture de location citadine et voiture urbaine
     au Maroc. Avec son intérieur spacieux et ses performances impressionnantes, 
     le Duster est parfait pour la conduite en ville à Fes et l'exploration des
      grands espaces. Surélevé et puissant, vous pourrez vous rendre n’importe
       où au Maroc.</p>
    <br>
    <br>
     <h6>Peugeot 308 Manuelle 5 Portes Essence</h6>
<img src="img/pg.jpg" width="20%" height="auto"><br>
<p>La peugeot 308 est la voiture parfaite pour la conduite
    en ville à Fes et peut accueillir jusqu’à 5 passagers.
    De plus, avec des caractéristiques telles que la
    climatisation et le régulateur de vitesse, vous pourrez
    profiter de votre voyage à Fès sans avoir à vous soucier des 
    températures inconfortables ou des routes difficiles. </p>
      
    <h5>Assurance pour la location de voiture à Fès</h5>
<p>Assurance collision et couverture vol</p>
<p>Chez Hertz Maroc, nos voitures à Fès sont toutes louées avec une assurance 
    collision et une couverture vol. En cas de sinistre avec votre voiture à Fès,
     la responsabilité du titulaire du contrat de location est limitée à hauteur de 
     la franchise.</p><br>

<h5>Franchise</h5>
<p>Le montant de la franchise d’une location de voiture à Fès dépend de la catégorie du véhicule.</p>
<p>Les franchises démarrent à 14.000 dh (environ 1.400€) pour les citadines et
     montent jusqu’à 36.000 dh (environ 3.600€) pour les voitures familiales ou premium.</p>

<p>Pour limiter votre responsabilité et ne pas avoir à payer la
     franchise en cas d’accident avec votre voiture de location à Fès,
      vous avez la possibilité de souscrire à notre offre de Rachat de 
      Franchise Partiel, ou Rachat de Franchise Totale, lorsque vous effectuez
       votre réservation ou avant la remise des clés.<p>

<p>Prix d’une location de voiture à l’aéroport international de Fès : <br>
Les prix des locations de voitures à l’aéroport international de Fès 
varient en fonction de sa saisonnalité et du type de voiture.</p>



























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