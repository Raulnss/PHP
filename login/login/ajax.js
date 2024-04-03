$(document).ready(function(){
    $("button").click(function(){
    var email =  $("#n1").val();
    var senha =  $("#n2").val();
                $.ajax({
                   url: "inicio.php",
                   type: "POST",
                   data: "email="+email+"&senha="+senha,
                dataType: "html"
        }).done(function(resposta) {
            $("div").html(resposta);
        }).fail(function(jqXHR, textStatus ) {
            console.log("Request failed: " + textStatus);
        }).always(function() {
            console.log("Foi");
      });
      })
    })