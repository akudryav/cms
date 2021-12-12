<?php//// System classes autoload//spl_autoload_register(function ($classname) {    switch($classname[0] . $classname[1])    {        case 'C_':            $path = "c/$classname.php";            break;        case 'M_':            $path = "m/$classname.php";            break;        default:            $path = "core/$classname.php";            break;    }    if(file_exists($path))        include_once($path);});//// Programmers important settings//define('BASE_URL', '/');define('TEMPLATE_MAKER', 'twig'); // twig || simpledefine('CACHE', true); 		  // true || false//// SQL settings//define('MYSQL_SERVER', 'mariadb');define('MYSQL_USER', 'root');define('MYSQL_PASSWORD', 'qwerty');define('MYSQL_DB', 'cms');//// Your hash key//define('HASH_KEY', 'JFDJ*EfheHFOSfd[sg))FD_--sdf');//// System dirs//define('JS_DIR', 'media/js/');define('IMAGE_DIR', 'media/images/');define('CSS_DIR', 'media/css/');define('CKUPLOAD_DIR', 'media/images/ck/');define('IMG_DIR', 'media/gallery/big/');define('IMG_SMALL_DIR', 'media/gallery/small/');define('IMG_SMALL_WIDTH', 200);define('DOCS_DIR', 'media/docs/');define('CACHE_DIR', 'media/cache/');define('LOG_FILE_PATH', 'media/logs/log.log');//// Maps path//define('RULES_PATH', 'm/maps/rules.php');define('MESSAGES_PATH', 'm/maps/messages.php');define('SEARCH_PATH', 'm/maps/search.php');define('CACHE_PATH', 'm/maps/cache.php');define('LANGS_PATH', 'm/maps/languages.php');define('LOGS_PATH', 'm/maps/logs.php');//// System patterns//define('WIDGETS_REPLACE_PATTERN', '|<widget(.+?)>\[\[--(.+?)--\]\]</widget>|');define('DOCS_TYPES', "/\.(?:pdf|xls|xlsx|doc|docx)$/i");//// Global site settings//define('MAIN_MENU_ID', 1);define('MAIN_TEMPLATE', 'v_main.php');define('CURENT_THEME', 'default'); // enviromentdefine('DEFAULT_LANGUAGE', 'ru');