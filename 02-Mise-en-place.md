# 02 - Mise en place.

## Première étape

Pour commencer, nous allons télécharger Wordpress sur le site officiel de ce dernier.

[Download Wordpress](https://wordpress.org/download/)

Ensuite, nous allons glisser le fichier au même endroit que pour les exercices php, exemple: /var/www/html/firstWordPress sur Linux. En effet, notre site tournera sur le localhost.

Enfin, nous allons renommer notre dossier en "firstWordPress" afin de tous avoir le même nom.

## Database 

Allez sur http://localhost/phpmyadmin/ et créez une database :

- Nom : `firstWordPress`
- Interclassent : `utf8_unicode_ci`

ensuite allez dans votre éditeur de code chercher le fichier `wp-config-sample.php` et changez les informations de connexion.

```PHP

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'firstWordPress');

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Pour permettre d'installer des plugins sur Linux */
define('FS_METHOD','direct');


```
Renomer le fichier `wp-config-sample.php` en `wp-config.php`

Démarrer Wordpress dans votre navigateur avec `localhost/firstWordPress`

Pour un confort d'utilisation nous allons utiliser WordPress en français.

vous pouvez changer la langue lors du premier lancement de WordPress ou dans les options du dashboard.

## Créer un nouveau thème.

Nous allons-nous rendre dans le dossier `wp-content/themes` de notre site Wordpress et créer un nouveau dossier qui va acceuillir les fichiers de notre thème. Appelez-le comme vous le souhaiter.

Créer ensuite les fichiers suivants: 
- index.php
- style.css
- functions.php
- ajouter une image nommée screenshot.png

Ces Fichiers sont la base de votre thème et sont indispensables.


## En cas de problèmes d'écriture !

Si vous rencontrez des problèmes pour changer la langue de WP, télécharger des thèmes ou des extensions vous devez changer les droits d'utilisateur

- sudo chown -R user wp-content/plugings/
- sudo chmod 775 wp-content
- sudo chown -R user wp-content/

![](https://media.giphy.com/media/l4FATJpd4LWgeruTK/giphy.gif)

---

- [1. Introduction](./01-Introduction.md)
- [3. Bases](./03-Bases.md)
