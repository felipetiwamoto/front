<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/main.css">
</head>

<body id="page-register" class="primary">
    <form id="register-form" action="/index.php" method="get" novalidate>
        <div class="left">
            <h1>CADASTRAR</h1>
            <div class="fields">
                <div class="grid">
                    <div class="col-sm-6 col-xs-12">
                        <div class="field-group">
                            <input type="text" required class="field" id="name" placeholder="Ex: João">
                            <label for="name">
                                Nome
                                <div class="callback"></div>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <div class="field-group">
                            <input type="text" required class="field" id="surname" placeholder="Ex: da Silva">
                            <label for="surname">
                                Sobrenome
                                <div class="callback"></div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="field-group">
                    <input type="text" required class="field" id="email" placeholder="Ex: joao.da.silva@gmail.com">
                    <label for="email">
                        E-mail
                        <div class="callback"></div>
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
                    <button class="button fluid primary">Cadastrar</button>
                </div>
            </div>

            <a href="/index.php">Já tenho uma conta</a>
        </div>
        <div class="right">
            <img src="/images/register-right.svg">
        </div>
    </form>
    <script src="/plugins/jquery/jquery.js"></script>
    <script src="/plugins/form-saver/form-saver.js"></script>
    <script src="/plugins/toast/toast.min.js"></script>
    <script src="/js/form-validation.js"></script>
    <script src="/js/main.js"></script>
</body>

</html>