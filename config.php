<?php 
    session_start();

    function autoload($class){
        $class = str_replace('\\','/',$class);
        include('classes/'.$class.'.class.php');
    }
    spl_autoload_register('autoload');

    date_default_timezone_set('America/Sao_Paulo');

    define('HOST','162.241.2.230');
    define('BDNAME','ondigc37_controle_de_estoque');
    define('USER','ondigc37_matheus');
    define('PASS','Stifler.28');
?>