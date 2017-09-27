<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
}
input[type= "text"], input[type="password"]{
    outline: none;
    padding:10px;
    display: block;
    width: 300px;
    border-radius: 3px;
    border: 1px solid #993300;
    margin-top: 10px;
}
input[type="submit"]{
    padding: 10px;
    width: 320px;
    color:#fff;
    background: #0098cb;
    margin: 20px auto;
    margin-top: 10px;
    cursor: pointer;
    border-radius: 3px;
    border:0;
}
input[type="submit"]:hover{
    background:#00b8eb;
}


-->
</style>
    <div>
  	<div class= "header" style=" padding: 10px 0px;
        width: 100%;
        background: #76b852;
        text-align: center;
        border-bottom: 1px solid #eee;">
  		<a href= "index.php" style="color: white;
        font-size: 50px;
        text-decoration: none;"> Mquiz <span style=" font-size: 50%;">(An online quizing platform)</span> </a>
  	</div>
<div>
<table border="0" width="100%" cellspacing="0" cellpadding="0" bgcolor="#000000" background="../image/blackbar.jpg">
  <tr>
    <td width="100%"><img border="0" src="../image/blackbar.jpg" width="89" height="15"></td>
  </tr>
</table>
  <table width="100%">
  <tr>
    <td aling=right>
	<?php
	if(isset($_SESSION['alogin']))
	{
	 echo "<div align=\"right\"><strong><a href=\"login.php\">Admin Home</a> | <a href=\"signout.php\">Signout</a></strong></div>";
	 }
	 else
	 {
	 	echo "&nbsp;";
	 }
	?>
	</td>
  </tr>
</table>
