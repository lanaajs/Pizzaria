

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
            if (idSabor === "sabor1" && saborEscolhido === "Chee Se No Mi") {
                quadrado1.src = "midia/pizza queijo 1-4.png"; // Adicione a extensão .png
                quadrado2.src = "midia/pizza queijo 4-4.png"; // Adicione a extensão .png
                quadrado3.src = "midia/pizza queijo 2-4.png"; // Adicione a extensão .png
                quadrado4.src = "midia/pizza queijo 3-4.png"; // Adicione a extensão .png
            }
            break;
    }

    // if(valorSelecionado==1 && selectElement == "sabor1" && saborEscolhido == "Margue Rita No Mi"){

    // }
}



//var imgElement = document.getElementById('sab' + idSabor.charAt(idSabor.length - 1));
//imgElement.src = "midia/pizza " + selectedValue + ".png";