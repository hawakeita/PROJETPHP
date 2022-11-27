<?php
    $auteurs=[
        ['id'=>1,'nom'=>'FALL','prenom'=>'ISSA','profession'=>'Enseignant'],
        ['id'=>2,'nom'=>'SY','prenom'=>'Ousmane','profession'=>'Romancier'],
        ['id'=>3,'nom'=>'Sall','prenom'=>'MOHAMED','profession'=>'Prof'],
        ['id'=>4,'nom'=>'KEITA','prenom'=>'FANTA','profession'=>'Etudiante'],
        ['id'=>5,'nom'=>'SISSOKO','prenom'=>'SABA','profession'=>'Enseignante'],
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
                <th>PROFESSION</th>
            </tr>
            <?php foreach ($auteurs as $auteur):?>
                <tr>
                    <td><?= $auteur['id'] ?></td>
                    <td><?= $auteur['nom'] ?></td>  
                    <td><?= $auteur['prenom'] ?></td> 
                    <td><?= $auteur['profession'] ?></td>
                </tr>
            <?php endforeach ?>
    </table>

</div>
</body>
</html> 
