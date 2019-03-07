<?php 
class template {
	public $texte; //contient le html du template 
 
    public function __construct() 
    { // Chargement du fichier                 
    	$reference = fopen('views/modele.html', 'r'); // Ouverture du fichier 
 
        while ($tmpData = fread($reference, 1024)) 
        { // Récupération de l'HTML
        $this->texte .= $tmpData;         
        }         
        fclose($reference); // Fermeture du fichier     
    } 
 
    public function remplace($const, $newValue) 
    { // Méthode permettant de modifier une constante dans un fichier         
    	if (!empty($this->texte)) 
    	{ // Simple vérification              
    		$this->texte = str_replace('{#' . $const . '#}', $newValue, $this->texte); // Modifie la constante par sa nouvelle valeur         
    	} else {             
    		print 'Aucun template n\'a été défini.';         
    		}     
    } 
 
    public function affiche() 
    { // Affichage de l'HTML         
    	echo($this->texte);     
    } 
}
?>