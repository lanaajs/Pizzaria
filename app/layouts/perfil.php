<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="shortcut icon" href="midia/20.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../../public/assets/css/perfil.css">
    <title>Perfil</title>
</head>

<body>
    <header id="cabecalho">

        <div id="logo">
            <img src="../../public/assets/img/LogoBranca.png" alt="">
        </div>
    </header>

    <main class="container-xl px-4 mt-4">
        <nav class="nav nav-borders">
            <a class="nav-link active ms-0" href="#" id="perfil">Perfil</a>
            <a class="nav-link" href="#" id="notificacao">Notificações</a>
        </nav>
        <hr class="mt-0 mb-4">
        <div class="row" id="perfilSection">
            <div class="perfil-cont col-xl-4">
                <div class="mb-4 mb-xl-0">
                    <div class="card-header1">Foto de Perfil</div>
                    <hr class="mt-2 mb-4">
                    <div class="text-center">
                        <img class="foto-perfil rounded-circle mb-2" src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="">

                        <div class="small font-italic mb-4">JPG ou PNG</div>

                        <button type="button">Alterar</button>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="informacoes-pessoais mb-4">
                    <div class="card-header2">Informações Pessoais</div>
                    <hr class="mt-2 mb-4">
                    <div class="card-body">
                        <form>
                            <!-- Form Group (username)--> 
                            <!-- Form Row-->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (first name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputFirstName">Nome</label>
                                    <input class="form-control" id="inputFirstName" type="text" disabled placeholder="Ronaldo">
                                </div>
                                <!-- Form Group (last name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputLastName">Sobrenome</label>
                                    <input class="form-control" id="inputLastName" type="text" disabled placeholder="Santos">
                                </div>
                            </div>
                            <!-- Form Row        -->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (organization name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputOrgName">CPF</label>
                                    <input class="form-control" id="inputOrgName" type="text" disabled placeholder="123.123.123-12">
                                </div>
                                <!-- Form Group (location)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputLocation">RG</label>
                                    <input class="form-control" id="inputLocation" type="text" disabled placeholder="12.121.212-12">
                                </div>
                            </div>
                            <!-- Form Group (email address)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="inputEmailAddress">Email</label>
                                <input class="form-control" id="inputEmailAddress" type="email" placeholder="ronaldo@gmail.com">
                            </div>
                            <!-- Form Row-->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (phone number)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputPhone">Celular</label>
                                    <input class="form-control" id="inputPhone" type="tel" placeholder="(71) 9 1212-2121">
                                </div>
                                <!-- Form Group (birthday)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputBirthday">Data de Nascimento</label>
                                    <input class="form-control" id="inputBirthday" type="text" disabled placeholder="01/09/1980">
                                </div>
                            </div>
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (gender)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="genero">Gênero</label>
                                    <input class="form-control" id="inputBirthday" type="text" disabled placeholder="Masculino">
                                    <!-- <select name="select" class="form-control" id="genero">
                                <option value="valor0" selected></option>
                                <option value="valor1">Masculino</option>
                                <option value="valor2">Feminino</option>
                                <option value="valor3">Não Binário</option>
                            </select> -->
                                </div>
                                <!-- Form Group (cep)-->
                            </div>
                            <div class="row gx-3 mb-3">
                                <div class="col-md-6">
                                    <label class="small mb-1" for="cep">CEP</label>
                                    <input class="form-control" id="cep" type="tel" placeholder="41600-610">
                                </div>
                                <div class="col-md-6">
                                    <label class="small mb-1" for="estado">Estado</label>
                                    <input class="form-control" id="estado" type="tel" placeholder="Bahia">
                                </div>
                            </div>

                            <div class="row gx-3 mb-3">
                                <div class="col-md-6">
                                    <label class="small mb-1" for="cidade">Cidade</label>
                                    <input class="form-control" id="cidade" type="text" placeholder="Salvador">
                                </div>
                                <div class="col-md-6">
                                    <label class="small mb-1" for="bairro">Bairro</label>
                                    <input class="form-control" id="bairro" type="tel" placeholder="Stella Maris">
                                </div>

                            </div>
                            <div class="mb-3">
                                <label class="small mb-1" for="endereco">Endereço</label>
                                <input class="form-control" id="endereco" type="text" placeholder="Rua Alameda Bastos">
                            </div>
                            <div class="mb-3">
                                <label class="small mb-1" for="complemento">Complemento</label>
                                <input class="form-control" id="complemento" type="text" placeholder="Casa 51">
                            </div>
                            <!-- Save changes button-->
                            <button type="button">SALVAR</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row" id="perfilSection2">
                <div class="col-xl-4">
                </div>

                <div class="col-xl-8" id="card_senha">
                    <div class="mb-4">
                        <div class="card-body-senha">
                            <div class="card-header3">Alterar Senha</div>
                            <hr class="mt-2 mb-4">
                            <form>
                                <!-- Form Group (current password)-->
                                <div class="mb-3">
                                    <label class="small mb-1" for="currentPassword">Senha Atual</label>
                                    <input class="form-control" id="currentPassword" type="password" placeholder="Escreva a senha atual">
                                </div>
                                <!-- Form Group (new password)-->
                                <div class="mb-3">
                                    <label class="small mb-1" for="newPassword">Nova Senha</label>
                                    <input class="form-control" id="newPassword" type="password" placeholder="Escreva uma senha nova">
                                </div>
                                <!-- Form Group (confirm password)-->
                                <div class="mb-3">
                                    <label class="small mb-1" for="confirmPassword">Confirme a Nova Senha</label>
                                    <input class="form-control" id="confirmPassword" type="password" placeholder="Confirme a senha nova">
                                </div>
                                <button type="button">SALVAR</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
<script src="Perfil.js"></script>

</html>