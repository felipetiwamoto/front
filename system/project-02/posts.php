<?php

if(!function_exists("randBetween")){
    function randBetween(array $args = [])
    {
        $rand = rand(0, (count($args) - 1));
        return $args[$rand];
    }
}

?>

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

    <header class="top">
        <div class="top__banner">
            <img src="./images/wallpapers/(<?= $n = rand(1, 8) ?>).jpg" alt="Papel de parede <?= $n ?>">
        </div>
        <div class="container">
            <div class="top__left">
                <div class="top__body">
                    <div class="top__image">
                        <img src="./images/members/(<?= $n = rand(1, 25) ?>).png" alt="Nome Sobrenome <?= $n ?>">
                    </div>
                    <div class="top__name">Nome Sobrenome <?= $n ?></div>
                </div>
            </div>
            <div class="top__right">
                <div class="top__tab">
                    <ul class="tab">
                        <li class="tab__item"><a data-href="timeline" class="tab__link tab-toggler tab__link--active">Timeline</a></li>
                        <li class="tab__item"><a data-href="gallery" class="tab__link tab-toggler">Galeria</a></li>
                        <li class="tab__item"><a data-href="groups" class="tab__link tab-toggler">Grupos</a></li>
                        <li class="tab__item"><a data-href="information" class="tab__link tab-toggler">Informações</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <!-- Start: Timeline -->
    <section id="timeline">
        <main class="content">
            <div class="container">
                <div class="posts">
                    <div class="grid big">
                        <?php for ($i = 1; $i <= 10; $i++) : ?>
                            <div class="col-md-6">
                                <div class="post">
                                    <div class="post__header">
                                        <a class="post__user-image" href="./posts.php">
                                            <img src="./images/members/(<?= $n = rand(1, 25) ?>).png" alt="Nome Sobrenome <?= $n ?>">
                                        </a>
                                        <a href="./posts.php">
                                            <h4 class="post__name">Nome Sobrenome <?= $n ?></h4>
                                            <span class="post__date">01/01/2020 23:59</span>
                                        </a>
                                    </div>
                                    <div class="post__body">
                                        <?php if (rand(1, 2) % 2 == 0) : ?>
                                            <div class="post__image">
                                                <img src="./images/posts/(<?= $n = rand(1, 8) ?>).jpg" alt="Postagem <?= $n ?>">
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
                                            <li class="reaction__item"><i class="mi">thumb_up</i></li>
                                            <li class="reaction__item"><i class="mi">favorite</i></li>
                                            <li class="reaction__item"><i class="mi">star</i></li>
                                        </ul>
                                    </div>
                                    <div class="post__comments">
                                        <div class="post__comment">
                                            <div class="post__comment__left">
                                                <a class="post__comment__user-image" href="./posts.php">
                                                    <img src="./images/members/(<?= $n = rand(1, 25) ?>).png" alt="Nome Sobrenome <?= $n ?>">
                                                </a>
                                                <a href="./posts.php">
                                                    <h5 class="post__comment__name">Nome Sobrenome <?= $n ?></h5>
                                                    <span class="post__comment__date">01/01/2020 23:59</span>
                                                </a>
                                            </div>
                                            <div class="post__comment__right">
                                                <p class="post__comment__desc">
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                    Repellendus dolorum.
                                                </p>
                                            </div>
                                        </div>
                                        <form>
                                            <div class="grid mini">
                                                <div class="col-xs-10">
                                                    <div class="field-group">
                                                        <input type="text" class="field" id="comment[desc]" placeholder="Digite seu comentário...">
                                                    </div>
                                                </div>
                                                <div class="col-xs-2">
                                                    <button class="button fluid primary"><i class="mi">send</i></button>
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
    <!-- End: Timeline -->

    <!-- Start: Gallery -->
    <section id="gallery">
        <main class="content">
            <div class="container">
                <div class="gallery">
                    <?php for ($j = 0; $j < rand(2, 5); $j++) : ?>
                        <div class="gallery__item">
                            <h4 class="gallery__title">Galeria 01</h4>
                            <div class="grid twenty mini">
                                <?php for ($i = 0; $i < rand(2, 10); $i++) : ?>
                                    <div class="col-lg-4 col-md-5 col-xs-10">
                                        <div class="gallery__image">
                                            <img src="./images/wallpapers/(<?= $n = rand(1, 8) ?>).jpg" alt="Papel de parede <?= $n ?>">
                                        </div>
                                    </div>
                                <?php endfor ?>
                            </div>
                        </div>
                    <?php endfor ?>
                </div>
            </div>
        </main>
    </section>
    <!-- End: Gallery -->

    <!-- Start: Groups -->
    <section id="groups">
        <main class="content">
            <div class="container">
                <div class="group">
                    <div class="grid">
                        <?php for ($i = 0; $i < rand(10, 20); $i++) : ?>
                            <div class="col-md-3 col-sm-6">
                                <div class="group__item">
                                    <div class="group__image">
                                        <img src="./images/wallpapers/(<?= $n = rand(1, 8) ?>).jpg" alt="Papel de parede <?= $n ?>">
                                    </div>
                                    <h5 class="group__name">Grupo 0<?= $i ?></h5>
                                    <p class="group__desc">
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id perferendis corporis dicta temporibus facere reiciendis ratione ut iusto corrupti.
                                    </p>
                                </div>
                            </div>
                        <?php endfor ?>
                    </div>
                </div>
            </div>
        </main>
    </section>
    <!-- End: Groups -->

    <!-- Start: Information -->
    <section id="information">
        <main class="content">
            <div class="container">
                <div class="grid large">
                    <div class="col-md-3 col-sm-5">
                        <ul class="tab">
                            <li class="tab__item">
                                <a href="#" class="tab__link">
                                    <div class="tab__icon"><i class="mi">home</i></div>
                                    <h5 class="tab__title">Visão Geral</h5>
                                </a>
                            </li>
                            <li class="tab__item">
                                <a href="#" class="tab__link tab__link--active">
                                    <div class="tab__icon"><i class="mi">home</i></div>
                                    <h5 class="tab__title">Trabalho e educação</h5>
                                </a>
                            </li>
                            <li class="tab__item">
                                <a href="#" class="tab__link">
                                    <div class="tab__icon"><i class="mi">home</i></div>
                                    <h5 class="tab__title">Locais onde morou</h5>
                                </a>
                            </li>
                            <li class="tab__item">
                                <a href="#" class="tab__link">
                                    <div class="tab__icon"><i class="mi">home</i></div>
                                    <h5 class="tab__title">Informações básicas e de contato</h5>
                                </a>
                            </li>
                            <li class="tab__item">
                                <a href="#" class="tab__link">
                                    <div class="tab__icon"><i class="mi">home</i></div>
                                    <h5 class="tab__title">Família e relacionamento</h5>
                                </a>
                            </li>
                            <li class="tab__item">
                                <a href="#" class="tab__link">
                                    <div class="tab__icon"><i class="mi">home</i></div>
                                    <h5 class="tab__title">Detalhes sobre você</h5>
                                </a>
                            </li>
                            <li class="tab__item">
                                <a href="#" class="tab__link">
                                    <div class="tab__icon"><i class="mi">home</i></div>
                                    <h5 class="tab__title">Acontecimentos</h5>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-9 col-sm-7">
                        <div class="info">
                            <div class="info__item">
                                <h5 class="info__title">Item 01</h5>
                                <p class="info__desc">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                    Adipisci nisi incidunt quos nihil at ratione architecto
                                    officiis! A, dolore animi dignissimos autem numquam libero
                                    deleniti expedita rem doloribus asperiores facilis?
                                </p>
                            </div>
                            <div class="info__item">
                                <h5 class="info__title">Item 02</h5>
                                <p class="info__desc">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                    Adipisci nisi incidunt quos nihil at ratione architecto
                                    officiis! A, dolore animi dignissimos autem numquam libero
                                    deleniti expedita rem doloribus asperiores facilis?
                                </p>
                            </div>
                            <div class="info__item">
                                <h5 class="info__title">Item 03</h5>
                                <p class="info__desc">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                    Adipisci nisi incidunt quos nihil at ratione architecto
                                    officiis! A, dolore animi dignissimos autem numquam libero
                                    deleniti expedita rem doloribus asperiores facilis?
                                </p>
                            </div>
                            <div class="info__item">
                                <h5 class="info__title">Item 04</h5>
                                <p class="info__desc">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                    Adipisci nisi incidunt quos nihil at ratione architecto
                                    officiis! A, dolore animi dignissimos autem numquam libero
                                    deleniti expedita rem doloribus asperiores facilis?
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </section>
    <!-- End: Information -->

    <!-- Start: Chat -->
    <div class="chat">
        <div class="chat__left">
            <div class="chat__contact" style="display:none;">
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
                                    <img src="./images/members/(<?= $i ?>).png" alt="Nome Sobrenome <?= $i ?>">
                                </div>
                                <div class="contact__status <?= randBetween(["online", "offline", "busy"]) ?>"></div>
                                <div class="contact__message"><?= rand(1, 25) ?></div>
                                <div class="contact__name">Nome Sobrenome <?= $i ?></div>
                            </div>
                        <?php endfor ?>
                    </div>
                </div>
            </div>
            <div class="chat__conversation" style="display:none;">
                <div class="chat__conversation-header">
                    <div class="contact">
                        <div class="contact__image">
                            <img src="./images/members/(<?= $n = rand(1, 25) ?>).png" alt="Nome Sobrenome <?= $n ?>">
                        </div>
                        <div class="contact__status <?= randBetween(["online", "offline", "busy"]) ?>"></div>
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
                            <img src="./images/members/(<?= $n = rand(1, 25) ?>).png" alt="Nome Sobrenome <?= $n ?>">
                        </div>
                        <div class="icon__status <?= randBetween(["online", "offline", "busy"]) ?>"></div>
                        <div class="icon__message"><?= rand(1, 25) ?></div>
                        <div class="icon__name">Nome Sobrenome <?= $n ?></div>
                    </div>
                <?php endfor ?>
            </div>
            <div class="contact-toggler">
                <i class="mi">chat</i>
            </div>
        </div>
    </div>
    <!-- End: Chat -->

    <script src="./js/main.js"></script>
    <script src="./js/page/posts.js"></script>
</body>

</html>