<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="fn_index.php" method="GET">
        <a>Primeira letra do seu nome:</a>
        <input type="text" name="letraNome">
        <a>Mês de nascimento: </a>
        <input type="text" name="mesNascimento">
        <a>Dia de nascimento: </a>
        <input type="text" name="diaNascimento">
        <input type="submit">

    </form>

    <h1><?php 
    if(!empty($frase))
    echo $frase;
    ?>
    </h1>
</body>

</html>