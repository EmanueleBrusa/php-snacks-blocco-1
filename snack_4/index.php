<?php
$numbers = [];

while (count($numbers) < 15) {
    $randomNumber = rand(1, 100);

    if (!in_array($randomNumber, $numbers)) {
        $numbers[] = $randomNumber;
    }
}

foreach ($numbers as $number) {
    echo $number . ' ';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>snack 4</title>
</head>
<body>
    
</body>
</html>