
# TUTORIAL PARA INSTALAR DRUPAL 8 (PASO A PASO)

<a rel="license" href="http://creativecommons.org/licenses/by/4.0/"><img alt="Licencia Creative Commons" style="border-width:0" src="https://i.creativecommons.org/l/by/4.0/80x15.png" /></a><br /><span xmlns:dct="http://purl.org/dc/terms/" property="dct:title">Tutorial Drupal 8</span> por <a xmlns:cc="http://creativecommons.org/ns#" href="http://glud.org/" property="cc:attributionName" rel="cc:attributionURL">Diego Javier Mena Amado</a> se distribuye bajo una <a rel="license" href="http://creativecommons.org/licenses/by/4.0/">Licencia Creative Commons Atribución 4.0 Internacional</a>.

### PRIMER CAFÉ
Descargamos el CMS directamente desde https://www.drupal.org/project/drupal y descargamos Drupal Core 8.0.5
Ubicamos el directorio, lo ingresamos a nuestro servidor y lo descomprimimos:
# cp drupal-8.0.5.tar.gz /var/www/
# gzip -d drupal-8.0.5.tar.gz 
# tar -xvf drupal-8.0.5.tar 
Podrias tener en cuenta para descomprimir Ficheros tar.gz asi: 

* Comprimir: tar -czfv archivo.tar.gz ficheros
* Descomprimir: tar -xzvf archivo.tar.gz
* Ver contenido: tar -tzf archivo.tar.gz

Ahora debemos crear el directorio FILES exactamente como en la version 7 y la copia del archivo settings
# mkdir sites/default/files
# cp sites/default/default.settings.php sites/default/settings.php
Añadimos permisos de escritura en modo super usuario
# chmod a+w -R sites/default/files/
# chmod a+w  sites/default/settings.php 
## Procedemos a la instalación LAMP

LAMP es el acrónimo usado para describir un sistema de infraestructura de internet que usa las siguientes herramientas:

* Linux, el sistema operativo; En algunos casos también se refiere a LDAP.
* Apache, el servidor web;
* MySQL/MariaDB, el gestor de bases de datos;
* Perl, PHP, o Python, los lenguajes de programación.

![LAMP](https://upload.wikimedia.org/wikipedia/commons/thumb/8/82/LAMP_software_bundle.svg/1024px-LAMP_software_bundle.svg.png "lamp")
$$Figura \ 1: \ LAMP \ $$



### Sistema Operativo GNU-Linux

Puedes descargar tu distro de preferencia, en mi caso he usado Ubuntu Server y lo puedes conseguir directamente desde su pagina http://www.ubuntu.com/download/server

### Apache
# sudo apt-get update
# sudo apt-get install apache2
![APACHE](http://i66.tinypic.com/23vci89.png "apache")
$$Figura \ 2: \ APACHE \ $$

### Gestor para bases de datos (MySQL)
# sudo apt-get install mysql-server libapache2-mod-auth-mysql php5-mysql
# sudo mysql_install_db     
# sudo /usr/bin/mysql_secure_installation
Debería aparecerles el siguiente mensaje en consola:  
-> All done!  If you've completed all of the above steps, your MySQL
installation should now be secure.


### PHP-5
# sudo apt-get install php5 libapache2-mod-php5 php5-mcrypt
<p style="text-align: justify;">Esto deberá instalar PHP sin ningún problema. En la mayoría de los casos, vamos a querer modificar la forma en que Apache sirve archivos cuando se solicita un directorio.  Actualmente, si un usuario solicita un directorio del servidor, Apache buscará primero un archivo llamado index.html  
Nosotros queremos decirle a nuestro servidor web que elija los archivos PHP de preferencia, por lo que vamos a hacer que Apache busque un archivo index.php primero.
Para ello, escribe este comando para abrir el archivo dir.conf en un editor de texto con privilegios de root:</p>
# sudo nano /etc/apache2/mods-enabled/dir.conf
Se verá de forma similar a esto:
____________________________________________________
<IfModule mod_dir.c>
    DirectoryIndex index.html index.cgi index.pl index.php index.xhtml index.htm
</IfModule>
_______________________________________________________
Queremos mover el índice del archivo PHP destacandolo a la primera posición después de la especificación del DirectoryIndex, así:

_______________________________________________
<IfModule mod_dir.c>
    DirectoryIndex index.php index.html index.cgi index.pl index.xhtml index.htm
</IfModule>
___________________________________________________
Para guardar cambios: Ctrl+O  
Para salir del editor nano: Ctrl+X  
Después de esto, tenemos que reiniciar el servidor web Apache para que nuestros cambios sean reconocidos. 
Puedes hacerlo hacerlo ejecutando esto:
# sudo service apache2 restart
Instalaciones adicionales: Para ver las opciones disponibles para los módulos de PHP y bibliotecas, puedes ejecutar esto en tu sistema:
# apt-cache search php5-
Los resultados son todos los componentes opcionales que se pueden instalar. Describiremos brevemente cada uno:
php5-common - Common files for packages built from the php5 source
php5-curl - CURL module for php5
php5-dev - Files for PHP5 module development
php5-json - JSON module for php5
php5-readline - Readline module for php5
php5-cgi - Lenguaje de guiones embebidos en HTML para servidores (binario CGI)
php5-cli - intérprete de órdenes para el lenguaje de guión php5
php5-dbg - Símbolos de depuración para PHP5
php5-gd - Módulo GD para php5
php5-gmp - Módulo GMP para php5
php5-ldap - Módulo LDAP para php5
php5-mysql - Módulo MySQL para php5
php5-odbc - Módulo ODBC para php5
php5-pgsql - Módulo PostgreSQL para php5
php5-pspell - Módulo pspell para php5
php5-recode - Módulo recode para php5
php5-snmp - Módulo SNMP para php5
php5-sqlite - Módulo SQLite para php5
php5-tidy - Módulo tidy para php5
php5-xmlrpc - Módulo XML-RPC para php5
php5-xsl - Módulo XSL para php5
libphp5-embed - HTML-embedded scripting language (Embedded SAPI library)
php5-adodb - Extension optimising the ADOdb database abstraction library
php5-apcu - APC User Cache for PHP 5
php5-enchant - Enchant module for php5
php5-fpm - server-side, HTML-embedded scripting language (FPM-CGI binary)
php5-gdcm - Grassroots DICOM PHP5 bindings
php5-gearman - PHP wrapper to libgearman
php5-gnupg - wrapper around the gpgme library
php5-interbase - interbase/firebird module for php5
php5-intl - internationalisation module for php5
php5-lasso - Library for Liberty Alliance and SAML protocols - PHP 5 bindings
php5-librdf - PHP5 language bindings for the Redland RDF library
php5-mapscript - php5-cgi module for MapServer
php5-memcache - memcache extension module for PHP5
php5-memcached - memcached extension module for PHP5, uses libmemcached
php5-midgard2 - Midgard2 Content Repository - PHP5 language bindings and module
php5-mongo - MongoDB database driver
php5-msgpack - PHP extension for interfacing with MessagePack
php5-mysqlnd - MySQL module for php5 (Native Driver)
php5-mysqlnd-ms - MySQL replication and load balancing module for PHP
php5-oauth - OAuth 1.0 consumer and provider extension
php5-pinba - Pinba module for PHP 5
php5-radius - PECL radius module for PHP 5
php5-redis - PHP extension for interfacing with Redis
php5-remctl - PECL module for Kerberos-authenticated command execution
php5-rrd - PHP bindings to rrd tool system
php5-sasl - Cyrus SASL Extension
php5-stomp - Streaming Text Oriented Messaging Protocol (STOMP) client module for PHP 5
php5-svn - PHP Bindings for the Subversion Revision control system
php5-tokyo-tyrant - PHP interface to Tokyo Cabinet's network interface, Tokyo Tyrant
php5-vtkgdcm - Grassroots DICOM VTK PHP bindings
php5-xcache - Fast, stable PHP opcode cacher
php5-xhprof - Hierarchical Profiler for PHP5
php5-exactimage - fast image manipulation library (PHP bindings)
php5-geoip - Módulo GeoIP para php5
php5-imagick - Módulo ImageMagick para php5
php5-imap - Módulo IMAP para php5
php5-mcrypt - Módulo MCrypt para php5
php5-ming - Módulo Ming para php5
php5-ps - módulo ps para PHP 5
php5-sybase - Módulo de servidor Sybase/MS SQL para php5
php5-xdebug - Módulo Xdebug para PHP 5
Para obtener más información sobre lo que hace cada módulo, puedes buscar en Internet o ver en la descripción larga del paquete escribiendo:
//Por ejemplo: # apt-cache show nombre_del_paquete  
Si, después de investigar, decides que quieres instalar un paquete, puedes hacerlo utilizando el comando apt-get install como lo hemos hecho previamente con otro software. Para consumir los recursos json de un proximo tutorial necesito:
# apt-cache show php5-json
Para comprobar y ver la configuración de nuestro servidor podemos crear un archivo info.php
sudo vim /var/www/html/info.php
Y añadimos en el archivo el siguiente codigo PHP:
<?php
phpinfo();
?>
Para insertar en el editor VIM, debes oprimir la tecla i, copiar el fragmento de codigo anterior, pegas en terminal (Ctrl+Shift+V), guarda y sale del editor digitando --> :wq

![PHP-5](http://i64.tinypic.com/250s4g2.png "php-5")
$$Figura \ 2: \ PHP-5 \ $$

### PHPMYADMIN

Ahora que ya tenemos instalado el servidor, nos hacen falta las herramientas para desarrollar. Lo primero a instalar es una herramienta para gestionar nuestra base de datos, lo más común es phpMyAdmin

![PHPMYADMIN](http://i63.tinypic.com/2mmahle.png "phpMyAdmin")
$$Figura \ 3: \ phpmyadmin \ $$
# sudo apt-get install phpmyadmin
Creamos un enlace simbolico y reiniciamos apache
# sudo ln -s /usr/share/phpmyadmin /var/www/html/phpmyadmin
# sudo /etc/init.d/apache2 reload
### SEGUNDO CAFÉ 

Listo ahora crearemos nuestra base de datos:
# /var/www/html# mysql -uroot -p11223344

mysql> create database drupal8;
mysql> exit
Enviamos el paquete de archivos de drupal 8 a /var/www/html  
Lo renombramos  mv drupal-8.0.5/ drupal8  
Y lo lanzamos desde nuestro buscador localhost/drupal8  

![DRUPAL](http://i63.tinypic.com/2vx21bn.png "drupal")
$$Figura \ 4: \ INSTALANDO DRUPAL \ $$

Iniciamos instalacion y aparece un mensaje de URL limpias, decido continuar instalacion pues desde el CMS puedo corregir ese detalle

Se crea una carpeta en el directorio files llamada translations con su debido archivo
Instala los modulos del nucleo (42 modulos)
Importa las traducciones de la carpeta translations

![DRUPAL-8](http://i68.tinypic.com/2lcl37p.png "drupal-8")
$$Figura \ 5: \ INSTALANDO DRUPAL \ $$

### DESPIERTA LA FUERZA INTERIOR
![STALLMAN](http://k44.kn3.net/taringa/3/9/7/1/2/8/5/chapitalmala/3E1.jpg?9578 "Stallman")

Hasta un proximo tuto!!! Mis queridos colegas del lado de la luz
