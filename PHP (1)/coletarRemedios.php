<?php
    $query = "SELECT * FROM remedios"; 
    $stmt = $pdo->query($query);
    $remedios = $stmt->fetch()
?>