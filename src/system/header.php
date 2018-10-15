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
// Last modified 05/aug/2012 by cassio@ime.usp.br
ob_start();
header ("Expires: " . gmdate("D, d M Y H:i:s") . " GMT");
header ("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header ("Cache-Control: no-cache, must-revalidate");
header ("Pragma: no-cache");
header ("Content-Type: text/html; charset=utf-8");
session_start();
ob_end_flush();
require_once('../version.php');

require_once("../globals.php");
require_once("../db.php");

echo "<html><head><title>System's Page</title>\n";
echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">\n";
echo "<link rel=stylesheet href=\"../Css.php\" type=\"text/css\">\n";
include '../include/completionHeader.php';

//echo "<meta http-equiv=\"refresh\" content=\"60\" />";
if(!ValidSession()) {
	InvalidSession("system/index.php");
        ForceLoad("../index.php");
}
if($_SESSION["usertable"]["usertype"] != "system") {
	IntrusionNotify("system/index.php");
        ForceLoad("../index.php");
}

echo "</head><body>\n";
echo '<div class="container">';
echo'<div class="row">';
echo '<div class="col-12" id="titulo"><p>';
echo "<img src=\"../images/smallballoontransp.png\" alt=\"\">";
echo " BOCA ";
echo "Username: " . $_SESSION["usertable"]["userfullname"] ."\n";
list($clockstr,$clocktype)=siteclock();
echo "&nbsp;".$clockstr."&nbsp;\n";
echo '</p>';
echo '</div><!--div.col-12-->';
echo '</div><!--div.row-->';
echo '<div class="row">';
echo '<div class="col-3" id="menu">';
echo '<ul class="nav flex-column">';
echo "  <li class='nav-item'><a class='nav-link' href=contest.php>Contest</a></li>\n";
echo "  <li class='nav-item'><a class='nav-link' href=option.php>Options</a></li>\n";
echo "  <li class='nav-item'><a class='nav-link' href=../index.php>Logout</a></li>\n";
echo '</ul>';
echo '</div><!--div.col-3-->';
echo '<div class="col-9">';
?>
