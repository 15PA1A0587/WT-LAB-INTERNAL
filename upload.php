
<?php
require 'config.php';
 if(isset($_POST['house'])) {
        $name=$_POST['name'];
        $location=$_POST['location'];
        $description=$_POST['description'];
         if($name==''||$location==''||$description==''){
               $warning= "*****All fields must be filled*****";
        }
        else{  
        
         $query="select * from house where `name`='$name' AND `location`='$location' ";
         $sql=mysqli_query($con,$query);
         
         $qry = "INSERT INTO `house`( `name`, `location`,`description`) VALUES ('$name','$location','$description')";
          $sql=mysqli_query($con,$qry);

         if($sql){
		    echo '<script type="text/javascript">alert("Successfully Uploaded")</script>';
	    }
          else{
            echo '<script type="text/javascript">error</script>';
       }
      }
  }		
?>

<!DOCTYPE html>
<html>
<head>
<title>House Details</title>
<link rel="stylesheet" href="pro.css">
</head>
<body>
	<h2>House Details</h2>
	<a href="logout.php">LOGOUT</a>
        <a href="search.php">SEARCH</a><br/>
        <br/><?php if(isset($warning) ) echo $warning; ?>
	<form action="" method="POST">
	<br />	Name : <input type="text" name="name"><br/><br/>
		location : <input type="text" id="house" name="location"><br/><br/>
                Description : <input type="textarea" name="description"><br/><br/>
		<input type="submit" name="house" value="Upload">
	</form>
</body>

</html>
