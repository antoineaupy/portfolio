
<?php
session_start();
include_once("php/code.php");
$update = new Works;


if($_SESSION["etat"]=="Se deconnecter") {


    if(isset($_GET['id'])) {
        $_SESSION["id"] = ($_GET['id']);
    }


if(isset($_POST["updatebutton"]))
{
    if($_POST["updatebutton"] === "OK")
{     
    $update->update($_POST["title"], $_POST["description"], $_SESSION["id"]);
    header('Location: index.php');
}
}



?>
<!DOCTYPE html>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>


</head>
<body>

<div class="container">
    <form action="update.php" method="post">
       
        <label for="title"><b>Titre</b></label></br>
        <input type="text" placeholder="Modifier titre" name="title" ></br></br>

        <label for="description"><b>Description</b></label></br>
        <textarea name="description" placeholder="Modifier description" rows="10" cols="80"></textarea></br></br>

        <button type="submit" name="updatebutton" value="OK">Modifier</button></br></br>

    </form>
    <button type="submit" name="returnbutton" value="OK" onclick="window.location.href = 'index.php';">Retour</button>
</div>

<?php }
    else {
        echo("Veuillez d'abord vous connecter");
        ?> </br></br><button type="submit" name="returnbutton" value="OK" onclick="window.location.href = 'index.php';">Retour</button> <?php
    }

 ?>
</body>
</html>