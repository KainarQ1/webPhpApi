<?php 
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$result = 'register.php?error=1';
		include 'db.php';

		if (isset($_POST['email'])&&isset($_POST['password'])&&isset($_POST['conf_password'])&&isset($_POST['full_name'])) {
			if($_POST['password']==$_POST['conf_password']){
				$query = $connection->prepare("SELECT * FROM users WHERE email =:email LIMIT 1 ");

				$query->execute(array('email'=>$_POST['email']));
				if($query->rowCount()==0){
					
					$query = $connection ->prepare("
						INSERT INTO users (id, email, password, full_name) 
						VALUES (NULL, :email, :password, :full_name)");
					$query->execute(array("email"=>$_POST["email"],"password"=>sha1($_POST["password"]), "full_name"=>$_POST["full_name"]));
					$result ='reg_conf.php';
				}
			}
		}
	
		header("Location:$result");
	}else{
		header("Location:index.php");
	}

 ?>