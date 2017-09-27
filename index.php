<?php
session_start();
?>

<html>
<head>
	<style>
  body {
        margin: 0px;
        padding: 0px;
        font-family: 'Comfortaa', cursive;
        text-align: center;
      }
      input[type= "text"], input[type="password"]{
        outline: none;
        padding:10px;
        display: block;
        width: 300px;
        border-radius: 3px;
        border: 1px solid #eee;
        margin: 20px auto;
      }
      input[type="submit"]{
        padding: 10px;
        width: 320px;
        color:#fff;
        background: #0098cb;
        margin: 20px auto;
        margin-top: 0px;
        cursor: pointer;
        border-radius: 3px;
        border:0;
      }
      input[type="submit"]:hover{
        background:#00b8eb;
      }

      }
  </style>
<title>Welcome to Online Exam</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php

include("database.php");
extract($_POST);

if(isset($submit))
{
	$rs=mysql_query("select * from mst_user where login='$loginid' and pass='$pass'");
	if(mysql_num_rows($rs)<1)
	{
		$found="N";
	}
	else
	{
		$_SESSION['login']=$loginid;
	}
}
include("header.php");
if (isset($_SESSION[login]))
{
echo "<h1 style='color:blue;' align=center>Welcome to M-Quiz Exam</h1>";
		echo '<table align="center">
  <tr>
    <td width="30%" height="65" align="right" valign="bottom"><img src="image/HLPBUTT2.JPG" width="50" height="50" align="middle"></td>
    <td width="50%%" valign="bottom" bordercolor="#0000FF"> <a href="sublist.php" class="style4">Topics for Quiz </a></td>
  </tr>
  <tr>
    <td height="58" align="right" valign="bottom"><img src="image/DEGREE.JPG" width="43" height="43" align="absmiddle"></td>
    <td valign="bottom"> <a href="result.php" class="style4">Result </a></td>
  </tr>
</table>';

		exit;


}


?>
<h1 style=" color: rgba(28,129,219,0.87); font-size: 36px; font-family: Palatino; padding-bottom: 10px;">Welcome to Online Quiz !</h1>

<div style='margin:auto; width:60%; text-align:center;box-shadow:2px 3px 2px 3px #CCCCCC; border-radius:10px ;text-align:left; padding:2%'>
    <table width="100%" border="0" style="margin-left: 12.5%">
        <tr>
            <td width="132" rowspan="2" valign="top"><span class="style8"><img src="images/paathshala.jpg" width="131" height="155"></span></td>
            <td width="468" height="57"><h1 style="margin-left: 12.5%"><span class="style5"><u>User Login</u></span></h1></td>
        </tr>
        <form name="form1" method="post" action="">
        <tr>
            <td><div name="form1" method="post" action="signupuser.php" onSubmit="return check();">
                    <table width="301" border="0" align="left">
                        <tr>
                            <td><span class="style2">Login ID </span></td>
                            <td><input name="loginid" type="text" id="loginid2"></td>
                        </tr>
                        <tr>
                            <td><span class="style2">Password</span></td>
                            <td><input name="pass" type="password" id="pass2"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><span class="errors">
            <?php
            if(isset($found))
            {
                echo "Invalid Username or Password";
            }
            ?>
          </span></td>
                        </tr>
                        <tr>
                            <td colspan=2 align=center class="errors">
                                <input name="submit" type="submit" id="submit" value="Login"></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td><bold>New User ? &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</bold><u> <a href="signup.php" style="font-weight: 900;">SIGNUP HERE</a>
                                </u></td>
                        </tr>
                        <tr>
                        <td>&nbsp;</td>
                        <td></td>
                        </tr>

                        <tr>
                            <td>&nbsp;</td>
                            <td><bold>Are you an admin ?</bold> <u><a href="admin/index.php" style="font-weight: 900;">LOGIN HERE</a></u>
                            </td>
                        </tr>
                    </table>

                    </form>
                </div></td>
        </tr>

    </table>
</div>


</body>
</html>
