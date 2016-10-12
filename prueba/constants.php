<?php

 
/**Las limitaciones de bases de datos -
 * Se requieren estas constantes con el fin 
 * de que haya una correcta conexion con la 
 * base de datos MySQL. Asegurese de que la 
 * informacion es correcta.
 */
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "erp-1");

/**
 * Constantes de tabla de base de datos -
 * estas constantes tienen los nombres de
 * todas las tablas de base de datos utilizadas.
 */
define("TBL_USERS", "login_usuarios");
define("TBL_INVENTARIO", "inventario");
define("TBL_ACTIVE_USERS",  "active_users");
define("TBL_ACTIVE_GUESTS", "active_guests");
define("TBL_BANNED_USERS",  "banned_users");

/**
 * Nombres especiales y Nivel Constantes -
 * la pagina de administracion solo sera
 * accesible para el usuario con el nombre
 * de administrador y tambien a los usuarios
 * a nivel de usuario de administracion. Sientete
 * libre de cambiar los nombres y las constantes
 * de nivel como mejor te parezca, tambien puede
 * añadir las especificaciones de nivel adicionales.
 */
define("ADMIN_NAME", "admin");   //1. Admin
define("GUEST_NAME", "Guest");   
define("ADMIN_LEVEL", 2);        // 2. Nivel de admin
define("AGENT_MEMBER_LEVEL", 1); 
define("GUEST_LEVEL", 0);       

/**
 * Esta constante booleana controla si la secuencia 
 * de comandos realiza un seguimiento de la actividad
 * de usuarios activos e invitados que visitan el sitio.
 */
define("TRACK_VISITORS", true);

/**
 * Constantes de tiempo -
 * estas limitaciones se refieren
 * a la cantidad maxima de tiempo (en minutos)
 * despues de su ultima página en blanco que un
 * usuario invitado y todavia se consideran visitantes activos.
 */
define("USER_TIMEOUT", 10);
define("GUEST_TIMEOUT", 5);

/**
 * Constantes de Cookies -
 * estos son los parametros de la
 * llamada a la funcion setcookie.
 */
// define("COOKIE_EXPIRE", 60*60*24*30);  //30 dias solamente
define("COOKIE_EXPIRE", 60*60*24*100);  //100 dias por default
define("COOKIE_PATH", "/");  //Disponible en el dominio entero

/**
 * Constantes de correo electronico -
 * En ellos se especifican lo que sucede
 * en el campo de los correos electronicos
 * en los que el script envia a los usuarios,
 * y si desea enviar un mensaje de bienvenida a los nuevos usuarios registrados.
 */
define("EMAIL_FROM_NAME", "admin");
define("EMAIL_FROM_ADDR", "admin@gmail.com");
define("EMAIL_WELCOME", false);

/**
 * Esta constante fuerzas de todos
 * los usuarios tengan nombres de usuario
 * en minusculas, mayusculas se convierten automaticamente.
 */
define("ALL_LOWERCASE", false);
?>
