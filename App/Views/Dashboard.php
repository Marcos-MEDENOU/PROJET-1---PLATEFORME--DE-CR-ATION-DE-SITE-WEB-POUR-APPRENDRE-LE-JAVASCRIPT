<?php
session_start();
$id_session=session_id();
$_SESSION['userfirstname'] = $_GET['userfirstname'];
$_SESSION['userlastname'] = $_GET['userlastname'];
$_SESSION['passcrypt'] = $_GET['passcrypt'];
$_SESSION['username'] = $_GET['username'];

?>

<?php
    require "home.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/dashboard.css">
    <title>Dashboard</title>
</head>
<body>
    
</body>
</html>
<!-- 
<!DOCTYPE html>



<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Bonjour <?php echo $_GET["username"] ?? '' ?>, bienvenue sur LEARN JS</h1> <br>
    <p>Ton id de session via session_id est:
        <?php
            if ($id_session) {
                echo $id_session;
            }
        ?>
    </p>

    <p>Ton id de session via $_cookie est:
        <?php
            if (isset($_COOKIE['PHPSESSID'])) {
                echo $_COOKIE['PHPSESSID'];
            }
        ?>
    </p>
    <button> <a href="profil.php">Voir mon profil</a></button>

</body>

</html> -->