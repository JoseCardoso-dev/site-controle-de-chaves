var popup = document.querySelector('dialog');
const inputpopup = document.querySelectorAll('.inputpopup');

function openPopup(id){

    var linha = $('#lin' + id).children();
    var tipo = $(linha[0]).text();

    var nChave = $(linha[1]).text();
    var C_Matricula = $(linha[3]).text();
    var nome = $(linha[4]).text();
    var T_Empresa = $(linha[5]).text();
    var T_Colaborador = $(linha[6]).text();
    var T_Matricula = $(linha[7]).text();
    var cadastrante = $(linha[8]).text();
    var motivo = $(linha[9]).text();

    inputpopup[10].value = motivo;
    if(tipo == "Colaborador (C)"){
        $("#colaborador-popup").attr("hidden", false);
        $("#terceiro-popup").attr("hidden", true);

        inputpopup[0].value = nome;
        inputpopup[1].value = nChave;
        inputpopup[2].value = C_Matricula;
        inputpopup[3].value = cadastrante;

    }else if(tipo == "Terceiro (T)"){
        $("#terceiro-popup").attr("hidden", false);
        $("#colaborador-popup").attr("hidden", true);
        
        inputpopup[4].value = nome;
        inputpopup[5].value = T_Empresa;
        inputpopup[6].value = T_Colaborador;
        inputpopup[7].value = T_Matricula;
        inputpopup[8].value = nChave;
        inputpopup[9].value = cadastrante;   
    }

    popup.showModal();
}

function closePopup(){
    popup.close();
}