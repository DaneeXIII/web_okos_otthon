<?php
/**
 * A WordPress fő konfigurációs állománya
 *
 * Ebben a fájlban a következő beállításokat lehet megtenni: MySQL beállítások
 * tábla előtagok, titkos kulcsok, a WordPress nyelve, és ABSPATH.
 * További információ a fájl lehetséges opcióiról angolul itt található:
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 *  A MySQL beállításokat a szolgáltatónktól kell kérni.
 *
 * Ebből a fájlból készül el a telepítési folyamat közben a wp-config.php
 * állomány. Nem kötelező a webes telepítés használata, elegendő átnevezni
 * "wp-config.php" névre, és kitölteni az értékeket.
 *
 * @package WordPress
 */

// ** MySQL beállítások - Ezeket a szolgálatótól lehet beszerezni ** //
/** Adatbázis neve */
define( 'DB_NAME', 'web_okos_otthon' );

/** MySQL felhasználónév */
define( 'DB_USER', 'Danee' );

/** MySQL jelszó. */
define( 'DB_PASSWORD', 'Danika2001' );

/** MySQL  kiszolgáló neve */
define( 'DB_HOST', 'localhost' );

/** Az adatbázis karakter kódolása */
define( 'DB_CHARSET', 'utf8mb4' );

/** Az adatbázis egybevetése */
define('DB_COLLATE', '');

/**#@+
 * Bejelentkezést tikosító kulcsok
 *
 * Változtassuk meg a lenti konstansok értékét egy-egy tetszóleges mondatra.
 * Generálhatunk is ilyen kulcsokat a {@link http://api.wordpress.org/secret-key/1.1/ WordPress.org titkos kulcs szolgáltatásával}
 * Ezeknek a kulcsoknak a módosításával bármikor kiléptethető az összes bejelentkezett felhasználó az oldalról.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY', '0MEaj=q)OhSW]^/f}X1r21^o(hvOn ,.R>gKL/Cj1pTzC;`$bU{:/&X0gScRr!)Z' );
define( 'SECURE_AUTH_KEY', '4G/l_!Rl+s,n/VQ(|y$c= Hi_AWzjB3erR|nw/<,`yl(4[:~>y0FAy[y%AWiY,~1' );
define( 'LOGGED_IN_KEY', 'gC{ j,@!q`EGt 6{&.`CQZf>&$^3SBq}+iWqyw)h[w-34v<k{un+TUs5#u;VJ=tY' );
define( 'NONCE_KEY', '?(8i-;@Ybg6=JSjjAcKPpjiw!W_1aehd;Qlfr*xXGx&L|u<WaO9V1A;7VMvJ(Ga,' );
define( 'AUTH_SALT',        '>3uq]xqWSLo8=V_+&MGUd7F`F@ga[yQXS#||y]p 2!B]0SO%X9u04gzIg6a9%3wf' );
define( 'SECURE_AUTH_SALT', 'U p|;pXCpr(RQ=b~4z(C_>JFi$K[b!$jAW_5@l8o[Jzaz=O9$[14O=W][-<`f4S ' );
define( 'LOGGED_IN_SALT',   ':R^XQhJD|=3eaY=t}3q+iL0ON+/FV#/-|:_oo8en`]8&qx!}oFpFSs0t6v&VA5O#' );
define( 'NONCE_SALT',       'L [!vdR/v5C.m7bxsc~KbAVTWHRVQJYBjX]_B/b;+Su<=mtw x,QTN U u$j5/W(' );

/**#@-*/

/**
 * WordPress-adatbázis tábla előtag.
 *
 * Több blogot is telepíthetünk egy adatbázisba, ha valamennyinek egyedi
 * előtagot adunk. Csak számokat, betűket és alulvonásokat adhatunk meg.
 */
$table_prefix = 'wp_';

/**
 * Fejlesztőknek: WordPress hibakereső mód.
 *
 * Engedélyezzük ezt a megjegyzések megjelenítéséhez a fejlesztés során.
 * Erősen ajánlott, hogy a bővítmény- és sablonfejlesztők használják a WP_DEBUG
 * konstansot.
 */
define('WP_DEBUG', false);

/* Ennyi volt, kellemes blogolást! */

/** A WordPress könyvtár abszolút elérési útja. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Betöltjük a WordPress változókat és szükséges fájlokat. */
require_once(ABSPATH . 'wp-settings.php');
