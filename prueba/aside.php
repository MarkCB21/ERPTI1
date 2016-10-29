<?php
include("include/classes/session.php");
include("include/classes/session_confirm.php");
?>
<!--- se Inicia el menu al costado vertical izquerdo-->
<div id="menu">
  <div id="logo"> 
    <a href="inicio.php"><img src="diseños/img/locatormedio.png" id="logo" style="width:100%; height:100%;"></a>
  </div>
  <div id="listas">
         <ul>
			<li><a href="inicio.php" title="CSS Menus" id="home">Dashboard</a></li>
			<li><a href="useredit.php" title="CSS Menus" class="current">Edit User</a></li>
			<?php
              if($admin==true){
           ?>
           <li><a href="member_register.php" title="CSS Menus">Add User</a></li>
           <li><a href="#" title="CSS Menus">Configuration</a></li>
           <?php
              }
           ?>
           <li><a href="#" title="CSS Menus">About us</a></li>
           <li><a href="process.php" title="CSS Menus">Sign out</a></li>
         </ul>
  </div>
</div>
<!-- Se termina la parte lateral-->
