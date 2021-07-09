<?php

require_once "config.php";

if (isset($_GET['del'])) {
    $id = $_GET['del'];
    $query ="DELETE FROM department WHERE department.Dnumber=$id";
    $result = $pdo->exec($query);
    if ($result > 0){
        echo "<script>alert('Delete $id successful');</script>";
    }
   
} else {
    echo "<script>alert('Cannot do');</script>";
}
echo "<script>window.location.href='index.php';</script>";
exit;

?>