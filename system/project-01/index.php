<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/main.css">
</head>

<body id="page-login" class="primary">
    <form id="login-form" action="/list.php" method="get" novalidate>
        <div class="left">
            <img src="/images/login-left.svg">
        </div>
        <div class="right">
            <h1>LOGIN</h1>
            <div class="fields">
                <div class="field-group">
                    <input type="text" required class="field" id="email" placeholder="Ex: joao.da.silva@gmail.com">
                    <label for="email">
                        E-mail
                        <div class="callback">Este campo é obrigatório!</div>
                    </label>
                </div>
                <div class="field-group">
                    <input type="password" required data-minlength="6" class="field" id="password" placeholder="Digite sua senha">
                    <label for="password">
                        Senha
                        <div class="callback"></div>
                    </label>
                </div>
                <div class="field-group">
                    <button class="button fluid primary">Entrar</button>
                </div>
            </div>

            <a href="/register.php">Ainda não tem conta?</a>
        </div>
    </form>
    <script src="/plugins/jquery/jquery.js"></script>
    <script src="/plugins/toast/toast.min.js"></script>
    <script src="/plugins/form-saver/form-saver.js"></script>
    <script src="/js/main.js"></script>
    <script src="/js/form-validation.js"></script>
</body>

</html>