<html>
<head>
    <style>
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
        select{
            padding: 10px;
            width: 320px;
            color:#fff;
            background: rgba(87,87,85,0.87);
            margin-top: 10px;
            cursor: pointer;
            border-radius: 3px;
            border:0;
        }
        textarea
        {
            margin-top: 10px;
        }
    </style>
</head>
<title>New user signup </title>
<script language="javascript">
function check()
{

 if(document.form1.lid.value=="")
  {
    alert("Plese Enter Login Id");
	document.form1.lid.focus();
	return false;
  }

 if(document.form1.pass.value=="")
  {
    alert("Plese Enter Your Password");
	document.form1.pass.focus();
	return false;
  }
  if(document.form1.cpass.value=="")
  {
    alert("Plese Enter Confirm Password");
	document.form1.cpass.focus();
	return false;
  }
  if(document.form1.pass.value!=document.form1.cpass.value)
  {
    alert("Confirm Password does not matched");
	document.form1.cpass.focus();
	return false;
  }
  if(document.form1.name.value=="")
  {
    alert("Plese Enter Your Name");
	document.form1.name.focus();
	return false;
  }
  if(document.form1.email.value=="")
  {
    alert("Plese Enter your Email Address");
	document.form1.email.focus();
	return false;
  }
  e=document.form1.email.value;
		f1=e.indexOf('@');
		f2=e.indexOf('@',f1+1);
		e1=e.indexOf('.');
		e2=e.indexOf('.',e1+1);
		n=e.length;

		if(!(f1>0 && f2==-1 && e1>0 && e2==-1 && f1!=e1+1 && e1!=f1+1 && f1!=n-1 && e1!=n-1))
		{
			alert("Please Enter valid Email");
			document.form1.email.focus();
			return false;
		}
  return true;
  }

</script>
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php
include("header.php");
?>
<br><br><div style='margin:auto; width:60%; text-align:center;box-shadow:2px 3px 2px 3px #CCCCCC; border-radius:10px ;text-align:left; padding:3%'>
 <table width="100%" border="0" style="margin-left: 12.5%">
   <tr>
     <td width="132" rowspan="2" valign="top"><span class="style8"><img src="images/connected_multiple_big.jpg" width="131" height="155"></span></td>
     <td width="468" height="57"><h1 style="margin-left: 12.5%"><span class="style5">New User Signup</span></h1></td>
   </tr>
   <tr>
     <td><div name="form1" method="post" action="signupuser.php" onSubmit="return check();">
       <table width="301" border="0" align="left">
         <tr>
           <td><div align="left" class="style7">Login Id </div></td>
           <td><input type="text" name="lid"></td>
         </tr>
         <tr>
           <td class="style7">Password</td>
           <td><input type="password" name="pass"></td>
         </tr>
         <tr>
           <td class="style7">Confirm Password </td>
           <td><input name="cpass" type="password" id="cpass"></td>
         </tr>
         <tr>
           <td class="style7">Name</td>
           <td><input name="name" type="text" id="name"></td>
         </tr>
         <tr>
           <td valign="top" class="style7">E-mail</td>
           <td><input name="email" type="text" id="email"></td>
         </tr>
         <tr>
           <td>&nbsp;</td>
           <td><input type="submit" name="Submit" value="Signup">
           </td>
         </tr>
           <tr>
               <td>&nbsp;</td>
               <td>Already have a account <a href="index.php">SIGN IN</a>
               </td>
           </tr>
       </table>

             </form>
         </div></td>
   </tr>

 </table>
</div>
 <p>&nbsp; </p>
</body>
</html>
