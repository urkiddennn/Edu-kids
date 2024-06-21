<?php


if(isset($_SESSION["email"])){
  header("location: ../../index.php");
  exit();

}
$email = "";
$error = "";

if($_SERVER['REQUEST_METHOD']=='POST'){
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(empty($email) || empty($password)){
        $error = "email and password are required";
    }
    else {
      include "db.php";
      $dbConnection = getDatabaseConnection();

      $statement = $dbConnection->prepare(
        "SELECT id, email, password FROM users WHERE email = ?"
      );

      $statement->bind_param('s', $email);
      $statement->execute();

      $statement->bind_result($id, $email, $password);

      if($statement->fetch()){
        if(password_verify($password, $stored_password)){

          $_SESSION["id"] = $id;
          $_SESSION["email"] = $email;

          header("locarion: ../../index.php");

          exit;

        }


      }

      $statement->close();

      $error = "email and password invalid!";

    }
}



?>



<div id="login">

    <form id="loginForm" method="post">
        <h1>Login</h1>
        <div class="input">
            <input type="text" placeholder="email" name="email" value="<?php $email ?>" />
        </div>
        <div class="input">
            <input type="password" placeholder="Password" name="password" value="<? $password ?>" />
        </div>
        <button type="submit">Login</button>
        <p>Don't have and account? <span id="show-signup">sign-up</span></p>
    </form>
</div>