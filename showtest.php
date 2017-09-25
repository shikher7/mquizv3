<?php
session_start();
?>
<html>
<head>
<title>Online Quiz - Test List</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
include("header.php");
include("database.php");
extract($_GET);
$rs1=mysql_query("select * from mst_subject where sub_id=$subid");
$row1=mysql_fetch_array($rs1);
echo "<h1 align=center><font color=blue> $row1[1]</font></h1>";
$rs=mysql_query("select * from mst_test where sub_id=$subid");
if(mysql_num_rows($rs)<1)
{
	echo "<br><br><h4 class=head1> No Quiz for this Subject </h2>";
	exit;
}
echo "<h2 class=head1> Select Sub-Topic</h2>";
?>
<div>
<div style="float:left; width:40%;">
</div>
<div style="float:right; margin-right:50%">
<ul>
<?php
while($row=mysql_fetch_row($rs))
{
	echo "<td align=center><li><a href=quiz.php?testid=$row[0]&subid=$subid><font size=4>$row[2]</font></a></li><hr>";
}
?></ul></div></div>
</body>
</html>
