<?php

try{
	$bdd = new PDO('mysql:host=db773222589.hosting-data.io;dbname=db773222589', 'dbo773222589', 'Freud63530!');
}
catch(Exception $e){
	die('Erreur : '.$e->getMessage());
}

?>