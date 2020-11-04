<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/main.css">
</head>

<body>
    <!-- START: MENU -->
    <label for="menu-toggler" class="button icon grey4">
        <i class="mi">menu</i>
    </label>
    <input type="checkbox" class="none" id="menu-toggler">
    <section id="menu">
        <div class="container">
            <div class="left">
                <div class="logo">
                    <div class="logo__symbol">
                        <h3>FI</h3>
                    </div>
                    <h4 class="logo__text">Felipe Iwamoto</h4>
                </div>
            </div>
            <div class="right">
                <ul class="menu">
                    <li class="menu__item"><a href="#banner" class="menu__link">Principal</a></li>
                    <li class="menu__item"><a href="#about-us" class="menu__link menu__link--active">Sobre nós</a></li>
                    <li class="menu__item"><a href="#best-seller" class="menu__link">Mais vendidos</a></li>
                    <li class="menu__item"><a href="#newsletter" class="menu__link">Newsletter</a></li>
                    <li class="menu__item"><a href="#contact" class="menu__link">Contato</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!-- END: MENU -->

    <!-- START: BANNER -->
    <section id="banner">
        <div class="container small">
            <div class="banner">
                <?php for ($i = 1; $i <= 4; $i++) { ?>
                    <div class="banner__item container small">
                        <div class="grid big">
                            <div class="col-sm-6">
                                <h2 class="banner__title">Lorem ipsum <?= $i ?></h2>
                                <p class="banner__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, accusamus.</p>
                            </div>
                            <div class="col-sm-6">
                                <div class="banner__image">
                                    <img src="#" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- END: BANNER -->

    <!-- START: ABOUT US -->
    <section id="about-us">
        <div class="container">
            <div class="grid big">
                <div class="col-md-6">
                    <div class="rect filled"></div>
                    <div class="rect filled"></div>
                    <div class="rect"></div>
                    <div class="rect"></div>
                    <div class="image">
                        <img src="#" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="rect filled"></div>
                    <div class="rect"></div>
                    <h2>SOBRE NÓS</h2>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Id molestiae facere eaque nesciunt sint omnis suscipit a
                        autem quasi vel quisquam eveniet veritatis quod esse,
                        debitis officiis ipsam dolorem quas!
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- END: ABOUT US -->

    <!-- START: BEST SELLER -->
    <section id="best-seller">
        <div class="container tiny">
            <h2>MAIS VENDIDOS</h2>
            <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Id molestiae facere eaque nesciunt sint omnis suscipit a
                autem quasi vel quisquam eveniet veritatis quod esse,
                debitis officiis ipsam dolorem quas!
            </p>
        </div>
        <div class="container">
            <div class="grid big product">
                <?php for ($i = 1; $i <= 6; $i++) { ?>
                    <div class="col-md-4 col-xs-6">
                        <div class="product__item">
                            <div class="product__image">
                                <img src="#" alt="">
                            </div>
                            <div class="product__footer">
                                <div class="product__left">
                                    <h4 class="product__name">Lorem ipsum dolor</h4>
                                </div>
                                <div class="product__right">
                                    <h3 class="product__price">R$ <strong><?= rand(4, 99) ?></strong></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- END: BEST SELLER -->

    <!-- START: NEWSLETTER -->
    <section id="newsletter">
        <div class="container">
            <div class="left">
                <div class="grid">
                    <div class="col-md-9 col-xs-9">
                        <div class="field-group">
                            <input type="text" class="field" id="newsletter-email" name="newsletter-email" placeholder="Digite seu e-mail">
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-3">
                        <button class="button white fluid">ASSINAR</button>
                    </div>
                </div>
            </div>
            <div class="right">
                <h2>NEWSLETTER</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Blanditiis eum fuga repudiandae quod! Laudantium fuga
                    voluptas vero nobis. Rerum minus voluptatibus id veritatis
                    facere alias nulla animi consequuntur neque tempora.
                </p>
            </div>
        </div>
    </section>
    <!-- END: NEWSLETTER -->

    <!-- START: CONTACT -->
    <section id="contact">
        <div class="container">
            <div class="grid big">
                <div class="col-sm-6">
                    <h2>CONTATO</h2>

                    <ul class="contact">
                        <li class="contact__item">
                            website@email.com
                            <div class="contact__icon"><i class="mi">mail</i></div>
                        </li>
                        <li class="contact__item">
                            (99) 9.9999-9999
                            <div class="contact__icon"><i class="mi">phone</i></div>
                        </li>
                        <li class="contact__item">
                            Lorem ipsum dolor sit amet<br> consectetur adipisicing.
                            <div class="contact__icon"><i class="mi">place</i></div>
                        </li>
                    </ul>

                    <ul class="social">
                        <li class="social__item">
                            <a href="#" class="social__link">
                                Facebook
                                <div class="social__icon"><i class="fab fa-facebook-f"></i></div>
                            </a>
                        </li>
                        <li class="social__item">
                            <a href="#" class="social__link">
                                Instagram
                                <div class="social__icon"><i class="fab fa-instagram"></i></div>
                            </a>
                        </li>
                        <li class="social__item">
                            <a href="#" class="social__link">
                                Youtube
                                <div class="social__icon"><i class="fab fa-youtube"></i></div>
                            </a>
                        </li>
                        <li class="social__item">
                            <a href="#" class="social__link">
                                Twitter
                                <div class="social__icon"><i class="fab fa-twitter"></i></div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-6">
                    <form>
                        <div class="grid">
                            <div class="col-md-6">
                                <div class="field-group">
                                    <input type="text" class="field" name="name" id="name" placeholder="Ex: João da Silva">
                                    <label for="name">Nome completo</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="field-group">
                                    <input type="text" class="field" name="email" id="email" placeholder="Ex joao.da.silva@gmail.com">
                                    <label for="email">E-mail</label>
                                </div>
                            </div>
                        </div>
                        <div class="field-group">
                            <input type="text" class="field" name="subject" id="subject" placeholder="Ex: Proposta de trabalho">
                            <label for="subject">Assunto</label>
                        </div>
                        <div class="field-group">
                            <textarea class="field" name="content" id="content" rows="7"></textarea>
                            <label for="content">Mensagem</label>
                        </div>
                        <div class="grid">
                            <div class="col-sm-4 col-xs-6">
                                <button class="button fluid">ENVIAR</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- END: CONTACT -->

    <!-- START: MAP -->
    <section id="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d230483.1797142007!2d-49.429883892450135!3d-25.495050065392732!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dce35351cdb3dd%3A0x6d2f6ba5bacbe809!2sCuritiba%2C%20PR!5e0!3m2!1spt-BR!2sbr!4v1601210264881!5m2!1spt-BR!2sbr" allowfullscreen="false" tabindex="0"></iframe>
    </section>
    <!-- END: MAP -->

    <!-- START: FOOTER -->
    <section id="footer">
        <div class="container">
            <div class="grid massive">
                <div class="col-md-4">
                    <div class="logo">
                        <div class="logo__symbol">
                            <h3>FI</h3>
                        </div>
                        <h4 class="logo__text">Felipe Iwamoto</h4>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="menu">
                        <li class="menu__item">
                            <a href="#" class="menu__link">Lorem.</a>
                        </li>
                        <li class="menu__item">
                            <a href="#" class="menu__link">Nesciunt!</a>
                        </li>
                        <li class="menu__item">
                            <a href="#" class="menu__link">Quam?</a>
                        </li>
                        <li class="menu__item">
                            <a href="#" class="menu__link">Sapiente.</a>
                        </li>
                        <li class="menu__item">
                            <a href="#" class="menu__link">Magnam?</a>
                        </li>
                        <li class="menu__item">
                            <a href="#" class="menu__link">Ratione.</a>
                        </li>
                    </div>
                    <p class="copyright">Todos os direitos reservados</p>
                </div>
            </div>
        </div>
    </section>
    <script type="module" src="/js/main.js"></script>
</body>

</html>