<?php
include('conexao.php');
if(isset($_POST['username']) || isset($_POST['senha'])){
  $name = $_POST["username"];
  $senha = $_POST["senha"];
  $result = mysqli_query($conn, "SELECT * FROM signup WHERE username = '$name' AND senha = '$senha'");
  $row = mysqli_fetch_assoc($result);
 if(mysqli_num_rows($result) > 0){
    if($senha == $row['senha']){
    echo
    header("Location: index.html");
  }else{
     echo
   "<script> alert('Wrong Password'); </script>";
      }
    }else{
      echo
     "<script> alert('User Not Registered'); </script>";
  }
  
  }

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login</title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="stylelogin.css" />
    <link
      rel="stylesheet"
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
    />
    <title>Ludiflex | Login</title>
  </head>

  <body>
    <div class="box">
      <form method="POST" action="">
        <div class="container">
          <div class="top">
            <span>Have an account?</span>
            <header>Login</header>
          </div>
          <div class="input-field">
            <input
              type="text"
              class="input"
              placeholder="Username"
              id="username"
              name="username"
            />
            <i class="bx bx-user"></i>
          </div>

          <div class="input-field">
            <input
              type="Password"
              class="input"
              placeholder="Password"
              id="senha"
              name="senha"
            />
            <i class="bx bx-lock-alt"></i>
          </div>

          <div class="input-field">
            <input type="submit" class="submit" value="Login" id="submit" />
          </div>
          </form>
          <div class="two-col">
            <div class="one">
              <input type="checkbox" name="" id="check" />
              <label for="check">Remember Me</label>
            </div>
            <div class="two">
              <label><a href="createaccount.php">Create account</a></label>
            </div>
          </div>
          </div>
        </div>
 </body>
</html>
