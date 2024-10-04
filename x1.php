<?php
if (isset($_GET['mensaje2'])) {
    $cadena_desencriptada = $_GET['mensaje2'];
    $vocales = array('a', 'e', 'i', 'o', 'u');    
    $letras_array = str_split($cadena_desencriptada);
    $resultado = [];
    $consonantes = '';
    foreach ($letras_array as $letra) {
        if (in_array(strtolower($letra), $vocales)) {
            // Invertir consonantes acumuladas si son más de una
            if (strlen($consonantes) > 1) {
                $resultado[] = strrev($consonantes);
            } else {
                $resultado[] = $consonantes;
            }
            // Añadir la letra al resultado
            $resultado[] = $letra;
            // Limpiar consonantes 
            $consonantes = '';
        } else {
            // Acumular consonantes
            $consonantes .= $letra;
        }
    }
    // Añadir consonantes restantes al final
    if (strlen($consonantes) > 1) {
        $resultado[] = strrev($consonantes);
    } else {
        $resultado[] = $consonantes;
    }
    // Imprimir el resultad
    $resultado = implode('', $resultado);
    header('Location:index.php?x1='.$resultado);

}