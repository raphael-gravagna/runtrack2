<?php
var_dump($_GET);
$i= 0;
foreach($_GET as $key => $Value) {
    echo $key." ".$Value;
    $i = $i + 1;
}
    echo $i;



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="index.php" method="get" class="form-example">
        <div class="form-example">
          <label for="name">Enter your name: </label>
          <input type="text" name="name" id="name" required>
        </div>
        <div class="form-example">
          <label for="email">Enter your email: </label>
          <input type="email" name="email" id="email" required>
        </div>
        <div class="form-example">
          <input type="submit" value="Subscribe!">
        </div>
      </form>


    
</body>
</html>