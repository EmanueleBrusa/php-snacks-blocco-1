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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.min.js" integrity="sha512-3dZ9wIrMMij8rOH7X3kLfXAzwtcHpuYpEgQg1OA4QAob1e81H8ntUQmQm3pBudqIoySO5j0tHN4ENzA6+n2r4w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <div class="container">
        <div class="row">
           <ul>
                <?php foreach ($partite as $partita): { ?>
                    <li>
                        Squadra di casa: <?php echo $partita['squadra_casa']; ?> - Punteggio: <?php echo $partita['punteggio_casa']; ?>
                    </li>
                    <li>
                        Squadra ospite: <?php echo $partita['squadra_ospite']; ?> - Punteggio: <?php echo $partita['punteggio_ospite']; ?>
                    </li>
                <?php }?>
           </ul>
        </div>
    </div>
</body>
</html>