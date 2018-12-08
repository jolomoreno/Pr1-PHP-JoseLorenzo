<?php
/**
 * Created by PhpStorm.
 * User: jolo
 * Date: 7/12/18
 * Time: 18:53
 */
?>

<!doctype html>
<html lang="es">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="JoseLorenzoMorenoMoreno">
    <link rel="icon" href="favicon.ico">

    <title>Pr1.PHP.JoseLorenzoMoreno</title>

    <!-- Latest compiled and minified CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Optional theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/styles.css" rel="stylesheet">
</head>
<body>
    <header class="container">
        <div class="row">
            <div class="navbar-header">
                <a class="masthead-brand" href="http://www.upm.es" target="_nueva"><img src='img/upmlogo.jpg' id='upmlogo'> Gestión de usuarios y resultados</a>
            </div>
            <nav>
                <ul class="nav masthead-nav">
                    <li class="<?php if ($page==='index') echo 'active'?>"><a href="index.php">Inicio</a></li>
                    <li class="<?php if ($page==='users') echo 'active'?>" id="users-li"><a href="users.php" id="users-link"><span class="glyphicon glyphicon-user"></span> Usuarios</a></li>
                    <li class="<?php if ($page==='results') echo 'active'?>" id="results-li"><a href="results.php" id="results-link"><span class="glyphicon glyphicon-list-alt"></span> Resultados</a></li>
                </ul>
            </nav>
        </div>
    </header>

