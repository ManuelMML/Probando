<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'wordpress');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '#j3lJ}A|P&ec3BHj`@*/=vXMlLaU d2Zz-WrIY0q]4N}9orDrC~(xghN$L6@*r`n');
define('SECURE_AUTH_KEY', 'wPPcY$iZ@ZSZ-v[h`Zh&3s%Jj Ke%YZn)ch5*yrUQ~/&Y&((Z$niha~bnN< @(+(');
define('LOGGED_IN_KEY', 'Qz!H=x$DE>`:qdR3] YPvb}>WjYt9qd*Zk`=8z{u3:AyWfq,lAoCA;ci V$F`]%$');
define('NONCE_KEY', '^*uo)lH/&^@snXp9Q ~c%VR=>ZRMG^1Zg^u5dk:8ou^x>jE4<-zWy=4Vs1j%05;w');
define('AUTH_SALT', '>a#&B9}G<Y(X$.G:[P67U37}=>{<gf`S}=AsU3Y1l W?Kwq e(aSt &b|#nU[G=E');
define('SECURE_AUTH_SALT', '4](cBLL?PIiwU?.GE^MA(6820eO>R(BLl^=HPd;M#-KF~z(-AQ8-Xc{v&T(J3}A+');
define('LOGGED_IN_SALT', 'Q6K>Q?g!&4L( `VSv.Z17w0o VW[`yY{>]Vdc7I;7t;sRmHZ@c{`c[x<e!dhj$IQ');
define('NONCE_SALT', '/<ZB04ZdYDb=;g@_ohbfY)fNRVFc|mk[j=gK!N>S9OCqx2o*]-yi2RE=(&}?n|v^');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

