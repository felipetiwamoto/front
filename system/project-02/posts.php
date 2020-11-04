<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/main.css">
</head>

<body>
    <div class="loader">
        <div class="spinner"></div>
    </div>

    <section id="posts">
        <header class="top">
            <div class="top__banner">
                <img src="/images/wallpapers/(<?= $n = rand(1, 8) ?>).jpg" alt="Papel de parede <?= $n ?>">
            </div>
            <div class="container">
                <div class="top__left">
                    <div class="top__body">
                        <div class="top__image">
                            <img src="/images/members/(<?= $n = rand(1, 25) ?>).png" alt="Nome Sobrenome <?= $n ?>">
                        </div>
                        <div class="top__name">Nome Sobrenome <?= $n ?></div>
                    </div>
                </div>
                <div class="top__right">
                    <div class="top__tab">
                        <ul class="tab">
                            <li class="tab__item"><a data-href="#" class="tab__link">Timeline</a></li>
                            <li class="tab__item"><a data-href="#" class="tab__link">Galeria</a></li>
                            <li class="tab__item"><a data-href="#" class="tab__link">Grupos</a></li>
                            <li class="tab__item"><a data-href="#" class="tab__link">Informações</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <main class="content">
            <div class="container">
                <div class="posts">
                    <div class="grid big">
                        <?php for ($i = 1; $i <= 10; $i++) : ?>
                            <div class="col-md-6">
                                <div class="post">
                                    <div class="post__header">
                                        <div class="post__user-image">
                                            <img src="/images/members/(<?= $n = rand(1, 25) ?>).png" alt="Nome Sobrenome <?= $n ?>">
                                        </div>
                                        <h4 class="post__name">Nome Sobrenome <?= $n ?></h4>
                                    </div>
                                    <div class="post__body">
                                        <?php if (rand(1, 2) % 2 == 0) : ?>
                                            <div class="post__image">
                                                <img src="/images/posts/(<?= $n = rand(1, 8) ?>).jpg" alt="Postagem <?= $n ?>">
                                            </div>
                                        <?php endif ?>
                                        <p class="post__desc">
                                            <?php for ($j = 1; $j <= rand(1, 3); $j++) : ?>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                Blanditiis amet necessitatibus molestias fugiat consequatur
                                                at sint reprehenderit eaque deleniti officia?
                                                <br>
                                            <?php endfor ?>
                                        </p>
                                    </div>
                                    <div class="post__reaction">
                                        <ul class="reaction">
                                            <li class="reaction__item">like</li>
                                            <li class="reaction__item">love</li>
                                            <li class="reaction__item">favorite</li>
                                        </ul>
                                    </div>
                                    <div class="post__comments">
                                        <div class="post__comment">
                                            <div class="post__comment__left">
                                                <div class="post__comment__user-image">
                                                    <img src="/images/members/(<?= $n = rand(1, 25) ?>).png" alt="Nome Sobrenome <?= $n ?>">
                                                </div>
                                                <h5 class="post__comment__name">Nome Sobrenome <?= $n ?></h5>
                                            </div>
                                            <div class="post__comment__right">
                                                <p class="post__comment__desc">
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                    Repellendus dolorum.
                                                </p>
                                            </div>
                                        </div>
                                        <form>
                                            <div class="grid zero">
                                                <div class="col-md-9">
                                                    <div class="field-group">
                                                        <input type="text" class="field" id="comment[desc]" placeholder="Digite seu comentário...">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <button class="button fluid primary">enviar</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        <?php endfor ?>
                    </div>
                </div>
            </div>
        </main>
    </section>

    <div class="chat">
        <div class="chat__left">
            <div class="chat__contact">
                <div class="chat__contact-header">
                    <div class="field-group">
                        <input type="text" id="contact__search" class="field" placeholder="Buscar por...">
                    </div>
                </div>
                <div class="chat__contact-body">
                    <div class="contact">
                        <?php for ($i = 1; $i <= 25; $i++) : ?>
                            <div class="contact__item">
                                <div class="contact__image">
                                    <img src="/images/members/(<?= $i ?>).png" alt="Nome Sobrenome <?= $i ?>">
                                </div>
                                <div class="contact__status online"></div>
                                <div class="contact__message"><?= rand(1, 25) ?></div>
                                <div class="contact__name">Nome Sobrenome <?= $i ?></div>
                            </div>
                        <?php endfor ?>
                    </div>
                </div>
            </div>
            <div class="chat__conversation">
                <div class="chat__conversation-header">
                    <div class="contact">
                        <div class="contact__image">
                            <img src="/images/members/(<?= $n = rand(1, 25) ?>).png" alt="Nome Sobrenome <?= $n ?>">
                        </div>
                        <div class="contact__status online"></div>
                        <div class="contact__name">Nome Sobrenome <?= $n ?></div>
                    </div>
                </div>
                <div class="chat__conversation-body">
                    <div class="message">
                        <?php for ($i = 1; $i <= 10; $i++) : ?>
                            <div class="message__theirs">
                                <p>Lorem, ipsum dolor.</p>
                                <p>Totam, consequatur reiciendis.</p>
                            </div>
                            <div class="message__mines">
                                <p>At, cum unde.</p>
                                <p>Cupiditate, facilis architecto?</p>
                                <p>Quia, sed voluptatem.</p>
                                <p>Ut, quae mollitia!</p>
                                <p>Molestias, porro voluptas?</p>
                            </div>
                        <?php endfor ?>
                    </div>
                </div>
                <div class="chat__conversation-footer">
                    <div class="field-group">
                        <input type="text" class="field" placeholder="Digite sua mensagem...">
                    </div>
                </div>
            </div>
        </div>
        <div class="chat__right">
            <div class="icon">
                <?php for ($i = 1; $i <= 6; $i++) : ?>
                    <div class="icon__item">
                        <div class="icon__image">
                            <img src="/images/members/(<?= $n = rand(1, 25) ?>).png" alt="Nome Sobrenome <?= $n ?>">
                        </div>
                        <div class="icon__status online"></div>
                        <div class="icon__message"><?= rand(1, 25) ?></div>
                        <div class="icon__name">Nome Sobrenome <?= $n ?></div>
                    </div>
                <?php endfor ?>
            </div>
            <div class="contact-toggler"></div>
        </div>
    </div>

    <script src="/js/main.js"></script>
    <script src="/js/page/posts.js"></script>
</body>

</html>