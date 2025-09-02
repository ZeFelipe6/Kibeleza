<?php
 
//Utilizar o define() para criar constantes

//Definir a raiz do projeto
define('URL_BASE', 'http://localhost/kibeleza/public/');

//Definir as configurações do banco de dados

define('DB_HOST', 'localhost', );
define('DB_NAME', 'kibeleza');
define('DB_USER', 'root');
define('DB_PASS', '');


//Sistema para carregamento automático das classes
spl_autoload_register(
    function($class){

        if (file_exists('../app/controller/'.$class. '.php')){
            require_once '../app/controller/'.$class. '.php';
        }

        if (file_exists('../app/model/'.$class.'.php')){
            require_once '../app/model/' .$class. '.php';
        }

        if (file_exists('../rotas/' .$class. 'php')){
            require_once '../rotas/' .$class. '.php';
        }
    }


);