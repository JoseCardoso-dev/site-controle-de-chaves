const form = document.getElementById('form');
var popup = document.querySelector('dialog');
const inputpopup = document.querySelectorAll('.inputpopup');



form.addEventListener('submit', (event) => {
    event.preventDefault(); 

    var tipo = "Colaborador (C)";
    var nChave = inputpopup[1].value;
    var dataTime = inputpopup[3].value;
    var C_matricula = inputpopup[2].value;;
    var nome = inputpopup[0].value;
    var T_empresa = "-----";
    var T_colabRespon = "-----";
    var T_matriRespon = 00000;
    var situacao = "Pendente";
    var motivo = inputpopup[4].value;

    $.ajax({
        url: "../write-read-db/save-data-db.php",
        type: "post",
        data: {
            tipo: tipo,
            nChave: nChave,
            dataTime: dataTime,
            C_matricula: C_matricula,
            T_nome: nome,
            T_empresa: T_empresa,
            T_colabRespon: T_colabRespon,
            T_matriRespon: T_matriRespon,
            situacao: situacao,
            motivo: motivo
        },
        success: function(result){
            if(result == 'Registro realizado com sucesso!'){
                alert(result);
                window.location.href = '../pages/page_chaves.php';
            }else{
                alert(result);
            }
        }
    });

    popup.close();
});


function openPopup(nChave){

    inputpopup[1].value = nChave;

    popup.showModal();
}