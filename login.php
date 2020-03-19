
<?php
session_start();
include_once("php/code.php");

$user = new Users;

if(isset($_SESSION["account"]["id"]))
{
    header('Location: logout.php');
}

if(isset($_POST["submit"]))
{
    if($_POST["submit"] === "OK")
{
    if($_POST['uname'] != NULL && $_POST['psw'] != NULL)
    {
        $user->connect($_POST["uname"], $_POST["psw"]);
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
    <title>Login</title></br></br>
</head>
<body>

<div class="container">
    <form action="login.php" method="post">
        <label for="uname"><b>Username</b></label></br>
        <input type="text" placeholder="Enter Username" name="uname" required></br></br>

        <label for="psw"><b>Password</b></label></br>
        <input type="password" placeholder="Enter Password" name="psw" required></br></br>

        <button type="submit" name="submit" value="OK">Login</button></br></br>
    </form>
    <button type="submit" name="returnbutton" value="OK" onclick="window.location.href = 'index.php';">Retour</button>
</div>

</body>
</html>