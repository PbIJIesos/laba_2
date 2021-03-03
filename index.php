<?php
     session_start();
    require_once('connect.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">

    <title>Страница регистрации</title>
  </head>
  <body>
  <style>
      .outer1 {
          text-align: center;
          color: green;
      }
      .outer2 {
          text-align: center;
          color: red;
      }
  </style>
      <div class="container">
          <form class="form-signin" action="index.php" method="POST">
              <h2>Registration</h2>
              <input type="text" name="username" class="form-control" placeholder="Username" required>
              <input type="password" name="password" class="form-control" placeholder="Password" required>
              <button class="btn btn-lg btn-primaty btn-block" type="submit">Login</button>
              <a href="112.php" class="btn btn-lg btn-primaty btn-block">К сайту</a>
            </form>
        </div>
      <?php include 'tantplate.php';?>
    <?php

    if (isset($_POST['username']) and isset($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $user_query = $pdo->prepare("SELECT * FROM users WHERE username = ? and password = ?");
        $user_query->execute([$username, $password]);
        $user = $user_query->fetchAll();
        $user_exists = count($user);


        if ($user_exists) {
            $_SESSION['username'] = $username;
        }
           else {
              $fmsg = "Ошибка";
                echo $sad;
            }
    }

    if (isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
        echo $asd;
    }
    ?>
  </body>
</html>