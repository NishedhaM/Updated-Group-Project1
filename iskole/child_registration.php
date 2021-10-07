<?php
session_start();
require_once('config.php');

if(isset($_POST['submit']))
{
    if(isset($_POST['first_name'],$_POST['last_name'],$_POST['email'],$_POST['password']) && !empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['email']) && !empty($_POST['password']))
    {
        $firstName = trim($_POST['first_name']);
        $lastName = trim($_POST['last_name']);
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);

        $number = preg_match('@[0-9]@', $password);
        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        $specialChars = preg_match('@[^\w]@', $password);

        $options = array("cost"=>4);
        $hashPassword = password_hash($password,PASSWORD_BCRYPT,$options);
        $date = date('Y-m-d H:i:s');
        $type = 'student';

      
        if(filter_var($email, FILTER_VALIDATE_EMAIL))
		{
            $sql = 'select * from members where email = :email';
            $stmt = $pdo->prepare($sql);
            $p = ['email'=>$email];
            $stmt->execute($p);

            if(strlen($password) < 8 || !$number || !$uppercase || !$lowercase || !$specialChars) {
                $errors[]=  "Password must be at least 8 characters in length and must contain at least one number, one upper case letter, one lower case letter and one special character.";
               } else {
                $errors[]= "Your password is strong.";
                

            if($stmt->rowCount() == 0)
            {
                $sql = "insert into members (first_name, last_name, email, `password`, created_at,updated_at ,type) values(:fname,:lname,:email,:pass,:created_at,:updated_at,:type)";

                try{
                    $handle = $pdo->prepare($sql);
                    $params = [
                        ':fname'=>$firstName,
                        ':lname'=>$lastName,
                        ':email'=>$email,
                        ':pass'=>$hashPassword,
                        ':created_at'=>$date,
                        ':updated_at'=>$date,
                        ':type'=>$type
                    ];

                    $handle->execute($params);

                    $success = 'User has been created successfully';

                }
                catch(PDOException $e){
                    $errors[] = $e->getMessage();
                }
            }
            else
            {
                $valFirstName = $firstName;
                $valLastName = $lastName;
                $valEmail = '';
                $valPassword = $password;
                


                $errors[] = 'Email address already registered';
            }
               }
    
        }
        else
        {
            $errors[] = "Email address is not valid";
        }
    }
    else
    {
        if(!isset($_POST['first_name']) || empty($_POST['first_name']))
        {
            $errors[] = 'First name is required';
        }
        else
        {
            $valFirstName = $_POST['first_name'];
        }
        if(!isset($_POST['last_name']) || empty($_POST['last_name']))
        {
            $errors[] = 'Last name is required';
        }
        else
        {
            $valLastName = $_POST['last_name'];
        }

        if(!isset($_POST['email']) || empty($_POST['email']))
        {
            $errors[] = 'Email is required';
        }
        else
        {
            $valEmail = $_POST['email'];
        }

        if(!isset($_POST['password']) || empty($_POST['password']))
        {
            $errors[] = 'Password is required';
        }
        else
        {
            $valPassword = $_POST['password'];
        }

    }

}
?>


<!doctype html>
<html>
<head>
<link rel="stylesheet" href="child_registration.css">

</head>
<body>
<div class="nav-container">

        <nav>
            <div class="logo">
                <img src="images/logo.jpg" align="right" width="60px" height="60px">
            </div>


        </nav>


    </div>
    <div>
                <br> <br><br><br><br>  <br><br><br><br>
                <img src="images/Sometimes.png" alt="hi" align="left" >
                <br><br><br><br>
                <img id="my_image" src="images/child.png"align="right" >

            </div>


<div class="wrapper">
            <div class="container">
        <p class="login-text" style="font-size: 2rem; font-weight: 800; margin-left:-40px; width:550px;">Student Registration</p>
			<?php
				if(isset($errors) && count($errors) > 0)
				{
					foreach($errors as $error_msg)
					{
						echo '<div class="alert alert-danger">'.$error_msg.'</div>';
					}
                }

                if(isset($success))
                {

                    echo '<div class="alert alert-success">'.$success.'</div>';
                }
			?>

		<form action="" method="POST" class="login-email">

		<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
                <div class="input-group">
					<label for="email" class="label">First Name:</label>
					<input type="text" name="first_name" placeholder="Enter First Name" class="form-control" value="<?php echo ($valFirstName??'')?>">
				</div>
                <div class="input-group">
					<label for="email" class="label">Last Name:</label>
					<input type="text" name="last_name" placeholder="Enter Last Name" class="form-control" value="<?php echo ($valLastName??'')?>">
				</div>

                <div class="input-group">
					<label for="email" class="label">Email:</label>
					<input type="text" name="email" placeholder="Enter Email" class="form-control" value="<?php echo ($valEmail??'')?>">
				</div>
				<div class="input-group">
				<label for="email" class="label">Password:</label>
					<input type="password" name="password" placeholder="Enter Password" class="form-control" value="<?php echo ($valPassword??'')?>">
				</div>
                <!-- <div class="input-group">
				<label for="email" class="label">Confirm Password:</label>
					<input type="password" name="c_password" placeholder="Enter Confirmed Password" class="form-control" value="<?php echo ($valConfirmPassword??'')?>">
                    <p id="message" align="center"></p>
                </div> -->
               

				<div class="input-group">
				<button name="submit" class="btn" onclick="checkPassword()">Register</button><br>
				<p class="login-register-text">Have an account? <a href="child_login.php" color="blue">Login Here</a>.</p>
			</div>

			</form>
		</div>
	</div>
</div>

<!-- <script>
   function checkPassword(){
       let password = document.getElementById("password").value;
       let c_password = document.getElementById("c_password").value;
       console.log(password,c_password);
       let message = document.getElementById("message");

        if(password.length!=0){
            if(password==c_password){
                message.textContent = "Passwords match";
                
            }else{
                message.textContent = "Passwords do not match";
            }
        }
        else{
            alert("Password can't be empty!")
        }

   }  
</script> -->

</body>
</html>
