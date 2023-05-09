<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="add.php,update.php,delete.php,select.php">
        <table border="1">
            <tr>
                <td>
                    matricule
                </td>
                <td>
                    <input type="text" name="mat">
                </td>
            </tr>
            <tr>
                <td>
                    nom 
                </td>
                <td>
                    <input type="text" name="nom">
                </td>
            </tr>
            <tr>
                <td>
                    prenom
                </td>
                <td>
                    <input type="text" name="prenom">
                </td>
            </tr>
            <tr>
                <td>
                    Adress
                </td>
                <td>
                    <input type="text" name="adress">
                </td>
            </tr>
            <tr>
                <td>
                    filiere
                </td>
                <td>
                    <select name="fil">
                        <option>L1</option>
                        <option>L2</option>
                        <option>L3</option>
                        <option>ing</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    date naissance
                </td>
                <td>
                    <input type="date" name="date">
                </td>
            </tr>
            <tr>
                <td>
                    email
                </td>
                <td>
                    <input type="email" name="email">
                </td>
            </tr>        
        </table> 
        <input type="submit" value="create" formaction="add.php">
        <input type="submit" value="update" formaction="update.php">
        <input type="submit" value="delete" formaction="delete.php">
        <input type="submit" value="affiche" formaction="select.php">
    </form>
</body>
</html>