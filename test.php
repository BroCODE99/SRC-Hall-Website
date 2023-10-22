<?php
include 'database_connection/connection_instance.php';

$select_query = "SELECT * FROM news;";
    $emps_stmt = $connection->prepare($select_query);
    $emps_stmt->execute();
    $emps = $emps_stmt->fetchAll();

  


    var_dump($emps);