<?php
  session_start();
  if (isset($_SESSION['UserID']) && isset($_SESSION['Password'])) {
 ?>
<!DOCTYPE html>
<html>
  <head>
    <title>HOME</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
  </head>
  <body>
    <style>
    
      body .wlcm-msg{
          font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
      }

      .hero{
        height: 100%;
        width: 100%;
        background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('bg.jpg');
        background-position: center;
        background-size: cover;
        position: absolute;
      }

      .box{
        width: 300px;
        height: 350px;
        position: relative;
        margin: 10% auto;
        background: #ffffffd6;
        padding: 5px;
        border-radius: 20px;
        overflow: hidden;
      }

      .wlcm-msg{
        text-align: center;
        margin: 2em;
        font-size: 14px;
        font-family: monospace;
        letter-spacing: 2.8px;
      }

      .submit-btn{
        align-items: center;
        width: 65%;
        padding: 10px 30px;
        cursor: pointer;
        display: block;
        margin: 2em;
        margin-left: 17%;
        background: linear-gradient(to right, #ff105f, #ffad06);
        border: 0;
        outline: none;
        border-radius: 30px;
      }

      .submit-btn:hover{
        filter: contrast(200%);
        transition: 0.1s ease-in;
      }
    </style>

    <div class="hero">
      <div class="box">
        <div class="wlcm-msg">
          <p> Anneyong, <b> <?php echo $_SESSION['UserID']; ?></b>! <br> I hope you're having a good time! <br> Proceed with our game as per the level of your choice! </p>
          <form action="low.php" target="_blank" method="post">
              <button type="submit" class="submit-btn" name="low"> LOW </button>
          </form>
          <form action="medium.php" target="_blank" method="post">
              <button type="submit" class="submit-btn" name="medium"> MEDIUM </button>
          </form>
          <form action="high.php" target="_blank" method="post">
            <button type="submit" class="submit-btn" name="high"> HIGH </button>
          </form>
        </div>
      </div>
    </div>
</html>
<?php
}else{
     header("Location: index.php");
     exit();
}
 ?>
