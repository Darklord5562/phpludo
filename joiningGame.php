<?php
$betAmount = $_GET['bet-amount'];
print_r($_GET);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
  <title>JOINING GAME</title>
  <link rel="stylesheet" href="css/all.css" type="text/css" media="all" />
  <link rel="stylesheet" href="css/fontawesome.css" type="text/css" media="all" />
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <nav class="fixed-top-bar">
    <span class="logo">Lorem</span>
    <i class="fa fa-info-circle"></i>
  </nav>
  <div class="app">
   <form action="" class="form">
    <div class="bet-info">
    Bet Amount: <?php echo "$betAmount"; ?>
    </div>
   </form>
  </div>
  <script src="js/jquery.js"></script>
  <script src="js/app.js"></script>
  <script>
  </script>
</body>

</html>