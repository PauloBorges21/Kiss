<?php
//Template Name:Sair
/**
 * Created by PhpStorm.
 * User: paulo.borges
 * Date: 07/11/2018
 * Time: 17:30
 */

session_start();

unset($_SESSION['kiss-rai']);

header('Location: /home');
//echo "<script>window.location='../../login.php';</script>";
