# Pr1.PHP.JoseLorenzo

# Asignatura: Back-end con Tecnologías de Libre Distribución (PHP)
> Repositorio para la primera práctica de la asignatura Front-end para Navegadores Web.
> #### [Máster en Ingeniería Web por la U.P.M.](http://miw.etsisi.upm.es)

## Tecnologías necesarias
* PHP
* Doctrine
* Composer
* Symfony
* XAMPP
* Html5
* Css + Boostrap
* Javascript + jQuery 
* PhpStorm
* GitHub

## Objetivo
* El objetivo de la primera práctica es progresar en el conocimiento del lenguaje de scripting PHP y el ORM Doctrine 
y familiarizarse con el desarrollo de aplicaciones web completas integrando tecnologías del lado del cliente con el 
procesamiento en el lado del servidor. 

* Esta práctica pretende servir de ejemplo de integración de diferentes técnicas
aprendidas en la asignatura “Back-end con tecnologías de libre distribución (PHP)”.
En la misma se profundizará en el conocimiento del lenguaje de scripting PHP, se
emplearán datos almacenados en un gestor de bases de datos y adicionalmente, se
utilizarán componentes desarrollados por terceros que permitirán simplificar las
labores a desarrollar. 

## Tareas

### 0 - Instalación del proyecto
> Para instalar el proyecto (dependencias incluidas), se debe ejecutar el comando  *"composer install"*
desde el directorio raíz del proyecto. 

### 1 - CRUD vía CLI
> Se deben ejecutar una serie de comandos (vía terminal) desde el directorio raíz del proyecto para poder realizar 
las operaciones de creación, lectura, actualización y borrado (CRUD) sobre los usuarios y los resultados. 
  
#### Usuarios
* CREATE (admin): *"php src/script/create_user_admin.php"*
* CREATE (general): *"php src/script/create_user_general.php -Username- -Email- -Password-"*
* READ (one): *"php src/script/list_one_user.php -UserId- [--json]"*
* READ (all): *"php src/script/list_users.php [--json]"*
* UPDATE: *"php src/script/update_user.php -UserId- [Username] [Email] [Password] [IsEnabled]"*
* DELETE (one): *"php src/script/delete_one_user.php -UserId-"*
* DELETE: (all): *"php src/script/delete_users.php"*

#### Resultados
* CREATE: *"php src/script/create_result.php -Result- -UserId-"*
* READ (one): *"php src/script/list_one_result.php -ResultId- [--json]"*
* READ (all): *"php src/script/list_results.php [--json]"*
* UPDATE: *"php src/script/update_result.php -ResultId- -UserId- -Result-"*
* DELETE (one): *"php src/script/delete_one_result.php -ResultId-"*
* DELETE: (all): *"php src/script/delete_results.php"*   
  
### 2 - Pruebas
> Para ejecutar la batería de pruebas que se han implementado, se debe ejecutar el comando  *"./bin/phpunit"*
desde el directorio raíz del proyecto.
  
### 3 - CRUD vía Web
> * Además de vía terminal de comandos, se ha desarrollado una interfaz web para gestionar los CRUD tanto de
usuarios como de sus resultados.
> * El DocumentRoot del proyecto se aloja en *"/Pr1-PHP-JoseLorenzo/src"*, por tanto, para acceder desde el 
navegador a la página raíz hay que acceder desde la URL ***"url-raiz-del-proyecto**/web/public/index.php"*

##### Autor: Jose Lorenzo Moreno - U.P.M.