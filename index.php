<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./style/style.css">
    <title>Calculadora</title>
</head>
<body>
    <div class="card">
            <p class="title">Calculadora</p>        
        <div class="form">
            <form method="GET" action="processaCalculadora.php">
                <label for="fnumber"> Digite um número: </label><br>
                <input type="number" name="num1"><br>
                <label for="snumber"> Digite outro número:</label><br>
                <input type="number" name="num2"><br>

                <select name="operacao">
                    <option>Somar</option>
                    <option>Subtrair</option>
                    <option>Multiplicar</option>
                    <option>Dividir</option>
                </select>

                <br>
                
                <button type="submit" name="submit" value="submit">Calcular</button>
            </form>
        </div>
    </div>
</body>
</html>