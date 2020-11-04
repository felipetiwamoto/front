<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV | Felipe Iwamoto</title>
    <link rel="stylesheet" href="./css/main.css">
</head>

<body>
    <div class="main container">
        <div class="left">
            <div class="person">
                <div class="person__image">
                    <img src="./images/felipe-iwamoto.jpg" alt="felipe iwamoto">
                </div>
                <h1 class="person__name">
                    FELIPE <strong>IWAMOTO</strong>
                </h1>
                <h5 class="person__job">Desenvolvedor Full-Stack</h5>
            </div>
            <div class="panel">
                <div class="panel__item">
                    <h3 class="panel__title">PESSOAIS</h3>
                    <div class="panel__body">
                        <ul class="contact">
                            <li class="contact__item">
                                <strong>Data de nascimento: </strong>
                                04/12/1991
                            </li>
                            <li class="contact__item">
                                <strong>Idade: </strong>
                                28
                            </li>
                            <li class="contact__item">
                                <strong>Sexo: </strong>
                                Masculino
                            </li>
                            <li class="contact__item">
                                <strong>Estado civil: </strong>
                                Casado
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="panel__item">
                    <h3 class="panel__title">CONTATO</h3>
                    <div class="panel__body">
                        <ul class="contact">
                            <li class="contact__item">
                                <div class="contact__icon"><i class="mi">mail</i></div>
                                felipe.t.iwamoto@gmail.com
                            </li>
                            <li class="contact__item">
                                <div class="contact__icon"><i class="mi">phone</i></div>
                                (11) 9.8455-6053
                            </li>
                            <li class="contact__item">
                                <div class="contact__icon"><i class="mi">place</i></div>
                                Rua Juarez Manuel Ramos Ribeiro 336 -
                                Sitio Cercado, Curitiba/PR
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="panel__item">
                    <h3 class="panel__title">REDES SOCIAIS</h3>
                    <div class="panel__body">
                        <ul class="social">
                            <li class="social__item">
                                <a href="https://www.facebook.com/felipe.iwamoto.18" class="social__item" target="_blank">
                                    <div class="social__icon"><i class="fab fa-facebook-f"></i></div>
                                    facebook/felipe.iwamoto.18
                                </a>
                            </li>
                            <li class="social__item">
                                <a href="https://github.com/felipetiwamoto" class="social__item" target="_blank">
                                    <div class="social__icon"><i class="fab fa-github"></i></div>
                                    github/felipetiwamoto
                                </a>
                            </li>
                            <li class="social__item">
                                <a href="https://www.linkedin.com/in/felipe-iwamoto-5410a611a/" class="social__item" target="_blank">
                                    <div class="social__icon"><i class="fab fa-linkedin"></i></div>
                                    linkedin/felipe-iwamoto-5410a611a
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="panel__item">
                    <h3 class="panel__title">LINGUAS</h3>
                    <div class="panel__body">
                        <ul class="lang">
                            <li class="lang__item">
                                Inglês
                                <ul class="bullet white">
                                    <?php for ($i = 1; $i <= 10; $i++) { ?>
                                        <li class="bullet__item <?= $i == 4 ? 'bullet__item--active' : '' ?>"></li>
                                    <?php } ?>
                                </ul>
                            </li>
                            <li class="lang__item">
                                Japonês
                                <ul class="bullet white">
                                    <?php for ($i = 1; $i <= 10; $i++) { ?>
                                        <li class="bullet__item <?= $i == 6 ? 'bullet__item--active' : '' ?>"></li>
                                    <?php } ?>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- 
                <div class="panel__item">
                    <h3 class="panel__title">HOBBIES</h3>
                    <div class="panel__body">
                        <ul class="hobby">
                            <li class="hobby__item">Desenhar mangá</li>
                            <li class="hobby__item">Jogar game</li>
                            <li class="hobby__item">Assistir séries</li>
                            <li class="hobby__item">Ensinar</li>
                            <li class="hobby__item">Fazer meus projetos</li>
                        </ul>
                    </div>
                </div> 
                -->
            </div>
        </div>
        <div class="right">
            <!-- START: ABOUT ME -->
            <section id="about-me" class="section">
                <div class="container">
                    <div class="section__header">
                        <div class="section__icon"><i class="mi">face</i></div>
                        <h3 class="section__title">SOBRE MIM</h3>
                    </div>
                    <div class="section__body">
                        <p>
                            Sou programador com foco em ser desenvolvedor Full-Stack, atuando na
                            área web há cinco anos.
                            <br>
                            Nas minhas experiências, tive o privilégio de trabalhar em empresas
                            nas quais tive autonomia de buscar conhecimento e aplicar no dia a dia.
                            <br>
                            Me esforcei para ser um profissional capaz de suprir
                            as necessidades das organizações, nas quais aprendi com o
                            proxímo e ensinei. Meu objetivo é aperfeiçoar os meus conhecimentos e
                            buscar novas aprendizagens dentro da organização, sempre com olhar na
                            evolução pessoal e profissional.
                        </p>
                    </div>
                </div>
            </section>
            <!-- END: ABOUT ME -->

            <!-- START: EXPERIENCE -->
            <section id="experience" class="section">
                <div class="container">
                    <div class="section__header">
                        <div class="section__icon"><i class="mi">work</i></div>
                        <h3 class="section__title">EXPERIÊNCIAS</h3>
                    </div>
                    <div class="section__body">
                        <div class="experience">
                            <div class="experience__header">
                                <h3 class="experience__company-name">Tuxon</h3>
                                <h4 class="experience__period">FEV 2020 - ATUAL</h4>
                            </div>
                            <div class="experience__body">
                                <h4 class="task__title">Tarefas</h4>
                                <ul class="task">
                                    <li class="task__item">Manutenção nos sistemas existentes.</li>
                                    <li class="task__item">Criação de novas funcionalidades.</li>
                                    <li class="task__item">Criação de projetos do zero.</li>
                                </ul>
                                <h4 class="soft-skill__title">Soft Skills:</h4>
                                <ul class="soft-skill">
                                    <li class="soft-skill__item">capacidade de persuasão;</li>
                                    <li class="soft-skill__item">proatividade;</li>
                                    <li class="soft-skill__item">capacidade de trabalhar sob pressão;</li>
                                    <li class="soft-skill__item">capacidade analítica.</li>
                                </ul>
                                <h4 class="hard-skill__title">Hard Skills:</h4>
                                <ul class="hard-skill">
                                    <li class="hard-skill__item">cursos técnicos;</li>
                                    <li class="hard-skill__item">habilidades ligadas à informática.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="experience">
                            <div class="experience__header">
                                <h3 class="experience__company-name">Interlink</h3>
                                <h4 class="experience__period">SET 2019 - JAN 2020</h4>
                            </div>
                            <div class="experience__body">
                                <h4 class="task__title">Tarefas</h4>
                                <ul class="task">
                                    <li class="task__item">Manutenção de sistemas.</li>
                                    <li class="task__item">Criação de sistemas.</li>
                                    <li class="task__item">Atuação como Sênior.</li>
                                </ul>
                                <h4 class="soft-skill__title">Soft Skills:</h4>
                                <ul class="soft-skill">
                                    <li class="soft-skill__item">proatividade;</li>
                                    <li class="soft-skill__item">capacidade de trabalhar sob pressão;</li>
                                    <li class="soft-skill__item">senso de liderança;</li>
                                    <li class="soft-skill__item">capacidade analítica;</li>
                                </ul>
                                <h4 class="hard-skill__title">Hard Skills:</h4>
                                <ul class="hard-skill">
                                    <li class="hard-skill__item">conhecimento em uma língua estrangeira;</li>
                                    <li class="hard-skill__item">cursos técnicos;</li>
                                </ul>
                            </div>
                        </div>
                        <div class="experience">
                            <div class="experience__header">
                                <h3 class="experience__company-name">4You2 Idiomas</h3>
                                <h4 class="experience__period">ABR 2020 - SET 2019</h4>
                            </div>
                            <div class="experience__body">
                                <h4 class="task__title">Tarefas</h4>
                                <ul class="task">
                                    <li class="task__item">Manutenção de sistemas.</li>
                                    <li class="task__item">Mentoriamento de novos colaboradores.</li>
                                </ul>
                                <h4 class="soft-skill__title">Soft Skills:</h4>
                                <ul class="soft-skill">
                                    <li class="soft-skill__item">proatividade;</li>
                                    <li class="soft-skill__item">capacidade de trabalhar sob pressão;</li>
                                    <li class="soft-skill__item">senso de liderança;</li>
                                    <li class="soft-skill__item">capacidade analítica;</li>
                                </ul>
                                <h4 class="hard-skill__title">Hard Skills:</h4>
                                <ul class="hard-skill">
                                    <li class="hard-skill__item">conhecimento em uma língua estrangeira;</li>
                                    <li class="hard-skill__item">cursos técnicos;</li>
                                </ul>
                            </div>
                        </div>
                        <div class="experience">
                            <div class="experience__header">
                                <h3 class="experience__company-name">Serviços comunicatarios</h3>
                            </div>
                            <div class="experience__body">
                                <h4 class="task__title">Tarefas</h4>
                                <ul class="task">
                                    <li class="task__item">Auxiliar na mudança das pessoas.</li>
                                    <li class="task__item">Música e Teatro ao ar livre.</li>
                                    <li class="task__item">Fazer palestras.</li>
                                    <li class="task__item">Dar aula de música.</li>
                                    <li class="task__item">Arrecadar e Distribuir cobertores aos moradores de rua.</li>
                                    <li class="task__item">Arrecadar e Distribuir alimentos aos moradores de rua.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END: EXPERIENCE -->

            <!-- START: EDUCATION -->
            <section id="education" class="section">
                <div class="container">
                    <div class="section__header">
                        <div class="section__icon"><i class="mi">school</i></div>
                        <h3 class="section__title">EDUCAÇÃO</h3>
                    </div>
                    <div class="section__body">
                        <div class="education">
                            <div class="education__header">
                                <h3 class="education__company-name">Universidade Unicesumar</h3>
                                <h4 class="education__period">DOIS ANOS E MEIO (TRANCADA)</h4>
                            </div>
                            <div class="education__body">
                                <p>Tecnólogo em Análise e Desenvolvimento de Sistemas</p>
                            </div>
                        </div>
                        <div class="education">
                            <div class="education__header">
                                <h3 class="education__company-name">Faculdade Opet</h3>
                                <h4 class="education__period">UM ANO (CONCLUIDA)</h4>
                            </div>
                            <div class="education__body">
                                <p>Técnico em Programação de Jogos Digitais</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END: EDUCATION -->

            <!-- START: SKILL -->
            <section id="skill" class="section">
                <div class="container">
                    <div class="section__header">
                        <div class="section__icon"><i class="mi">code</i></div>
                        <h3 class="section__title">HABILIDADES</h3>
                    </div>
                    <div class="section__body">
                        <h4 class="skill__title">
                            <div class="skill__icon"><i class="mi">view_compact</i></div>
                            FRONT-END
                        </h4>
                        <?php
                        $fronts = [
                            ["score" => 2, "name" => "HTML"],
                            ["score" => 2, "name" => "CSS"],
                            ["score" => 4, "name" => "JavaScript"],
                            ["score" => 5, "name" => "Jquery"],
                            ["score" => 6, "name" => "React"],
                            ["score" => 7, "name" => "React Native"],
                            ["score" => 3, "name" => "Bootstrap"],
                            ["score" => 4, "name" => "Materialize"],
                            ["score" => 3, "name" => "Semantic-UI"],
                        ];
                        ?>
                        <div class="grid">
                            <?php foreach ($fronts as $item) { ?>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="skill">
                                        <h6 class="skill__name"><?= $item["name"] ?></h6>
                                        <ul class="bullet greya">
                                            <?php for ($i = 1; $i <= 10; $i++) { ?>
                                                <li class="bullet__item <?= $i == $item["score"] ? 'bullet__item--active' : '' ?>"></li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>

                        <h4 class="skill__title">
                            <div class="skill__icon"><i class="mi">code</i></div>
                            BACK-END
                        </h4>
                        <?php
                        $backs = [
                            ["score" => 3, "name" => "PHP"],
                            ["score" => 5, "name" => "Laravel"],
                            ["score" => 5, "name" => "Symfony"],
                            ["score" => 7, "name" => "Node"],
                            ["score" => 5, "name" => "SQL"],
                            ["score" => 6, "name" => "SOLID"],
                            ["score" => 7, "name" => "Design Pattern"],
                        ];
                        ?>
                        <div class="grid">
                            <?php foreach ($backs as $item) { ?>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="skill">
                                        <h6 class="skill__name"><?= $item["name"] ?></h6>
                                        <ul class="bullet greya">
                                            <?php for ($i = 1; $i <= 10; $i++) { ?>
                                                <li class="bullet__item <?= $i == $item["score"] ? 'bullet__item--active' : '' ?>"></li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END: SKILL -->
        </div>
    </div>
</body>

</html>