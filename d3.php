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
    <br>
    <center><h3>Témoigner le charme d'Agadir</h3></center>
    <hr >
    <br>
    <div class="row">
        <div class="col-md-6">
        <img src="img/agadir.webp" width="90%" height="auto">
        </div>
        <div class="col-md-6">
            <p>
            Agadir, la capitale marocaine du sud. Contrairement à la majorité des villes
            au Maroc, celle-ci est relativement moderne. En effet, Agadir a été remaniée
            après avoir été atteint par un tremblement de terre qui a démoli une grande
            partie de la ville en 1960. Par conséquent, cette ville est plus susceptible
            de plaire aux touristes qui veulent se détendre et s'amuser plutôt qu'à 
            ceux qui veulent explorer la culture marocaine.
                <br><br>
            La ville blanche est dynamique et propose à ses 
            visiteurs de nombreuses activités et divertissements.  
            Célèbre pour sa magnifique plage de sable doré et la 
            douceur de son climat, Agadir attire de nombreux touristes chaque année.
            </p>
        </div>
    </div>
<p>
    <br>
    Lors d'une visite à Agadir, la Médina Polizzi, nommée en hommage 
    à son créateur italien le maître artisan décorateur Coco (Beato Salvatore) 
    Polizzi, semble être le bon endroit à découvrir en premier. À 
    l'intérieur de la Médina, vous trouverez diverses boutiques qui 
    proposent des produits traditionnels marocains, un théâtre utilisé 
    pour animer les festivals, et aussi un restaurant convenable. A 
    noter que malgré le fait que la médina est plutôt récente, son 
    architecture respecte les normes de l’ancien design marocain au 
    point que vous ne pourrez peut-être pas deviner qu'elle a été 
    créée dans les années 90. Si la médina a éveillé votre curiosité, 
    vous devriez peut-être visiter la Kasbah pour vous imprégner 
    davantage de la culture marocaine. Construite en 1540, la Kasbah 
    est une ancienne forteresse d'où vous pourrez avoir une vue 
    panoramique magnifique sur Agadir, les montagnes de l'Anti-Atlas 
    et l'océan. Si vous êtes un amateur de photographie, il est fortement
     recommandé d'attendre le coucher du soleil pour prendre de superbes 
     photos. Pour donner une touche finale à votre enthousiasme pour la 
     culture marocaine, pensez à aller au musée du patrimoine Amazigh où 
     vous trouverez une collection intéressante de vêtements traditionnels 
     Amazigh, de bijoux artisanaux, de tapis fantaisistes et de merveilleuses 
     portes en bois qui reflètent la culture Amazigh. Maintenant que vous avez 
     eu votre dose d'histoire et de culture, il est temps de faire une pause et 
     de vous détendre. Pour ce faire, rendez-vous dans un parc abritant de 
     nombreuses espèces d'oiseaux, la vallée des oiseaux, où vous pourrez 
     respirer l'air frais et admirer des oiseaux de multiples couleurs. 
     Si la nature ne vous intéresse pas, vous pouvez vous rendre à la plage 
     d'Agadir, l'une des plus belles plages du Maroc, qui vous aidera à vous 
     égayer et à oublier tous vos soucis, et vous pourrez également profiter 
     des diverses activités qui y sont proposées, comme le surf, la planche 
     à voile ou le jet-ski. Une fois que vous en avez assez, il y a un endroit 
     que vous devez absolument visiter, la vallée de Tifrit. À environ 34 km 
     d'Agadir, la vallée de Tifrit, souvent appelée la vallée du paradis, offre une 
     expérience remplie d'endroits rafraîchissants (comme des cascades et des piscines 
     naturelles) et de scènes inoubliables. Vous croiserez également des villages berbères 
     où vous pourrez faire une pause déjeuner à la traditionnelle. Un autre endroit 
     merveilleux à visiter est le parc national de Sous Massa. Plein d'espèces locales 
     rares dont vous n'avez peut-être jamais entendu parler auparavant comme le Geronticus 
     eremita (Ibis chauve), ce parc est l'un des plus beaux endroits de la région et 
     certains le qualifient de petit Sahara du fait que la moitié du site est couverte de 
     sable. Pour les personnes qui souhaitent un divertissement supplémentaire, Taroudant 
     vous attend ! À environ une heure et demie d'Agadir en voiture, vous trouverez la ville 
     appelée la petite Marrakech. Moins populaire qu'Agadir, mais très intéressante grâce à 
     sa médina où se trouvent plusieurs souks (marchés) qui donnent un riche aperçu de la 
     culture amazigh, Taroudant est l'une des villes qui vous donnera envie d'en savoir 
     plus sur la culture marocaine et ses secrets. Mais attendez... le voyage n'est pas 
     encore terminé, un peu plus au sud (30 km) se trouve l'Oasis de Tiout, l'endroit 
     parfait pour une longue promenade tout en découvrant d'anciennes ruines marocaines 
     et en admirant de magnifiques paysages. Un voyage à Agadir nécessite une voiture 
     en raison de la grande étendue de la ville et de la distance entre les différents lieux 
     touristiques. En outre, les routes menant à certains endroits peuvent être plus ou moins 
     endommagées, en ce sens, nous suggérons une de nos voitures de catégorie SUV et 4WD tels 
    que KIA SORENTO, KIA SPORTAGE, et TOYOTA PRADO pour plus de confort.
    <br><br>
    A présent que nous sommes arrivés à la fin de ce guide, il serait pratique d'avoir 
    une liste des meilleurs hôtels et restaurants d'Agadir... n'est-ce pas ? Eh bien, 
    nous en avons fait une spécialement pour vous :



</p>
<div class="row">
    <div class="col-md-6">
    <h3>Les 4 meilleurs hôtels : </h3><br>
    <p><b>
    Hôtel Sofitel Agadir Thalassa sea & spa ;                                   
    <br><br>
    Tikida Golf Palace Agadir ;                                                              
    <br><br>
    Royal Atlas Hôtel & spa Agadir ;                                                   
    <br><br>
    Hôtel Khalij Agadir & SPA.  </b>                                     
    </p>
    </div>
    <div class="col-md-6">
    <h3 >Top 4 des restaurants :</h3>
    <p>
   <b> Restaurant Pure Passion ; 
    <br><br>
    Restaurant Le Tapis Rouge ;
    <br><br>
    Restaurant El Toro
    <br><br>
    Restaurant O Playa.</b>
    </p>
    </div>
</div>

<p>Nous espérons que ce guide vous a aidé à organiser votre voyage à Agadir</p>


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

































