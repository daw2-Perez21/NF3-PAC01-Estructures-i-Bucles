<?php
    session_start();
    if(isset($_SESSION['views'])) 
        $_SESSION['views'] = $_SESSION['views']+1; 
    else
        $_SESSION['views']=1; 
    echo"Veces visitada la pagina = ".$_SESSION['views'];
    echo "<br>";
    echo "<br>";
    echo "Welcome to our site";
    echo "<br>";
    echo "Yesterday it was" . date(" F j, Y", strtotime( '-1 days' ) ); ;
    echo "<br>";
    echo "The previous month is". date(' F n, Y', strtotime('last month'));; 
    echo "<br>";
    echo "There are";
    $origin = date_create('2020-10-09');
    $target = date_create('2020-10-31');
    $interval = date_diff($origin, $target);
    echo $interval->format(' %a ');
    echo "days left in this month.";
    echo "<br>";
    echo "There are";
    $origin = date_create('2020-10-09');
    $target = date_create('2020-12-31');
    $interval = date_diff($origin, $target);
    echo $interval->format(' %M ');
    echo "months left in the current year."; 
    echo "<br>";
    echo "<br>";
    $meshoy = date('m');
    if ( $meshoy >= '06' && $meshoy <= '09' ) {
        echo "¡Buen verano!";
    }elseif( $meshoy >= '09' && $meshoy <= '12' ) {
        echo "¡Buen otoño!";
    }
    elseif( $meshoy >= '12' && $meshoy <= '03' ) {
        echo "¡Buen invierno!";
    }
    elseif( $meshoy >= '03' && $meshoy <= '06' ) {
        echo "¡Buena primavera!";
    }
    ?>
<html>
 <head>
  <title>Ejercicio Alex</title>
 </head>
 <body>
    <form method="post" action="ejercicio2.php">
    <p>Inserta las caracteristicas:</p>
    <p>Color: 
        <input type="colores" name="color"/>
    </p>
    <p>Texto: 
        <input type="texto" name="text"/>
    </p>
    <p>Fuente: 
        <input type="fuente" name="font"/>
    </p>
    <p>Tamaño: 
        <input type="tamaño" name="height"/>
    </p>
    <input type="submit" name="submit" value="Enviar datos"/>
    <input type="submit" name="save" value="Guardadar datos"/>
    </form>
    <p class="posicion">Site developed by:<a href="mailto:AlexPerez@gmail.com">AlexPerez@gmail.com</a></p>
    <style>
        .posicion{
            text-align: center;
            margin-top: 20%;
        }
    </style>
 </body>
</html>
