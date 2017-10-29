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
echo "<h1 class=head2 style='text-align:center;'> Ranking </h1>";
$r1=mysql_query("select * from mst_subject");

while($row1=mysql_fetch_row($r1)) {
    $z=0;


    $sub_id=$row1[0];
    echo "<div style='padding:20px; margin:auto; width:40%; text-align:center;box-shadow:2px 3px 2px 3px #CCCCCC; border-radius:10px ;text-align:left'>";
    echo "<h1 class=head1> $row1[1]</h1><hr><hr><br><br>";
    $rs = mysql_query("select login, SUM(F.score) AS TOTAL from (SELECT t.login,t.test_id,t.score FROM `mst_result` t WHERE t.score=(SELECT MAX(a.score) FROM `mst_result` a WHERE a.test_id=t.test_id ) and t.sub_id=$sub_id)AS F group by login ORDER BY SUM(F.score) DESC", $cn) or die(mysql_error());



    if (mysql_num_rows($rs) < 1) {
        echo "<br><h3 style='text-align: center'> No attempts made by any user..!!</h1>";
        $z=1;
        cotinue;
    }

    $i = 1;
    if($z!=1)
    echo "<table align=center><tr class=style2><td width=300>User Name<hr> <td> Total Score<hr> <td> Rank<hr>";
    while ($row = mysql_fetch_row($rs)) {


        echo "<tr class=style8><td>$row[0] <td align=center> $row[1] <td align=center> $i";

        $i++;

    }
    echo "</table>";
    echo "<br><br>";
    echo "</div>";
    echo "<br><br>";
}
?>

</body>
</html>
