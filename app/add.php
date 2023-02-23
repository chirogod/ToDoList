<?php

/* si el input name title del index esta seteado, asignarlo a la variable $title */

if (isset($_POST['title'])) {
    require('../db.php');
    $title = $_POST['title'];
    //si esta vacio title informar del error
    if (empty($title)) {
        header("Location: ../index.php?mess=error");
    }else{
        //de lo contrario insertar en title el valor tomado
        $stmt = $conn->prepare("INSERT INTO todos(title) VALUE (?)");
        $res = $stmt->execute([$title]);
        if ($res) {
            header("Location: ../index.php?mess=success");
        } else {
            header("Location: ../index.php");
        }
        $conn = null;
        exit();
        
    }
}else{
    header("Location: ../index.php?mess=error");
}

?>