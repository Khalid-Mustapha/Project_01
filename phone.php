<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Hmmmmm </title>
</head>
<body>
  <?php
  include'connect.php';  
  while($row = mysqli_fetch_assoc($result)) 
											{	
												// echo "id " ."||".$row["id"]."||". $row["image1"]."||". $row["image2"]."||". $row["phone"]."||". $row["storage"]."||".$row["ram"]."||".$row["android_version"]."||".$row["back_camera"]."||".$row["front_camera"]."||".$row["price"]."<br>";
												$image='images/'.$row["image1"];	
											?>
									<h3> <?php echo $row['phone'] ; ?> </h3>
											<?php
											}
											?>
									
								
								<?php
									// Close DB
								$db ->close();
								

   ?>
</body>
</html>