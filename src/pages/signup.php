<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$email = "";
$password = "";
$error = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        $error = true;
        echo "Email and password are required.";
    } else {
        include_once "db.php";
        $dbConnection = getDatabaseConnection();


        $statement = $dbConnection->prepare("SELECT id FROM users WHERE email = ?");
        $statement->bind_param("s", $email);
        $statement->execute();
        $statement->store_result(); 
        if ($statement->num_rows > 0) {
            $error = true;
            echo "Email already exists.";
        }
        $statement->close();

        if (!$error) {
       
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

     
            $statement = $dbConnection->prepare(
                "INSERT INTO users (email, password) VALUES (?, ?)"
            );

            if (!$statement) {
                die("Prepare failed: " . $dbConnection->error);
            }

            $statement->bind_param('ss', $email, $hashedPassword);
            $statement->execute();

            if ($statement->affected_rows > 0) {
                $insert_id = $statement->insert_id;
                $_SESSION["id"] = $insert_id;
                $_SESSION["email"] = $email;

                $statement->close();
                header("Location: ../../index.php");
                exit;
            } else {
                echo "Failed to insert user: " . $statement->error;
            }
            $statement->close();
        }
    }
}
?>

<div class="signup" style="display: none" id="signup">
    <form id="signupForm" method="POST">
        <h1>Sign Up</h1>
        <div class="input">
            <input type="email" placeholder="Email" id="email" name="email" required
                value="<?= htmlspecialchars($email) ?>" />
        </div>
        <div class="input">
            <input type="password" placeholder="Password" id="password" name="password" required />
        </div>
        <button id="submit">Sign Up</button>
        <p>Already have an account? <span id="show-login">login</span></p>
    </form>
</div>