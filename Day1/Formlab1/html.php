<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    <form action="server.php" method="post">
        <table border="1">
            <thead>
                <tr>
                    <th colspan="2">Registration Form</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><label for="fname">First Name</label></td>
                    <td><input type="text" id="fname" name="fname" required placeholder="Enter your name"></td>
                </tr>
                <tr>
                    <td><label for="lname">Last Name</label></td>
                    <td><input type="text" id="lname" name="lname" required placeholder="Enter your lname"></td>
                </tr>
             
                <tr>
                    <td><label for="password">Password</label></td>
                    <td><input type="password" id="password" name="password" placeholder="Enter your name" required></td>
                </tr>
                <tr>
                    <td>Track</td>
                    <td>
                        <select name="track" required>
                            <option value="OS">OS</option>
                            <option value="PD">PD</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>
                        <input type="radio" name="gender" value="male" required> Male
                        <input type="radio" name="gender" value="female"> Female
                    </td>
                </tr>
                <tr>
                    <td>Favorites</td>
                    <td>
                        <input type="checkbox" name="checkbox[]" value="Football"> Football
                        <input type="checkbox" name="checkbox[]" value="Basketball"> Basketball
                        <input type="checkbox" name="checkbox[]" value="Games"> Games
                        <input type="checkbox" name="checkbox[]" value="Reading"> Reading
                        <input type="checkbox" name="checkbox[]" value="Swimming"> Swimming
                        <input type="checkbox" name="checkbox[]" value="Travel"> Travel
                    </td>
                </tr>
                <tr>
                    <td><label for="description">Description</label></td>
                    <td>
                        <textarea id="description" name="description"></textarea>
                    </td>
                </tr>
                <tr>
                    <td><label for="file">Upload File</label></td>
                    <td>
                        <input type="file" id="file" name="file">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" value="Submit">
                        <input type="reset" value="Reset">
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
</body>
</html>
