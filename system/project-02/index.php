<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/main.css">
</head>

<body>
    <div class="loader">
        <div class="spinner"></div>
    </div>

    <section id="login">
        <div class="container">
            <div class="left">
                <div class="title">
                    <h1 class="title__main">Talk Me</h1>
                    <p class="title__desc">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Enim, reprehenderit aut labore exercitationem.
                    </p>
                </div>
            </div>
            <div class="right">
                <div class="logo">Login</div>
                <form action="./posts.php" method="get">
                    <div class="field-group">
                        <input type="text" id="member[email]" class="field large">
                        <label for="member[email]">E-mail <div class="feedback"></div></label>
                    </div>
                    <div class="field-group">
                        <input type="password" id="member[password]" class="field large">
                        <label for="member[password]">Senha <div class="feedback"></div></label>
                    </div>
                    <a data-href="forgot-password" class="tab-toggler forgot-password">Esqueci minha senha</a>
                    <a href="./posts.php" class="button primary large fluid"><i class="login"></i> ENTRAR</a>
                    <a data-href="register" class="tab-toggler register">Criar uma conta</a>
                </form>
            </div>
        </div>
    </section>

    <section id="register">
        <div class="container">
            <div class="left">
                <div class="title">
                    <h1 class="title__main">Talk Me</h1>
                    <p class="title__desc">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Enim, reprehenderit aut labore exercitationem.
                    </p>
                </div>
            </div>
            <div class="right">
                <div class="logo">Cadastrar</div>
                <form action="." method="get">
                    <div class="grid">
                        <div class="col-md-6">
                            <div class="field-group">
                                <input type="text" id="member[name]" class="field large">
                                <label for="member[name]">Nome <div class="feedback"></div></label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="field-group">
                                <input type="text" id="member[surname]" class="field large">
                                <label for="member[surname]">Sobrenome <div class="feedback"></div></label>
                            </div>
                        </div>
                    </div>
                    <div class="field-group">
                        <input type="text" id="member[email]" class="field large">
                        <label for="member[email]">E-mail <div class="feedback"></div></label>
                    </div>
                    <div class="field-group">
                        <input type="password" id="member[password]" class="field large">
                        <label for="member[password]">Senha <div class="feedback"></div></label>
                    </div>
                    <button type="button" data-href="login" class="tab-toggler button primary large fluid"><i class="login"></i> ENTRAR</button>
                    <a data-href="login" class="tab-toggler register">Já tenho uma conta</a>
                </form>
            </div>
        </div>
    </section>

    <section id="forgot-password">
        <div class="container">
            <div class="left">
                <div class="title">
                    <h1 class="title__main">Talk Me</h1>
                    <p class="title__desc">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Enim, reprehenderit aut labore exercitationem.
                    </p>
                </div>
            </div>
            <div class="right">
                <div class="logo">Esqueci <br> minha senha</div>
                <form action="." method="get">
                    <div class="field-group">
                        <input type="text" id="member[email]" class="field large">
                        <label for="member[email]">E-mail <div class="feedback"></div></label>
                    </div>
                    <button type="button" data-href="login" class="tab-toggler button primary large fluid"><i class="login"></i> ENTRAR</button>
                    <a data-href="login" class="tab-toggler login">Lembrei minha senha</a>
                </form>
            </div>
        </div>
    </section>

    <script src="./js/main.js"></script>
    <script src="./js/page/index.js"></script>
</body>

</html>