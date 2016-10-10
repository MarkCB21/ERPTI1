<?php

include("../include/classes/session.php");

/**
 * displayUsers - Displays the users database table in
 * a nicely formatted html table.
 */
function displayUsers(){
   global $database, $session;
   $a=$session->username;
   $q = "SELECT username,userlevel,email,timestamp, parent_directory "
       ."FROM ".TBL_USERS." where parent_directory = '$a' ORDER BY userlevel DESC,username";
   $result = $database->query($q);
   /* Error occurred, return given name by default */
   $num_rows = mysqli_num_rows($result);
   if(!$result || ($num_rows < 0)){
      echo "Error displaying info";
      return;
   }
   if($num_rows == 0){
      echo "Database table empty";
      return;
   }
   /* Display table contents */
   echo "<table align=\"left\" border=\"1\" cellspacing=\"0\" cellpadding=\"3\">\n";
   echo "<tr><td><b>Username</b></td><td><b>Level</b></td><td><b>Email</b></td><td><b>Last Active</b></td><td><b>Group</b></td></tr>\n";
   for($i=0; $i<$num_rows; $i++){
      mysqli_data_seek($result, $i);
      $row=mysqli_fetch_row($result);
      $uname  = $row[0]; //username
      $ulevel = $row[1]; //userlevel
      $email  = $row[2]; //email
      $time   = $row[3]; //timestamp
      $parent = $row[4]; //parent directory
      echo "<tr><td>$uname</td><td>$ulevel</td><td>$email</td><td>$time</td><td>$parent</td></tr>\n";
   }
   echo "</table><br>\n";
}

/**
 * displayBannedUsers - Displays the banned users
 * database table in a nicely formatted html table.
 */
function displayBannedUsers(){
   global $database;
   $q = "SELECT username,timestamp "
       ."FROM ".TBL_BANNED_USERS." ORDER BY username";
   $result = $database->query($q);
   /* Error occurred, return given name by default */
   $num_rows = mysqli_num_rows($result);
   if(!$result || ($num_rows < 0)){
      echo "Error displaying info";
      return;
   }
   if($num_rows == 0){
      echo "Database table empty";
      return;
   }
   /* Display table contents */
   echo "<table align=\"left\" border=\"1\" cellspacing=\"0\" cellpadding=\"3\">\n";
   echo "<tr><td><b>Username</b></td><td><b>Time Banned</b></td></tr>\n";
   for($i=0; $i<$num_rows; $i++){
      mysqli_data_seek($result, $i);
      $row=mysqli_fetch_row($result);
      $uname  = $row[0]; //username
      $time   = $row[1]; //timestamp
      echo "<tr><td>$uname</td><td>$time</td></tr>\n";
   }
   echo "</table><br>\n";
}
   
/**
 * User not an administrator, redirect to main page
 * automatically.
 */
if(!$session->isAgent()){
   header("Location: ../main.php");
}
else{
/**
 * Administrator is viewing page, so display all
 * forms.
 */
?>
<html>
<title>Jpmaster77's Login Script</title>
<body>
<h1>Agent Center</h1>
<font size="5" color="#ff0000">
<b>::::::::::::::::::::::::::::::::::::::::::::</b></font>
<font size="4">Logged in as <b><?php echo $session->username; ?></b></font><br><br>
Back to [<a href="../main.php">Main Page</a>]<br><br>
<?php
if($form->num_errors > 0){
   echo "<font size=\"4\" color=\"#ff0000\">"
       ."!*** Error with request, please fix</font><br><br>";
}
?>
<table align="left" border="0" cellspacing="5" cellpadding="5">
<tr><td>
<?php
/**
 * Display Users Table
 */
?>
<h3>Users Table Contents:</h3>
<?php
displayUsers();
?>
</td></tr>
<tr>
<td><hr></td>
</tr>
<tr>
<td>
<?php
/**
 * Delete User
 */
?>
<h3>Delete User</h3>
<?php echo $form->error("deluser"); ?>
<form action="agentprocess.php" method="POST">
Username:<br>
<input type="text" name="deluser" maxlength="30" value="<?php echo $form->value("deluser"); ?>">
<input type="hidden" name="subdeluser" value="1">
<input type="submit" value="Delete User">
</form>
</td>
</tr>
<tr>
<td><hr></td>
</tr>
</table>
</body>
</html>
<?php
}
?>

