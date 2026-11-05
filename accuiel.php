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
    <link rel="stylesheet" href="loccar_style.css">
    <title>Accuiel</title>
    <!-- <style>
        .photocar{
            width:50px;height:50px;border-radius:50%;border:1px solid;
        }
        .myphoto{
            width:50px;height:50px;border-radius:50%;border:1px solid;
        }
    </style> -->
</head>
<body>
    <div id="globl">
        <div id="profil">
            <?php
            session_start();
            echo "Bonjour et bienvenue ". $_SESSION['Login']."<br>";

            $req="select * from utilisateur where login='".$_SESSION['Login']."'";
            $resultat=mysqli_query($connexion,$req);
            $ligne=mysqli_fetch_assoc($resultat);
            ?>
            <img src="<?php echo $ligne['photo'];?>"class="myphoto">
            <br>
            <a href="deconnecter.php">Deconnection</a>
        </div>

        <div id="tableaubord">
        <?php include("tableaubord.php")
        ?>
        </div>
    </div>
</body>
</html>