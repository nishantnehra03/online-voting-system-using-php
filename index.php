<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online voting system - Home</title>
    <link rel="stylesheet" href="css/stylesheet.css">
</head>

<body>

    <center>
        <div id="headerSection">
            <h1>Online Voting System</h1>
        </div>
        <hr>

        <div id="loginSection">
            <h2>Login</h2>
            <form action="api/login.php" method="POST">
                <input type="number" name="mob" placeholder="Enter mobile" required><br><br>
                <input type="password" name="pass" placeholder="Enter password" required><br><br>
                <select name="role" style="width: 15%; border: 2px solid black">
                        <option value="1">Voter</option>
                        <option value="2">Group</option>
                    </select><br><br>
                <button id="loginbtn" type="submit" name="loginbtn">Login</button><br><br> New user? <a href="routes/register.php">Register here</a>
            </form>
        </div>

    </center>
</body>

</html>