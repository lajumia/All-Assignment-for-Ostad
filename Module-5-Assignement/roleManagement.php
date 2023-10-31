<?php
session_start();

//echo $_SESSION["user"];
if(isset($_SESSION['userEmail']))
{
    if($_SESSION['userEmail'] != $_SESSION['adminEmail'])
    {
        header('Location: userDetails.php');

    }
}

echo "<h1>This is Role Management Page</h1>";

?>