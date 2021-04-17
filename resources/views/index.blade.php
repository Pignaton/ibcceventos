<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Blank</title>
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="css/style.css" rel="stylesheet">

</head>

<body>
    <div class="container--body">
        <div class="container--card">
            <div class="container--logo">
                <img src="img/comunidade.jpg" />
            </div>
            <div>
                <nav>
                    <ul>
                        <li>
                            <a class="container--button--a" href="/painel/login">Login</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="container--div">
            <form method="POST" action="" class="container--form">
                @csrf
                <div class="container--area">
                    <div class="container--title">Nome</div>
                    <div class="container--input">
                        <input type="text" placeholder="Nome" name="name" id="name"  />
                    </div>
                </div>
                <div class="container--area">
                    <div class="container--title">E-mail</div>
                    <div class="container--input">
                        <input type="email" placeholder="E-mail" name="email" id="email"  />
                    </div>
                </div>
                <div class="container--area">
                    <div class="container--title">Idade</div>
                    <div class="container--input">
                        <input type="email" placeholder="E-mail" name="age" id="age" />
                    </div>
                </div>
                <div class="container--area">
                    <div class="container--title">Data de Nascimento</div>
                    <div class="container--input">
                        <input type="text" placeholder="" name="birthdate" id="birthdate" />
                    </div>
                </div>
                <div class="container--area">
                    <div class="container--title">telefone</div>
                    <div class="container--input">
                        <input type="text" name="phone" id="phone" />
                    </div>
                </div>
                <div class="container--area">
                    <div class="container--title">Sexo</div>
                    <div class="container--input">
                        <select>
                            <option value=""></option>
                            <option value="M">Masculino</option>
                            <option value="F">Feminino</option>
                        </select>
                    </div>
                </div>
                <div class="container--area">
                    <div class="container--title">Cep</div>
                    <div class="container--input">
                        <input type="email" placeholder="cep" name="cep" id="cep" />
                    </div>
                </div>
                <div class="container--area">
                    <div class="container--title">Rua</div>
                    <div class="container--input">
                        <input type="email" placeholder="Rua" name="road" id="road" />
                    </div>
                </div>
                <div class="container--area">
                    <div class="container--title">Cidade</div>
                    <div class="container--input">
                        <input type="email" placeholder="Cidade" name="city" id="city" />
                    </div>
                </div>
                <div class="container--area">
                    <div class="container--title">Estado</div>
                    <div class="container--input">
                        <input type="email" placeholder="Estado" name="state" id="state" />
                    </div>
                </div>
                <div class="container--area">
                    <div class="container--title">Número</div>
                    <div class="container--input" name="number" id="number">
                        <input type="text" />
                    </div>
                </div>
                <div class="container--area">
                    <div class="container--title">Complemento</div>
                    <div class="container--input" name="complement" id="complement">
                        <input type="text" />
                    </div>
                </div>
                <div class="container--area">
                    <div class="container--title"></div>
                    <div class="container--input">
                        <button type="email" class="container--button" name="btnCadastrar">Cadastrar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>

</html>
