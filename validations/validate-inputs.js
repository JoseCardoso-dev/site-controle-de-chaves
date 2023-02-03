const form   = document.getElementById('form');
const campos = document.querySelectorAll('.required');
const spans  = document.querySelectorAll('.span-required');
const emailRegex = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;

form.addEventListener('submit', (event) => {
    event.preventDefault();
    emailValidate();
    passwordValidate();
    if((campos[0].style.border == '') && (campos[1].style.border == '')){
        $.ajax({
            url: "validations/validate-credentials.php",
            type: "post",
            data: {
                email: campos[0].value,
                senha: campos[1].value
            },
            success: function(result){
                if(result == 'validado'){
                    window.location.href = 'page_home.php';
                }else{
                    alert(result);
                }
            }
        });
    }
});

function setError(index){
    campos[index].style.border = '2px solid #e63636';
    spans[index].style.display = 'block';
}

function removeError(index){
    campos[index].style.border = '';
    spans[index].style.display = 'none';
}

function emailValidate(){
    if(!emailRegex.test(campos[0].value)){
        setError(0);
    }
    else{
        removeError(0);
    }
}

function passwordValidate(){
    if(campos[1].value.length < 8){
        setError(1);
    }
    else{
        removeError(1);
    }
}
