# 02 - Mise en place.

## Première étape

Pour commencer, nous allons télécharger Wordpress sur le site officiel de ce dernier.

[Download Wordpress](https://wordpress.org/download/)

Ensuite, nous allons glisser le fichier au même endroit que pour les exercices php, dans le var puis l'html. En effet, notre site tournera sur le localhost.

Enfin, nous allons renommer notre dossier en "Site Wordpress1" afin de tous avoir le même nom.

Pour un confort d'utilisation nous allons utiliser WordPress en français.

vous pouvez changer la langue lors du premier lancement de WordPress ou dans les options du dashboard.

## Créer un nouveau thème.

Nous allons nous rendre dans le dossier wp-content/themes de notre site Wordpress et créer un nouveau dossier qui va acceuillir les fichiers de notre thème. Appelez-le comme vous le souhaiter.

Créer ensuite les fichies suivants: -index.php
                                    -style.css
                                    -functions.php
                                    -ajouter une image nomer screenshot.png


## En cas de problèmes d'écriture !

Si vous rencontrer des problèmes pour changer la langue de WP, télécharger des thèmes ou des extensions vous devez changez les droits d'utilisateur

- sudo chown -R user wp-content/plugings/
- sudo chmod 775 wp-content
- sudo chown -R user wp-content/content/

![](https://media.giphy.com/media/l4FATJpd4LWgeruTK/giphy.gif)

---

- [1. Introduction](./01-Introduction.md)
- [3. Bases](./03-Bases.md)
