<?php

require "./logb.php";
$select = $conn->prepare("SELECT * FROM freetable");
$select->execute();
$free = $select->fetchAll(PDO::FETCH_ASSOC);

?>