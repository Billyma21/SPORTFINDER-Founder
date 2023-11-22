<?php
// index.php

// Inclure la classe RenduMonnaie
require_once 'RenduMonnaie.php';

// Traitement du formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer le montant depuis le formulaire
    $montant = $_POST["montant"];
    // Calculer le rendu de monnaie en utilisant la méthode de la classe RenduMonnaie
    $resultat = RenduMonnaie::calculerRenduMonnaie($montant);
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rendu Monnaie</title>
    <!-- Lien vers le fichier CSS externe -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Calcul du Rendu Monnaie</h1>

    <!-- Formulaire de saisie du montant -->
    <form method="post" action="">
        <label for="montant">Montant à rendre :</label>
        <input type="number" name="montant" required>
        <button type="submit">Calculer</button>
    </form>

    <!-- Affichage du résultat -->
    <?php if (isset($resultat)): ?>
        <h2>Résultat :</h2>
        <?php if ($resultat !== null): ?>
            <p>Rendu Monnaie : <?php echo implode(', ', $resultat); ?></p>
        <?php else: ?>
            <p>Impossible de rendre la monnaie pour ce montant.</p>
        <?php endif; ?>
    <?php endif; ?>
</body>
</html>
