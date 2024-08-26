-Lorsque le user AJOUT une recherche, il ajoute son ID dans le user_id du tableau de recherche
-lorsque le user log, il récupère le tableau contenant uniquement les user_id qui lui corresponde 

code structure phpmyadmin pour ajouter une colonne avec user_id en clé étrangere :
ALTER TABLE `MyLibrary`
ADD COLUMN `user_id` INT NOT NULL,
ADD FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

-vérifier si l'email est unique dans la BDD
-Sur la page de l'inscription : 
-Je déclenche une requête sql pour récupérer les emails de la table utilisateur
-Au moment d'envoyer mon formulaire un if/else compare l'adresse mail POST et celles dans la BDD...
...et si il y a correspondance alors il faut affichr message d'erreur

$sql = "SELECT email FROM user*;