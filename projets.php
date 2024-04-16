<!-- On inclut la navbar  -->
<?php 
include('elements/header.php');
require 'config.php'; // On inclut la connexion à la base de données
$projets = $bdd->prepare('SELECT * FROM PROJETS');
$projets->execute();
$listeproj = $projets->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<body>
    <h1 class="text-center text-white">Mes projets</h1>
    <div class="liste d-flex justify-content-center flex-column">
        <?php foreach($listeproj as $projet): ?>
            <div class="container projet my-3 ">
                <div class="row projet1">
                    <div class="col-md-6 p-3">
                    <img src="<?php echo $projet['IMG_PROJET'] ?>" alt="Image du projet" class="img-fluid w-50 justify-content-center" >
                    </div>
                    <div class="col-md-6 p-3">
                    <h2 class="text-center"><?php echo $projet["NOM_PROJET"] ?></h2>
                    <p><?php echo $projet["DESC_PROJET"] ?></p>
                    <button type="button" class="btn btn-primary" onclick="window.location='https://schnelzauer.asci-asso.fr/projet_portfolio/details_projet/<?php echo $projet["ID_PROJET"]?>/'">En savoir plus</button>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</body>
</html>