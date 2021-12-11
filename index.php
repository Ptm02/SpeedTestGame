<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Login-Signup </title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
  </head>
  <body>
    <div class="hero">
      <div class="form-box">
        <div class="session-status">
          <?php
            if(isset($_SESSION['status'])){
              echo $_SESSION['status'];
              unset($_SESSION['status']);
            }
          ?>
        </div>
        <div class="button-box">
          <div id="btn"> </div>
          <button type="button" class="toggle-btn" onclick="login()"> Log In </button>
          <button type="button" class="toggle-btn" onclick="signup()"> Register </button>
        </div>
        <div class="social-icons">
          <img src="fb.png">
          <img src="tw.png">
          <img src="gm.png">
        </div>
        <form id="login" class="input-group" action="login.php" method="post">
          <input type="text" class="input-field" placeholder="User ID" name="UserID" required>
          <input type="password" class="input-field" placeholder="Password" name="Password" required>
          <input type="checkbox" class="check-box"> <span> Remember me </span>
          <button type="submit" class="submit-btn" name="login-btn"> Log in </button>
        </form>

        <form id="signup" class="input-group" action="signup.php" method="post">
          <input type="text" class="input-field" placeholder="User ID" name="UserID" required>
          <input id="password" type="password" id="pw" class="input-field" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
          title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Password" name="Password" required>
          <input type="password" id="cfpw" class="input-field" placeholder="Confirm your Password" name="Confirm_password" required>
          <input type="checkbox" class="check-box" required> <span> I agree to the terms & conditions </span>
          <button type="submit" class="submit-btn" name="signup-btn"> Sign up </button>
        </form>
      </div>
    </div>
    <script>
      var x = document.getElementById("login");
      var y = document.getElementById("signup");
      var z = document.getElementById("btn");

      function signup() {
        x.style.left = '-400px';
        y.style.left = "50px";
        z.style.left = "110px";
      }

      function login() {
        x.style.left = '50px';
        y.style.left = "450px";
        z.style.left = "0";
      }
    </script>
  </body>
</html>
