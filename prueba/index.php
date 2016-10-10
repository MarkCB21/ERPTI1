<?php

include("include/classes/session.php");
?>

<html>
<title>Sistema de login</title>
<body>
<div align="center"><br>
  <br><br><br><br><br><br><br>
  <table border="5" cellspacing="0" cellpadding="4" >
    <tr>
      <td>
      
      
      <?php

 
 if (($session->logged_in) && ($session->isMember())){

		echo "<h1>Logged In</h1>";
   		echo  "Welcome <b>$session->username</b>, you are logged in. <br><br>"
		    ."<div style='background-color:white;'>"
       		."[<a href=\"userinfo.php?user=$session->username\">My Account</a>]   "
       		."[<a href=\"useredit.php\">Edit Account</a>]   ";
	   	echo "[<a href=\"process.php\">Logout</a>]";

} elseif (($session->logged_in) && ($session->isAgent())) {

  		echo "<h1>Logged In</h1>";
   		echo "Welcome <b>$session->username</b>, you are logged in. <br><br>"
		    ."<div style='background-color:white;'>"
       		."[<a href=\"userinfo.php?user=$session->username\">My Account</a>]   "
	   		."[<a href=\"member_register.php?user=$session->username\">Add Member</a>]   "
       		."[<a href=\"useredit.php\">Edit Account</a>]   ";
	    echo "[<a href=\"agent/agent.php\">Agent Center</a>] ";
		echo "[<a href=\"process.php\">Logout</a>]";

} elseif (($session->logged_in) && ($session->isMaster())) {

  		echo "<h1>Logged In</h1>";
   		echo "Welcome <b>$session->username</b>, you are logged in. <br><br>"
       		."<div style='background-color:white;'>"
			."[<a href=\"userinfo.php?user=$session->username\">My Account</a>]   "
	   		."[<a href=\"agent_register.php?user=$session->username\">Add Agent</a>]   "
       		."[<a href=\"useredit.php\">Edit Account</a>]   ";
	    echo "[<a href=\"master/master.php\">Master Center</a>] ";
		echo "[<a href=\"process.php\">Logout</a>]";

} elseif (($session->logged_in) && ($session->isAdmin())) {

  		echo "<h1>Logged In</h1>";
   		echo "Welcome <b>$session->username</b>, you are logged in. <br><br>"
		    ."<div style='background-color:white;'>"
       		."[<a  href=\"userinfo.php?user=$session->username\">My Account</a>]   "
	   		."[<a href=\"master_register.php?user=$session->username\">Add Master</a>]   "
       		."[<a href=\"useredit.php\">Edit Account</a>]   ";
	    echo "[<a href=\"admin/admin.php\">Admin Center</a>] ";
	    echo "[<a href=\"process.php\">Logout</a>]";

} else {


if($form->num_errors > 0){
   echo "<font size=\"2\" color=\"#ff0000\">".$form->num_errors." error(s) found</font>";
}
?>

      <img src="img/logoerop.png" width="297" height="137" align="baseline"><br><br>
      <!-- <form action="process.php" method="POST"> -->
      <form  action="process.php" method="POST"> 
        <table style="background-color: #5E00FF" align="left" border="5" cellspacing="0" cellpadding="4">
          <tr><td width="111"><div align="center">Username:</div></td><td width="144"><input  type="text" name="user" maxlength="30" value="<?php echo $form->value("user"); ?>"></td><td width="0"><?php echo $form->error("user"); ?></td></tr>
          <tr><td><div align="center">Password:</div></td><td><input type="password" name="pass" maxlength="30" value="<?php echo $form->value("pass"); ?>"></td><td><?php echo $form->error("pass"); ?></td></tr>
          <tr><td colspan="2" align="left"><div align="center">
            <input type="checkbox" name="remember" <?php if($form->value("remember") != ""){ echo "checked"; } ?>>
            <font size="2">Remember me next time     
            <input type="hidden" name="sublogin" value="1">
            <input style="background-color: #FF9900" type="submit" value="Login">
          </div></td></tr>

          </table>
        </form>
      
      <?php
}


echo "</td></tr><tr><td align=\"center\"><br><br>";
echo "<b>Member Total:</b> ".$database->getNumMembers()."<br>";
echo "There are $database->num_active_users registered members and ";
echo "$database->num_active_guests guests viewing the site.<br><br>";

include("include/classes/view_active.php");
//echo $session->userlevel;
?>
      
  </table>
</div>


</body>
</html>