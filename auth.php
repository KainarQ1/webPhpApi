<?php 
	if(isset($_POST['email'])){
		$emailC=$_POST['email'];
		$passwordC=$_POST['password'];
		setcookie('emailCookie', $emailC, time()+ 50000);
		setcookie('passwordCookie', $passwordC, time()+ 50000);
	}

 ?>
<?php 
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$result = 'signin.php?error=1';
		include 'db.php';

		if (isset($_POST['email'])&&isset($_POST['password'])) {
				$query = $connection->prepare("SELECT * FROM users WHERE email =:email AND password =:password LIMIT 1 ");

				$query->execute(array('email'=>$_POST['email'], 'password'=>sha1($_POST['password'])));
				if($query->rowCount()>0){
					session_start();
					$_SESSION['userData']=$query->fetch();
					$result='index.php';
				}
			
		}
	
		header("Location:$result");
	}else{
		header("Location:index.php");
	}

 ?>//rowcount method
 //fetch method