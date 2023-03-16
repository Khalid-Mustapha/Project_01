<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
$method=$_SERVER['REQUEST_METHOD'];
if($method=='POST')
{
	// Connect database
	$db = mysqli_connect("localhost", "root","", "cell tech");	
			
	// Check connection
	if (!$db) 
	{
		die("Connection failed: " . mysqli_connect_error());
	}

		$sql="SELECT id,image1,image2,phone,storage,ram,android_version,back_camera,front_camera,price FROM image";
		$result= $db ->query($sql);
	if($result->num_rows>0)
		{
			while($row = $result->fetch_assoc()) 
			{
    		echo "id: " . $row["id"] . $row["image1"]. "  " . $row["image2"].  $row["phone"]. $row["storage"].$row["ram"].$row["android_version"].$row["back_camera"].$row["front_camera"].$row["price"]."<br>";
 			}
		}
	else
		{
			echo "There are no phones available for sale at the moment";
		}

		$db ->close();
		
}
?>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
  <path fill="#00cba9" fill-opacity="1" d="M0,64L60,69.3C120,75,240,85,360,112C480,139,600,181,720,213.3C840,245,960,267,1080,234.7C1200,203,1320,117,1380,74.7L1440,32L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
</svg>
</body>
</html>