<?php
    $demandes=[
        ['id adherent'=>1,'code ouvrage'=>'123','date de demande'=>'20/02/2001','statut'=>'Accepté'],
        ['id adherent'=>2,'code ouvrage'=>'456','date de demande'=>'20/02/2001','statut'=>'Encours'],
        ['id adherent'=>3,'code ouvrage'=>'789','date de demande'=>'20/02/2001','statut'=>'Accepté'],
        ['id adherent'=>4,'code ouvrage'=>'101','date de demande'=>'20/02/2001','statut'=>'Refusé'],
        ['id adherent'=>5,'code ouvrage'=>'121','date de demande'=>'20/02/2001','statut'=>'Accepté'],
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
        <th>ID ADHERENT</th>
        <th>CODE OUVRAGE</th>
        <th>DATE DE DEMANDE</th>
        <th>STATUT</th>
            </tr>
            <?php foreach ($demandes as $demande):?>
                <tr>
                    <td><?= $demande['id adherent'] ?></td>
                    <td><?= $demande['code ouvrage'] ?></td>  
                    <td><?= $demande['date de demande'] ?></td> 
                    <td><?= $demande['statut'] ?></td>
                </tr>
            <?php endforeach ?>
    </table>

</div>
</body>
</html> 
