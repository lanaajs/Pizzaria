function Select(num) {
    for (let i = 1; i <= 4; i++) {
      
        const select = document.getElementById(sabor$,{i});
        select.classList.toggle('hidden', i > num);

        var quadrado1 = document.getElementById("sab1"); 
        var quadrado2 = document.getElementById("sab2"); 
        var quadrado3 = document.getElementById("sab3"); 
        var quadrado4 = document.getElementById("sab4"); 

        quadrado1.src = "midia/pizza calabresa 1-4.png";
        quadrado2.src = "midia/pizza calabresa 4-4.png";
        quadrado3.src = "midia/pizza calabresa 2-4.png";
        quadrado4.src = "midia/pizza calabresa 3-4.png"; 


        var select1 = document.getElementById('sabor1');
        var select2 = document.getElementById('sabor2');
        var select3 = document.getElementById('sabor3');
        var select4 = document.getElementById('sabor4');
        
        select1.value = "Sabor 1";
        select2.value = "Sabor 2";
        select3.value = "Sabor 3";
        select4.value = "Sabor 4";
    }
}

function atualizarImagem(idSabor) {
    var selectElement = document.getElementById(idSabor); // pega o select selecionado
    var saborEscolhido = selectElement.value; // pega o sabor selecionado no select
    var radios = document.querySelectorAll('input[name="qtdsab"]:checked'); //seleciona todos os radios

    var qtdSabores; //pega a quantidade de sabores selecionados
    radios.forEach(function (radio) {
        if (radio.checked) {
            qtdSabores = parseInt(radio.className); //pega a quantidade de sabores selecionados
        }
    });

    //alert("Valor selecionado: " + qtdSabores);

    var quadrado1 = document.getElementById("sab1"); //imagem 1 dentro do quadrado
    var quadrado2 = document.getElementById("sab2"); //imagem 2 dentro do quadrado
    var quadrado3 = document.getElementById("sab3"); //imagem 3 dentro do quadrado
    var quadrado4 = document.getElementById("sab4"); //imagem 4 dentro do quadrado

    switch (qtdSabores) {
        case 1:
            if (idSabor === "sabor1" && saborEscolhido === "Margue Rita No Mi") {
                quadrado1.src = "../../public/assets/img/pizza marguerita 1-4.png"; // Adicione a extensão .png
                quadrado2.src = "../../public/assets/img/pizza marguerita 4-4.png"; // Adicione a extensão .png
                quadrado3.src = "../../public/assets/img/pizza marguerita 2-4.png"; // Adicione a extensão .png
                quadrado4.src = "../../public/assets/img/pizza marguerita 3-4.png"; // Adicione a extensão .png
            }else if (idSabor === "sabor1" && saborEscolhido === "Chee Se No Mi") {
                quadrado1.src = "../../public/assets/img/pizza queijo 1-4.png"; // Adicione a extensão .png
                quadrado2.src = "../../public/assets/img/pizza queijo 4-4.png"; // Adicione a extensão .png
                quadrado3.src = "../../public/assets/img/pizza queijo 2-4.png"; // Adicione a extensão .png
                quadrado4.src = "../../public/assets/img/pizza queijo 3-4.png"; // Adicione a extensão .png
            } else if (idSabor === "sabor1" && saborEscolhido === "Veg Veg no Mi"){
                quadrado2.src = "../../public/assets/img/pizza vegetariana 4-4.png"; // Adicione a extensão .png
                quadrado3.src = "../../public/assets/img/pizza vegetariana 2-4.png"; // Adicione a extensão .png
                quadrado4.src = "../../public/assets/img/pizza vegetariana 3-4.png"; // Adicione a extensão .png
                quadrado1.src = "../../public/assets/img/pizza vegetariana 1-4.png"; // Adicione a extensão .png
            }else if (idSabor === "sabor1" && saborEscolhido === "Pe Pero no Mi"){
                quadrado1.src = "../../public/assets/img/pizza calabresa 1-4.png"; // Adicione a extensão .png
                quadrado2.src = "../../public/assets/img/pizza calabresa 4-4.png"; // Adicione a extensão .png
                quadrado3.src = "../../public/assets/img/pizza calabresa 2-4.png"; // Adicione a extensão .png
                quadrado4.src = "../../public/assets/img/pizza calabresa 3-4.png"; // Adicione a extensão .png
            }
            break;
        case 2:
            if (idSabor === "sabor1" && saborEscolhido === "Margue Rita No Mi") {
                quadrado1.src = "../../public/assets/img/pizza marguerita 1-4.png"; // Adicione a extensão .png
                quadrado3.src = "../../public/assets/img/pizza marguerita 2-4.png"; // Adicione a extensão .png
            }else if (idSabor === "sabor1" && saborEscolhido === "Chee Se No Mi") {
                quadrado1.src = "../../public/assets/img/pizza queijo 1-4.png"; // Adicione a extensão .png
                quadrado3.src = "../../public/assets/img/pizza queijo 2-4.png"; // Adicione a extensão .png
            } else if (idSabor === "sabor1" && saborEscolhido === "Veg Veg no Mi"){
                quadrado1.src = "../../public/assets/img/pizza vegetariana 1-4.png"; // Adicione a extensão .png
                quadrado3.src = "../../public/assets/img/pizza vegetariana 2-4.png"; // Adicione a extensão .png
            }else if (idSabor === "sabor1" && saborEscolhido === "Pe Pero no Mi"){
                quadrado1.src = "../../public/assets/img/pizza calabresa 1-4.png"; // Adicione a extensão .png
                quadrado3.src = "../../public/assets/img/pizza calabresa 2-4.png"; // Adicione a extensão .png
            }

            if (idSabor === "sabor2" && saborEscolhido === "Margue Rita No Mi"){
                quadrado2.src = "../../public/assets/img/pizza marguerita 4-4.png"; // Adicione a extensão .png
                quadrado4.src = "../../public/assets/img/pizza marguerita 3-4.png"; // Adicione a extensão .png
            }else if (idSabor === "sabor2" && saborEscolhido === "Chee Se No Mi"){
                quadrado2.src = "../../public/assets/img/pizza queijo 4-4.png"; // Adicione a extensão .png
                quadrado4.src = "../../public/assets/img/pizza queijo 3-4.png"; // Adicione a extensão .png
            } else if (idSabor === "sabor2" && saborEscolhido === "Veg Veg no Mi"){
                quadrado2.src = "../../public/assets/img/pizza vegetariana 4-4.png"; // Adicione a extensão .png
                quadrado4.src = "../../public/assets/img/pizza vegetariana 3-4.png"; // Adicione a extensão .png
            } else if (idSabor === "sabor2" && saborEscolhido === "Pe Pero no Mi"){
                quadrado2.src = "../../public/assets/img/pizza calabresa 4-4.png"; // Adicione a extensão .png
                quadrado4.src = "../../public/assets/img/pizza calabresa 3-4.png"; // Adicione a extensão .png
            }
            break;
        case 3:
            if (idSabor === "sabor1" && saborEscolhido === "Margue Rita No Mi") {
                quadrado1.src = "../../public/assets/img/pizza marguerita 1-4.png"; // Adicione a extensão .png
                quadrado3.src = "../../public/assets/img/pizza marguerita 2-4.png"; // Adicione a extensão .png
            }else if (idSabor === "sabor1" && saborEscolhido === "Chee Se No Mi") {
                quadrado1.src = "../../public/assets/img/pizza queijo 1-4.png"; // Adicione a extensão .png
                quadrado3.src = "../../public/assets/img/pizza queijo 2-4.png"; // Adicione a extensão .png
            } else if (idSabor === "sabor1" && saborEscolhido === "Veg Veg no Mi"){
                quadrado1.src = "../../public/assets/img/pizza vegetariana 1-4.png"; // Adicione a extensão .png
                quadrado3.src = "../../public/assets/img/pizza vegetariana 2-4.png"; // Adicione a extensão .png
            }else if (idSabor === "sabor1" && saborEscolhido === "Pe Pero no Mi"){
                quadrado1.src = "../../public/assets/img/pizza calabresa 1-4.png"; // Adicione a extensão .png
                quadrado3.src = "../../public/assets/img/pizza calabresa 2-4.png"; // Adicione a extensão .png
            }

            if (idSabor === "sabor2" && saborEscolhido === "Chee Se No Mi") {
                quadrado2.src = "../../public/assets/img/pizza queijo 4-4.png";
            }
            else if (idSabor === "sabor2" && saborEscolhido === "Veg Veg no Mi") {
                quadrado2.src = "../../public/assets/img/pizza vegetariana 4-4.png";
            }
            else if (idSabor === "sabor2" && saborEscolhido === "Pe Pero no Mi") {
                quadrado2.src = "../../public/assets/img/pizza calabresa 4-4.png";
            }
            else if (idSabor === "sabor2" && saborEscolhido === "Margue Rita No Mi") {
                quadrado2.src = "../../public/assets/img/pizza marguerita 4-4.png";
            }
            
            if (idSabor === "sabor3" && saborEscolhido === "Chee Se No Mi") {
                quadrado4.src = "../../public/assets/img/pizza queijo 3-4.png";
            }
            else if (idSabor === "sabor3" && saborEscolhido === "Veg Veg no Mi") {
                quadrado4.src = "../../public/assets/img/pizza vegetariana 3-4.png";
            }
            else if (idSabor === "sabor3" && saborEscolhido === "Pe Pero no Mi") {
                quadrado4.src = "../../public/assets/img/pizza calabresa 3-4.png";
            }
            else if (idSabor === "sabor3" && saborEscolhido === "Margue Rita No Mi") {
                quadrado4.src = "../../public/assets/img/pizza marguerita 3-4.png";
            }
            break;
        case 4:
            if (idSabor === "sabor1" && saborEscolhido === "Chee Se No Mi") {
                quadrado1.src = "../../public/assets/img/pizza queijo 1-4.png";
            }
            else if (idSabor === "sabor1" && saborEscolhido === "Veg Veg no Mi") {
                quadrado1.src = "../../public/assets/img/pizza vegetariana 1-4.png";
            }
            else if (idSabor === "sabor1" && saborEscolhido === "Pe Pero no Mi") {
                quadrado1.src = "../../public/assets/img/pizza calabresa 1-4.png";
            }
            else if (idSabor === "sabor1" && saborEscolhido === "Margue Rita No Mi") {
                quadrado1.src = "../../public/assets/img/pizza marguerita 1-4.png";
            }

            if (idSabor === "sabor2" && saborEscolhido === "Chee Se No Mi") {
                quadrado2.src = "../../public/assets/img/pizza queijo 4-4.png";
            }
            else if (idSabor === "sabor2" && saborEscolhido === "Veg Veg no Mi") {
                quadrado2.src = "../../public/assets/img/pizza vegetariana 4-4.png";
            }
            else if (idSabor === "sabor2" && saborEscolhido === "Pe Pero no Mi") {
                quadrado2.src = "../../public/assets/img/pizza calabresa 4-4.png";
            }
            else if (idSabor === "sabor2" && saborEscolhido === "Margue Rita No Mi") {
                quadrado2.src = "../../public/assets/img/pizza marguerita 4-4.png";
            }

            if (idSabor === "sabor3" && saborEscolhido === "Chee Se No Mi") {
                quadrado3.src = "../../public/assets/img/pizza queijo 2-4.png";
            }
            else if (idSabor === "sabor3" && saborEscolhido === "Veg Veg no Mi") {
                quadrado3.src = "../../public/assets/img/pizza vegetariana 2-4.png";
            }
            else if (idSabor === "sabor3" && saborEscolhido === "Pe Pero no Mi") {
                quadrado3.src = "../../public/assets/img/pizza calabresa 2-4.png";
            }
            else if (idSabor === "sabor3" && saborEscolhido === "Margue Rita No Mi") {
                quadrado3.src = "../../public/assets/img/pizza marguerita 2-4.png";
            }

            if (idSabor === "sabor4" && saborEscolhido === "Chee Se No Mi") {
                quadrado4.src = "../../public/assets/img/pizza queijo 3-4.png";
            }
            else if (idSabor === "sabor4" && saborEscolhido === "Veg Veg no Mi") {
                quadrado4.src = "../../public/assets/img/pizza vegetariana 3-4.png";
            }
            else if (idSabor === "sabor4" && saborEscolhido === "Pe Pero no Mi") {
                quadrado4.src = "../../public/assets/img/pizza calabresa 3-4.png";
            }
            else if (idSabor === "sabor4" && saborEscolhido === "Margue Rita No Mi") {
                quadrado4.src = "../../public/assets/img/pizza marguerita 3-4.png";
            }
            break;
    }

    // if(valorSelecionado==1 && selectElement == "sabor1" && saborEscolhido == "Margue Rita No Mi"){

    // }
}



//var imgElement = document.getElementById('sab' + idSabor.charAt(idSabor.length - 1));
//imgElement.src = "midia/pizza " + selectedValue + ".png";