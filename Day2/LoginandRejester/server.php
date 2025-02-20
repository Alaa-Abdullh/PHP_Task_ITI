<?php


function rejester()  {
    if (isset($_POST['register']))
    {
        echo "<h1 style='text-align:center; margin:auto; color:darkblue;'> rejester</h1>";
    if (isset($_POST['firstname']))
    {
        echo "<p style='text-align:center;' >First Name: " . $_POST['firstname'] . "</p>";
    }
    if (isset($_POST['lastname']))
    {
        echo "<p style='text-align:center;'>last Name: " . $_POST['lastname'] . "</p>";
    }
    if (isset($_POST['remail']))
    {
        echo "<p style='text-align:center;'>remail: " . $_POST['remail'] . "</p>";
    }
    if (isset($_POST['rpassword']))
    {
        echo "<p style='text-align:center;'>rpassword: " . $_POST['rpassword'] . "</p>";
    }
    }   
}

function login()  {
    if (isset($_POST['Login']))
    {
        echo "<h1 style='text-align:center; margin:auto; color:darkblue;'>Login</h1>";
    
    if (isset($_POST['remail']))
    {
        echo "<p style='text-align:center;'>lemail: " . $_POST['remail'] . "</p>";
    }
    if (isset($_POST['rpassword']))
    {
        echo "<p style='text-align:center;'>lpassword: " . $_POST['rpassword'] . "</p>";
    }
    }
    
}

rejester();
login();
?>