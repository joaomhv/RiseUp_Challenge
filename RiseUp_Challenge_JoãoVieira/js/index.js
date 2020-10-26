$(document).ready(function() {
  //Construcao tabela ao inicar a pagina
  let tableSearch = $('#tableSearch').val()
  atualizaTabela(tableSearch);  

  $('#table').dataTable( {  
    "searching": false,
    "lengthMenu": [[5, 10, 25, 50], [5, 10, 25, 50]]
  });
});

//Delete ao clicar no botao
$(document).on('click', '#delete_row', function(){
  let id_to_delete = $(this).attr('data-id');
  
  let op = 3;
  
  swal({
    title: "Are you sure?",
    text: "You will not be able to recover this collaborattor!",
    icon: "warning",
    className: "swal-footer",
    buttons: [
      'No, cancel it!',
      'Yes, I am sure!'
    ],
    dangerMode: true,
  }).then(function(isConfirm) {
    if (isConfirm) {
      swal({
        title: 'Deleted!',
        text: 'User are successfully removed!',
        icon: 'success'
      })
      .then(function() {
        apaga(op, id_to_delete);; 
      });
    } else {
      swal("Cancelled", "Your user is safe :)", "error");
    }
  })
});

//Delete ao clicar no botao no Profile
$(document).on('click', '#delete_row_profile', function(){
  let id_to_delete = $(this).attr('data-id');
  
  let op = 3;
  
  swal({
    title: "Are you sure?",
    text: "You will not be able to recover this collaborattor!",
    icon: "warning",
    className: "swal-footer",
    buttons: [
      'No, cancel it!',
      'Yes, I am sure!'
    ],
    dangerMode: true,
  }).then(function(isConfirm) {
    if (isConfirm) {
      swal({
        title: 'Deleted!',
        text: 'User are successfully removed!',
        icon: 'success'
      })
      .then(function() {
        apaga2(op, id_to_delete);; 
      });
    } else {
      swal("Cancelled", "Your user is safe :)", "error");
    }
  })
});

//Funcao que origina procura do collaborador em keyup
$('#tableSearch').keyup(function(){
  if ($(this).val() != ''){
    let tableSearch = $(this).val();
      atualizaTabela(tableSearch);
  }
  else{
    tableSearch = '';
    atualizaTabela(tableSearch);
  }
});

//Funcao que constroi e atualiza a tabela
function atualizaTabela(tableSearch) {
  let op = 2;
  
  $.ajax({
    type: "POST",
    url: "php/op.php",
    data: { op : op, tableSearch: tableSearch },
    success: function(response) {
      let res = JSON.parse(response);
      $("#table").html(res.msg);
    }
  })
}

//Funcao para eliminar colaborador
function apaga(op, id_to_delete){
  $.ajax({
    type: "POST",
    url: "php/op.php",
    data: { op : op, id_to_delete: id_to_delete },
    success: function(response) {
      let res = JSON.parse(response);
      
      if(res.val == 1){
        let tableSearch = $('#tableSearch').val()
        atualizaTabela(tableSearch);
      }
      else{
        console.log("msg->"+res.msg);
      }
    }
  })
}

//Funcao para eliminar colaborador
function apaga2(op, id_to_delete){
  $.ajax({
    type: "POST",
    url: "php/op.php",
    data: { op : op, id_to_delete: id_to_delete },
    success: function(response) {
      let res = JSON.parse(response);
      
      if(res.val == 1){
        setTimeout(function() {
          window.location.href = "index.php";
      }, 500);
      }
      else{
        console.log("msg->"+res.msg);
      }
    }
  })
}

