<!Doctype html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./plugins/font-awesome/css/font-awesome.min.css">


    <title>Layout dashboard</title>
</head>
<body>

<section class="menu">
    <div class="logo">
        <img src="image/logo.png" alt="logo" class="logo-painel">
    </div>
    <div class="list-menu">
        <ul class="menu-lista">
            <li>
                <a href=""> <i class="fa fa-home" style="color: #fff" aria-hidden="true"></i>Home</a>
            </li>
            <li>
                <a href=""> <i class="fa fa-home" style="color: #fff" aria-hidden="true"></i>Home</a>
            </li>
            <li>
                <a href=""> <i class="fa fa-home" style="color: #fff" aria-hidden="true"></i>Home</a>
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
                <li><a class="dropdown-item" href="#">Perfil</a></li>
                <li><a class="dropdown-item" href="#">Sair</a></li>
            </ul>
        </div>
    </div> <!--Top dashboard-->

    <div class="content-ds">
        <div class="bred">
            <a href="" class="bred">Home ></a> <a href="" class="bred">Dashboard</a>
        </div>
        <div class="title-pg">
            <h1 class="title-pg">Dashboard</h1>
        </div>
        <div class="content-din ">
            <?php for($i = 1; $i <= 6; $i++) { ?>
            <div class="rel-dash col-md-3 col-sm-12 col-xm-12">
                <i class="fa fa-bar-chart" aria-hidden="true"></i>
                <div class="text-rel">

                    <h3 class="result-ds">Total de usuarios</h3>
                    <h2 class="result">
                        123
                    </h2>
                </div>
            </div> <?php }?>

        </div>

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