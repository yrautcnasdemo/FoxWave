# Atelier CRUD

## Description

Créer, afficher, mettre à jour et supprimer des données d'une liste d'utilisateurs avec PHP et MySQL.

**C**reate
**R**ead
**U**pdate
**D**elete

## TODO

Affichage des utilisateurs :

-   [x] Créer une table HTML contenant une liste d'utilisateurs avec quelques exemples (id, prénom et nom).
-   [x] Créer une table `users` dans la base de données qui contiendra 3 colonnes :`id`, `first_name` et `last_name`.
-   [x] Insérer quelques utilisateurs dans la table `users` via phpMyAdmin.
-   [x] Dans `index.php`, créer une requête SQL pour récupérer la liste d'utilisateurs de la base de données.
-   [x] Préparer et exécuter la requête
-   [x] Dans `index.php` utiliser le résultat de la requête pour alimenter la table HTML.

Insertion d'un nouvel utilisateur :

-   [x] Créer un fichier `form.php` qui contiendra un formulaire HTML destiné à l'ajout d'un nouvel utilisateur.
-   [x] Dans `index.php`, ajouter un lien vers la page `form.php`.
-   [x] Créer un fichier `create.php` contenant le traitement du formulaire de `form.php`.
-   [x] Dans le fichier `create.php`, vérifier la présence de la superglobale `$_POST` qui existe à partir du moment où les données d'un formulaire en `method="POST"` sont envoyées.
-   [x] Vérifier que les données envoyées existent et ne sont pas vides.
-   [x] Créer une requête SQL permettant d'ajouter un nouvel utilisateur dans la base de données.
-   [x] Préparer et exécuter la requête.
-   [x] Vérifier la présence de nouveaux utilisateurs dans la page `index.php` et/ou en base de données.

Affichage d'une page par utilisateur :

-   [x] Dans `index.php`, créer une nouvelle colonne, `actions` dans la table HTML (nouvel élément <th> dans l'élément <thead>).
-   [x] Dans `index.php`, créer un lien vers une nouvelle page, `user.php`, dans la colonne `actions` via un nouvel élément <td>. Ajouter l'id de l'utilisateur dans ce lien en chaîne de requête (`?id=`).
-   [x] Créer la page `user.php`. Utiliser la superglobale `GET` qui pour récupérer la valeur de l'`id` dans l'url (`$_GET[xid']`).
-   [x] S'il n'y a pas d'`id` dans l'url, rediriger vers la page `index.php` (`header('Location: index.php');`).
-   [x] On vérifie que l'utilisateur demandé existe en base de données.
-   [x] Nettoyer l'`id` avec `strip_tags()` pour retirer les potentiels caractères spéciaux placés par erreur ou de façon malintentionnée.
-   [x] Dans `user.php`, créer une requête SQL permettant d'afficher l'utilisateur pour lequel l'`id` correspond à celle présente dans l'url.
-   [x] Préparer et exécuter la requête.
-   [x] Afficher le prénom et le nom de l'utilisateur en titre de la page et en <h1>.

Suppression d'un utilisateur

-   [x] Dans `index.php`, créer un lien vers une nouvelle page, `delete.php`, dans la table HTML, à côté du lien qui dirige vers la fiche d'un utilisateur. Ajouter l'`id` de l'utilisateur dans ce lien en chaîne de requête (`?id=`).
-   [x] Créer la nouvelle page `delete.php`. Récupérer l'id dans l'url via la superglobale `GET`.
-   [x] S'il n'y a pas d'`id` dans l'url, rediriger vers la page `index.php` (`header('Location: index.php');`).
-   [x] S'assurer que l'utilisateur existe en créant une requête `SELECT` sur l'utilisateur ayant l'`id` correspondant à celle de l'url.
-   [x] Si l'utilisateur n'existe pas, rediriger vers la page `index.php`.
-   [x] Créer requête SQL permettant de supprimer l'utilisateur pour lequel l'`id` correspond à celle présente dans l'url.
-   [x] Préparer et exécuter la requête.
-   [x] Une fois la requête executée, rediriger vers `index.php`

Modification d'un utilisateur

-   [x] Récupérer les données de l'utilisateur
-   [x] Dans `index.php`, créer un lien vers une nouvelle page, `update.php`, dans la table HTML, à côté du lien qui dirige vers la fiche d'un utilisateur. Ajouter l'`id` de l'utilisateur dans ce lien en chaîne de requête (`?id=`).
-   [x] Créer la nouvelle page `update.php`. Récupérer l'id dans l'url via la superglobale `GET`.
-   [x] S'il n'y a pas d'`id` dans l'url, rediriger vers la page `index.php` (`header('Location: index.php');`).
-   [x] Copier le HTML de la page `create.php` et le coller en bas de la page `update.php`.
-   [x] Créer une requête SQL pour récupérer les données de l'utilisateur dont l'id correspond à celle de l'url.
-   [x] Préparer et exécuter la requête.
-   [x] Utiliser les données récupérées pour les ajouter dans les propriétés `value` du formulaire (`value="<?= $user["first_name"] ?>"`) afin de remplir le formulaire avec les données déjà existantes.
-   [x] Ajouter un champ de formulaire caché contenant l'`id` issue de la requête de vérification de l'utilisateur. Cela permettra de cibler le bon utilisateur lors de l'envoi des données.
-   [x] Envoi du formulaire
-   [x] Vérifier la présence de la superglobale `POST`.
-   [x] Vérifier que les données transmises via le formulaire sont présentes et ne sont pas vides.
-   [x] Créer une requête SQL permettant de modifier l'utilisateur là où l'`id` correspond dans la base de données.
-   [x] Préparer et exécuter la requête.
-   [ ] Vérifier la modification de l'utilisateur dans la page `index.php` et/ou en base de données.

Exemple de gestion de messages d'erreur et de confirmation à l'aide de sessions :

-   [ ] Démarrer une session sur la page `create.php` avec `session_start();`
-   [ ] Avant de rediriger vers `index.php` après avoir exécuté la requête SQL, écrire un message dans la session via `$_SESSION['message'] = "Utilisateur ajouté";`
-   [ ] Sur la page `index.php`, dans le HTML, insérer la condition de l'existance de `$_SESSION['message']`. Si un message existe, afficher une <div> contenant le message puis effacer le message avec `$_SESSION['message'] = "";`
