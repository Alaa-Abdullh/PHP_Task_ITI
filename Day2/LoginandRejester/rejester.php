<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <style>
        body {
            text-align: center;
            margin-top: 100px;
        }
        input {
            display: block;
            width: 200px;
            margin: 10px auto;
            padding: 8px;
        }
        button {
            background: darkblue;
            color: white;
            cursor: pointer;
            width: 150px;
            height: 30px;
            border: none;
        }
        button:hover {
            background: blue;
        }
        </style>
</head>


<body>


<form action="server.php" method="POST"> 
<input type="text" id="" name="firstname" placeholder="first name" required>
<input type="text" id="" name="lastname" placeholder="last name" required>
<input type="email" id="" name="remail" placeholder="last name" required>
<input type="password" id="" name="rpassword" placeholder="pass" required>
<button type="submit" name="register">Register</button>


</form>
    
</body>
</html>
