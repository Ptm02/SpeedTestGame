<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="level.css">
  <link rel="icon" type="image/x-icon" href="favicon.ico" />
  <link rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T">
  <script src="high.js" defer></script>
  <title> Difficutly level - Medium </title>
</head>
<body>
  <span class="timer">
  <span id="counter"></span>
  </span>
  <div class="container">
    <div class="quote-display" id="quoteDisplay"></div>
    <textarea id="quoteInput" class="quote-input" autofocus></textarea>
  </div>
  <form action="logout.php" method="post">
    <button type="log-out" class="submit-btn" name="logout"> Log Out </button>
  </form>
</body>
</html>
