<?php
session_start();
 

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!doctype html>
<html><!-- InstanceBegin template="/Templates/login_template.dwt" codeOutsideHTMLIsLocked="false" -->
	<link rel='icon' href='/images/iss.ico' type='image/x-icon'/ >
<head>
<script type="text/javascript">
function myHref(){
    document.getElementById('change').innerHTML="web quest"
    document.getElementById('change').href="http://unthiswasfree.chickenkiller.com/web.php"
}
</script>

<meta charset="UTF-8">
<title>source</title>
<!-- InstanceParam name="main" type="boolean" value="true" -->
</head>

<body>
<table width="100%" border="0">
  <tbody>
    <tr>
      <td width="%" height=""><a href="source.php"><img src="images/ERROR%20404VACATION%20NOT%20FOUND%20(200%20x%20200%20px).png" width="150" height="144" alt=""/></a></td>
      <td width="93%"><a href="https://github.com/this-is-for-a-school-thing/unit-2"><img src="images/source%20code.png" width="100%" height="144" alt=""/></a></td>
    </tr>
    <tr>
      <td height="742" valign="top"><p><d></d>
        <a href="logout.php"><img src="images/Sign%20Out%20Of%20Your%20Account-1.png" width="150" height="40" alt=""/></a></p>
      <p><a href="reset-password.php"><img src="images/reset.png" width="150" height="40" alt=""/></a></p>
      <p><a href="hosting.php"><img src="images/hosting%20(1).png" width="150" height="40" alt=""/></a></p></td>
      <td align="left" valign="top"><!-- InstanceBeginEditable name="EditRegion1" --><p>you might bewondering what is this hosted on well its on a rasberry pi a litle computer about the size of a credit card that runs a linux based os called raspbian with apache running the web server, with md_mysql as a database</p>
      <p>&nbsp;</p>
      <p><img src="images/download.png" alt=""/></p><!-- InstanceEndEditable --></td>
    </tr>
  </tbody>
</table>
</body>
<!-- InstanceEnd --></html>
