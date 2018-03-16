<?php
     require 'config.php';
     if(isset($_POST['submit'])) {
        $search=$_POST['search'];
        if($search==''){
               $warning= "*****Please enter location*****";
        }
        else{
                $query="select * from house where `location`='$location'";
                $sql=mysqli_query($con,$query)or die("Property not found");
		/*$qry=>0){
			echo '<script type="text/javascript">alert("Property found")</script>';
		}
		else{
			echo '<script type="text/javascript">alert("Location not found")</script>';
		}*/
       }
   }
?>



<!DOCTYPE html>
<html>
    <head>
            <title>Search</title>
            <link rel="stylesheet" href="pro.css">
     </head>   
    <body>
           <h1>Property Selling</h1>
           <nav>
               <a href="upload.php">UPLOAD</a>
               <a href="logout.php" > LOGOUT </a><br />  
               </nav>
                <br /><h2>Search</h2>            
                <?php if(isset($warning) ) echo $warning; ?>
                <form method="post" action="">
		        Search : <input type="text" name="search" placeholder="location"><br /><br/>
		        <input type="submit" name="submit" value="SEARCH">
                 </form>
    </body>
</html>
