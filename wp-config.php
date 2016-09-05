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
define('DB_NAME', 'jmaturra_wpnewenergy');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'jmaturrano');


/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'v2L1t$$t0Cbt');

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
define('AUTH_KEY', 'Aku RZO8O,?Fpa*.IgpR#R3Ew%mCy(;.EqbaHfoxzKO c_1)NK*#+?:_K o,Ri~m');
define('SECURE_AUTH_KEY', 'qMY;DVk5SC0JKq/bY?Vz.J3tO.Hz$h29O,9{AGEZ(ob$S^2SBnaV;ld/|*b6:6U%');
define('LOGGED_IN_KEY', '3I~ZqSq5|9w:} NbmuZMMqpVxX]03xaf!u>!QkI0w8F#Sl,`uc&f38j1PQXU6L#+');
define('NONCE_KEY', 'pC_/rx>mI!OIl~IrHaoRl}?qf>SO)!jDm2X++BG@[;VX`RR(;}LWZ.2g!:2:ExOV');
define('AUTH_SALT', '~|6,iKBoJ,(mF X}!K4!V^P$7d%ocy!WuNCd_56iStp?|kSKB]_`H}b|hO/`N;2U');
define('SECURE_AUTH_SALT', '%l~1=Gm_qgw9[BjXa-J)o@Gm5lD?(]~V^>Zt@dfT_XAG6U;!^hB{71<NS-GPpyFZ');
define('LOGGED_IN_SALT', '6^Wot/7Y*4AfIZ<-%io(:[ZNvNfQi>vf6)2~W:*![}X0IAbZY1 )oj.=K7?:SFf-');
define('NONCE_SALT', '%^CtcI%KVsQuyI(<zw7WtC@^GrBF_c4>tDS?d*+l`ZL<]3lgOBoZ8O?xd3O(}/NZ');

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

