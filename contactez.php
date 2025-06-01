<?php
// Configurer les informations de connexion à la base de données
$servername = "localhost";
$username = "root";
$password = ""; // Ajoute ton mot de passe ici si tu en as un
$dbname = "greencycle";

// Créer une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $nom = $conn->real_escape_string($_POST['nom']);
    $email = $conn->real_escape_string($_POST['email']);
    $numero = $conn->real_escape_string($_POST['numero']);
    $sujet = $conn->real_escape_string($_POST['sujet']);
    $message = $conn->real_escape_string($_POST['message']);

    // Préparer la requête SQL
    $sql = "INSERT INTO contact (nom, email, numero, sujet, message) VALUES ('$nom', '$email', '$numero', '$sujet', '$message')";

    // Exécuter la requête
    if ($conn->query($sql) === TRUE) {
        header("Location: subscribe_success.php");
        exit();
    } else {
        echo "Erreur: " . $sql . "<br>" . $conn->error;
    }

    // Fermer la connexion
    $conn->close();
}
?>
