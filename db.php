<?php 

	try {
		$connection = new PDO("mysql:host=localhost;dbname=Kai",'root','');
	}catch(PDOException $e){
		echo $e->getMessage();
	}


 ?>