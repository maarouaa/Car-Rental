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
    <h3>L'offre Train+Auto : Louez moins cher grâce à ONCF & Hertz</h3>
    <hr>
    <br>
    <img src="img/m.webp" width="100%" height="auto">
    <br>
    <center><h5>Prenez votre train et continuez votre voyage au volant d’une voiture 
        HERTZ livrée dans les gares ONCF à petits prix !</h5>
    </center>
    <br>
    <img src="img/m1.webp" width="100%" height="auto">
    <br>
    <br>
    <h4 id="titre"><b>La bonne affaire en location de voitures à l’occasion du mois du Ramadan </b></h4>
    <br><br>
    <p>Le mois sacré du Ramadan nous plonge dans les bonnes pratiques et les gestes les plus généreux.
         L’ONCF et Hertz Maroc souhaitent Ramadan Moubarak Kareem à tous les voyageurs et offre 30% 
         de remise sur les déplacements pendant ce mois pour se retrouver en famille ou tout simplement
          en groupe et favoriser des voyages sans fatigue à bord d’une large gamme de voitures de 
          location confortables et robustes disponibles dès votre arrivée en gare.<br><br>  

        Les voyageurs abonnés de l’ONCF profiteront d’encore plus de générosité avec 5% de remise
         supplémentaire sous réserve de présentation d’une carte d’abonnement valide au moment de la prise
          en charge de la voiture.
        <br><br>
        <b>Comment réserver ?</b> Le processus reste simple.<br>
        <ol>
            <li>Indiquer l’agence de départ / retour, la date et l’heure de départ / retour ;</li>
            <li>Introduire le code promo pour faire appliquer la remise de 30% :<b> KAREEM</b> ;</li>
            <li>Cliquer sur le bouton « Rechercher » pour consulter nos prix et nos modèles ;</li>
        </ol>
        <b>Conditions de l’offre :</b>
         <ul>
            <li>Offre cumulable avec l’avantage permanent du service Train+Auto pour les voyageurs ONCF ;</li>
            <li>Offre valable pour des réservations en ligne avec paiement 100% sécurisée ; </li>
            <li>Remise valide pour des prises en charges jusqu’au 16 Avril 2023 ;  </li>
            <li>Offre valable uniquement pour les départs depuis nos 6 agences Hertz dans les gares ONCF : </li>
                <ul>
                <li>Gare de Casa-voyageurs</li>
                <li>Gare de Rabat Agdal</li>
                <li>Gare de Kenitra</li>
                <li>Gare de Tanger</li>
                <li>Gare de Fès</li>
                <li>Gare de Marrakech</li>
                </ul>
         </ul></p>
      <br><br>
      <img src="img/im2.webp" width="100%" height="auto">
      <?php
    $con = mysqli_connect('localhost', 'root', '', 'location') or die(mysqli_error($con));
    $query="SELECT modéle, photo FROM voiture WHERE id IN (3, 4, 5, 6)";
    $result = mysqli_query($con, $query) or die(mysqli_error($con));
    ?>
    <br><br>
     <div class="row">
      <?php while ($row = mysqli_fetch_assoc($result)) { ?>
    <div class="col-md-3">
      <div class="card mb-3">
        <img src="<?php echo $row['photo']; ?>" class="card-img-top" alt="<?php echo $row['modéle']; ?>">
        <div class="card-body">
          <h5 class="card-title"><?php echo $row['modéle']; ?></h5>
        </div>
      </div>
    </div>
  <?php } ?>
    </div>
    <h4 id="titre"><b>Offre standard Train+Auto pour les clients ONCF </b></h4>
    <p>Louez votre voiture en gare ONCF à des prix très avantageux ! Plusieurs 
        modèles et formules de réservation vous sont 
        proposées afin de vous aider à vous déplacer plus facilement en ville.</p><br>
    <p>Que vous partiez seul, en famille ou pour un motif professionnel,
         nous vous accompagnons dans votre mobilité pour faire de votre voyage une expérience 
         fluide et réussie.</p><br>
    <p>Avantage exceptionnel et permanent pour toutes les réservations effectuées au départ de 
        nos 6 agences Hertz localisées au niveau des gares : 
        Tanger, Kénitra, Rabat agdal, Casa voyageurs, Marrakech et Fès</p><br><br>

    <h5>En gare de destination, comment je réserve ma voiture de location HERTZ?</h5>
    <ol>
            <li>Rendez-vous sur le site www.hertz.ma ou en gare ONCF</li>
            <li>Sélectionnez votre agence gare départ + retour</li>
            <li>Sélectionnez vos dates</li>
            <li>Choisissez votre voiture</li>
    </ol>
    <h5>Nos tarifs incluent :</h5>
    <ul>
                <li>La TVA de 20%</li>
                <li>La surcharge de location en gare</li>
                <li>Le kilométrage limité à 100 KM/Jour</li>
                <li>L’assistance routière 24/7</li>
                <li>La responsabilité civile</li>
                <li>La couverture basique avec application d’une franchise ou couverture
                     totale avec dépôt de caution minimale selon le choix du client au moment de la
                      réservation</li>
    </ul>
<br><br>

    <h4 id="titre"><b>Découvrez nos agences de location gares :</b></h4>
    <br><br>
    <a href="#"><button  id="bt" type="submit" name="Agence casablanca aéroport"  >Agence casablanca aéroport</button></a><br>
    <a href="#"><button  id="bt" type="submit" name="Agence fès aéroport"  >Agence fès aéroport</button></a><br>
    <a href="#"><button  id="bt" type="submit" name="Agence tanger aéroport"  >Agence tanger aéroport</button></a><br>
    <a href="#"><button  id="bt" type="submit" name="Agence rabat aéroport"  >Agence rabat aéroport</button></a><br>
    <a href="#"><button  id="bt" type="submit" name="Agence marrakech aéroport"  >Agence marrakech aéroport</button></a><br>
    <a href="#"><button  id="bt" type="submit" name="Agence agadir aéroport"  >Agence agadir aéroport</button></a><br>

    <h4 id="ttre"><b> Pour tout renseignement complémentaire, contactez-nous sur +212 802 007 778</b></h4> <br><br>
   
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