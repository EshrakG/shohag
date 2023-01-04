<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border: 1px solid black;
            border-spacing: 0;
        }
        .bc{ background-color: black;}
        td{ padding:  20px;
        border-style: none;}
    </style>
</head>
<body>
    
<form  method="POST">
    <input type="number" name="cb">
    <input type="submit" name="submit" value="GeneralChessBoard">
</form>

<br>
<table>

<?php
if(isset($_POST['submit'])){
    $data = $_POST['cb'];
  
for ($row = 1; $row <= $data; $row++) { 
    echo "<tr>";
             for ($col = 1; $col <= $data; $col++) { 
               if(($row + $col) % 2 == 0){
                echo "<td class = 'bc'> </td>"; // It shows black
                  }else{
                echo "<td> </td>"; // It shows white
               }
             }
    echo "</tr>";
        }
  }
?>

</table>

</body>
</html>