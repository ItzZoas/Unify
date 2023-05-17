<?php

session_start();

include('conexao.php');

if(isset($_POST["submit"])){
  $nome = $_POST["username"];
  $email = $_POST["email"];
  $senha = $_POST["senha"];
  $confirm = $_POST["senha_confirm"];
  $duplicate = mysqli_query($conn, "SELECT * FROM signup WHERE username = '$nome' OR email = '$email'");
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('Username or Email Has Already Taken'); </script>";
  }
  else{
    if($senha == $senha_confirm){
      $query = "INSERT INTO signup VALUES('$name','$senha','','$email')";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Registration Successful'); </script>";
    }
    else{
      echo
      "<script> alert('Password Does Not Match'); </script>";
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Create account</title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="stylelogin.css" />
    <link
      rel="stylesheet"
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
    />
    <title>Create account</title>
  </head>

  <body>
    <div class="box">
      <div class="container">
        <div class="top">
          <span>Don´t have an account?</span>
          <header>Create account</header>
        </div>
        <form method="post" action="">
          <div class="input-field">
            <input
              type="text"
              class="input"
              placeholder="Username"
              name="username"
              id="username"
            />
            <i class="bx bx-user"></i>
          </div>

          <div class="input-field">
            <input
              type="text"
              class="input"
              placeholder="e-mail"
              name="email"
              id="email"
            />
            <i class="bx bx-envelope"></i>
          </div>

          <div class="input-field">
            <input
              type="Password"
              class="input"
              placeholder="Password"
              name="senha"
              id="senha"
            />
            <i class="bx bx-lock-alt"></i>
          </div>

          <div class="input-field">
            <input
              type="Password"
              class="input"
              placeholder="Repeat Password"
              name="senha_confirm"
              id="senha_confirm"
            />
            <i class="bx bx-lock-alt"></i>
          </div> 

          <div class="input-field">
            <input
              type="submit"
              class="submit"
              value="Create Account"
              id="submit"
              name="submit"
            />
          </div>
        </form>
          <div class="two">
            <label><a href="">Login</a></label>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
