<?php

 
$senhaCriptografada = password_hash("123456789", PASSWORD_DEFAULT);
//$senhaCriptografada = "$2y$10$/PrVOqfVzWzICuRrp8y9N.lgw6.Cf/kuRXrps/MMAdw3ruioBbzGa";
echo $senhaCriptografada;

if(password_verify("123456789", $senhaCriptografada)){
    echo "          --> Senha Validada!"; 
}else{
    echo "          --> Senha Incorreta!";
}

?>