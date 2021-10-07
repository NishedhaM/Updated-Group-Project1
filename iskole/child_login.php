<?php
session_start();
require_once('config.php');

if(isset($_POST['submit']))
{
	if(isset($_POST['email'],$_POST['password']) && !empty($_POST['email']) && !empty($_POST['password']))
	{
		$email = trim($_POST['email']);
		$password = trim($_POST['password']);
		$type;

		if(filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			$sql = "select * from members where email = :email ";
			$handle = $pdo->prepare($sql);
			$params = ['email'=>$email];
			$handle->execute($params);
			if($handle->rowCount() > 0)
			{
				$getRow = $handle->fetch(PDO::FETCH_ASSOC);
				if(password_verify($password, $getRow['password']))
				{
					unset($getRow['password']);
					$_SESSION = $getRow;
					$type=$getRow['type'];
					if($type=='student'){
					header('location:child_dashboard.php');
					exit();}
					if($type=='teacher'){
					header('location:teacher_dashboard.php');
					exit();}
				}
				else
				{
					$errors[] = "Wrong Email or Password";
				}
			}
			else
			{
				$errors[] = "Wrong Email or Password";
			}

		}
		else
		{
			$errors[] = "Email address is not valid";
		}

	}
	else
	{
		$errors[] = "Email and Password are required";
	}

}
?>

<!doctype html>
<html>
<head>
<link rel="stylesheet" href="child_login.css">

</head>
<body>
<div class="nav-container">

        <nav>


                <img src="images/logo.jpg" align="right" width="60px" height="60px">


        </nav>
<div class="wrapper">
            <div class="container">
        <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
			<?php
				if(isset($errors) && count($errors) > 0)
				{
					foreach($errors as $error_msg)
					{
						echo '<div class="alert alert-danger">'.$error_msg.'</div>';
					}
				}
			?>
				<form action="" method="POST" class="login-email">
			<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
				<div class="input-group">
					<label for="email" class="label">Email:</label>
					<input type="text" name="email" placeholder="Enter Email" class="form-control">
				</div>
				<div class="input-group">
				<label for="email" class="label">Password:</label>
					<input type="password" name="password" placeholder="Enter Password" class="form-control">
				</div>

				<div class="input-group">
				<button name="submit" class="btn">Login</button>
			</div>
			<p class="login-register-text">Don't have an account? <a href="child_registration.php">Register Here</a>.</p>
			</form>
			<div class="login-image">
                    <img src="images/child-true.jpg" alt=""/>
                    </div>
		</div>
	</div>
</div>
</body>
</html>
