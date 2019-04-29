<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
<title>
   Exercicio4
</title>
</head>
<body>
   <form action="" method="post" >
      Primeiro numero: <input name="num1" type="text"><br>
      Segundo numero: <input name="num2" type="text"><br>
      <input type="submit" name="operacao" value="+">     
      <input type="submit" name="operacao" value="-">     
      <input type="submit" name="operacao" value="*">     
      <input type="submit" name="operacao" value="/">     
   </form> 
<?php

   $a = $_POST['num1'];
   $b = $_POST['num2'];
   $op= $_POST['operacao'];

    if($op == '+'){
         $c = $a + $b;
      }else if($op == '-'){
         $c = $a - $b;
      }
      else if($op == '*'){
         $c = $a * $b;
      }
      else{
         $c = $a / $b;
      }

      echo "Resultado da operação: $c";

?>       
</body>