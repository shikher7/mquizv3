<?php
session_start();
?>
<html>
<head>
<title>Online Quiz - Quiz List</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
include("header.php");
include("database.php");
?>
<h2 class=head1> Select Topic</h2>
<?php
$rs=mysql_query("select * from mst_subject");
?>
<div>
<div style="float:left; width:40%;">
</div>
<div style="float:right; margin-right:40%">
<ul><?php
while($row=mysql_fetch_row($rs))
{
	echo "<td align=center><li><a href=showtest.php?subid=$row[0]><font size=4>$row[1]</font></a></li><hr>";
}
?></ul></div></div>
</body>
</html>
