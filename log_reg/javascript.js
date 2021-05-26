function send(type){
    if(type=='login'){
        var user = document.getElementById("username").value;
        var psw = document.getElementById("password").value;
        if(user == "" || psw == ""){
            if(user == ""){
                document.getElementById("username").placeholder = "* Compila questo campo";
                document.getElementById("username").classList.add("error");
            }
            if(psw == ""){
                document.getElementById("password").placeholder = "* Compila questo campo";
                document.getElementById("password").classList.add("error");
            }
        }else{
            document.getElementById("log_form").submit();
        }
    }else{
        var user = document.getElementById("username").value;
        var psw = document.getElementById("password").value;
        var email = document.getElementById("email").value;
        if(user == "" || psw == "" || email == ""){
            if(user == ""){
                document.getElementById("username").placeholder = "* Compila questo campo";
                document.getElementById("username").classList.add("error");
            }
            if(psw == ""){
                document.getElementById("password").placeholder = "* Compila questo campo";
                document.getElementById("password").classList.add("error");            }
            if(email == ""){
                document.getElementById("email").placeholder = "* Compila questo campo";
                document.getElementById("email").classList.add("error");            
            }
        }else{
            document.getElementById("reg_form").submit(); 
        }
    }

}
