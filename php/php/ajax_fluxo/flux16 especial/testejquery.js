$(document).ready(function(){
    $("button").click(function(){
        var n1 =  $("#n1").val();
        var n2 =  $("#n2").val();
        var op =  $("#n3").val();
        if (op != "") {
            $.ajax({
                url: "testejquery.php",
                type: "POST",
                data: "n1="+n1+"&op="+op+"&n2="+n2,
                dataType: "html"
            }).done(function(resposta) {
                $("div").html(resposta);
            }).fail(function(jqXHR, textStatus ) {
                console.log("Request failed: " + textStatus);
            }).always(function() {
                console.log("Foi");
          });
        } else {
            $("div").html("coloque o sinal da operacao");
        }
    })
 })