<!doctype html>
<html lang="pt-br">

<head>
    <?php include_once("./includes/head.php") ?>
</head>

<body id="page-list" class="primary">
    <div class="container">
        <div class="main">

            <?php include_once("./includes/leftbar.php") ?>

            <div class="content">
                <div class="header">
                    <div class="title">
                        <div class="title__icon">
                            <i class="mi">perm_identity</i>
                        </div>
                        <h1 class="title__description">Adicionar</h1>
                        <a href="#" class="button-add"><i class="mi">add</i></a>
                    </div>
                </div>
                <form id="address-add-form" action="/list.php" method="get" class="body" novalidate>
                    <section id="address">
                        <div class="grid">
                            <div class="col-md-3">
                                <div class="field-group">
                                    <input type="text" class="field" id="address[cep]" data-cep placeholder="Ex: 99.999-999">
                                    <label for="address[cep]">CEP</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="field-group">
                                    <select id="address[state]" data-state class="select2 field"></select>
                                    <label for="address[state]">
                                        Estado
                                        <div class="callback"></div>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="field-group">
                                    <select id="address[city]" data-city class="select2 field"></select>
                                    <label for="address[city]">
                                        Cidade
                                        <div class="callback"></div>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="field-group">
                                    <input type="text" class="field" id="address[district]" data-district placeholder="Ex: Sitio Cercado">
                                    <label for="address[district]">Bairro</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="field-group">
                                    <input type="text" class="field" id="address[street]" data-street placeholder="Ex: Rua exemplo...">
                                    <label for="address[street]">Rua</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="field-group">
                                    <input type="text" class="field" id="address[street_number]" placeholder="Ex: 123">
                                    <label for="address[street_number]">Número</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="field-group">
                                    <input type="text" class="field" id="address[complement]" placeholder="Ex: Casa/Sobrado/AP...">
                                    <label for="address[complement]">Complemento</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="field-group">
                                    <input type="text" class="field" id="address[reference]" placeholder="Ex: Próximo ao mercado tal...">
                                    <label for="address[reference]">Referência</label>
                                </div>
                            </div>
                        </div>
                    </section>
                    <button class="button primary">Adicionar</button>
                </form>
            </div>
        </div>
    </div>
    <?php include_once("./includes/script.php") ?>
    <script src="/js/address.js"></script>
</body>

</html>