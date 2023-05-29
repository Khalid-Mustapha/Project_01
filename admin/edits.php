<?php
		// Error reporting
			error_reporting(E_ALL);

		// Connect database
			$db = mysqli_connect("localhost", "root","", "cell tech");	
			
			// Check connection
			if (!$db) 
			{
				die("Connection failed: " . mysqli_connect_error());
			}
$method= $_SERVER['REQUEST_METHOD'];
if($method=='POST')
{

			
			
		// To Get and form data
			$name=trim(strip_tags($_POST['name']));
			$storage=trim(strip_tags($_POST['storage']));
			$ram=trim(strip_tags($_POST['ram']));
			$android_version=trim(strip_tags($_POST	['android_version']));
			$bcamera=trim((strip_tags($_POST['bcamera'])));
			$fcamera=trim(strip_tags($_POST['fcamera']));
			$price=trim(strip_tags($_POST['price']));
			$file1=($_FILES['upload1']);
			$file2=($_FILES['upload2']);
			
			
			// Error for file upload
			$errors = [];
			$file1 = $_FILES['upload1'];
			$error=$file1['error'];
			$allowed_size = 20 * 1024 * 1024;
			$permitted_types = 
			['image/jpeg', 'image/jpg', 'image/png', 'image/gif'];
	
			if($file1['size'] > $allowed_size)
			{
				$errors[] = 'The photo is larger than the permitted size of 20MB.';
			}
			
			if(!in_array($file1['type'], $permitted_types))
			{
				$errors[] = 'The photo type is invalid.';
			}
			// File 2 errors
			$file2 = $_FILES['upload2'];
			
			
			if($file2['size'] > $allowed_size)
			{
				$errors[] = 'The photo is larger than the permitted size of 20MB.';
			}
			
			if(!in_array($file2['type'], $permitted_types))
			{
				$errors[] = 'The photo type is invalid.';
			}
      
			// Other errors
			if (empty($name)) {
				$errors[] = "Name is required";
		}
		if (empty($storage)) {
				$errors[] = "Storage is required";
		}
		if (empty($ram)) {
				$errors[] = "RAM is required";
		}
		if (empty($android_version)) {
				$errors[] = "Android version is required";
		}
		if (empty($bcamera)) {
				$errors[] = "Back camera is required";
		}
		if (empty($fcamera)) {
				$errors[] = "Front camera is required";
		}
		if (empty($price)) {
				$errors[] = "Price is required";
		}



			// Images name
		if(empty($errors))
			{
				$image1=$file1['name'];
				$image2=$file2['name'];
				$target="../images/";

				// Target folders
				$target1=$target . basename($image1);
				$target2=$target . basename($image2);

				// Move image 1

				if(move_uploaded_file($_FILES['upload1']['tmp_name'], $target1)) 
					{   
						// If it is uploaded
						echo "The file ". basename( $image1). " has been uploaded, and your information has been added to the directory \n";   
					} 
				else 
					{   
				 		// Gives an error if its not ok  
				 		echo "Sorry, there was a problem uploading your first image.\n";   
					}
				
			
				//  Move image 2
				if(move_uploaded_file($_FILES['upload2']['tmp_name'], $target2)) 
					{   
						// Tells you if its all ok  
						echo "The file ". basename( $image2). " has been uploaded, and your information has been added to the directory"."\n";   
		  		} 
				else 
					{   
				 		// Gives an error if its not ok  
				 		echo "Sorry, there was a problem uploading your second image.\n";   
		 			} 
				// To upload the images
				$sql= "INSERT INTO image (image1,image2,phone,storage,ram,android_version,back_camera,front_camera,price)VALUES('$image1','$image2','$name','$storage','$ram','$android_version','$bcamera','$fcamera','$price')";

					// Error message
				if (mysqli_multi_query($db, $sql))
					{
				  	echo "Form data successfully stored in database!"."\n"; 
					} 
				else 
					{       
				 		echo "Error: " . $sql . "<br>" . mysqli_error($db);
					}    
			 
					mysqli_close($db); 
			}
		else
			{
				for($i=0;$i<count($errors);$i++)
				{
					echo $i +1 .":".$errors[$i]; 
				}
			}
	
	
}

		
	

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Cell Tech &mdash; Mobile Phone Repair in Ibadan</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="/../favicon.ico">

	<!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'> -->
	




	</head>
	<body>
	
	
	<div id="fh5co-page">
	<header id="fh5co-header" role="banner">
		<div class="container">
			<div class="header-inner">
				<h1><a href="index.php">Cell Tech<span>.</span></a></h1>
				<nav role="navigation">
					<ul>
						<li><a href="/../products.php"> Check Products</a></li>
						<li class="active"><a href="product.php">Edit Products</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>
	

	<aside id="fh5co-hero" clsas="js-fullheight">
		<div class="flexslider js-fullheight">
			<ul class="slides">
		   	<li style="background-image: url(/../images/slide_3.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
		   				<div class="slider-text-inner">
		   					<h2>Add products for sale</h2>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>

	

	<div id="fh5co-grid-products" class="animate-box">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>Second-hand devices</h2>
					<p> <b> Be sure to add image of the Second-hand phone and it's specs</b></p>
				</div>
			</div>
		</div>
		 

    <form action="" method="post" enctype="multipart/form-data">
			<input type="file" name="upload1" placeholder="Front of phone"  required>
			<input type="file" name="upload2" placeholder="Back of phone"  required>
			<input type="text" name="name"  placeholder="Name of Phone" required>
			<input type="text" name="storage" placeholder="Storage capacity"  required>
			<input type="text" name="ram" placeholder="RAM" required>
			<input type="number" name="android_version" placeholder="Android Version" required>
			<input type="text" name="bcamera" placeholder="Back Camera" required>
			<input type="text" name="fcamera" placeholder="Front Camera" required>
			<input type="text" name="price" placeholder="Price" required>
			<button type="submit" name="upload">Submit files Here...</button>
		</form>
	</body>
</html>

