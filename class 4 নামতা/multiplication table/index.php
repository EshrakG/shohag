<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eshrak's নামতা project </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
 
    <div class="container">
          <div class="card">
              <div class="inner-box" id="card">
                <div class="card-front">
                    <h2>Put the multiplication number</h2>
                    <form name="frm" method="post">
                        <input type="number" name="n" class="input-box"
                        placeholder="Type here" required>
                        <input type="submit" name="sub" class="input-box">
                        <br>
                        <br>
                          



    <?php
    @$x = $_POST['n']; // In this way we merge any value to php varible
    @$sub = $_POST['sub'];
    
    if($sub)
      for($i = 1; $i <= 10; $i++)
      {
      $sum = $x * $i;
      echo "$x * $i = $sum <br>";
      }            
 ?>
</body>
</html>
 