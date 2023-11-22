<?php
use PHPUnit\Framework\TestCase; // Utilisez PHPUnit\Framework\TestCase
require_once 'RenduMonnaie.php';

// Classe de test pour la classe RenduMonnaie
class RenduMonnaieTest extends TestCase {
    // Teste le cas où il est impossible de rendre la monnaie
    public function testRenduMonnaieImpossible() {
        // Vérifie que la méthode renvoie null, indiquant l'impossibilité de rendre la monnaie
        $this->assertNull(RenduMonnaie::calculerRenduMonnaie(1));
    }

    // Teste des cas simples de rendu de monnaie
    public function testRenduMonnaieSimple() {
        // Vérifie que la méthode renvoie un tableau correct pour le montant 6
        $this->assertEquals([2, 2, 2], RenduMonnaie::calculerRenduMonnaie(6));
        // Vérifie que la méthode renvoie un tableau correct pour le montant 10
        $this->assertEquals([10], RenduMonnaie::calculerRenduMonnaie(10));
    }

    // Teste un cas avec un grand nombre
    public function testRenduMonnaieGrandNombre() {
        // Vérifie que la méthode renvoie un tableau correct pour un grand montant
        $this->assertEquals([10, 9007199254740980, 5, 2, 2, 2], RenduMonnaie::calculerRenduMonnaie(9007199254740991));
    }
}