<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome page </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<?php

$signup_status = $_GET['signup'];

if($signup_status == true){

echo "<h1>Registration Successfully Completed</h1>";
echo "Please click below to login";
// echo "<div class='wrapper'><div class='field'><input type='submit' value='Log In'></div></div>";
}
?>

  <div class="wrapper">
         <form action="signIn.php">
            <div class="field">
               <input type="submit" value="Log In">
            </div>
         </form>
      </div>

</body>
</html>



