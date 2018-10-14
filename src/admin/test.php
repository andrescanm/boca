<?php
echo '

<!DOCTYPE html">
<!-- BOCA boca-1.5.13. Copyright (c) 2003-2017 Cassio Polpo de Campos -->
<!-- http://www.ime.usp.br/~cassio/boca                                  -->
<!-- This program is free software: you can redistribute it and/or modify  -->
<!-- it under the terms of the GNU General Public License as published by -->
<!-- the Free Software Foundation, either version 3 of the License, or -->
<!-- (at your option) any later version. A copy of the  -->
<!-- license can be found with this software or at http://www.gnu.org/licenses/ -->
<html><head><title>Admin\'s Page</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel=stylesheet href="../Css.php" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    </head><body id="body"><div class="container"><div class="row"><div class="col-10" id="titulo"><p><img src="../images/smallballoontransp.png" alt="">BOCA Username: Administrator (site=1)&nbsp;contest not running&nbsp;
</p></div></div><div class="row"><div class="col-3" id="menu"><ul class="nav flex-column">  <li class=\'nav-item\'><a class=\'nav-link\' href=run.php>Runs</a></li>
  <li class=\'nav-item\'><a class=\'nav-link\' href=score.php>Score</a></li>
  <li class=\'nav-item\'><a class=\'nav-link\' href=clar.php>Clarifications</a></li>
  <li class=\'nav-item\'><a class=\'nav-link\' href=user.php>Users</a></li>
  <li class=\'nav-item\'><a class=\'nav-link\' href=problem.php>Problems</a></li>
  <li class=\'nav-item\'><a class=\'nav-link\' href=language.php>Languages</a></li>
  <li class=\'nav-item\'><a class=\'nav-link\' href=answer.php>Answers</a></li>
  <li class=\'nav-item\'><a class=\'nav-link\' href=misc.php>Misc</a></li>
  <li class=\'nav-item\'><a class=\'nav-link\' href=task.php>Tasks</a></li>
  <li class=\'nav-item\'><a class=\'nav-link\' href=site.php>Site</a></li>
  <li class=\'nav-item\'><a class=\'nav-link\' href=contest.php>Contest</a></li>
  <li class=\'nav-item\'><a class=\'nav-link\' href=log.php>Logs</a></li>
  <li class=\'nav-item\'><a class=\'nav-link\' href=report.php>Reports</a></li>
  <li class=\'nav-item\'><a class=\'nav-link\' href=files.php>Backups</a></li>
  <li class=\'nav-item\'><a class=\'nav-link\' href=option.php>Options</a></li>
  <li class=\'nav-item\'><a class=\'nav-link\' href=../index.php>Logout</a></li>
</ul></div><!--div.row--><div class="col-9">
<form name="form1" method="post" action="run.php">
  <input type=hidden name="confirmation" value="noconfirm" />
<br>
<table width="100%" border=1>
 <tr>
  <td><b><a href="run.php?order=run">Run #</a></b></td>
  <td><b><a href="run.php?order=site">Site</a></b></td>
  <td><b><a href="run.php?order=user">User</a></b></td>
  <td><b>Time</b></td>
  <td><b><a href="run.php?order=problem">Problem</a></b></td>
  <td><b><a href="run.php?order=language">Language</a></b></td>
<!--  <td><b>Filename</b></td> -->
  <td><b><a href="run.php?order=status">Status</a></b></td>
  <td><b><a href="run.php?order=judge">Judge (Site)</a></b></td>
  <td><b>AJ</b></td>
  <td><b><a href="run.php?order=answer">Answer</a></b></td>
 </tr>
</table><br><center><b><font color="#ff0000">NO RUNS AVAILABLE</font></b></center></div></form></div></div>
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>

';