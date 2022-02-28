<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar array unshift</title>
</head>
<body>
    <?php
        $tims = ["Dandi", "Irsal", "Zahid", "Hafish"];
        array_unshift ($tims, "Bayu", "Zubair");
        foreach ($tims as $person){
            echo $person . '<br/>';
        }
    ?>
</body>
</html>