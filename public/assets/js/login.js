function verificar(){
    var email = document.getElementById("email");
    var senha = document.getElementById("senha");
    var inputemail = document.getElementById("inputemail");
    var inputsenha = document.getElementById("inputsenha");

    var controller =  false;

    

    if(email.value == ""){
        inputemail.style.borderBottomColor = "red";
        controller = true;
    }else{
        inputemail.style.borderBottomColor = "green";
    }

    if(senha.value == ""){
        inputsenha.style.borderBottomColor = "red";
        controller = true;
    }else{
        inputsenha.style.borderBottomColor = "green";
    }

        if (controller) {
            Toastify({
                text: "Campo não preenchido",
                className: "toast",
                duration: 2500,
                newWindow: true,
                gravity: "top", // `top` or `bottom`
                position: "center", // `left`, `center` or `right`
                stopOnFocus: true, // Prevents dismissing of toast on hover
                style: {
                    background: "linear-gradient(to right, #ff0000, #ec5353)",
                    
                },
                onClick: function () { } // Callback after click
            }).showToast();
            controller = false;
        }

        if(senha.value.length < 4){
            controller = true;
        }else{
            senha.style.borderColor = "green"
        }
    
        if (controller) {
            Toastify({
                text: "A senha tem que ter no mínimo 4 caracteres",
                className: "toast",
                duration: 2500,
                newWindow: true,
                gravity: "top", // `top` or `bottom`
                position: "center", // `left`, `center` or `right`
                stopOnFocus: true, // Prevents dismissing of toast on hover
                style: {
                    background: "linear-gradient(to right, #ff0000, #ec5353)",
                    
                },
                onClick: function () { } // Callback after click
            }).showToast();
            controller = false;
        }
    }



