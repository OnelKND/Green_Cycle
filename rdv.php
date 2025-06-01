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
    $phone = $conn->real_escape_string($_POST['phone']);
    $ville = $conn->real_escape_string($_POST['ville']);
    $date = $conn->real_escape_string($_POST['date']);
    $message = $conn->real_escape_string($_POST['message']);

    // Préparer la requête SQL
    $sql = "INSERT INTO rendezvous (nom, email, phone, ville, date, message) VALUES ('$nom', '$email', '$phone', '$ville', '$date', '$message')";

    // Exécuter la requête
    if ($conn->query($sql) === TRUE) {
        echo "Rendez-vous pris avec succès!";
    } else {
        echo "Erreur: " . $sql . "<br>" . $conn->error;
    }

    // Fermer la connexion
    $conn->close();
}
?>
