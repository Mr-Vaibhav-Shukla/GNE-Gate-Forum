<?php include("header.php"); ?>
<?php include("essentials/database.php"); ?>
<?php include("about.php"); ?>
<?php // include("essentials/function.php"); ?>
<!DOCTYPE html>
<html>
<head>
<style>
th, td {

  }
</style>
<title>LogIn</title>
<script language="javascript">
		function check()
{
 if(document.login_form.username.value=="")
  {
    alert("Plese Enter Login Id");
	document.login_form.username.focus();
	return false;
  }
 
 if(document.login_form.password.value=="")
  {
    alert("Plese Enter Your Password");
	document.login_form.password.focus();
	return false;
  } 
	}
</script>
<link href="forum.css" rel="stylesheet" type="text/css">
</head>
<body background="img/back.jpg">				
  <div class="signinbox" style="position: absolute; top:16%;right:5%;">
    <table align="center" border="0" WIDTH="90%" height="250">
	 <form method="post" name="login_form" action="check.php" onSubmit="return check();">
	<center><img class="logocircle" src="img/1.png"  title="logo" width="210px" height="200px" border="1" /></center>
	<tr>
	<th><input class="login_text_box" type="TEXT" title="enter your regitered LOGIN ID"  placeholder="LOGIN ID"  maxlength="10" size="25"  id="loginid2" name="username"/></th>
	</tr>
	<tr> 	
    <th><input class="login_text_box" type="password"  placeholder="ENTER PASSWORD" name="password" id="pass2"/></th>
	</tr>
	     <?php
		  if(isset($found))
		  {
		  	echo '<p class="inva" style="font"><center>Invalid Username or password</center></p>';
		  }
		  ?>
	<tr>		  
    <td>&emsp;&emsp;<input class="submit" type="submit" name="submit" id="submit" Value="Login"/>
			&emsp;&emsp;
    	<button class="submit2" onclick="window.location.href = 'signup.php';" >New User?</button>
    </td>
	</tr>
  </div>
  </form>
</body>
</html>
