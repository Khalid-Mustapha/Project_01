<?php 
    session_start();

  $servername="localhost";
  $dbusername="root";
  $dbpassword="";
  $dbname="test";


  $method = $_SERVER['REQUEST_METHOD'];
  if($method == 'POST'){
        $saved_email='blisstechnology19@gmail.com';
        $saved_password='Password';
        $email=strip_tags(trim($_POST['email']));
        $password=$_POST['password'];
        $hashed=password_hash($password,PASSWORD_DEFAULT);
        $saved_hash=password_hash($saved_password,PASSWORD_DEFAULT);
        $errors = [];
        $checked_email = filter_var($email,FILTER_VALIDATE_EMAIL);
        if(empty($email)){
          $errors['email'] = 'The email field is required.';
        }else if(!$checked_email){
          $errors['email'] = 'The email entered is invalid';
        }elseif(strlen(trim($email)) > 255){
          $errors['email'] = 'The email cannot exceed 255 characters.';
        }
        
        if(strlen($password)<8)
        {
          $errors['password']='Password must consist of at least 8 characters';
        }
        elseif(empty($password))
        {
          $errors['password']='Please Enter password';
        }
        if($email!==$saved_email)
        {
          $errors['email']='Incorrect email';
        }
        if($password!== $saved_password)
        {
          $errors['password']='Incorrect password';
        }
        
        // $verify=password_verify($password,$hash);
        // addition to file
        if(count($errors)<1)
        {   
          $_SESSION['mail']=$email;
          $_SESSION['pass']=$hashed;  
           header('Location:admin/Admin.php'); 

}
}

?>
