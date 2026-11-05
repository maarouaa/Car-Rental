<?php
// Informations de connexion à la base de données
$serveur = "localhost";
$nomUtilisateur = "root";
$motDePasse = "";
$nomDeLaBase = "location";

// Connexion à la base de données
$connexion = mysqli_connect($serveur, $nomUtilisateur, $motDePasse, $nomDeLaBase);

// Vérification de la connexion
if (!$connexion) {
    die("La connexion a échoué : " . mysqli_connect_error());
}
// echo "Connexion réussie !";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="mod.css">
    <link rel="stylesheet" href="http://127.0.0.1/numelion/img/fontawesome/css/font-awesome.min.css">
 
    <title>Login</title>
 
</head>
<body>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-6">
    <form action ="" method="post">
      <h1 class="text-center mb-5">Connexion</h1>
        <div class="form-group">
          <label for="txtlogin"><b>Nom d'utilisateur :</b></label>
          <input type="text" class="form-control" id="txtlogin" name="txtlogin" placeholder="Entrer le nom d'utilisateur" required>
        </div>
        <div class="form-group">
          <label for="txtpw"><b>Mot de passe :</b></label>
          <input type="password" class="form-control" id="txtpw" name="txtpw" placeholder="Entrer le mot de passe" required>
        </div>
        <button type="submit" class="btn btn-warning btn-block">LOGIN</button>
           <?php
        //    si le client à cliquer sur la button login
           if(isset($_POST['btlogin']))
           {
                $req="select * from utilisateur where login ='". $_POST['txtlogin'] ."' and motdepasse='".$_POST['txtpw']."'";
                if($resultat=mysqli_query($connexion,$req))
                {
                    $ligne=mysqli_fetch_assoc($resultat);
                    if($ligne!=0){
                        session_start();
                        $_SESSION['monLogin']=$_POST['txtlogin'];
                        header("location:accuiel.php");
                    }
                    else{
                        echo "<font color='#F0001D'> Login ou mot de passe est invalide </font>";
                    }
                }
           }
            ?>
            </form>
        </div>
        </div>
    </div>
</body>
</html>