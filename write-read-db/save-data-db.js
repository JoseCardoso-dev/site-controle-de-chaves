
  const form   = document.getElementById('form');
  
  form.addEventListener('submit', (event) => {
        event.preventDefault();
        const campos = document.querySelectorAll('.required');

        var tipo;
        var nChave;
        var dataTime;
        var C_matricula;
        var T_nome;
        var T_empresa;
        var T_colabRespon
        var T_matriRespon;

        if (inputs[0].checked == true) {
            tipo = "Colaborador (C)";
            nChave = inputs[2].value;
            C_matricula = inputs[3].value;
            dataTime = inputs[4].value;

            T_nome = "-----";
            T_empresa = "-----";
            T_colabRespon = "-----";
            T_matriRespon = "-----";
        }else{
            tipo = "Terceiro (T)";
            nChave = inputs[9].value;
            dataTime = inputs[10].value;

            C_matricula = "-----";
            T_nome = inputs[5].value;
            T_empresa = inputs[6].value;
            T_colabRespon = inputs[7].value;
            T_matriRespon = inputs[8].value;
        }

        $.ajax({
            url: "../write-read-db/save-data-db.php",
            type: "post",
            data: {
                tipo: tipo,
                nChave: nChave,
                dataTime: dataTime,
                C_matricula: C_matricula,
                T_nome: T_nome,
                T_empresa: T_empresa,
                T_colabRespon: T_colabRespon,
                T_matriRespon: T_matriRespon
            },
            success: function(result){
                if(result == 'Registro realizado com sucesso!'){
                    alert(result);
                    window.location.href = '../pages/page_cadastro.php';
                }else{
                    alert(result);
                }
            }
        });
  });

  