<?php
    $partite = array(
    array(
        'squadra_casa' => 'Olimpia Milano',
        'squadra_ospite' => 'Cantù',
        'punteggio_casa' => 55,
        'punteggio_ospite' => 60
    ),
    array(
        'squadra_casa' => 'Virtus Bologna',
        'squadra_ospite' => 'Reyer Venezia',
        'punteggio_casa' => 70,
        'punteggio_ospite' => 68
    ),
    array(
        'squadra_casa' => 'Dinamo Sassari',
        'squadra_ospite' => 'Fortitudo Bologna',
        'punteggio_casa' => 75,
        'punteggio_ospite' => 80
    )
);
//var_dump($partite)
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col d-flex justify-content-center">
                <?php foreach ($partite as $partita) {
                    $squadraCasa = $partita['squadra_casa'];
                    $squadraOspite = $partita['squadra_ospite'];
                    $punteggioCasa = $partita['punteggio_casa'];
                    $punteggioOspite = $partita['punteggio_ospite'];

                    echo "$squadraCasa - $squadraOspite | $punteggioCasa-$punteggioOspite <br>";
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>