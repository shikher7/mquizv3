<script src="Jquery/jquery.min.js"></script>
<script>
$(document).ready(function () {
    $(".dropbtn").hover(
    function () {
       $("#myDropdown").stop().fadeIn('slow');
    },
    function () {
       $("#myDropdown").stop().fadeOut('slow');
    });
	 $(".dropdown-content").hover(
    function () {
       $("#myDropdown").stop().fadeIn('slow');
    },
    function () {
       $("#myDropdown").stop().fadeOut('slow');
    });
});
</script>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
}
.container {
    overflow: hidden;
    background-color: #333;
    font-family: Arial;
}

.container a {
    float: left;
    font-size: 16px;
    color: white;
	vertical-align:auto;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    cursor: pointer;
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
}

.container a:hover, .dropdown:hover .dropbtn {
    background-color: #76b852;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #ddd;
}

.show {
    display: block;
}
<?php include("database.php"); ?>
</style>
<body vlink="white" alink="white" link="white">
<table border="0" width="100%" cellspacing="0" cellpadding="0" background="image/topbkg.jpg">
  <tr>
    <td width="90%" valign="top">



    <div>
  	<div class= "header" style=" padding: 10px 0px;
        width: 100%;
        background: #76b852;
        text-align: center;
        border-bottom: 1px solid #eee;">
  		<a href= "index.php" style="color: white; font-size: 50px; text-decoration: none;"> Mquiz <span style=" font-size: 50%;">
        (An online quizing platform)</span> </a>
  	</div>
<div >
</td>
  </tr>
</table>
  <Table width="100%">
  <tr>
  <td>
  <?php @$_SESSION['login'];	
  error_reporting(1);
  ?>
  </td>
  <?php
$r1=mysql_query("select * from mst_subject");
if(isset($_SESSION['login']))
	{
	 echo "<div class='container'>
	 <a style='color:white' href='index.php'>Home</a>
	 <div class='dropdown'>
	 <button class='dropbtn'>Quiz Topic</button>
	 <div class='dropdown-content' id='myDropdown'>";
while($row1=mysql_fetch_row($r1))
{
	echo "<a href=showtest.php?subid=$row1[0]>$row1[1]</a>";
}
	 echo "</div>
	 </div> 
	<a style='color:white' href='result.php'>Result</a>
	<a style='color:white' href='ranking.php'>Ranking</a>
	<div style='float:right'>
	<a style='color:white' href='signout.php'>Signout</a>
	</div>

</div>";
	 }
	 else
	 {
	 	echo "&nbsp;";
	 }
	?>
	</td>

  </tr>

</table>
<br>
</body>