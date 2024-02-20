# Projet FIJ

à l'intention de ceux qui souhaiteraient voir le code complet qui fonctionne et et est bien sûr commenté afin de bien se souvenir des étapes vues en cours de Wordpress/php

j'ajouterai probablement des liens avec les code snippets récurrents sur cette page, n'hésitez pas à me le proposer si vous souhaitez autre chose.

`mirkouch@gmail.com`

À voir dans le dossier correspondant au thème pour les fichiers du projet ...

`app => public => wp-content => themes => FIJ_blog`

---

## explications de ACF

### le plugin [[ACF - advance custom fields]]

```php
<img class="w-100" src="<?php echo $hero_img['url']; ?>" alt="">
```

on va pouvoir écrire des choses du backend wordpress dans mon editeur de code

ça a permis de fetch les `<li> et <a>` des éléments de la nav depuis wordpress
avec le plugin #ACF

[[ACF - advance custom fields]] est super pratique pour pouvoir récupérer des élements du backend pour les envoyer vers le front il utilise des fonctiont php qui sont propres à wordpress

il faudra aller voir dans `function.php` dans l'editeur de code pour utiliser cette function wordpress qui permet de recuperer les titles du menu depuis le backend

## le foreach avec ACF

### récupère les infos du backend

1. utiliser get_field()
2. utiliser une boucle foreach() pourparcourir le repeater
3. afficher avec echo de ce qui est dans $value, en l'occurence ceci:

```
$value['nom_du_champ_dans_acf']
```

et dans le code ca donne ceci...

```php
<div class="d-flex flex-wrap align-items-stretch">
  <?php
  $missions = get_field('missions');
  foreach ($missions as $key => $value) {
    ?>
  <div class="border border-black col-4"> <?php echo $value['link']['url']; ?> </div>
  <div class="border border-black col-4"> <?php echo $value['image']['url']; ?> </div>
  <div class="border border-black col-4"> <?php echo $value['text']; ?> </div>
  <?php
  }
?>
```
