<?php
$_GET['name'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="" action="input.php">
      <input type="text" name="name"></input>
      <br>
      <input type="checkbox" name="sports[]" value="野球">野球
      <input type="checkbox" name="sports[]" value="サッカー">サッカー
      <input type="checkbox" name="sports[]" value="バスケ">バスケ
      
      <button type="submit" value="送信"></button>
    </form>
</body>
</html>