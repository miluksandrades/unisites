
document.getElementById('formRobocode').addEventListener('submit', enviaEquipe);

function enviaEquipe(e){
    e.preventDefault();
    $("#erroredital").html("");

    $("#btn-insc-rbcode").hide();
    
    if(!$("#checkedital").is(":checked")){
        $("#erroredital").html("<strong>Necessário aceitar os termos do Edital!</strong>");
        $("#erroredital").css('color', 'red');
        $("#btn-insc-rbcode").show();
        return;
    }  

    var teamName = $("#teamname").val();
    var member1Name = $("#name1").val(); 
    var member2Name = $("#name2").val(); 
    var member1Email = $.trim($("#email1").val()); 
    var member2Email = $.trim($("#email2").val());
    var member1Period = $("#period1").val(); 
    var member2Period = $("#period2").val();

    if(member1Email == member2Email){
        $("#erroredital").html("<strong>Os dois emails não podem ser iguais!</strong>");
        $("#erroredital").css('color', 'red');
        $("#btn-insc-rbcode").show();
        return;
    }


    var subObj = { teamName: teamName, member1Name: member1Name, member2Name: member2Name, member1Email: member1Email, member2Email: member2Email, member1Period: member1Period, member2Period: member2Period};
    $.ajax({
        method: "POST",
        url: "robocode/Subscription.php",
        contentType: "application/json; charset=utf-8",
        data: JSON.stringify(subObj)
    })
    .done(function( msg ) {
        if(msg.indexOf('success') > -1){
            $('#modal-robocode').modal('hide');
            if(msg.indexOf('cancel') > -1){
                alert("Solicitação de Inscrição registrada! Há algum membro desta nova equipe já inscrito em outra equipe. Ele receberá um email para confirmar o cancelamento de sua primeira inscrição.");
            }else{
                alert("Inscrição realizada com sucesso!");
            }
           document.getElementById('formRobocode').reset();
        }else{
            alert(msg);
        }
    })
    .always(function() {
        $("#btn-insc-rbcode").show();
    });
}