//function buscar(){
    //pega valor da variavel
    //var vCPF = $('#txtBusca').val();
    //console.log(vCPF);
    //chama o php para procurar no banco
//}

var buscar = document.getElementById('btnfound');
buscar.addEventListener('click', function() {
    console.log("oi");
    var vCPF = $('#txtBusca').val();
    console.log(vCPF);

    $.ajax({
        url: '../php/buscarPaciente.php',
        method: 'POST',
        data: {cpf: vCPF},
        dataType: 'json'
    }).done(function (result){
        console.log(result);
    });
});

function getDados(){
    $.ajax({
        url: '../php/ficha.php',
        method: 'POST',
        dataType: 'json'
    }).done(function (result){
        console.log(result);
    });
}