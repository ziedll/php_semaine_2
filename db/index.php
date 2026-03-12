<?php 
require_once 'activité_8.php';
$db = require 'db.php';

// Récupérer le manager
$manager = new ContactManager($db);
// Appeler getAllContacts()
$contacts = $manager->getAllContacts();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des contacts</title>
</head>
<body>
    <h1>Contacts</h1>
    <ul>
        <?php foreach ($contacts as $contact): ?>
            <li><?= htmlspecialchars($contact->nom) ?> - <?= htmlspecialchars($contact->email) ?></li>
        <?php endforeach; 
        ?>
    </ul>
</body>
</html>