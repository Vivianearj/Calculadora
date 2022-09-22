<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/processaCalculadora.css">
    <title>processaCalculadora</title>
</head>
<body>
<div class="card">

    <div class="text">
    <?php
$num1= $_GET["num1"];
$num2= $_GET["num2"];
$operacao= $_GET["operacao"];

switch($operacao)
{

    case "Somar":  
        $resultado = $num1 + $num2;
        echo " Resultado da Soma = ";
        break;

    case "Subtrair":
         $resultado = $num1 - $num2;
         echo "Resultado da Subtração = "; 
         break;

    case "Multiplicar":
         $resultado = $num1 * $num2;
         echo "Resultado da Multiplicação = "; 
         break;

    case "Dividir":
        echo "Resultado da Divisão = ";
        $resultado = $num1 / $num2;
         break;
   
}
    
echo $resultado. "";

?>
    </div>
</body>
</html>