<?php
        require 'config.php';
   if(isset($_POST['login'])){
	   
		$email=($_POST['email']);
		$password=($_POST['password']);
		$query="select * from user where email='$email' AND password ='$password'";
		$sql=mysqli_query($con,$query);
		if(mysqli_num_rows($sql)>0){
			header("location:upload.php");
		}
		else{
			echo '<script type="text/javascript">alert("invalid credentials")</script>';
		}
   }
   ?>
<!DOCTYPE html>
<html>
    <head>
            <title>Login</title>
            <link rel="stylesheet" href="pro.css">
 </head>   
    <body>
        <div class="header">
         	<h1>Property Selling</h1>
         	<nav>
               <a href="register.php" > REGISTER </a>
               <a href="" > LOGIN </a>
               </nav>
        </div>
                <br /><h2>Login</h2>
         
                <form class="form" method="post" action="">
                Email :<input type="text" name="email"><br/><br/>
                Password :<input type="password" name="password"><br/><br/>
                <input type="submit" name="login" value="LOGIN">
            </form>
            </div> 
       
    </body>  
</html>

