<?php
		// Error reporting
		error_reporting(E_ALL);
		$method=$_SERVER['REQUEST_METHOD'];
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
							
							// echo "id " ."||".$row["id"]."||". $row["image1"]."||". $row["image2"]."||". $row["phone"]."||". $row["storage"]."||".$row["ram"]."||".$row["android_version"]."||".$row["back_camera"]."||".$row["front_camera"]."||".$row["price"]."<br>";
							// var_dump($retrieve);
						}
				}
			else
				{
					echo "There are no phones available for sale at the moment";
				} 
				// Close DB
			$db ->close();
	if($method=='POST')
		{

		}
		
?>
