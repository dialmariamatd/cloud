 <?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'db-config.php';


function envoyer(PDO $PDO){
    if(!isset($_POST["nom"]) || empty($_POST["nom"])) {
        echo '<p style="color: red; font-weight: bold;">Il manque le nom de l\'etudiant</p>';
    }
    elseif(!isset($_POST["prenom"]) || empty($_POST["prenom"])) {
        echo '<p style="color: red; font-weight: bold;">Il manque le prenom de l\'etudiant</p>';
    }
    elseif(!isset($_POST["specialite"]) || empty($_POST["specialite"])) {
        echo '<p style="color: red; font-weight: bold;">Il manque le contenu de l\'especialite</p>';
    }else{
        $request = $PDO->prepare("INSERT INTO etudiant (nom, prenom, specialite) VALUES (:nom, :prenom, :specialite)");
        $request->bindValue(":nom", $_POST["nom"]);
        $request->bindValue(":prenom", $_POST["prenom"]);
        $request->bindValue(":specialite", $_POST["specialite"]);
        $request->execute();
        header('Location: index.php'); 
    }

    echo '<p><a href="index.php">accueil</a></p>';
   
}

$PDO = new PDO(DB_DSN, DB_USER, DB_PASS, $options);
envoyer($PDO);
