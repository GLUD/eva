Proyecto EVA ( Sistema de Evaluacion de Ingreso de Candidatos al Grupo GNU/Linux Universidad Distrital)
=========

Proyecto de apropiacion del conocimiento de herramientas de tecnologias libres basado en symfony para la creacion de examenes virtuales para realizar evaluaciones a los candidatos a miembros activos del grupo GNU/Linux Universidad Distrital. 

Para asegurar el correcto funcionamiento de este proyecto se deben realizar los siguientes pasos:
	
	1) En caso de no tener instalado mysql puede hacerlo siguiendo el siguiente post: https://glud.org/2016/05/14/tutorial-para-instalacion-de-drupal-8-paso-a-paso/
	2) Desde la terminal nos situamos en este proyecto, luego ejecutamos esta linea de comandos:
		$ php composer-setup.php
	   Luego se ejecuta la siguiente linea:
		$ composer install
	   Aca se debe configurar algunos parámetros de la base de datos, debe quedar de la siguiente forma:
	   		
		# This file is auto-generated during the composer install
			parameters:
			database_host: 127.0.0.1    			#Nuestro Localhost
			database_port: 3306						#Por lo general es 3306
			database_name: symfony					#Nombre de la base de datos
			database_user: root						#Usuario de mysql
			database_password: *****				#Contraseña de mysql
			mailer_transport: smtp					#Se deja el valor por defecto
			mailer_host: 127.0.0.1					#Se deja el valor por defecto
			mailer_user: null						#Se deja el valor por defecto
			mailer_password: null					#Se deja el valor por defecto
			secret: ThisTokenIsNotSoSecretChangeIt	#Se deja el valor por defecto
		
	   En caso de pasar parametros erroneos lo podemos volver a modificar:
	    $ nano app/config/parameters.yml
	   
	   Para verificar que el puerto que utiliza MYSQL es el 3306 o que es otro, podemos verlo en:
	    $ cat /etc/mysql/my.cnf
	   En el apartado: 
	    [client]
		port		= 3306


	3) Para configurar la base de datos MYSQL:
		
		Esto evitara futuros errores, causados por la configuracion de MYSQL, lo que haremos es modificar un archivo para que MYSQL sea UTF8:
		$ sudo nano /etc/mysql/my.cnf
		Y agregamos las siguientes lineas en la seccion [mysqld]:
				
		# Version 5.5.3 introduced "utf8mb4", which is recommended
		collation-server     = utf8mb4_general_ci # Replaces utf8_general_ci
		character-set-server = utf8mb4            # Replaces utf8
	
	4) Para saber mas de symfony puede visitar nuesta pagina web: glud.org en la cual encontrara varios post relacionados con esta tematica.
