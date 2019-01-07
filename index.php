<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Projeto Site Completo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />    
</head>
<body>
    <header>
       <?php
            include "topo.php";
       ?> 
    </header>
    <section class="slide">
        <?php
            include "slider.html"
        ?>
    </section>
    <section id="buscador">
        <?php
            include "buscador.php"
        ?>
    </section>
</body>
<script src="main.js"></script>
</html>