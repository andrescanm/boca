<?php
//Cerramos los contenedores y columnas de bootstrap los cuales son comunes para las páginas en donde se incluye este script...
echo '</div><!--div.col-9-->';
echo '</div><!--div.row-->';
echo '</div><!--div.container-->';

//Incluímos los recursos JS de bootstrap y main.js de la aplicación...
if (is_dir('js')) {
    echo '
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
';
}else if (is_dir('../js')) {
echo '
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/main.js"></script>
';
}else if (is_dir('../../js')) {
    echo '
    <script src="../../js/jquery-3.3.1.min.js"></script>
    <script src="../../js/popper.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/main.js"></script>
';
}