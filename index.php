<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Problema 197</title>
</head>
<body>
    <div class="highlighted-text">
        <h1>PROBLEMA 197</h1>
        <br>
        <form action="x2.php" method="GET">
            <label for="mensaje">Escribe el mensaje para desencriptar de X'' a X': </label><br><br>
            <input type="text" id="mensaje" name="mensaje"><br><br>
            <button type="submit">Desencriptar</button><br>
        </form>
        <br>
        <form action="x1.php" method="GET">
            <label for="mensaje2">Escribe el mensaje para desencriptar de X' a X: </label><br><br>
            <input type="text" id="mensaje2" name="mensaje2" value="<?php if(isset($_GET['x2'])) {echo $_GET['x2'];}?>"><br><br>
            <button type="submit">Desencriptar</button><br>
        </form>
        <br>
        <?php if(isset($_GET['x1'])) {echo $_GET['x1'];}?>
    </div>
</body>