<?php
include 'conexao.php';

date_default_timezone_set('Europe/Lisbon');
$op = isset($_POST['op']) ? $_POST['op'] : $_GET['op'];

// INSERT
if ($op == 1){
    $msg = "";
    $val = 0;

    $name=$_POST['name'];
    $birthdate=$_POST['birthdate'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $address=$_POST['address'];

    $a = date('Y-m-d H:i:s');

    $sql = "INSERT INTO users (name, birthdate, phone, email, address, created, updated) 
            values('$name', '$birthdate', '$phone', '$email', '$address', '$a', '$a');";

    if ($conn->query($sql) === TRUE) {
        $msg = "Registo efetuado com sucesso";
        $val = 1;
    }
    else{
        $msg = "ERRO - Falha no registo" . mysqli_error($conn) . "\n";
        $msg .= 'Query: ' . $sql;
    }

    $ir = array(
        "msg"=>$msg,
        "val"=>$val
    );
    echo json_encode($ir);

    // echo json_encode(array("msg"=>$msg,"val"=>$val));
}

// TABELA (CREATE THE TABLE AND SEARCH)
else if($op == 2 && isset($_POST['tableSearch'])){
    $msg = 
    "<thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Options</th>
            </tr>
    </thead>
    <tbody>";

    $tableSearch=$_POST['tableSearch'];
    
    if ($tableSearch == ""){
        
        $sql = "SELECT id_user as a, name as b, birthdate as c, created as d, updated as e
                FROM users
                ORDER BY id_user DESC;";
    }
    else if ($tableSearch != ""){
                $sql = "SELECT DISTINCT id_user AS a, name as b, birthdate as c, created as d, updated as e
                FROM users
                WHERE id_user LIKE '%".$tableSearch."%' OR
                      name  LIKE '%".$tableSearch."%'
                    ORDER BY id_user DESC;";
    }

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        // var_dump($result->num_rows);
        while($row = $result->fetch_assoc()) {

            //Calcular idade
            $birthdate = strtotime(explode(' ', $row['c'])[0]); //strtotime converte para segundos
            $now = strtotime(date('Y-m-d'));

            $age = abs($now - $birthdate); 
            $age = floor($age / (365*60*60*24));  //floor arredonda para baixo
            
            // var_dump($age_ms);

            $msg .=
            "<tr>
                <td>".$row['a']."</td>
                <td>".$row['b']."</td>
                <td>".$age."</td>
                <td>".$row['d']."</td>
                <td>".$row['e']."</td>
                <td>
                	<a href='profileUser.php?id_to_show=".$row['a']."' id='show_row' class='text-warning mr-2' data-id='".$row['a']."'><i class='fas fa-eye'></i></a>
                    <a href='insertUser.php?id_to_edit=".$row['a']."' id='edit_row' class='text-info mr-2' data-id='".$row['a']."'><i class='fas fa-edit'></i></a>
                    <a href='#' id='delete_row' class='text-danger' data-id='".$row['a']."'><i class='fas fa-trash'></i></a>
                </td>
            </tr>";
        }
    }

    $msg .= 
    "</tbody>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Options</th>
            </tr>
        </tfoot>";

    $ir = array(
        "msg"=>$msg
    );

    echo(json_encode($ir));
}

// DELETE
else if ($op == 3){
    $msg = "";
    $val = 0;

    $id_to_delete=$_POST['id_to_delete'];

    $sql = "DELETE FROM users WHERE id_user = ".$id_to_delete.";";
    
    if (mysqli_query($conn, $sql)) {
        $val = 1;
        $msg = "delete feito com sucesso.";
    }else {
        $msg = "error at: ".mysqli_error($conn);
    }

    $ir = array(
        "val"=>$val,
        "msg"=>$msg
    );

    echo json_encode($ir);
}

// UPDATE
else if ($op == 4){
    $msg = "";
    $val = 0;

    $id_user=$_POST['id_user'];
    $name=$_POST['name'];
    $birthdate=$_POST['birthdate'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $address=$_POST['address'];
   

    $a = date('Y-m-d H:i:s');

    $sql = "UPDATE users
            SET name = '$name', birthdate = '$birthdate',  phone = '$phone', email = '$email', address = '$address', updated = '$a'
            WHERE id_user = $id_user;";

    if ($conn->query($sql) === TRUE) {
        $msg = "Update efetuado com sucesso";
        $val = 1;
    }
    else{
        $msg = "ERRO - Falha no Update" . mysqli_error($conn) . "\n";
        $msg .= 'Query: ' . $sql;
    }

    $ir = array(
        "msg"=>$msg,
        "val"=>$val
    );
    echo json_encode($ir);
}


?>