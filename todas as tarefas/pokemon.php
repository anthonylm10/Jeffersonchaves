<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">

    <style>
        .card {
            width: 200px;
            height: 450px;
            border: solid 1px #ddd;
            position: relative;
            float: left;
            padding: 10px;
        }

        .card img,
        .card h5 {
            text-align: center;
        }

        img {
            max-width: 85%;
        }
    

    </style>



    <title>Document</title>
</head>

<body>

    <?php foreach ($pokemons as $poke) : ?>
        <div class="card">

            <img src="<?= $poke['imagem'] ?>" alt="">
            <h5><?= $poke['nome'] ?></h5>
            <p><?= $poke['altura'] ?> cm.</p>
            <p><?= $poke['peso'] ?> grs.</p>
            <p>Habilidades</p>

            <ul>
                <?php foreach ($poke['habilidades'] as $hab) : ?>

                    <li><?= $hab['ability']['name'] ?></li>

                <?php endforeach; ?>

            </ul>
        </div> <!-- /.card -->
    <?php endforeach; ?>


</body>

</html>