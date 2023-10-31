<?php
// Session start 
session_start();


if(isset($_POST['userName']) && isset($_POST['userEmail']) && isset($_POST['userPassword']))
{

   // Get user information
   $userName = filter_var($_POST['userName'],FILTER_SANITIZE_STRING);    
   $userEmail = filter_var($_POST['userEmail'],FILTER_VALIDATE_EMAIL);    
   $userPassword = password_hash($_POST['userPassword'],PASSWORD_BCRYPT);



   // Saving user data to a Json file
   $userData = ["userName" => $userName, "userEmail" => $userEmail, "userPassword" => $userPassword,"userRoll"=>""];
   $getPreviousUser = file_exists('users.json') ? file_get_contents('users.json') : '';
   $getPreviousUserInArray = json_decode($getPreviousUser);
   $getPreviousUserInArray[] = $userData;
   
   //$userDataJson = json_encode($getPreviousUserInArray);

   file_put_contents("users.json",json_encode($getPreviousUserInArray));
   


   // Set cookie for 
   setcookie('userEmail',$userEmail,time() + (86400 * 30));
   setcookie('userPassword',$userPassword,time() + (86400 * 30));




    header('Location: welcome.php?signup=true');
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Sign Up Form</title>
      <link rel="stylesheet" href="style.css">
   </head>
   <body>
      <div class="wrapper">
         <div class="title">
            Sign UP
         </div>
         <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST" id="carform">
         <div class="field">
               <input name="userName" type="text" required>
               <label>User Name</label>
            </div>
            <div class="field">
               <input name="userEmail" type="email" required>
               <label>Email Address</label>
            </div>
            <div class="field">
               <input name="userPassword" type="password" required>
               <label>Password</label>
            </div>
            <div class="content">
            </div>
            <div class="field">
               <input type="submit" value="Sign UP">
            </div>
            <div class="signup-link">
               Already a member? <a href="signIn.php">Sign In now</a>
            </div>
         </form>
      </div>
   </body>
</html>