<!DOCTYPE html>
<html lang="en" class="m-5">
    <head class="text-center">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>Log in - Cinemus</title>
    </head>
    
    <body class="text-center">
        <h1 class="mb-3">Log In - Cinemus</h1>

        <form method="post" action="login.php" class="p-3 my-4 mx-auto w-25 border rounded text-left">
            <label>Username: <input type="text" name="username" autofocus></label><br>
            <label>Password: &nbsp;<input type="password" name="password"></label>
            <div class="text-center"><input type="submit" value="Log In" class="mx-auto mt-3"></div>
        </form>
        
        <?php    //Code taken and adapted from ZyBooks example.
        // If POST then check submitted username and password
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Get values submitted from the form
            $username = $_POST["username"];
            $password = $_POST["password"];

            // Get user's hashed password from the Users table
            $mysqli = new mysqli("localhost", "cen4010s2020_g12", "faueng2020", "cen4010s2020_g12");
            $sql = "SELECT username, password 
                    FROM User 
                    WHERE username='" . $mysqli->real_escape_string($username) . "'";
            $result = $mysqli->query($sql);
            
            if (!$result)
                die("Error executing query: ($mysqli->errno) $mysqli->error");
            
            else if ($result->num_rows == 0)    //runs if no match for username
                echo "<h4 class=\"text-danger mb-4\">Incorrect username or password.</h4>";
            else {
                $row = $result->fetch_assoc();

                // See if submitted password matches the hash stored in the user_info table    
                if (password_verify($password, $row["password"])) {
                    session_start();
                    $_SESSION["username"] = $username;  //set flag that user is logged in
                    header("Location: index.php");
                    die;
                } 
                else    //runs if password incorrect
                    echo "<h4 class=\"text-danger mb-4\">Incorrect username or password.</h4>";
                
            }
        }
        ?>
                
        <p>Don't have an account?<br><a href="create_account.php">Click here to make one.</a></p>
    </body>
</html>