<?php
    include 'php/funcoes.php';
    if(isset($_GET['id_to_show'])){
      $all_data = getEdit($_GET['id_to_show']);
    }
    include 'php/header.php';

    $date = explode(' ', $all_data['birthdate'])[0];
    
?>

<div class="row">
    <div class="col-9 border-right">
        <h5 class="ml-4">Name</h5>
        <p class="ml-4"><?php echo $all_data['name'] ?></p>
    </div>
    <div class="col-2 text-center">
        <h5>Id</h5>
        <p class=><?php echo $all_data['id_user'] ?></p>
    </div>
</div>

<hr>
<div class="row">
    <div class="col-12 border-right">
        <h5 class="ml-4">Birthdate</h5>
        <p class="ml-4"><?php echo $date ?></p>
    </div>
</div>

<hr>
<div class="row">
    <div class="col-12 border-right">
        <h5 class="ml-4">Phone</h5>
        <p class="ml-4"><?php echo $all_data['phone'] ?></p>
    </div>
</div>


<hr>
<div class="row">
    <div class="col-12 border-right">
        <h5 class="ml-4">Email</h5>
        <p class="ml-4"><?php echo $all_data['email'] ?></p>
    </div>
</div>

<hr>
<div class="row">
    <div class="col-12 border-right">
        <h5 class="ml-4">Address</h5>
        <p class="ml-4"><?php echo $all_data['adress'] ?></p>
    </div>
</div>

<div class="row mt-3">
    <div class="col-6 d-flex justify-content-end">
        <a href='insertUser.php?id_to_edit=<?php echo $all_data['id_user']?>' id='edit_row_profile' class='text-info' data-id='<?php echo $all_data['id_user']?>'><i class='fas fa-edit fa-2x'></i></a>  
    </div>
    <div class="col-6 d-flex justify-content-start">
        <a id='delete_row_profile' class='text-danger' data-id='<?php echo $all_data['id_user']?>'><i class='fas fa-trash fa-2x'></i></a>
    </div>
</div>


<?php
    include 'php/footer.php';
?>