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
    <link href="../css/style.css" rel="stylesheet">

</head>

<body>
    <div class="container--body">
        <div class="container--card">
            <div class="container--logo">
                <img src="../img/comunidade.jpg" />
            </div>
            <div>
                <nav>
                    <ul>
                        <li>
                            <!--<a class="container--button--a" href="/login">Login</a>-->
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="container--div">
            <form method="POST" action="/painel/logar" class="container--form">
                @csrf
                @if (count($errors) > 0)
                    <div class="card--container border--left--danger">
                        <div class="card--body">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif
                <div class="container--area">
                    <div class="container--title">E-mail</div>
                    <div class="container--input">
                        <input type="email" placeholder="E-mail" name="email" id="email" required />
                    </div>
                </div>
                <div class="container--area">
                    <div class="container--title">Senha</div>
                    <div class="container--input">
                        <input type="password" placeholder="Senha" name="password" id="password" required />
                    </div>
                </div>
                <div class="container--area">
                    <div class="container--title"></div>
                    <div class="container--input">
                        <button type="submit" class="container--button" name="btnCadastrar">Entrar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>

</html>
