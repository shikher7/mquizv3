<?php
session_start();
?>
<html>
<head>
    <title>Online Quiz  - Result </title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <link href="quiz.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php
include("header.php");
include("database.php");
extract($_SESSION);
$rs=mysql_query("select login, SUM(F.score) AS TOTAL from (SELECT t.login,t.test_id,t.score FROM `mst_result` t WHERE t.score=(SELECT MAX(a.score) FROM `mst_result` a WHERE a.test_id=t.test_id))AS F group by login ORDER BY SUM(F.score) DESC",$cn) or die(mysql_error());

echo "<h1 class=head1> Ranking </h1>";
if(mysql_num_rows($rs)<1)
{
    echo "<br><h1 class=head1> No one has given any quiz</h1>";
    exit;
}
echo "<div style='padding:20px; margin:auto; width:40%; text-align:center;box-shadow:2px 3px 2px 3px #CCCCCC; border-radius:10px ;text-align:left'>";
echo "<table align=center><tr class=style2><td width=300>User Name<hr> <td> Total Score<hr> <td> Rank<hr>";
$i=1;
while($row=mysql_fetch_row($rs))
{
    echo "<tr class=style8><td>$row[0] <td align=center> $row[1] <td align=center> $i";
    $i++;
}
echo "</table></div>";
?>
</body>
</html>
