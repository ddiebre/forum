<?php
try{
    $db = new PDO("mysql:host=localhost;dbname=demo","root", '');
}catch(Exception $e) {
        die('Erreur:'.$e -> getMessage());
    }
?>