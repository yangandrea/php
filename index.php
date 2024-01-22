<?php
    require_once "Alunno.php";
    $array = [];
    $array[] = new Alunno("Mario", "Rossi", "3A", 18);
    $array[] = new Alunno("Luigi", "Verdi", "3A", 18);
    $array[] = new Alunno("Giovanni", "Bianchi", "3A", 18);
    array_push($array, new Alunno("Giuseppe", "Gialli", "3A", 18));
    array_push($array, new Alunno("Giacomo", "Neri", "3A", 18));
    array_push($array, new Alunno("Gianluca", "Blu", "3A", 18));
    foreach($array as $alunno){
        echo $alunno;
    }
?>