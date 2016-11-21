<?php

include("session_confirm.php");
?>
<!--- se Inicia el menu al costado vertical izquerdo-->
<div id="menu">
  <div id="logo"> 
    <a href="inicio.php"><img id="logo2" src="uploads/locatormedio.png" style="width:100%; height:260"></a>
  </div>
  <div id="listas">
         <ul>
			<li><a href="inicio.php" title="CSS Menus" id="home">Dashboard</a></li>
			<?php
              if($admin==true){
           ?>
		   <li><a href="edit_user.php" title="CSS Menus" class="current">Edit User</a></li>
           <li><a href="member_register.php" title="CSS Menus">Add User</a></li>
           <li><a href="Configuracion.php" title="CSS Menus">Configuration</a></li>
           <?php
              }
           ?>
           <li><a href="#" title="CSS Menus">About us</a></li>
           <li><a href="logout.php" title="CSS Menus">Sign out</a></li>
         </ul>
  </div>
</div>
<!-- Se termina la parte lateral-->
