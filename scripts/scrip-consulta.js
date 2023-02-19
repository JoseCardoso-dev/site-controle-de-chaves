const inputs = document.querySelectorAll('.required');
inputs[2].required = true;
inputs[3].required = true;
inputs[4].required = true;

inputs[6].required = false;
inputs[7].required = false;
inputs[8].required = false;
inputs[9].required = false;
inputs[10].required = false;
$('input:radio[name="consulta"]').change(function() {
    if ($(this).val() == 1) {
      $("#colaborador").attr("hidden", false);
      $(this).attr("checked", true);
      
      $("#terceiro").attr("hidden", true);
      $(this).attr("checked", true);

    } else if ($(this).val() == 2) {
      $("#terceiro").attr("hidden", false);
      $(this).attr("checked", true);
      
      $("#colaborador").attr("hidden", true);
      $(this).attr("checked", true);

    } 

    if (inputs[0].checked == true) {
      inputs[2].required = true;
      inputs[3].required = true;
      inputs[4].required = true;

      inputs[6].required = false;
      inputs[7].required = false;
      inputs[8].required = false;
      inputs[9].required = false;
      inputs[10].required = false;
    }else{
      inputs[2].required = false;
      inputs[3].required = false;
      inputs[4].required = false;

      inputs[6].required = true;
      inputs[7].required = true;
      inputs[8].required = true;
      inputs[9].required = true;
      inputs[10].required = true;
    }
  });