<?php

include ("Conection.php");

$nombre = $_POST["Dni_EMP"];
$pass = $_POST["Contraseña_EMP"];

//login
if(isset($_POST["btningresar"]))
{
    $query = mysqli_query($conn, "SELECT * FROM usuarios_(empresa) WHERE Dni_EMP = '$nombre' AND Contraseña_EMP = '$pass'");
    $nr = mysqli_num_rows($query);

    if($nr==1)
    {
        echo "<script> alert ('Bienvenido $nombre'); window.location= 'principal.html' </script>";
    }
    else
    {
        echo "<script> alert ('Dni no existe'); window.location='index.html' </script>";
    }
}
//register
if(isset($_POST ["btnregistrar"]))
{
    $sqlgrabar = "INSERT INTO usuarios_(empresa) (Dni_EMP,Contraseña_EMP) values ('$nombre','$pass')";
    
    if(mysqli_query($conn,$sqlgrabar))
    {
        echo "<script> alert('Te has registrado: $nombre'); window.location= 'index.html' </script>";
    }
    else 
    {
        echo "Error: ".sqlgrabar."<br>".mysql_error($conn);
    }
}

?>