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

    <a href="home.html"><div id="logo">
        <img src="../../public/assets/img/20.png" alt="Logo">
    </div></a>

    <div class="tudo">
        <div class="container">
            <form action="" method="">
                <div class="form first">
                    <div class="details personal">
                        <span class="title">Cadastro</span>
                        <div class="fields">
                            <div class="input-field">
                                <label for="nome_contr">Nome</label>
                                <input type="text" placeholder="Insira seu nome completo" id="nome" name="nome" required>
                            </div>
                            <div class="input-field">
                                <label for="CPF_contr">CPF</label>
                                <input type="text" placeholder="Insira seu CPF" id="cpf" name="CPF_contr" required>
                            </div>
                            <div class="input-field">
                                <label for="RG_contr">RG</label>
                                <input type="text" placeholder="Insira seu RG" id="rg" name="RG_contr" required>
                            </div>
                            <div class="input-field">
                                <label for="dt_nasc">Data de Nascimento</label>
                                <input type="date" id="date" name="dt_nasc" required>
                            </div>
                            <div class="input-field">
                                <label for="email_contr">Email</label>
                                <input type="text" placeholder="Insira seu email" id="email" name="email_contr" required>
                            </div>
                            <div class="input-field">
                                <label for="celular_contr">Celular</label>
                                <input type="text" placeholder="Insira seu telefone celular" id="tel" name="celular_contr" required>
                            </div>
                            <div class="input-field">
                                <label for="genero">Gênero</label>
                                <select name="genero" id="genero" required>
                                    <option value="none" disabled selected>Selecione o gênero</option>
                                    <option value="Masculino">Masculino</option>
                                    <option value="Feminino">Feminino</option>
                                    <option value="Outros">Outros</option>
                                </select>
                            </div>
                            <div class="input-field">
                                <label for="CEP_contr">CEP</label>

                                <input type="text" placeholder="Insira seu CEP" id="CEP" name="CEP_contr" required>

                            </div>
                            <div class="input-field">
                                <label for="estado_contr">Estado</label>
                                <input type="text" placeholder="Insira um estado" id="estado" name="estado_contr" required>
                            </div>
                            <div class="input-field">
                                <label for="cidade_contr">Cidade</label>
                                <input type="text" placeholder="Insira uma cidade" id="cidade" name="cidade_contr" required>
                            </div>
                            
                            <div class="input-field">
                                <label for="bairro_contr">Bairro</label>
                            <input type="text" placeholder="Insira um bairro" id="bairro" name="bairro_contr">

                        </div>

                            <div class="input-field">
                                <label for="end_contr">Endereço</label>
                                <input type="text" placeholder="Insira uma endereço" id="endereco" name="end_contr">

                                                            </div>

                            <div class="input-field">
                                <label for="numero_contr">Número</label>

                                <input type="text" placeholder="Insira um número" id="numero" name="numero_contr" required>
                            </div>

                            <div class="input-field">
                                <label for="complemento_contr">Complemento</label>
                                <input type="text" placeholder="Insira um complemento" id="complemento" name="complemento_contr" required>
                            </div>
                            <div class="input-field senha">
                                <label for="senha_contr">Senha</label>
                                <input type="password" placeholder="Crie uma senha" id="senha" name="senha_contr"  maxlength="8" required>
                            </div>

                            <div class="input-field senha">
                                <label for="senhaConfirm_contr">Confirme sua senha</label>
                                <input type="password" placeholder="Confirme sua senha" id="senhaconfirm"  maxlength="8" name="senhaConfirm_contr" required>
                            </div>

                        </div>
                    </div>
                    <div class="details ID">
                        <input type="hidden" name="cadastrocontr" value="cadastrarcontr">
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