$('input:radio[name="consulta"]').change(function() {
    if ($(this).val() == 1) {
      $("#colaborador").attr("hidden", false);
      $(this).attr("checked", true);
      
      $("#prestador").attr("hidden", true);
      $(this).attr("checked", true);

      $("#outros").attr("hidden", true);
      $(this).attr("checked", true);
    } else if ($(this).val() == 2) {
      $("#prestador").attr("hidden", false);
      $(this).attr("checked", true);
      
      $("#colaborador").attr("hidden", true);
      $(this).attr("checked", true);

      $("#outros").attr("hidden", true);
      $(this).attr("checked", true);
    } else if ($(this).val() == 3) {
      $("#outros").attr("hidden", false);
      $(this).attr("checked", true);

      $("#colaborador").attr("hidden", true);
      $(this).attr("checked", true);
      
      $("#prestador").attr("hidden", true);
      $(this).attr("checked", true);
    }
  });