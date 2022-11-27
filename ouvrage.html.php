<?php
    $ouvrages=[
    ['code'=>'01' ,'titre'=>'Fontaine' ,'date_edition'=>'06/12/2019','rayon'=>'Litterature'],
    ['code'=>'02' ,'titre'=>'Ame_noir' ,'date_edition'=>'12/03/2020','rayon'=>'Litterature'],
    ['code'=>'03' ,'titre'=>'Life_story' ,'date_edition'=>'23/11/2021','rayon'=>'Litterature' ],
    ['code'=>'04' ,'titre'=>'Un_negre_a_paris' ,'date_edition'=>'01/01/2022','rayon'=>'Litterature' ],
    ['code'=>'05' ,'titre'=>'Vol_de_nuit','date_edition'=>'04/04/2022','rayon'=>'Litterature'],
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
            <th>TITRE</th>
            <th>DATE D'EDITION</th>
            <th>RAYON</th>
        </tr>
        <?php foreach ($ouvrages as $value):?>
        <tr>
            <td><?php echo($value['code'])?></td>
            <td><?=$value['titre']?></td>
            <td><?=$value['date_edition']?></td>
            <td><?=$value['rayon']?></td>
        </tr>
        <?php endforeach?>
    </table>

</div>
</body>
</html> 