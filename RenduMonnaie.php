<?php
// RenduMonnaie.php

// Déclaration de la classe RenduMonnaie
class RenduMonnaie {
    // Méthode statique pour calculer le rendu de monnaie
    public static function calculerRenduMonnaie($montant) {
        // Billets disponibles
        $billets = [10, 5, 2];
        // Tableau pour stocker le rendu de monnaie
        $renduMonnaie = [];

        // Parcours des billets disponibles
        foreach ($billets as $billet) {
            // Tant que le montant est supérieur ou égal au billet
            while ($montant >= $billet) {
                // Soustraire le billet du montant et l'ajouter au rendu de monnaie
                $montant -= $billet;
                $renduMonnaie[] = $billet;
            }
        }

        // Si le montant restant est égal à 0, retourner le rendu de monnaie, sinon retourner null
        if ($montant === 0) {
            return $renduMonnaie;
        } else {
            return null; // Retourne null pour indiquer l'impossibilité de rendre la monnaie
        }
    }
}
?>
