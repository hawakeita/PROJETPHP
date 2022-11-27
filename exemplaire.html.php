<?php

    $exemplaires=[
    ['code'=>'10','code_ouvrage'=>'1234','date enregistrement'=>'20/09/21'],
    ['code'=>'134','code_ouvrage'=>'5678','date enregistrement'=>'23/12/2021'],
    ['code'=>'45','code_ouvrage'=>'9101','date enregistrement'=>'03/06/2022'],
    ['code'=>'234','code_ouvrage'=>'1213','date enregistrement'=>'04/03/2022'],
    ]


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="auteur">
    <div class="conteneur">

    <table>

        <tr>
            <th>CODE</th>
            <th>DATE D'ENREGISTREMENT</th>
        </tr>
        <?php foreach ($exemplaires as $value):?>
        <tr>
            <td><?php echo($value['code'])?></td>
            <td><?=$value['date enregistrement']?></td>
        </tr>
        <?php endforeach?>
    </table>

</div>
</body>
</html> 