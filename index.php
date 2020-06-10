<?php

    $producto1="arroz";
    $producto2="Aceite";
    $producto3="carne";
    $producto4="huevos";
    $producto5="panela";

    $valor1=5600;
    $valor2=5000;
    $valor3=28000;
    $valor4=10500;
    $valor5=3800;

    $valorTotal=$valor1+$valor2+$valor3+$valor4+$valor5;

    if ($valorTotal<=50000)
    {   
        echo("El valor total es: ".$valorTotal);
        echo("<br/>");
        echo("Puede hacer su compra, vuelva mas segido :P");
    }
    else
    {
        echo("No le alcanzo ");
    }




?>