<?php
  session_start();
  //$conn = new mysqli('localhost:3308', 'root', '', 'php');

  if (isset($_POST['signup-btn']))
  {
    $UserID = $_POST['UserID'];
    $Password = $_POST['Password'];
    $Confirm_password = $_POST['Confirm_password'];
    if ($Password == $Confirm_password) {
      //Database Connection
      $conn = new mysqli('localhost:3308', 'root', '', 'php');
      if($conn->connect_error)
      {
        die( $_SESSION['status'] = 'Signing up failed due to: '.$conn->connect_error);
        header("Location: index.php");
      }
      else
      {
        $stmt = $conn->prepare("insert into users(UserID, Password, Confirm_password) values('$UserID','$Password','$Confirm_password')");
        $stmt->bind_param('sss', $Name, $Password, $Confirm_password);
        $stmt->execute();
       $_SESSION['status'] = "Signed up successfully!";
       header("Location: index.php");
      }
    }
    else {
      $_SESSION['status'] = "Password does not match";
      header("Location: index.php");
    }
  }
?>
