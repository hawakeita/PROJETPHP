<?php
    $adherents=[
    ['id'=>1,'nom'=>'FALL','prenom'=>'ISSA','sexe'=>'M','date de naissance'=>'20/02/2001'],
    ['id'=>2,'nom'=>'SY','prenom'=>'Ousmane','sexe'=>'M','date de naissance'=>'10/03/2004'],
    ['id'=>3,'nom'=>'Sall','prenom'=>'MOHAMED','sexe'=>'M','date de naissance'=>'14/04/2006'],
    ['id'=>4,'nom'=>'KEITA','prenom'=>'FANTA','sexe'=>'F','date de naissance'=>'26/10/2002'],
    ['id'=>5,'nom'=>'SISSOKO','prenom'=>'SABA','sexe'=>'F','date de naissance'=>'30/12/2003'],
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
        <th>ID</th>
        <th>NOM</th>
        <th>PRENOM</th>
        <th>SEXE</th>
        <th>DATE DE NAISSANCE</th>
            </tr>
            <?php foreach ($adherents as $adherent):?>
                <tr>
                    <td><?= $adherent['id'] ?></td>
                    <td><?= $adherent['nom'] ?></td>  
                    <td><?= $adherent['prenom'] ?></td> 
                    <td><?= $adherent['sexe'] ?></td>
                    <td><?= $adherent['date de naissance'] ?></td>
                </tr>
            <?php endforeach ?>
    </table>

</div>
</body>
</html> 
