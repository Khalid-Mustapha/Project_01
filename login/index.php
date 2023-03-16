<?php
include 'validations.php';
?>

     <!DOCTYPE html>
     <html lang="en">
     <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>sign up</title>
        <link rel="stylesheet" href="style.css">

     </head>
     <body>
        <h1>Sign Up with us</h1>
      
        <section>
         <form action="" style="width: 768px; margin: 100px auto" method="POST" enctype="multipart/form-data" >
            
            
             <div >
                 <input type="name" name="firstname" placeholder="Enter Firstname here..." value= "<?php if(isset($errors)) {echo htmlspecialchars($_POST['firstname']);} ?>" required  autofocus/>
                 <p>
                     <?php 
                         if(isset($errors['firstname']))
                         {
                            echo ($errors['firstname']) ; 
                         } 
                     ?>
                 </p>
             </div>
             <div >
                 <input type="name" name="lastname"  placeholder="Enter Lastname" value= "<?php if(isset($errors)) {echo htmlspecialchars($_POST['lastname']);} ?>"  required/>
                 <p>
                     <?php 
                         if(isset($errors['lastname']))
                         {
                            echo ($errors['lastname']) ; 
                         } 
                     ?>
                 </p>
             </div>
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
             <div>
              <input type="password" name="password2"    placeholder="Please re-enter password" value= "<?php if(isset($errors)) {echo htmlspecialchars($_POST['password2']);} ?>" required >
              <p>
                     <?php 
                         if(isset($errors['password2']))
                         {
                            echo ($errors['password2']) ; 
                         } 
                     ?>
                 </p>
             </div>
            <div>
              <input type="tel" name="number"  placeholder="Add Phone number here" value= "<?php if(isset($errors)) {echo htmlspecialchars($_POST['number']);} ?>" required>
              <p>
                     <?php 
                         if(isset($errors['number']))
                         {
                            echo ($errors['number']) ; 
                         } 
                     ?>
                 </p>
            </div>
             <button type="submit">
                 Sign Up
             </button>
         </form>


   
    <div class='successful'>
        <?php if(isset($file)&&count($errors)<1) {echo "Your info has been sent successfully!!!!!";}  ?>
    </div>
     </body>
     </html>   