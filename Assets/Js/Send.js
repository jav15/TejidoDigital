$(document).ready(function(){
  $("#enviar").click(function(){
    var formulario = $("#FormInformation").serializeArray();
    $.ajax({
      type: "POST",
      dataType: 'json',
      url: "BD/Save.php",
      data: formulario,
    }).done(function(Answer){
      $("#Answer").html(Answer.mensaje);
      $('input[type="text"]').val('');
    $('input[type="number"]').val('');
    });
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("count").innerHTML =
        this.responseText;
      }
    };
    xhttp.open("POST", "Bd/Count.php", true);
    xhttp.send();
  });
  

});

