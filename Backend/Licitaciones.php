<?php
include ("Conection.php");

$Id = $_POST["Numero_de_proceso"];
$Ubic = $_POST["Ubicación"];
$Nombre = $_POST["Nombre_de_proceso"];
$Time = $_POST["Tiempo_plazo"];
$Monto = $_POST["Monto_sugerido"];
$Org = $_POST["Organismo_estatal"];
$Construc = $_POST["Empresa_constructora"];

if(isset($_POST["licitaciones"]))
{
    $sqlgrabar = "INSERT INTO licitaciones (Numero_de_proceso, Ubicación, Nombre_de_proceso, Tiempo_plazo, Monto_sugerido, Organismo_estatal, Empresa_constructora) values ('$Id','$Ubic','$Nombre','$Time','$Monto','$Org','$Construc')";
    
    if(mysqli_query($conn,$sqlgrabar))
    {
        echo "<script> alert('Se ha guardado correctamente'); window.location= 'index.html' </script>";
    }
    else 
    {
        echo "Error: ".sqlgrabar."<br>".mysql_error($conn);
        
    }
    
}
?>