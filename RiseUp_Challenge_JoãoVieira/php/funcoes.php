<?php

function getEdit($id_to_edit){
    include('conexao.php');

    $sql = "SELECT name AS a, birthdate AS b, phone AS c, email AS d, address AS e, created AS f, updated AS h
            FROM users
            WHERE id_user = ".$id_to_edit.";";

    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        // var_dump($result->num_rows);
        while($row = $result->fetch_assoc()) {
            $ir = array(
                "id_user"=>$id_to_edit,
                "name"=>$row['a'],
                "birthdate"=>$row['b'],
                "phone"=>$row['c'],
                "email"=>$row['d'],
                "adress"=>$row['e'],
                "created"=>$row['f'],
                "updated"=>$row['h']
            );
        }
    }

    return $ir;

}
   
?>