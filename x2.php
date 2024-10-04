<?php
if (isset($_GET['mensaje'])) {
    $cadena = $_GET['mensaje']; // Cadena encriptada
    $longitudcadena = strlen($cadena);
    $resultado = array_fill(0, $longitudcadena, ""); // Creamos un array vacío para colocar caracteres
    $inicio = 0;
    $fin = $longitudcadena - 1;
    $i = 0; // Índice para recorrer la cadena encriptada
    // Colocar los caracteres alternando entre el principio y el final
    while ($inicio <= $fin) {
        // Colocar en la posición del inicio
        if ($inicio <= $fin) {
            $resultado[$inicio] = $cadena[$i];
            $inicio++;
            $i++;   
        }
        // Colocar en la posición del final
        if ($inicio <= $fin) {
            $resultado[$fin] = $cadena[$i];
            $fin--;
            $i++;
        }
    }
    // Unir el array de caracteres en una cadena
    $cadena_desencriptada = implode("", $resultado);
    header('Location:index.php?x2='.$cadena_desencriptada);
}