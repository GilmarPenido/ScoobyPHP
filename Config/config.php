<?php
date_default_timezone_set('America/Sao_Paulo');
require_once 'env.php';

if (ENV == 'development') {

     //Url base para caso o controller não seja indicado na url
     define("HOME", "home");

     //define o nome do site em desenvolvimento
     define('SITE_NAME', 'ScoobyPHP');

    //Define o nome do banco de dados a ser usado em desenvolvimento
    define('DB_NAME', '');

    //Define o usuário do banco de dados em desenvolvimento 
    define('DB_USER', 'root');

    //Define a senha do usuário do banco de dados em desenvolvimento
    define('DB_PASS', '');

    //Define o driver de banco de dados
    define('DB_DRIVER', 'mysql');

    //Define o host do banco de dados em desenvolvimento
    define('DB_HOST', '127.0.0.1');

    //Define o charset para utf8 
    define('CHARSET', 'utf8');

    //Define a collation para utf8 general ci
    define('COLLATION', 'utf8_unicode_ci');
    
    //define a url base do sistema
    define("BASE_URL", "http://localhost/".SITE_NAME."/");

    //define a url para a pasta node_modules
    define("NODE_MODULES", "http://localhost/".SITE_NAME."/node_modules/");

    //define a url para a pasta assets
    define("ASSET", "http://localhost/".SITE_NAME."/Public/assets/");

    error_reporting(E_ALL);
} elseif (ENV == 'production') {

    //Url base para caso o controller não seja indicado na url
    define("HOME", "home");

     //define o nome do site em produção
     define('SITE_NAME', 'YOUR_URL');

    //Define o nome do banco de dados a ser usado em produção
    define('DB_NAME', 'YOUR_DATABASE_NAME');

    //Define o usuário do banco de dados em produção 
    define('DB_USER', 'YOUR_USER');

    //Define a senha do usuário do banco de dados em produção
    define('DB_PASS', 'YOUR_PASS');

    //Define o driver de banco de dados
    define('DB_DRIVER', 'mysql');

    //Define o host do banco de dados em desenvolvimento
    define('DB_HOST', 'YOUR_DRIVER');

    //Define o charset para utf8 
    define('CHARSET', 'utf8');

    //Define a collation para utf8 general ci
    define('COLLATION', 'utf8_unicode_ci');

     //define a url base do sistema
    define("BASE_URL", "http://".SITE_NAME."/");

    //define a url para a pasta assets
    define("ASSET", "http://".SITE_NAME."/Public/assets/");

    //define a url para a pasta node_modules
    define("NODE_MODULES", "http://".SITE_NAME."/node_modules/");

    error_reporting(0);
}
