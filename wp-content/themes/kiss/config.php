<?php

/**
 * Created by PhpStorm.
 * User: paulo.borges
 * Date: 01/10/2018
 * Time: 16:31
 */
try{
    header('Content-Type: text/html; charset=utf-8');
    $pdo = new PDO("mysql:dbname=kiss;host=localhost", "root", "");

} catch(PDOException $e){
    echo "ERRO: ".$e->getMessage();
}
