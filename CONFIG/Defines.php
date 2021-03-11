<?php

/*
 * Constantes de par�metros para configura��o da conex�o
 */
define('HOST', 'srvapplive01.mysql.database.azure.com');
define('DBNAME', 'trabalho_php');
define('CHARSET', 'utf8');
define('USER', 'admindb');
define('PASSWORD', '12qwaszx@');

// Setando Erros do php.ini

ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
ini_set('memory_limit', '256M');

