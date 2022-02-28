<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Array Push</title>
</head>
<body>
    <?php
        $tims = ["Dandi", "Zahid", "Irsal", "Hafish"];
        array_push($tims, "Zubair");
        foreach ($tims as $person){
            echo $person. '<br/>';
        }
    ?>
</body>
</html>