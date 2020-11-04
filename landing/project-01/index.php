<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/main.css">
</head>

<body>
    <!-- START: TOP -->
    <section id="top">
        <div class="container">
            <div class="left">
                <ul class="list">
                    <li class="list__item">
                        <div class="list__icon"><i class="mi">phone</i></div>
                        (11) 9.9999-9999
                    </li>
                </ul>
            </div>
            <div class="right">
                <ul class="social">
                    <li class="social__item">
                        <a href="#" class="social__link"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li class="social__item">
                        <a href="#" class="social__link"><i class="fab fa-instagram"></i></a>
                    </li>
                    <li class="social__item">
                        <a href="#" class="social__link"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li class="social__item">
                        <a href="#" class="social__link"><i class="fab fa-youtube"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- END: TOP -->

    <!-- START: MENU -->
    <label for="menu-toggler" class="button icon grey4">
        <i class="mi">menu</i>
    </label>
    <input type="checkbox" class="none" id="menu-toggler">
    <section id="menu">
        <div class="container">
            <div class="left">
                <ul class="menu">
                    <li class="menu__item">
                        <a href="#top" class="menu__link">PRINCIPAL</a>
                    </li>
                    <li class="menu__item">
                        <a href="#about-us" class="menu__link">SOBRE MIM</a>
                    </li>
                    <li class="menu__item">
                        <a href="#service" class="menu__link">SERVIÇOS</a>
                    </li>
                </ul>
            </div>
            <div class="center">
                <div class="logo">FI</div>
            </div>
            <div class="right">
                <ul class="menu">
                    <li class="menu__item">
                        <a href="#portfolio" class="menu__link">PORTFOLIO</a>
                    </li>
                    <li class="menu__item">
                        <a href="#newsletter" class="menu__link">NEWSLETTER</a>
                    </li>
                    <li class="menu__item">
                        <a href="#contact" class="menu__link">CONTATO</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- END: MENU -->

    <!-- START: BANNER -->
    <section id="banner">
        <div class="container">
            <div class="banner swiper-container">
                <?php for ($i = 1; $i <= 5; $i++) { ?>
                    <div class="banner__item">
                        <img src="/images/portfolio/banner_<?= $i ?>.jpg" alt="">
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- END: BANNER -->

    <div id="about-us-service">
        <!-- START: ABOUT US -->
        <section id="about-us">
            <div class="container">
                <div class="grid huge">
                    <div class="col-md-6">
                        <h2>SOBRE NÓS</h2>
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                            Blanditiis consequuntur atque similique nisi earum. Quidem
                            minus, facere saepe suscipit a qui iusto tenetur labore
                            odio blanditiis facilis animi accusantium voluptates.
                        </p>
                        <br>
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                            Blanditiis consequuntur atque similique nisi earum. Quidem
                            minus, facere saepe suscipit a qui iusto tenetur labore
                            odio blanditiis facilis animi accusantium voluptates.
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                            Blanditiis consequuntur atque similique nisi earum. Quidem
                            minus, facere saepe suscipit a qui iusto tenetur labore
                            odio blanditiis facilis animi accusantium voluptates.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- END: ABOUT US -->

        <!-- START: SERVICE -->
        <section id="service">
            <div class="container">
                <h2>SERVIÇOS</h2>
                <div class="grid big service">
                    <div class="col-md-4">
                        <div class="service__item">
                            <h4 class="service__title">Service 1</h4>
                            <p class="service__desc">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                Excepturi est vel unde iste, fugit sit necessitatibus
                                laborum dicta error, neque vero nulla, odio nam aliquid
                                fugiat numquam quia sint? Ut?
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service__item">
                            <h4 class="service__title">Service 2</h4>
                            <p class="service__desc">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                Excepturi est vel unde iste, fugit sit necessitatibus
                                laborum dicta error, neque vero nulla, odio nam aliquid
                                fugiat numquam quia sint? Ut?
                                Fugit sit necessitatibus
                                laborum dicta error, neque vero nulla, odio nam aliquid
                                fugiat numquam quia sint? Ut?
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service__item">
                            <h4 class="service__title">Service 3</h4>
                            <p class="service__desc">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                Excepturi est vel unde iste, fugit sit necessitatibus
                                fugiat numquam quia sint? Ut?
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END: SERVICE -->
    </div>

    <!-- START: PORTFOLIO -->
    <section id="portfolio">
        <div class="container">
            <h2>PORTFOLIO</h2>
        </div>
        <div class="grid zero">
            <?php for ($i = 1; $i <= 8; $i++) { ?>
                <div class="col-md-3 col-xs-6">
                    <div class="portfolio__item">
                        <img src="/images/portfolio/portfolio_<?= $i ?>.jpg" alt="">
                        <div class="portfolio__overlay">
                            <h4 class="portfolio__title">Portfolio <?= $i ?></h4>
                            <p class="portfolio__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, soluta!</p>
                            <button class="portfolio__more"><i class="mi">add</i></button>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </section>
    <!-- END: PORTFOLIO -->

    <div id="newsletter-contact">
        <!-- START: NEWSLETTER -->
        <section id="newsletter">
            <div class="container tiny">
                <h2 class="newsletter__title">NEWSLETTER</h2>
                <p class="newsletter__desc">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Vel a quasi, quo perspiciatis beatae eum voluptatem
                    blanditiis natus facere, culpa deserunt veniam minus
                    possimus dolorem delectus? Quas corporis earum repellat?
                </p>
                <div class="grid">
                    <div class="col-xs-9">
                        <div class="field-group">
                            <input type="text" class="field" id="newsletter_email" name="newsletter_email">
                            <label for="newsletter_email">E-mail</label>
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <button class="button primary fluid">INSCREVER</button>
                    </div>
                </div>
            </div>
        </section>
        <!-- END: NEWSLETTER -->

        <!-- START: CONTACT -->
        <section id="contact">
            <div class="container">
                <h2>CONTATO</h2>
                <div class="grid big">
                    <div class="col-md-6">
                        <ul class="contact">
                            <li class="contact__item">
                                Rua Juarez Manoel Ramos Ribeiro 336 <br>
                                Sitio Cercado, Curitiba/PR
                                <div class="contact__icon"><i class="mi">place</i></div>
                            </li>
                            <li class="contact__item">
                                (11) 9.8455-6053
                                <div class="contact__icon"><i class="mi">phone</i></div>
                            </li>
                            <li class="contact__item">
                                felipe.t.iwamoto@gmail.com
                                <div class="contact__icon"><i class="mi">mail</i></div>
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
                                    Whatsapp
                                    <div class="social__icon"><i class="fab fa-whatsapp"></i></div>
                                </a>
                            </li>
                            <li class="social__item">
                                <a href="#" class="social__link">
                                    Youtube
                                    <div class="social__icon"><i class="fab fa-youtube"></i></div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <form>
                            <div class="grid">
                                <div class="col-md-6">
                                    <div class="field-group">
                                        <input type="text" class="field" id="name" name="name">
                                        <label for="name">Nome completo</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="field-group">
                                        <input type="text" class="field" id="email" name="email">
                                        <label for="email">E-mail</label>
                                    </div>
                                </div>
                            </div>
                            <div class="field-group">
                                <input type="text" class="field" id="subject" name="subject">
                                <label for="subject">Assunto</label>
                            </div>
                            <div class="field-group">
                                <textarea type="text" class="field" rows="7" id="content" name="content"></textarea>
                                <label for="subject">Conteúdo</label>
                            </div>

                            <button class="button primary">ENVIAR</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- END: CONTACT -->
    </div>

    <!-- START: FOOTER -->
    <section id="footer">
        <div class="container small">
            <div class="grid huge">
                <div class="col-md-8">
                    <h4 class="footer__title">SITEMAP</h4>
                    <ul class="menu">
                        <li class="menu__item">
                            <a href="#" class="menu__link">Principal</a>
                        </li>
                        <li class="menu__item">
                            <a href="#" class="menu__link">Sobre mim</a>
                        </li>
                        <li class="menu__item">
                            <a href="#" class="menu__link">Serviços</a>
                        </li>
                        <li class="menu__item">
                            <a href="#" class="menu__link">Portfolio</a>
                        </li>
                        <li class="menu__item">
                            <a href="#" class="menu__link">Newsletter</a>
                        </li>
                        <li class="menu__item">
                            <a href="#" class="menu__link">Contato</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h4 class="footer__title">REDES SOCIAIS</h4>
                    <ul class="social">
                        <li class="social__item">
                            <a href="#" class="social__link">
                                <div class="social__icon"><i class="fab fa-facebook-f"></i></div>
                                Facebook
                            </a>
                        </li>
                        <li class="social__item">
                            <a href="#" class="social__link">
                                <div class="social__icon"><i class="fab fa-instagram"></i></div>
                                Instagram
                            </a>
                        </li>
                        <li class="social__item">
                            <a href="#" class="social__link">
                                <div class="social__icon"><i class="fab fa-twitter"></i></div>
                                Twitter
                            </a>
                        </li>
                        <li class="social__item">
                            <a href="#" class="social__link">
                                <div class="social__icon"><i class="fab fa-youtube"></i></div>
                                Youtube
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- END: FOOTER -->

    <!-- START: COPYRIGHT -->
    <section id="copyright">
        <div class="container">
            <p>Lorem ipsum dolor sit amet.</p>
        </div>
    </section>
    <!-- END: COPYRIGHT -->

    <script type="module" src="/js/main.js"></script>
</body>

</html>