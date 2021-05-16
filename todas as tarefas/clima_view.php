<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    

    <form action="clima_index.php" method="GET">
    <h3>Informe o nome da cidade que deseja: </h3>
    <input type="text" name="campo_cidade"> <br />
    <input type="submit">
    </form>
    <br>

   <a href="clima_index.php?cidade= Foz do iguaçu"> Foz do iguaçu</a> <br> <br>
   <a href="clima_index.php?cidade= Araquari"> Araquari</a>

    <h2><?php if(!empty($nome)) echo $nome ?></h2>
    <p>temperatura: <?php if(!empty($temperatura)) echo $temperatura; ?></p>
    <p>sensação: <?php if(!empty($sensacao)) echo $sensacao; ?></p>
    <p>umidade: <?php if(!empty($umidade)) echo $umidade ?></p>
    <p>velocidade do vento: <?php if(!empty($velocidade)) echo $velocidade ?></p>

</body>

</html>