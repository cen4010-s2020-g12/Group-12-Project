<!DOCTYPE html>
<html lang="en" class="m-5">
    <head class="text-center">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>Create Account - Cinemus</title>
    </head>
    
    <body class="text-center">
        <h1 class="mb-3">Create Account - Cinemus</h1>
        
        <form method="post" action="create_account.php" class="p-3 my-4 mx-auto w-25 border rounded text-left">
            <label>E-mail: <input type="email" name="email" autofocus required></label><br>
            <label>Username: <input type="text" name="username" required></label><br>
            <label>Password: &nbsp;<input type="password" name="password" required></label><br>
            <label>Confirm Password: <input type="password" name="repassword" required></label><br>
            <div class="text-center"><input type="submit" value="Create Account" class="mx-auto mt-3"></div>
        </form>
        
        <?php   //Code taken and adapted from ZyBooks example.
        // If POST then create account
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Get values submitted from the form
            $email = $_POST["email"];
            $username = $_POST["username"];
            $password = $_POST["password"];
            $repassword = $_POST["repassword"];
            
            if ($password != $repassword)   //check that password == confirm password
                echo "<h4 class=\"text-danger mb-4\">Password doesn't match.</h4>";
            else if (good_pass($username, $password)){
                // Hash the password
                $passwordHash = password_hash($password, PASSWORD_BCRYPT);

                // Insert username and password hash into user_info table
                $mysqli = new mysqli("localhost", "cen4010s2020_g12", "faueng2020", "cen4010s2020_g12");
                $sql = "INSERT INTO User (email, username, password) 
                        VALUES ('" . $email . "', '" . $mysqli->real_escape_string($username) . "', '" . $passwordHash . "')";

                if ($mysqli->query($sql)) {     //if creation successful, take user straight to main page
                    session_start();
                    $_SESSION["username"] = $username;  //and set flag that user is logged in
                    header("Location: index.php");
                    die;
                }
                else if ($mysqli->errno == 1062)
                    echo "<h4 class=\"text-danger mb-4\">The username <strong>$username</strong> already exists.",
                         "Please choose another.</h4>";

                else
                    die("Error ($mysqli->errno) $mysqli->error");        
            }
        }
        
        function good_pass(&$username, &$password) {    //validates username and password
            $username = trim($username);
            $username = htmlspecialchars($username);    //trim and escape special characters on both
            $password = trim($password);
            $password = htmlspecialchars($password);
            $result = TRUE;     //flag for what value to return
            
            echo "<h6 class=\"text-danger mb-4\">";     //this provides a list of feedback for the user
            
            if (strlen($username) < 2) {
                echo "- Username must be at least 2 characters long<br>";
                $result = FALSE;    //if any checks are failed, whole function fails
            }
            if (strlen($password) < 8) {
                echo "- Password must be at least 8 characters long<br>";
                $result = FALSE;
            }
            if (!preg_match("/[A-Z]/", $password)) {
                echo "- Password must contain an uppercase letter<br>";
                $result = FALSE;
            }
            if (!preg_match("/[a-z]/", $password)) {
                echo "- Password must contain a lowercase letter<br>";
                $result = FALSE;
            }
            
            echo "</h6>";
            return $result;
        }
        ?>
        
        <p>Already have an account?<br><a href="login.php">Click here to sign in.</a></p>
    </body>
</html>