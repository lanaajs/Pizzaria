function tamanho(tam){
    var tamanho = tam;
    //tam pode ser "Pequena", "Média", "Grande" ou "Família".
    qtdSabores = 1;
    if (tamanho === "Pequena") {
      qtdSabores = 1;
    } else if (tamanho === "Média") {
      qtdSabores = 2;
    } else if (tamanho === "Grande") {
      qtdSabores = 2;
    } else if (tamanho === "Família") {
      qtdSabores = 4;
    }

    var div1 = document.getElementById('titulo');
    var div2 = document.getElementById('sbradios');
    div1.style.display = 'block';
    div2.style.display = 'flex';
  
    // Aplica as restrições de quantidade de sabores
    Select(qtdSabores);
}


function Select(num) {
    // Declare as variáveis fora do loop
    const quadrado1 = document.getElementById("sab1");
    const quadrado2 = document.getElementById("sab2");
    const quadrado3 = document.getElementById("sab3");
    const quadrado4 = document.getElementById("sab4");
  
    for (let i = 1; i <= 4; i++) {
      const select = document.getElementById(`sabor${i}`);
      select.classList.toggle('hidden', i > num);
  
      // Atualize as imagens de acordo com o sabor selecionado
    }

    if (qtdSabores === 1) {
        // Desabilita as opções de 2 ou mais sabores
        document.getElementById("1sbr").disabled = false;
        document.getElementById("2sbr").disabled = true;
        document.getElementById("3sbr").disabled = true;
        document.getElementById("4sbr").disabled = true;
      } else if (qtdSabores === 2) {
        // Desabilita as opções de 3 ou 4 sabores
        document.getElementById("1sbr").disabled = false;
        document.getElementById("2sbr").disabled = false;
        document.getElementById("3sbr").disabled = true;
        document.getElementById("4sbr").disabled = true;
      } else if (qtdSabores === 3) {
        // Desabilita a opção de 4 sabores
        document.getElementById("4sbr").disabled = true;
      } else if(qtdSabores === 4){
        document.getElementById("1sbr").disabled = false;
        document.getElementById("2sbr").disabled = false;
        document.getElementById("3sbr").disabled = false;
        document.getElementById("4sbr").disabled = false;
      }
    
  }


function atualizarImagem(idSabor) {
    var selectElement = document.getElementById(idSabor);
    var saborEscolhido = selectElement.value;
    var radios = document.querySelectorAll('input[name="qtdsab"]:checked');
  
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
//imgElement.src = "midia/pizza " + selectedValue + ".png";