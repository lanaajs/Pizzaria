<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../public/assets/css/cadastro.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <link rel="shortcut icon" href="midia/20.png" type="image/x-icon">
    <script src="../../public/assets/js/cadastro.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

    <title>One Pizza</title>
</head>

<body onload="senhaTAM()">

    <a href="home.html">
        <div id="logo">
            <img src="../../public/assets/img/20.png" alt="Logo">
        </div>
    </a>

    <div class="tudo">
        <div class="container">
            <form action="/cadastro" method="POST">
                <div class="form first">
                    <div class="details personal">
                        <span class="title">Cadastro</span>
                        <div class="fields">
                            <div class="input-field">
                                <label for="nome_Cliente">Nome</label>
                                <input type="text" placeholder="Insira seu nome completo" id="nome" name="nome_Cliente" required>
                            </div>
                            <div class="input-field">
                                <label for="CPF_Cliente">CPF</label>
                                <input type="text" placeholder="Insira seu CPF" id="cpf" name="CPF_Cliente" required>
                            </div>
                            <div class="input-field">
                                <label for="RG_Cliente">RG</label>
                                <input type="text" placeholder="Insira seu RG" id="rg" name="RG_Cliente" required>
                            </div>
                            <div class="input-field">
                                <label for="dataNasc_Cliente">Data de Nascimento</label>
                                <input type="date" id="date" name="dataNasc_Cliente" required>
                            </div>
                            <div class="input-field">
                                <label for="email_Cliente">Email</label>
                                <input type="text" placeholder="Insira seu email" id="email" name="email_Cliente" required>
                            </div>
                            <div class="input-field">
                                <label for="tel_Cliente">Celular</label>
                                <input type="text" placeholder="Insira seu telefone celular" id="tel" name="tel_Cliente" required>
                            </div>
                            <div class="input-field">
                                <label for="genero_Cliente">Gênero</label>
                                <select name="genero_Cliente" id="genero" required>
                                    <option value="none" disabled selected>Selecione o gênero</option>
                                    <option value="Masculino">Masculino</option>
                                    <option value="Feminino">Feminino</option>
                                    <option value="Fluido">Fluido</option>
                                    <option value="Não Binário">Não Binário</option>
                                    <option value="Prefiro não informar">Prefiro não informar</option>
                                </select>
                            </div>
                            <div class="input-field">
                                <label for="CEP_Cliente">CEP</label>

                                <input type="text" placeholder="Insira seu CEP" id="CEP" name="CEP_Cliente" required>

                            </div>
                            <div class="input-field">
                                <label for="estado_Cliente">Estado</label>
                                <select name="estado_Cliente" id="estado_Cliente" required>
                                    <option value="none" disabled selected>Selecione o estado</option>
                                    <!-- Script para adicionar options para cada estado -->
                                    <script>
                                        var estados = ['AC', 'AL', 'AP', 'AM', 'BA', 'CE', 'DF', 'ES', 'GO', 'MA', 'MT', 'MS', 'MG', 'PA', 'PB', 'PR', 'PE', 'PI', 'RJ', 'RN', 'RS', 'RO', 'RR', 'SC', 'SP', 'SE', 'TO'];

                                        for (var i = 0; i < estados.length; i++) {
                                            var option = document.createElement('option');
                                            option.value = estados[i];
                                            option.textContent = estados[i];
                                            document.getElementById('estado_Cliente').appendChild(option);
                                        }
                                    </script>
                                </select>
                            </div>
                            <div class="input-field">
                                <label for="cidade_Cliente">Cidade</label>
                                <input type="text" placeholder="Insira uma cidade" id="cidade" name="cidade_Cliente" required>
                            </div>

                            <div class="input-field">
                                <label for="bairro_Cliente">Bairro</label>
                                <input type="text" placeholder="Insira um bairro" id="bairro" name="bairro_Cliente">

                            </div>

                            <div class="input-field">
                                <label for=" endereco_Cliente">Endereço</label>
                                <input type="text" placeholder="Insira uma endereço" id="endereco" name=" endereco_Cliente">

                            </div>

                            <div class="input-field">
                                <label for="numero_Cliente">Número</label>

                                <input type="text" placeholder="Insira um número" id="numero" name=" numero_Cliente" required>
                            </div>

                            <div class="input-field">
                                <label for="complemento_Cliente">Complemento</label>
                                <input type="text" placeholder="Insira um complemento" id="complemento" name="complemento_Cliente" required>
                            </div>
                            <div class="input-field senha">
                                <label for="senha_Cliente">Senha</label>
                                <input type="password" placeholder="Crie uma senha" id="senha" name="senha_Cliente" maxlength="8" required>
                            </div>

                            <div class="input-field senha">
                                <label for="senhaConfirm_contr">Confirme sua senha</label>
                                <input type="password" placeholder="Confirme sua senha" id="senhaconfirm" maxlength="8" name="senhaConfirm_contr" required>
                            </div>

                        </div>
                    </div>
                    <div class="details ID">
                        <input type="hidden" name="cadastrocli" value="cadastrarcli">
                        <div class="btnn">
                            <button class="nextBtn" id="btn" onclick="analisar()">
                                <span class="btnText">Prosseguir</span>
                                <i class="uil uil-navigator"></i>
                            </button>
                            <p style="color: black;">Já possui cadastro? <a href="login.html">Faça Login</a></p>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="../../public/assets/js/cep.js" type='module' defer></script>
</body>

</html>