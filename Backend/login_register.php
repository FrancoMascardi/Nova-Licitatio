<?php
include ("Conection.php");
// $nombre = $_POST["Dni_EMP"];
// $pass = $_POST["Contraseña_EMP"];

$nombre_GOB = $_POST["Dni_GOB"];
$pass_GOB = $_POST["Contraseña_GOB"];


//echo $nombre." ".$pass;

//login
/*
if(isset($_POST["btningresar"]))
{
    $query = mysqli_query($conn, "SELECT * FROM usuarios_empresa WHERE Dni_EMP = '$nombre' AND Contraseña_EMP = '$pass'");
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
if(isset($_POST["btnregistrar"]))
{
    $sqlgrabar = "INSERT INTO usuarios_empresa (Dni_EMP,Contraseña_EMP) values ('$nombre','$pass')";
    //echo $sqlgrabar;
    if(mysqli_query($conn,$sqlgrabar))
    {
        echo "<script> alert('Te has registrado: $nombre'); window.location= 'index.html' </script>";
    }
    else 
    {
        echo "Error: ".sqlgrabar."<br>".mysql_error($conn); 
    }
}
*/
//login

    if(isset($_POST["btningresar_GOB"]))
{
    $query = mysqli_query($conn, "SELECT * FROM usuarios_gobierno WHERE Dni_GOB = '$nombre_GOB' AND Contraseña_GOB = '$pass_GOB'");
    $nr = mysqli_num_rows($query);

    if($nr==1)
    {
        echo "<script> alert ('Bienvenido $nombre_GOB'); window.location= 'principal.html' </script>";
    }
    else
    {
        echo "<script> alert ('Dni no existe'); window.location='index.html' </script>";
    }
}
//register

if(isset($_POST["btnregistrar_GOB"]))
{
    $sqlgrabar = "INSERT INTO usuarios_gobierno (Dni_GOB,Contraseña_GOB) values ('$nombre_GOB','$pass_GOB')";
    
    if(mysqli_query($conn,$sqlgrabar))
    {
        echo "<script> alert('Te has registrado: $nombre_GOB'); window.location= 'index.html' </script>";
    }
    else 
    {
        echo "Error: ".sqlgrabar."<br>".mysql_error($conn);
    }
    
}

?>