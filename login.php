
<?php
  session_start();
  $conn = new mysqli('localhost: 3308', 'root', '', 'php');
  if($conn->connect_error) {
    die('Connection failed : '.$conn->connect_error);
  }
  else {
    if (isset($_POST['UserID']) && isset($_POST['Password'])) {
      function validate($data) {
         $data = trim($data);
         $data = stripslashes($data);
         $data = htmlspecialchars($data);
         return $data;
      }
      $UserID = validate($_POST['UserID']);
      $Password = validate($_POST['Password']);
      $sql = "SELECT * FROM Users WHERE UserID='$UserID' AND Password='$Password'";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if ($row['UserID'] === $UserID && $row['Password'] === $Password) {
          echo "Logged in!";
          $_SESSION['UserID'] = $row['UserID'];
          $_SESSION['Password'] = $row['Password'];
          header("Location: home.php");
          exit();
        }
        else {
          $_SESSION['status'] = "Incorrect UserID or Password";
          header("Location: index.php");
          exit();
        }
       }
      else {
        $_SESSION['status'] = "Incorrect UserID or Password";
        header("Location: index.php");
        exit();
      }
    }
    else {
      $_SESSION['status'] = "Some error occured";
      header("Location: index.php");
      exit();
    }
  }
?>
