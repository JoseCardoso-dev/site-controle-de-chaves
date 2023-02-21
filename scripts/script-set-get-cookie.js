
function setCookie(){
    var email = document.getElementById('email').value;
    var password = document.getElementById('senha').value;
    
    document.cookie = "myemail="+email+";path=htt://localhost/";
    document.cookie = "mypassword="+password+";path=htt://localhost/";
}

function getCookieData(){
    var cookieEmail = getCookie("myemail");
    var cookiePassword = getCookie("mypassword");

    document.getElementById('email').value = cookieEmail;
    document.getElementById('senha').value = cookiePassword;
}

function getCookie(cname){ 
    var name = cname + "="; 
    var decodedCookie = decodeURIComponent(document.cookie); 
    var ca = decodedCookie.split(";"); 

    for(var i = 0; i < ca.length; i++){ 
        var c = ca[i]; 
        while (c.charAt(0) == ' '){ 
            c = c.substring(1);
        }
        if(c.indexOf(name) == 0){ 
            return c.substring(name.length, c.length);
        }
    }
    return "";
}