<?php 

function calcularDanio($vida, $ataque, $pocion){
    $danios = array ("golpe"=>10,"patada"=>20,"espadazo"=>50);
    $danioporataque = $danios[$ataque];

    if ($vida < 50 && $pocion == "3") {
        $danioporataque *=2;
    }
    if ($ataque == "golpe" && $pocion == "1") {
        $danioporataque *=3;
    }
    if ($ataque == "patada" && $pocion == "2") {
        $danioporataque *=3;
    }

    return $danioporataque;
}

function calcularVida($vida, $ataque, $pocion){
    $vida -= calcularDanio($vida, $ataque, $pocion); 
    return $vida;
}

?>