<?php 
// données de connexion à la base de données define("HOTE","localhost"); 
// définition des constantes ->

define ("HOTE", "localhost");
define ("BASE","microprojet"); 
define ("USER","root"); // root
define ("PASSWD",""); // (none)
 
//chargement automatique de classes 
//plus d'infos : http://php.net/manual/fr/function.spl-autoload-register.php
spl_autoload_register(function ($class) {     
// cette instruction (pas à connapitre, juste copier/coller) qui empile des fonction prédéclarées et quand on fait appel a une fonction non déclarée, il va la chercher
	include 'libs/' . $class . '.php'; });
?> 