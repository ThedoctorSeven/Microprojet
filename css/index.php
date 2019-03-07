<?php
//chargement du fichier include.php include('include/include.php');
include('include/include.php')

//réception de la variable 'page' passée en GET, cette variable contient le numéro de la page demandée

/*$page = filter_input(INPUT_GET, 'page', FILTER_VALIDATE_INT); 
//on vérifie qu'il s'agit bien d'un entier (protection antihacker)*/

$page = $_GET['page'];
switch ($page)
{
	case (1):
        // generation accueil
		include('files/accueil')
		break;
    case (2):
        // page oeuvres
    	include('files/listeOeuvres')
        break;
    case (3):
        // page formulaire
    	include('files/donnerAvis')
    	break;
    case (4):
     	// page affichage avis
    	include('files/listeAvis')
    	break;
    default :
    	// le numero de page est superieur a 33, ce n'est pas normal.
    	echo ('Alerte : pauvais numéro de page');
    	die;
}

//generation du menu
include('files/menu.php');

//génération de l'affichage final

//ouverture de la classe template
$template=new template();

//remplissage du template 
$template->remplace('titre',$titre);
$template->remplace('menu',$menu);
$template->remplace('content',$contenu);

//affichage du template 
$template->affiche(); 
?>