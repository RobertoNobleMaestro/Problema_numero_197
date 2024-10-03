<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="GET" class="highlighted-text">
        <label for="mensaje">Escribe el mensaje que quieres desencriptar: </label>
        <input type="text" id="mensaje" name="mensaje">
        <link rel="stylesheet" href="./css/style.css">
        <button type="submit">Enviar</button>
    </form>
    <?php 
    if (isset($_GET['mensaje'])) {
        $vocales = array('a', 'e', 'i', 'o', 'u');
        $mensaje = $_GET['mensaje'];    
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
        echo implode('', $resultado);
    }
    ?>
</body>
