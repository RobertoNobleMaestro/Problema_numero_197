<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Problema 197</title>
</head>
<body>
    <h1>PROBLEMA 197</h1>
    <form action="" method="GET" class="highlighted-text">
        <label for="mensaje">Escribe el mensaje que quieres desencriptar: </label><br><br>
        <input type="text" id="mensaje" name="mensaje"><br><br>
        <button type="submit">Desencriptar</button><br>
        <?php 
        //_____________________________________________________________________________________________________//
        //_____________________________________________________________________________________________________//
        //___________________________________PRIMERA PARTE DEL CODIGO__________________________________________//
        //_____________________________________________________________________________________________________//
        //_____________________________________________________________________________________________________//
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
                    // Colocar en la posición del fin
                    if ($inicio <= $fin) {
                        $resultado[$fin] = $cadena[$i];
                        $fin--;
                        $i++;
                    }
                }
                // Unir el array de caracteres en una cadena
                $cadena_desencriptada = implode("", $resultado);
        //_____________________________________________________________________________________________________//
        //_____________________________________________________________________________________________________//
        //___________________________________SEGUNDA PARTE DEL CODIGO__________________________________________//
        //_____________________________________________________________________________________________________//
        //_____________________________________________________________________________________________________//

                $vocales = array('a', 'e', 'i', 'o', 'u');
                $mensaje = $cadena_desencriptada;    
                $letras_array = str_split($mensaje);
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
                // Imprimir el resultado

                echo "<br>" . implode('', $resultado);
            }
        ?>
    </form>
</body>