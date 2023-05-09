<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>
                matricule
            </th>
            <th>
                nom
            </th>
            <th>
                prenom
            </th>
            <th>
                adresse
            </th>
            <th>
                filiere
            </th>
            <th>
                naissane
            </th>
            <th>
                email
            </th>                                                                        
        </tr>
        <?php 
            $con=new mysqli('localhost','root','','scolarite');
            $query="SELECT * FROM etudiant";
            $result =mysqli_query($con, $query);
            while($row = mysqli_fetch_array($result)){?>
                <tr>
                    <td><?php echo($row['matricule']);?></td>
                    <td><?php echo($row['nom']);?></td>
                    <td><?php echo($row['prenom']);?></td>
                    <td><?php echo($row['adresse']);?></td>
                    <td><?php echo($row['filiere_id']);?></td>
                    <td><?php echo($row['date_naissance']);?></td>
                    <td><?php echo($row['email']);?></td>    
                </tr>                   
        <?php   }
        ?>
    </table>
</body>
</html>