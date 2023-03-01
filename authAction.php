<?php
    // print_r($_POST);
    $user = "AKSH";
    $pass = "1234";

    if($_POST["password"] == $pass) {
        echo "Pass ok";

        if(isset($_POST["remember"])) {
            echo "Creating cookie";
            setCookie("loggedInUser", $_POST["email"], time() + 60*60*24*30);
        }
        echo "Starting session";
        session_start();
        $_SESSION["loggedInUser"] = $_POST["email"];

        header("location:home.php");
    }

    else {
        echo "Pass not ok";
        header("location:login.php");
    }
?>