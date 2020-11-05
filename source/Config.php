<?php
// 
define("URL_BASE", "http://hca.local.com/");
define("URL_BASE_ADMIN", "http://gerenciador-hca.local.com/");

define("YEAR", date('Y'));

// Email configuration
define("MAIL_EMAIL", "contato@hcananindeua.com.br");
define("MAIL_PASSWORD", "*kO;?l{f6GRZ");
define("MAIL_HOST", "hcananindeua.com.br");
define("MAIL_NAME_FROM", "Gerenciador de Conteúdo");

// Database configuration
define("DB_SITE", [
    "driver" => "mysql",
    "host" => "localhost",
    "port" => "3306",
    "dbname" => "db_hca",
    // hcanan_hca
    "username" => "root",
    // hcanan_root
    "passwd" => "root",
    // u77^o5SXgT?N
    "options" => [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
]);
