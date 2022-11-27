<?php
    $prets=[
    ['date'=>'20/09/21','date de retour reel'=>'30/09/21','date de retour prévu'=>'04/10/21','exemplaire ouvrage'=>'Une_si_longue_lettre','adhérent'=>[]],
    ['date'=>'23/12/2021','date de retour reel'=>'30/12/2021','date de retour prévu'=>'06/01/21','exemplaire ouvrage'=>'Ame_noir' ,'adhérent'=>[]],
    ['date'=>'03/06/2022','date de retour reel'=>'10/06/2022','date de retour prévu'=>'20/06/22','exemplaire ouvrage'=>'Un_negre_a_paris','adhérent'=>[]],
    ['date'=>'06/10/22','date de retour reel'=>'12/10/22','date de retour prévu'=>'20/10/22','exemplaire ouvrage'=>'Vol_de_nuit','adhérent'=>[]],
    ['date'=>'04/03/2022','date de retour reel'=>'10/03/2022','date de retour prévu'=>'20/03/22','exemplaire ouvrage'=>'Fontaine' ,'adhérent'=>[]],
    ];

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
            
            <th>DATE</th>
            <th>DATE DE RETOUR PREVU</th>
            <th>DATE DE RETOUR REEL</th>
            <th>EXEMPLAIRE OUVRAGE</th>
        </tr>
        <?php foreach ($prets as $value):?>
        <tr>
            <td><?php echo($value['date'])?></td>
            <td><?=$value['date de retour prévu']?></td>
            <td><?=$value['date de retour reel']?></td>
            <td><?=$value['exemplaire ouvrage']?></td>
        </tr>
        <?php endforeach?>
    </table>
   



</div>
</body>
</html> 