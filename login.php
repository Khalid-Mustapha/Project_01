<?php
include 'validations.php';
?>

     <!DOCTYPE html>
     <html lang="en">
     <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Login</title>
        <link rel="stylesheet" href="style.css">
				<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
     </head>
     <body>


        <section>
         <form action="" style="width: 768px; margin: 100px auto" method="POST" enctype="multipart/form-data">
             <div>
              <input type="email" name="email" placeholder="Enter email here..." value= "<?php if(isset($errors)) {echo htmlspecialchars($_POST['email']);} ?>" required>
              <p>
                     <?php 
                         if(isset($errors['email']))
                         {
                            echo ($errors['email']) ; 
                         } 
                     ?>
                 </p>
             </div>

             <div>
              <input type="password" name="password" placeholder="Enter password to sign-in" value= "<?php if(isset($errors)) {echo htmlspecialchars($_POST['password']);} ?>" required>
              <p>
                     <?php 
                         if(isset($errors['password']))
                         {
                            echo ($errors['password']) ; 
                         } 
                     ?>
                 </p>
             </div>
             <button type="Login">
                 Login
             </button>
         </form>
     </body>
     </html>   