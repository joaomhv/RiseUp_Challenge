<?php
    include 'php/funcoes.php';
    if(isset($_GET['id_to_edit'])){
      $all_data = getEdit($_GET['id_to_edit']);
    }
    include 'php/header.php';
?>

<form id="formulario">
  <!-- 1º linha form -->
  <div class="form-row">
    <div class="form-group col">
      <label for="name">Name <span style="color: #6d7fcc; font-weight: 700;">*</span></label>
      <input type="text" class="form-control" id="name" placeholder="Your name ..." value="<?php echo isset($_GET['id_to_edit']) ? $all_data['name'] : '' ?>">
    </div>
  </div>

  <!-- 2º linha form -->
  <div class="form-row">
    <div class="form-group col">
      <label for="birthdate">Birthdate <span style="color: #6d7fcc; font-weight: 700;">*</span></label>
      <input type="date" class="form-control" id="birthdate" placeholder="Your birthdate ..." value="<?php echo isset($_GET['id_to_edit']) ? explode(' ', $all_data['birthdate'])[0] : '' ?>">
    </div>
  </div>

  <!-- 3º linha form -->
  <div class="form-row">
    <div class="form-group col">
      <label for="phone">Phone <span style="color: #6d7fcc; font-weight: 700;">*</span></label>
      <input type="number" class="form-control" id="phone" placeholder="Your phone number..." value="<?php echo isset($_GET['id_to_edit']) ? $all_data['phone'] : '' ?>">
    </div>
  </div>

  <!-- 4º linha form -->
  <div class="form-row">
    <div class="form-group col">
      <label for="email">Email<span style="color: #6d7fcc; font-weight: 700;">*</span></label>
      <input type="email" class="form-control" id="email" placeholder="Your email ..." value="<?php echo isset($_GET['id_to_edit']) ? $all_data['email'] : '' ?>">
    </div>
  </div>

  <!-- 5º linha form -->
  <div class="form-row">
    <div class="form-group col">
      <label for="address">Address <span style="color: #6d7fcc; font-weight: 700;">*</span></label>
      <input type="text" class="form-control" id="address" placeholder="Your address ..." value="<?php echo isset($_GET['id_to_edit']) ? $all_data['adress'] : '' ?>">
    </div>
  </div>

  <!-- 5º linha form -->
  <!-- <div class="form-row">
    <div class="form-check col ml-4">
      <input type="checkbox" class="form-check-input" id="exampleCheck1"> 
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
  </div> -->
  
  <div class="form-row">
      <p class="ml-3" style="font-size: 14px;"><span style="color: #6d7fcc; font-weight: 700;">*</span> required fields</p>
  </div>

  <!-- 6º linha form -->
  <div class="form-row d-flex justify-content-center">
    <div class="form-group">
      <button id="botaoInserir" type="button" class="btn btn-info btn-lg" disabled="disabled" value="<?php echo isset($_GET['id_to_edit']) ? $all_data['id_user'] : 'add' ?>" >Submit</button>
    </div>
  </div>
</form>


<?php
    include 'php/footer.php';
?>