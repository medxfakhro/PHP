<?php include('connection.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post"">
        <label>Nom</label><br>
        <input type="text" name="nom"><br>
        <label>Prenom</label><br>
        <input type="text" name="prenom"><br>
        <label>Age</label><br>
        <input type="text" name="age"><br><br>
        <input type="submit" name="submit">
    </form><br>

    <form method="post">
        <label>ID de l'utilisateur à supprimer :</label><br>
        <input type="text" name="delete_id"><br><br>
        <input type="submit" name="delete" value="Supprimer">
    </form><br>

    <form method="post">
        <label>ID de l'utilisateur à mettre à jour :</label><br>
        <input type="text" name="update_id"><br>
        <label>Nouveau nom :</label><br>
        <input type="text" name="new_nom"><br>
        <label>Nouveau prénom :</label><br>
        <input type="text" name="new_prenom"><br>
        <label>Nouvel âge :</label><br>
        <input type="text" name="new_age"><br><br>
        <input type="submit" name="update" value="Mettre à jour">
    </form>

</body>
</html>
<!-- INSERT -->
<?php
    if(isset($_POST['submit'])){
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $age = $_POST['age'];

        $query = "INSERT INTO user (nom, prenom, age) VALUES ('$nom', '$prenom', '$age')";
        mysqli_query($conn, $query);
    }
?>
<!-- DELETE -->
<?php
    if(isset($_POST['delete'])){
        $delete_id = $_POST['delete_id'];
        
        $dlt = "DELETE FROM user WHERE id_user = '$delete_id'";
        mysqli_query($conn, $dlt);
    }
?>
<!-- Update -->
<?php
    if(isset($_POST['update'])){
        $update_id = $_POST['update_id'];
        $new_nom = $_POST['new_nom'];
        $new_prenom = $_POST['new_prenom'];
        $new_age = $_POST['new_age'];

        $upd = "UPDATE user SET nom = '$new_nom', prenom = '$new_prenom',age = '$new_age' WHERE id_user = '$update_id'";
        mysqli_query($conn, $upd);
    }