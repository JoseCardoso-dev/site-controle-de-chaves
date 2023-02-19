var popup = document.querySelector('dialog');

function openPopup(id){

    var linha = $('#lin' + id).children();
    var tipo = $(linha[0]).text();
    var descricao = $(linha[2]).text();

    
    if(tipo == "Colaborador (C)"){
        $("#colaborador-popup").attr("hidden", false);
        $("#terceiro-popup").attr("hidden", true);
    }else if(tipo == "Terceiro (T)"){
        $("#terceiro-popup").attr("hidden", false);
        $("#colaborador-popup").attr("hidden", true);  
    }

    //alert(nome);
    //window.location = "../pages/page_historic.php?id="+id;

    //<input type="text" placeholder="Campo desabilitado" disabled="">
    popup.showModal();
}

function closePopup(){
    popup.close();
}


$('input:radio[name="consulta-popup"]').change(function() {
    if ($(this).val() == 1) {
      
      
      

    } else if ($(this).val() == 2) {
      

    } 
});