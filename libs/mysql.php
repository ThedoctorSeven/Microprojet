<?php 
 
class mysql { 
 
    public function open() 
    {	//connection base de données, constantes de connection dans include.php         
    	try 
    	{             
    		$this->open = new PDO('mysql:host=' . HOTE . ';dbname=' . BASE.';charset=utf8', USER, PASSWD);         
    	} 
    	catch (PDOException $e) 
    	{             
    		print("Erreur : " . $e->getMessage());         
    	}     
    } 
 
    public function cherche($requete) 
    {	//requête select         
    	$this->open();         
    	$resultat = $this->open->query($requete);         
    	$this->open = NULL; //fermeture de la connexion        
    	return $resultat->fetchAll(PDO::FETCH_ASSOC);     
    } 
 
    public function insertion($requete) 
    {	//requête insert         
    	$this->open();         
    	$this->open->exec($requete);         
    	$this->open = NULL; //fermeture de la connexion    
	} 
} 
?>