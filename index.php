<?php
// include ("inc/dbconnect.php");  
?>
<html>
<head>
<title>Safe HAVEN - log in</title>
<link rel="stylesheet" href="inc/style.css" type="text/css">
<script language="">
<!--
function cursor(){document.login.name.focus();}
// -->
</script>
</head>
<?php
$show_menu="OFF";
include ("inc/header_inc.php"); 
$show_menu="ON";

?>
<body bgcolor="#FFFFFF" text="#000000" onLoad=cursor()>

<blockquote>

<?
if ($msg) {

        switch ($msg) {
                case 'invalid':
                        echo "<h2>Login Failed</h2>";
                        echo "<h1>Please check your user name and password</h1></td></tr>";
                break;
                case 'timeout':
                        echo "<h2>Session Timeout</h2>";
                        echo "<h1>Please re-enter your user name and password</h1></td></tr>";
                break;

        }

} else {
echo "<br>";
echo "<h1>Please login</h1></td></tr>";

}
?>
<tr><td valign=top>
<table>
  <form action="login.php" method="post" name=login>
    <tr>
      <td>Username</td>
      <td>
        <input type="Text" name="name" value="<?php echo $name ?>" size="35">
      </td>
    </tr>
    <tr>
      <td height="6">Password</td>
      <td height="6">
        <input type="password" name="password" size="15">
        <input type="hidden" name="incoming" value="admin">
        <input type="hidden" name="ucid" value="<?php echo $_GET['ucid'] ?>">
        <input type="hidden" name="usid" value="<?php echo $_GET['usid'] ?>">
      </td>
    </tr>
    <tr>
      <td>
        <input class="gray" type="Submit" name="submit" value="Enter">
      </td>
<?

if ($_GET['msg']=="invalid") {
 echo "<td><b>Case Sensitive</b></td>";

}
?>
    </tr>
<tr><td>&nbsp;</td></tr>
<tr><td colspan=2>Can't remember your password - <a href="request_password.php"> Click Here</a></td></tr>
</table>


  </form>
</blockquote>
<?
/* include ("inc/footer_inc.php"); */
?>
</table>
</body>
</html>
