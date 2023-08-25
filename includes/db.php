<?php

    $dsn = "mysql:host=localhost;dbname=blog";
    try {
        $pdo = new PDO($dsn, 'root', '');
    }
    catch(PDOException $e) {
        echo $e->getMessage();
    }
