# Framework_PHP

# Accès aux pages :
https://localhost/contact - Formulaire d'ajout

https://localhost/contact/list - Affiche la liste des customers

https://localhost/contact/{id} - Affiche l'utilisateur possédant l'id

https://localhost/param1/test1/param2/test2/test3/test4 - Multiple paramètres

# Travail effectué

Création d'un Autoloader permettant de Charger les classes lors de leur utilisation.

Création d'un Router permettant la navigation dans l'application.

Création d'un ControllerAbstract gérant le chargement et l'affichage d'une page.

Création de ControllerGet et ControllerPost qui test si la méthode d'accés à la page est respectivement 'GET' ou 'POST'.

Ajout de la gestion des fichiers CSS / JS aux ControllerAbstract.

Ajout d'une page d'erreur si le chemin d'accès est érroné.

Création des pages .phtml pour les pages error, contact et action, ainsi que les header et footer.

Ajout d'une classe CustomerRepository pour pouvoir lier la base de donnée et les models.

Modification du Router pour pouvoir passer des expressions régulière et récupérer des paramètres.

Ajout de nouveaux controller pour accéder à plusieurs URL.

Modification de la gestion des routes pour pouvoir utiliser des url tel quel "/contact/{id}" dans le fichier routes.php

Ajout d'une page pour tester les paramètres mutliples.
