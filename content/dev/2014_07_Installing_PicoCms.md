/*
Title: Instalando PhileCMS
Description: This description will go in the meta description tag
Date: 2014/07/23
Role: devpost
Template: dev
Category: dev
Tags: dev
Role: Dev
*/

Este es mi primer post en la sección de Dev. Todavía no es un post que se diga que sirva de gran cosa pero espero con el tiempo mejor mi manera de exlicarme.

Ayer al instalar Philecms me ha dado un error HTTP 500 usando Apache Tomacat bajo Arch Linux (Realmente se queda la pantalla en blanco y no sale ningún error cuando me conectaba al CMS)

*Error  [HTTP/1.0 500 Internal Server Error] al instalar PhileCMS* 

Para solucioan el error hice lo siguiente:

* Editar .htacess: Meter la siguinte línea para ver que error PHP me esta dando: php_flag display_errors 1

Ahora al recargar la web veo que el error que me da es el siguiente:

* Fatal error: Call to undefined function Phile\openssl_random_pseudo_bytes() in /usr/share/webapps/Phile-master/lib/Phile/Utility.php on line 164

Investigando me doy cuenta que hay que activar lo siguiente en PHP:

* Editar php.ini, habilitar la parte ssl descomentando la siguiente línea:

 * extension=openssl.so

