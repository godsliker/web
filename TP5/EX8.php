<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border=1>
        <tr>
            <th>nom</th>
            <th>prenom</th>
            <th>addresse</th>
            <th>ville</th>
            <th>code postal</th>
        </tr>
        <tr>
            <td><?php echo($_POST['nom']); ?></td>
            <td><?php echo($_POST['prenom']); ?></td>
            <td><?php echo($_POST['adresse']); ?></td>
            <td><?php echo($_POST['ville']); ?></td>
            <td><?php echo($_POST['postal']); ?></td>
        </tr>    
    </table>
</body>
</html>