<!DOCTYPE html>
<html>
    <head>
        <title>MyPass</title>
    </head>
    <body>

        <?php
            if(isset($_COOKIE["loggedInUser"])) {
                header("location:home.php");
                echo "Yeah, I remember you";
            }
            else {
                echo "Nope, I dont remember you.";
            }
        ?>

        <h1>Welcome to MyPass!</h1>
        <button type="button" onClick="document.location.href='./login.php'">Log In</button>
        <button type="button" onClick="document.location.href='./signup.php'">Register</button>
    </body>
</html>