<?php
////////////////////////////////////////////////////////////////////////////////
//BOCA Online Contest Administrator
//    Copyright (C) 2003-2012 by BOCA Development Team (bocasystem@gmail.com)
//
//    This program is free software: you can redistribute it and/or modify
//    it under the terms of the GNU General Public License as published by
//    the Free Software Foundation, either version 3 of the License, or
//    (at your option) any later version.
//
//    This program is distributed in the hope that it will be useful,
//    but WITHOUT ANY WARRANTY; without even the implied warranty of
//    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//    GNU General Public License for more details.
//    You should have received a copy of the GNU General Public License
//    along with this program.  If not, see <http://www.gnu.org/licenses/>.
////////////////////////////////////////////////////////////////////////////////
// Last modified 19/oct/2017 by cassio@ime.usp.br

ob_start();
header ("Expires: " . gmdate("D, d M Y H:i:s") . " GMT");
header ("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header ("Cache-Control: no-cache, must-revalidate");
header ("Pragma: no-cache");
header ("Content-Type: text/html; charset=utf-8");
session_start();
if(!isset($_POST['noflush']))
	ob_end_flush();
$loc = $locr = "..";
$runphp = "run.php";
$runeditphp = "runedit.php";

require_once("$locr/globals.php");
require_once("$locr/db.php");

if(!isset($_POST['noflush'])) {
	require_once("$locr/version.php");
	echo "<html><head><title>Admin's Page</title>\n";
	echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">\n";
	echo "<link rel=stylesheet href=\"$loc/Css.php\" type=\"text/css\">\n";
	echo '<!--CSS de Bootstrap-->
	<!------------------------------------------------------------>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<!------------------------------------------------------------>
	<!--Estilos CSS propios-->
	<!------------------------------------------------------------>
	<link rel="stylesheet" type="text/css" href="../css/estilos.css">
	<!------------------------------------------------------------>';
}

if(!ValidSession()) {
	InvalidSession("admin/index.php");
        ForceLoad("$loc/index.php");
}
if($_SESSION["usertable"]["usertype"] != "admin") {
	IntrusionNotify("admin/index.php");
	ForceLoad("$loc/index.php");
}

if ((isset($_GET["Submit1"]) && $_GET["Submit1"] == "Transfer") ||
    (isset($_GET["Submit3"]) && $_GET["Submit3"] == "Transfer scores")) {
  echo "<meta http-equiv=\"refresh\" content=\"60\" />";
}

if(!isset($_POST['noflush'])) {
    echo "</head><body id=\"body\">";
    echo '<div class="container"><div class="row"><div class="col-12" id="titulo"><p>';
	echo "<img src=\"../images/smallballoontransp.png\" alt=\"\">";
	echo "BOCA ";
	echo "Username: " . $_SESSION["usertable"]["userfullname"] . " (site=".$_SESSION["usertable"]["usersitenumber"].")";
	list($clockstr,$clocktype)=siteclock();
	echo "&nbsp;".$clockstr."&nbsp;\n";
	echo '</p></div></div>';
	echo '<div class="row"><div class="col-3" id="menu"><ul class="nav flex-column">';
	echo "  <li class='nav-item'><a class='nav-link' href=run.php>Runs</a></li>\n";
	echo "  <li class='nav-item'><a class='nav-link' href=score.php>Score</a></li>\n";
	echo "  <li class='nav-item'><a class='nav-link' href=clar.php>Clarifications</a></li>\n";
	echo "  <li class='nav-item'><a class='nav-link' href=user.php>Users</a></li>\n";
	echo "  <li class='nav-item'><a class='nav-link' href=problem.php>Problems</a></li>\n";
	echo "  <li class='nav-item'><a class='nav-link' href=language.php>Languages</a></li>\n";
	echo "  <li class='nav-item'><a class='nav-link' href=answer.php>Answers</a></li>\n";
	echo "  <li class='nav-item'><a class='nav-link' href=misc.php>Misc</a></li>\n";
	echo "  <li class='nav-item'><a class='nav-link' href=task.php>Tasks</a></li>\n";
	echo "  <li class='nav-item'><a class='nav-link' href=site.php>Site</a></li>\n";
	echo "  <li class='nav-item'><a class='nav-link' href=contest.php>Contest</a></li>\n";
	echo "  <li class='nav-item'><a class='nav-link' href=log.php>Logs</a></li>\n";
	echo "  <li class='nav-item'><a class='nav-link' href=report.php>Reports</a></li>\n";
	echo "  <li class='nav-item'><a class='nav-link' href=files.php>Backups</a></li>\n";
	echo "  <li class='nav-item'><a class='nav-link' href=option.php>Options</a></li>\n";
	echo "  <li class='nav-item'><a class='nav-link' href=$loc/index.php>Logout</a></li>\n";
	echo '</ul></div></div>';
}
?>
