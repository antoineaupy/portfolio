
<?php
session_start();
include_once("php/code.php");

$user = new Users;
if(isset($_POST["submit"]))
{
    if($_POST["submit"] === "OK")
    {
        $_SESSION["account"] = [];
        $_SESSION["etat"]="Se connecter";
        echo("Vous êtes déconnecté");
    }
}
?>

<!DOCTYPE html>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    
    </br>
    <form action="logout.php" method="post">
        <div class="container">
        <button type="submit" name="submit" value="OK">Logout</button>
        </div>
    </form>
    </br>

    <button type="submit" name="returnbutton" value="OK" onclick="window.location.href = 'index.php';">Retour</button>

</body>
</html>