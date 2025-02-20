<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
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
             height: 20px;
        }
        button:hover {
            background: blue;
        }
</style>
<body>


<form action="server.php" method="POST"> 
<input type="email" id="" name="lemail" placeholder="last name" required>
<input type="password" id="" name="lpassword" placeholder="pass" required>
<button type="submit" name="Login">Login</button>


</form>
    
</body>
</html>
