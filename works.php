

<?php
session_start();
include_once("php/code.php");

$work = new Works;

if($_SESSION["etat"]=="Se deconnecter") {

if(isset($_POST["createbutton"]))
{
    if($_POST["createbutton"] === "OK")
{
    if($_POST['title'] != NULL && $_POST['description'] != NULL)
    {    

        $work->create($_POST["title"], $_POST["description"]);
    }
    else
    {
        echo("Remplis le formulaire");
    }
}
}
?>

<!DOCTYPE html>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Works</title>
</head>
<body>

<div class="container">
    <form action="works.php" method="post">
        <label for="title"><b>Titre</b></label></br>
        <input type="text" placeholder="Insérer titre" name="title" required></br></br>

        <label for="description"><b>Description</b></label></br>
        <textarea name="description" placeholder="Insérer description" rows="10" cols="80" required></textarea></br></br>


        <button type="submit" name="createbutton" value="OK">Créer</button></br></br>
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