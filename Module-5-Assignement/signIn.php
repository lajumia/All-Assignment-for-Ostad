<?php 

if(isset($_POST['userEmail']) && isset($_POST['userPassword']))
{
   // Admin user and password
   $adminEmail = "admin@gmail.com";
   $adminPassword = "12345";


   // Retrive data from browser cookie
   $email = $_COOKIE['userEmail'];
   $pass = $_COOKIE['userPassword'];

  // Retrive data from user input and check hash
   $userEmail = $_POST['userEmail'];
   $userPassword = $_POST['userPassword'];
   $userPasswordHash = password_verify($userPassword,$pass);


   if($email == $userEmail && $userPasswordHash ==true){
      header("Location: userDetails.php");
   }elseif($adminEmail == $userEmail && $adminPassword == $userPassword){
      header("Location: roleManagement.php");
      

   }else{
      echo "<script>alert('Your user or password went wrong!');</script>";
   }
}
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Sign In Form</title>
      <link rel="stylesheet" href="style.css">
   </head>
   <body>
      <div class="wrapper">
         <div class="title">
            Sign In
         </div>
         <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
            <div class="field">
               <input name="userEmail" type="text" required>
               <label>Email Address</label>
            </div>
            <div class="field">
               <input name="userPassword" type="password" required>
               <label>Password</label>
            </div>
            <div class="content">
            </div>
            <div class="field">
               <input type="submit" value="Sign IN">
            </div>
            <div class="signup-link">
               New member? <a href="signUp.php">Sign Up now</a>
            </div>
            <br><br>
            <div class="userguide text-light bg-dark ">
              Admin Login guide : <br/>
               user id : admin@gmail.com <br>password : 12345<br/>
               <!-- user id : manager@gmail.com <br> password : 12345<br/>
               user id : user@gmail.com <br>password : 12345 -->
            </div>
         </form>
      </div>
   </body>
</html>