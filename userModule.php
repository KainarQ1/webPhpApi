<?php 

		include 'db.php';
		if(!isset($_SESSION)){
		    session_start();
		}
		$USER_DATA = null;
		if (isset($_SESSION['userData'])) {
			$query = $connection->prepare("SELECT * FROM users WHERE email =:email AND password =:password LIMIT 1 ");

				$query->execute(array('email'=>$_SESSION['userData']['email'], 'password'=>$_SESSION['userData']['password']));
				if($query->rowCount()>0){
					$USER_DATA = $query->fetch();
				}else{
					session_destroy();
				}
		}
	
	
 ?>