<?php 
    include_once("./calculadora.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Calculadora de daño</title>
</head>
<body>
    <h2>Calculadora de daño</h2>
    <form action="./index.php" method="POST">
        <!-- Completar con los elementos del form-->
        <label for ="vida"> Vida actual: </label>
        <input type = "numero" name = "vida" > <br> <br>
        
        <label for ="ataque"> Seleccione su ataque: </label>
        <select name="ataque">
        <option value="golpe">Golpe</option>
        <option value="patada">Patada</option>
        <option value="espadazo">Espadazo</option>
    </select> <br> <br> 

    <label for ="pocion"> Seleccione su poción: </label> <br>
    <input type="radio" name = "pocion" value="1">Veneno <br> 
    <input type="radio" name = "pocion" value="2">Fuego <br>
    <input type="radio" name = "pocion" value="3">Adormecimiento <br> <br> 

    <input type = "submit" value = "Calcular"> <br>

    </form>
    <?php
        if(isset($_POST["ataque"])){ 
           $vida_actual = calcularVida($_POST["vida"], $_POST["ataque"], $_POST["pocion"]);
           echo "<h3>Usted tiene una vida de $vida_actual</h3>";
        }
        ?>
        </body>
        </html>
    </form>
    <?php
        if(isset($_POST["ataque"])){
            // Completar con el código para mostrar el resultado
        }
    ?>
</body>
</html>