<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!doctype html>
<html><!-- InstanceBegin template="/Templates/login_template.dwt" codeOutsideHTMLIsLocked="false" -->
	<link rel='icon' href='/images/iss.ico' type='image/x-icon'/ >
<head>
<meta charset="UTF-8">
<title>source</title>
<!-- InstanceParam name="main" type="boolean" value="true" -->
</head>

<body>
<table width="100%" border="0">
  <tbody>
    <tr>
      <td width="%" height=""><a href="logout.php"><img src="images/ERROR%20404VACATION%20NOT%20FOUND%20(200%20x%20200%20px).png" width="150" height="144" alt=""/></a></td>
      <td width="93%"><a href="https://github.com/this-is-for-a-school-thing/unit-2"><img src="images/source%20code.png" width="1391" height="144" alt=""/></a></td>
    </tr>
    <tr>
      <td height="742" valign="top"><p><a href="logout.php"><img src="images/Sign%20Out%20Of%20Your%20Account-1.png" width="150" height="40" alt=""/></a></p>
      <p><a href="reset-password.php"><img src="images/reset.png" width="150" height="40" alt=""/></a></p></td>
      <td><!-- InstanceBeginEditable name="EditRegion1" -->
        <table width="100%" border="0">
          <tbody>
            <tr>
              <td height="171" align="center">
				  
    <style>
        body {
            font: 14px sans-serif;
        }

        .wrapper {
            width: 360px;
            padding: 20px;
        }
    </style>
<h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    <p>
        
        <a href="reset-password.php" class="btn btn-danger ml-3"><a href="logout.php" class="btn btn-danger ml-3"></a></td>
            </tr>
            <tr>
              <td height="707" align="left" valign="top">
				
				  <p>------------------------(break line)</p>
				  <p>(put cool *things* here)&nbsp;</p>
				  <p>if you dumb make a account here. --> <a href="register.php">Sign up</a>.</p>
			    
		      <img src="videos/rick-ashley-dance.gif" width="200" height="135" alt=""/></tr>
          </tbody>
        </table>
        <p>&nbsp;</p>
        
      <!-- InstanceEndEditable --></td>
    </tr>
  </tbody>
</table>
</body>
<!-- InstanceEnd --></html>
