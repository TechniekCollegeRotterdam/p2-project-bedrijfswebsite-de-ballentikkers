<?php
try {
    $db = new PDO("mysql:host=localhost;dbname=shabu", "root", "");
   } catch(PDOException $e) {
    die("  ERROR !!!! :  " . $e->getMessage());
   } 
?>