<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>Quer saber a sua porcentagem de anjo ou safado?</p>
    <form action="safado_index.php" method="GET">
        <a>Sua data de nascimento: </a>
        <input type="date" name="dataNascimento">
        <input type="submit">

    </form>
    <br>
    <p>Sua porcentagem de safadeza é:
        <?php if (!empty($resultadosTela[1]))
           echo round($resultadosTela[1]). "%"; ?>
    </p>
    <p>Sua porcentagem de anjo é:
        <?php if (!empty($resultadosTela[0]))
            echo round($resultadosTela[0]). "%";?>
    </p>
</body>

</html>