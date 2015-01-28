<!DOCTYPE html>
<html>
<head>
    <title>Curso de PHP</title>

    <meta name="viewport" content="width=device-width" charset=utf-8>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
    <script src="js/jquery-1.11.2.js"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <![endif]-->

</head>

<body>

<h1>Site Simples com PHP</h1>

<?php include 'menu.php'?>

<?php
    if(isset($_GET["pagina"]))
    {
        $pagina = $_GET["pagina"];
    }else{
        $pagina = 'home.php';
    }
    require_once($pagina);
?>

<div><p>Todos os Direitos Reservados - <2015></p></div>
</body>

</html>