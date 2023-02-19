
  const form = document.getElementById('form');
  
  form.addEventListener('submit', (event) => {
        event.preventDefault();
        const campos = document.querySelectorAll('.required');
        alert("oii");
        var tipo;
        var nChave;
        var dataTime;
        var C_matricula;
        var nome;
        var T_empresa;
        var T_colabRespon
        var T_matriRespon;
        var situacao = "Pendente";

        if (inputs[0].checked == true) {
            tipo = "Colaborador (C)";
            nome = inputs[2].value;
            nChave = inputs[3].value;
            C_matricula = inputs[4].value;
            dataTime = inputs[5].value;

            T_empresa = "-----";
            T_colabRespon = "-----";
            T_matriRespon = "-----";
        }else{
            tipo = "Terceiro (T)";
            nChave = inputs[10].value;
            dataTime = inputs[11].value;

            C_matricula = "-----";
            nome = inputs[6].value;
            T_empresa = inputs[7].value;
            T_colabRespon = inputs[8].value;
            T_matriRespon = inputs[9].value;
        }

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
                situacao: situacao
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

  