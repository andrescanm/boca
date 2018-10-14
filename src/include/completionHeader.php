<?php
/*echo '
    <!--CSS de Bootstrap-->
	<!------------------------------------------------------------>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<!------------------------------------------------------------>
	<!--Estilos CSS propios-->
	<!------------------------------------------------------------>
	<link rel="stylesheet" type="text/css" href="../css/estilos.css">
	<!------------------------------------------------------------>
';*/
if (is_dir('css')) {
    echo '
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    ';
}else if (is_dir('../css')) {
    echo '
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    ';
}
