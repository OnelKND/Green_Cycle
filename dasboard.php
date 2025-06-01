<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de Bord</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="shortcut icon" href="img/favi.png" type="image/x-icon">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            color: #343a40;
                        margin-top: 20px; /* Espace en haut */
        }
        .dashboard {
            padding: 30px;
        }
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
            margin-bottom: 30px;
        }
        .card:hover {
            transform: translateY(-10px);
        }
        .card-header {
            background-color: #28a745;
            color: #fff;
            font-size: 18px;
            font-weight: bold;
            border-radius: 10px 10px 0 0; 
            padding: 12px 20px;
        }
        .card-body {
            padding: 20px;
        }
        .stats {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }
        .stat {
            width: calc(25% - 20px);
            padding: 20px;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.3s ease-in-out;
            margin-bottom: 20px;
        }
        .stat:hover {
            transform: translateY(-10px);
        }
        .stat-icon {
            font-size: 36px;
            color: #28a745;
        }
        .stat-number {
            font-size: 24px;
            font-weight: bold;
        }
        .stat-label {
            font-size: 16px;
            color: #6c757d;
        }

        .form-section {
            margin-top: 30px;
        }
        .form-section h2 {
            margin-bottom: 20px;
        }
        .form-control {
            margin-bottom: 15px;
        }
        .btn-primary {
            background-color: #28a745;
            border: none;
        }
        .btn-primary:hover {
            background-color: #218838;
        }
        .delete-btn {
            background-color: #dc3545;
            color: #fff;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            font-size: 14px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .delete-btn:hover {
            background-color: #c82333;
        }
        .modal-content {
            border-radius: 10px;
        }
        .modal-header {
            background-color: #dc3545;
            color: #fff;
            border-radius: 10px 10px 0 0;
            padding: 10px 20px;
        }
        .modal-title {
            font-size: 18px;
            font-weight: bold;
        }
        .modal-body {
            padding: 20px;
        }
        .modal-footer {
            border-radius: 0 0 10px 10px;
            padding: 10px 20px;
        }
    </style>
</head>
<body>

<div class="dashboard container">
    <div class="row mb-4">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    Tableau de Bord
                </div>
                <div class="card-body">
                    <div class="stats">
                        <div class="stat">
                            <i class="fas fa-newspaper stat-icon"></i>
                            <div class="stat-number">5</div>
                            <div class="stat-label">Nouvelles Actualités</div>
                        </div>
                        <div class="stat">
                            <i class="fas fa-users stat-icon"></i>
                            <div class="stat-number">50</div>
                            <div class="stat-label">Abonnements Actifs</div>
                        </div>
                        <div class="stat">
                            <i class="fas fa-eye stat-icon"></i>
                            <div class="stat-number">200</div>
                            <div class="stat-label">Visiteurs du Site</div>
                        </div>
                        <div class="stat">
                            <i class="fas fa-envelope-open-text stat-icon"></i>
                            <div class="stat-number">10</div>
                            <div class="stat-label">Messages Non Lus</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Section Rendez-vous en Attente -->
    <div class="row">
        <div class="col-lg-6 mb-4">
            <div class="card">
                <div class="card-header">
                    Rendez-vous en Attente
                </div>
                <div class="card-body">
                    <ul id="rdv-list" class="list-unstyled">
                        <?php
                        // Configuration des informations de connexion à la base de données
                        $servername = "localhost";
                        $username = "root";
                        $password = ""; // Ajoutez votre mot de passe ici s'il y a lieu
                        $dbname = "greencycle";

                        // Création de la connexion
                        $conn = new mysqli($servername, $username, $password, $dbname);

                        // Vérification de la connexion
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }

                        // Requête SQL pour récupérer les rendez-vous en attente
                        $sql = "SELECT * FROM rendezvous";
                        $result = $conn->query($sql);

                        // Affichage des rendez-vous en attente
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo "<li id='rdv-" . $row['id'] . "'>";
                                echo "<strong>Nom :</strong> " . htmlspecialchars($row['nom']) . "<br>";
                                echo "<strong>Email :</strong> " . htmlspecialchars($row['email']) . "<br>";
                                echo "<strong>Téléphone :</strong> " . htmlspecialchars($row['phone']) . "<br>";
                                echo "<strong>Ville :</strong> " . htmlspecialchars($row['ville']) . "<br>";
                                echo "<strong>Message :</strong> " . htmlspecialchars($row['message']) . "<br>";
                                echo "<small class='text-muted'>Date de RDV : " . htmlspecialchars($row['date']) . "</small>";
                                echo "<br>";
                                echo "<button class='delete-btn' onclick='deleteRdv(" . $row['id'] . ")'>Marquer comme pris en charge</button>";
                                echo "<hr>";
                                echo "</li>";
                            }
                        } else {
                            echo "<p>Aucun rendez-vous en attente.</p>";
                        }
                        // Fermeture de la connexion
                        $conn->close();
                        ?>
                    </ul>
                </div>
            </div>
        </div>
        
        <!-- Section Messages des Contacts -->
        <div class="col-lg-6 mb-4">
            <div class="card">
                <div class="card-header">
                    Messages des Contacts
                </div>
                <div class="card-body">
                    <ul id="contacts-list" class="list-unstyled">
                        <?php
                        // Création d'une nouvelle connexion pour les messages de contact
                        $conn_contacts = new mysqli($servername, $username, $password, $dbname);

                        // Vérification de la connexion
                        if ($conn_contacts->connect_error) {
                            die("Connection failed: " . $conn_contacts->connect_error);
                        }

                        // Requête SQL pour récupérer les messages de contact
                        $sql_contacts = "SELECT * FROM contact";
                        $result_contacts = $conn_contacts->query($sql_contacts);

                        // Affichage des messages de contact
                        if ($result_contacts->num_rows > 0) {
                            while($row = $result_contacts->fetch_assoc()) {
                                echo "<li>";
                                echo "<strong>Nom :</strong> " . htmlspecialchars($row['nom']) . "<br>";
                                echo "<strong>Email :</strong> " . htmlspecialchars($row['email']) . "<br>";
                                echo "<strong>Téléphone :</strong> " . htmlspecialchars($row['numero']) . "<br>";
                                echo "<strong>Sujet :</strong> " . htmlspecialchars($row['sujet']) . "<br>";
                                echo "<strong>Message :</strong> " . htmlspecialchars($row['message']) . "<br>";
                                echo "<hr>";
                                echo "</li>";

                            }
                        } else {
                            echo "<p>Aucun message de contact.</p>";
                        }
                        // Fermeture de la connexion des messages de contact
                        $conn_contacts->close();
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Section Abonnements Actifs -->
    <div class="row">
        <div class="col-lg-6 mb-4">
            <div class="card">
                <div class="card-header">
                    Abonnements Actifs
                </div>
                <div class="card-body">
                    <ul id="active-subscriptions-list" class="list-unstyled">
                    <?php
                        // Connexion à la base de données
                        $conn_active_subscriptions = new mysqli($servername, $username, $password, $dbname);

                        // Vérification de la connexion
                        if ($conn_active_subscriptions->connect_error) {
                            die("Connection failed: " . $conn_active_subscriptions->connect_error);
                        }

                        // Requête SQL pour récupérer tous les abonnements (sans condition de statut)
                        $sql_active_subscriptions = "SELECT * FROM abonnement";
                        $result_active_subscriptions = $conn_active_subscriptions->query($sql_active_subscriptions);

                        // Vérification des résultats et affichage des abonnements actifs
                        if ($result_active_subscriptions->num_rows > 0) {
                            while($row = $result_active_subscriptions->fetch_assoc()) {
                                echo "<li>";
                                echo "<strong>Nom :</strong> " . htmlspecialchars($row['name']) . " " . htmlspecialchars($row['prenom']) . "<br>";
                                echo "<strong>Téléphone :</strong> " . htmlspecialchars($row['phone']) . "<br>";
                                echo "<strong>Type d'abonnement :</strong> " . htmlspecialchars($row['type']) . "<br>";
                                echo "<strong>Status :</strong> Actif<br>";
                                echo "<hr>";
                                echo "</li>";
                            }
                        } else {
                            echo "<p>Aucun abonné actif.</p>";
                        }

                        // Fermeture de la connexion
                        $conn_active_subscriptions->close();
                        ?>


                    </ul>
                </div>
            </div>
        </div>
        
        <!-- Section Abonnements à la Newsletter -->
        <div class="col-lg-6 mb-4">
            <div class="card">
                <div class="card-header">
                    Abonnements à la Newsletter
                </div>
                <div class="card-body">
                    <ul id="subscribers-list" class="list-unstyled">
                        <?php
                        // Création d'une nouvelle connexion pour les abonnés à la newsletter
                        $conn_subscribers = new mysqli($servername, $username, $password, $dbname);

                        // Vérification de la connexion
                        if ($conn_subscribers->connect_error) {
                            die("Connection failed: " . $conn_subscribers->connect_error);
                        }

                        // Requête SQL pour récupérer les abonnés à la newsletter
                        $sql_subscribers = "SELECT email FROM subscribers";
                        $result_subscribers = $conn_subscribers->query($sql_subscribers);

                        // Affichage des abonnés à la newsletter
                        if ($result_subscribers->num_rows > 0) {
                            while($row = $result_subscribers->fetch_assoc()) {
                                echo "<li>";
                                echo htmlspecialchars($row['email']);
                                echo "</li>";
                                echo "<hr>";
                            }
                        } else {
                            echo "<p>Aucun abonné à la newsletter.</p>";
                        }
                        // Fermeture de la connexion des abonnés à la newsletter
                        $conn_subscribers->close();
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal de Confirmation de Suppression -->
<div class="modal fade" id="confirmDeleteModal" tabindex="-1" role="dialog" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmDeleteModalLabel">Confirmation de Suppression</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Êtes-vous sûr de vouloir marquer ce rendez-vous comme pris en charge ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                <button id="confirmDeleteBtn" type="button" class="btn btn-danger">Supprimer</button>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    function deleteRdv(id) {
        $('#confirmDeleteModal').modal('show');

        $('#confirmDeleteBtn').on('click', function() {
            $.ajax({
                url: 'dashboard.php?action=delete&id=' + id,
                type: 'get',
                success: function(response) {
                    $('#rdv-' + id).fadeOut();
                    $('#confirmDeleteModal').modal('hide');
                },
                error: function(xhr, status, error) {
                    console.error('Une erreur est survenue lors de la suppression du rendez-vous.');
                }
            });
        });
    }
</script>
</body>
</html>

<?php
// Vérification si une action de suppression est demandée
if (isset($_GET['action']) && $_GET['action'] == 'delete' && isset($_GET['id'])) {
    // Configuration des informations de connexion à la base de données
    $servername = "localhost";
    $username = "root";
    $password = ""; // Ajoutez votre mot de passe ici s'il y a lieu
    $dbname = "greencycle";

    // Création de la connexion
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Vérification de la connexion
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Récupérer l'ID du rendez-vous à supprimer
    $id = $conn->real_escape_string($_GET['id']);

    // Préparer la requête SQL pour supprimer le rendez-vous
    $sql = "DELETE FROM rendezvous WHERE id = '$id'";

    // Exécuter la requête SQL
    if ($conn->query($sql) === TRUE) {
        echo "Rendez-vous supprimé avec succès.";
    } else {
        echo "Erreur lors de la suppression du rendez-vous: " . $conn->error;
    }

    // Fermeture de la connexion
    $conn->close();
}
?>
