<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pagina de bienvenida</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/border.css" />

</head>
<body>
    <?php
    session_start();
    echo "<h1>Bienvenido administrador</h1>";
    header("refresh:3;url=p_principal.php");
    ?>
</body>
</html>