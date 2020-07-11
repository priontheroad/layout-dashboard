<!Doctype html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./plugins/font-awesome/css/font-awesome.min.css">

    <meta charset="utf-8">

    <title>Schedule</title>
</head>
<body>

<section class="menu">
    <div class="logo">
        <img src="image/logo.png" alt="logo" class="logo-painel">
    </div>
    <div class="list-menu">
        <ul class="menu-lista">
            <li>
                <a href="?pag=home"> <i class="fa fa-home" style="color: #fff" aria-hidden="true"></i>Home</a>
            </li>
            <li>
                <a href="?pag=listas"> <i class="fa fa-list-alt" aria-hidden="true"></i>Profissionais</a>
            </li>
            <li>
                <a href="?pag=locais"><i class="fa fa-ambulance" aria-hidden="true"></i>Locais</a>
            </li>
            <li>
                <a href="?pag=cadastro"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Cadastro</a>
            </li>
        </ul>

    </div>
</section><!--Fim menu-->
<section class="content">
    <div class="top-dashboard">
        <div class="user-dash dropdown">
            <div class="dropdown-toggle" data-toggle="dropdown" >
                <img class="user-dashboard rounded-circle" src="./image/profile.jpg" alt="">
                <p class="user-name">Usuário</p>
                <span class="caret"></span>
            </div>
            <ul class="dropdown-menu dp-menu">
                <li><a class="dropdown-item" href="?pag=perfil">Perfil</a></li>
                <li><a class="dropdown-item" href="#">Sair</a></li>
            </ul>
        </div>
    </div> <!--Top dashboard-->

    <div class="content-ds">

        <?php
            if(!isset($_GET['pag']))
                include 'pages/home.php';
            elseif(file_exists("pages/{$_GET['pag']}.php"))
                include "pages/{$_GET['pag']}.php";
            else
                include 'pages/404.php';
        ?>
    </div> <!--Content-ds-->
</section><!--Fim content-->

<!--jQuery-->
<script src="./plugins/jquery/jquery.min.js"></script>

<!--Bootstrap-->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>