<?php
if(isset($_POST["save"]))
{
$nombre = $_POST["text"];
setcookie("nombre_texto", $nombre, time() + 30*24*60*60);
$nombre = $_POST["color"];
setcookie("nombre_color", $nombre, time() + 30*24*60*60); 
$nombre = $_POST["font"];
setcookie("nombre_fuente", $nombre, time() + 30*24*60*60); 
$nombre = $_POST["height"];
setcookie("nombre_tamaño", $nombre, time() + 30*24*60*60);
echo "El Texto es: " . $_COOKIE["nombre_texto"]; 
echo "<br>"; 
echo "El color selecionado es: " . $_COOKIE["nombre_color"]; 
echo "<br>"; 
echo "La Fuente selecionada es: " . $_COOKIE["nombre_fuente"]; 
echo "<br>"; 
echo "El Tamaño selecionado es: " . $_COOKIE["nombre_tamaño"];  
}
?>
<html>
 <head>
  <title>Ejercicio Alex</title>
 </head>
 <body>
    <p class="prueba"><?php echo $_POST['text'];?></p>
    <p class="posicion">Site developed by:<a href="mailto:AlexPerez@gmail.com">AlexPerez@gmail.com</a></p>
    <style>
        .prueba{
            color:<?php echo $_POST['color'];?>;
            font-style:<?php echo $_POST['font'];?>;
            font-size:<?php echo $_POST['height'];?>;
        }
        .posicion{
            text-align: center;
            margin-top: 20%;
        }
    </style>
 </body>
</html>
