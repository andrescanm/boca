<?php
//meta-viewport
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
//Incluímos recursos CSS de bootstrap y estilos propios contenidos en estilos.css...
if (is_dir('css')) {
    echo '
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    ';
}else if (is_dir('../css')) {
    echo '
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilos.css">
    ';
}else if (is_dir('../../css')) {
    echo '
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/estilos.css">
    ';
}
