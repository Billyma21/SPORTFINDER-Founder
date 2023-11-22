# SPORTFINDER-Founder

Ce projet propose une solution simple pour le calcul du rendu de monnaie en fonction d'un montant saisi.

## Fichiers inclus

  - `index.php`: Fichier principal qui utilise la classe `RenduMonnaie` pour traiter un formulaire HTML, saisir un montant, et afficher le rendu de monnaie.

  - `RenduMonnaie.php`: Contient la classe `RenduMonnaie` avec une méthode statique `calculerRenduMonnaie` pour effectuer le calcul du rendu de monnaie.

  - `RenduMonnaieTest.php`: Fichier de test unitaire PHPUnit pour tester la classe `RenduMonnaie`. Il comprend plusieurs cas de test, y compris des situations où le rendu de monnaie est impossible.

  - `style.css`: Fichier de style CSS pour améliorer l'apparence du formulaire et du résultat.

## Comment faire fonctionner le projet


1. **Téléchargement du code**:

   Clonez le projet en utilisant la commande git :
   ```bash
   git clone https://github.com/Billyma21/SPORTFINDER-Founder.git
Vous pouvez également télécharger le code en tant que fichier ZIP et l'extraire sur votre machine.

------------------- 

Exécution du projet:

Déployez le projet sur un serveur web (par exemple, Apache) ou utilisez un serveur local tel que celui fourni par PHP (en exécutant php -S localhost:8000 depuis le répertoire du projet).

Accédez à l'application dans votre navigateur à l'adresse http://localhost:8000.

Exécution des tests unitaires:

Assurez-vous d'avoir PHPUnit installé. Si ce n'est pas le cas, vous pouvez l'installer via Composer (voir https://phpunit.de/getting-started/phpunit-10.html).

Exécutez les tests unitaires depuis le répertoire du projet :

  bash
  Copy code
  phpunit RenduMonnaieTest.php

Assurez-vous que tous les tests passent avec succès.

Lancer les tests localement:

Pour lancer les tests localement, assurez-vous d'avoir PHPUnit installé. Exécutez la commande suivante depuis le répertoire du projet :

  bash
  Copy code
  phpunit RenduMonnaieTest.php

Les tests seront exécutés, et vous verrez les résultats affichés dans la console.

Personnalisation:

Vous pouvez personnaliser le code en fonction de vos besoins. Si vous apportez des modifications à la classe RenduMonnaie, assurez-vous de mettre à jour également les tests unitaires pour refléter ces modifications.

N'hésitez pas à explorer et à expérimenter avec le code. Si vous avez des questions ou des problèmes, n'hésitez pas à demander de l'aide.

    Bilal.maayoud@live.fr
   
