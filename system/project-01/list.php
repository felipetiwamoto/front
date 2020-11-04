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
                        <h1 class="title__description">Listagem</h1>
                        <a href="/form.php" class="button-add"><i class="mi">add</i></a>
                    </div>
                </div>
                <div class="body">
                    <div class="actions">
                        <div class="left">
                            <div class="buttons">
                                <button class="button primary tiny" data-trigger=".buttons-excel">Excel</button>
                                <button class="button primary tiny" data-trigger=".buttons-csv">CSV</button>
                                <button class="button primary tiny" data-trigger=".buttons-copy">Copy</button>
                            </div>
                        </div>
                        <div class="right">
                            <div class="dt__field-group field-group tiny">
                                <input type="text" class="field dt__search" id="dt__search">
                                <label id="dt__search">Busque na tabela</label>
                            </div>
                        </div>
                    </div>
                    <div class="table-container">
                        <table class="dt">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th class="actions">Ações</th>
                                    <th>Coluna 1</th>
                                    <th>Coluna 2</th>
                                    <th>Coluna 3</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr data-id="1">
                                    <td></td>
                                    <td class="actions">
                                        <a class="button tiny primary" href="#"><i class="mi">edit</i></a>
                                        <a class="button tiny primary" href="#"><i class="mi">clear</i></a>
                                    </td>
                                    <td>Lorem, ipsum.</td>
                                    <td>Voluptas, porro.</td>
                                    <td>Aut, inventore!</td>
                                </tr>
                                <tr data-id="2">
                                    <td></td>
                                    <td class="actions">
                                        <a class="button tiny primary" href="#"><i class="mi">edit</i></a>
                                        <a class="button tiny primary" href="#"><i class="mi">clear</i></a>
                                    </td>
                                    <td>Magni, eos.</td>
                                    <td>Sit, ea!</td>
                                    <td>Illum, nisi?</td>
                                </tr>
                                <tr data-id="3">
                                    <td></td>
                                    <td class="actions">
                                        <a class="button tiny primary" href="#"><i class="mi">edit</i></a>
                                        <a class="button tiny primary" href="#"><i class="mi">clear</i></a>
                                    </td>
                                    <td>Earum, a.</td>
                                    <td>Culpa, maiores?</td>
                                    <td>Impedit, quasi.</td>
                                </tr>
                                <tr data-id="4">
                                    <td></td>
                                    <td class="actions">
                                        <a class="button tiny primary" href="#"><i class="mi">edit</i></a>
                                        <a class="button tiny primary" href="#"><i class="mi">clear</i></a>
                                    </td>
                                    <td>Cupiditate, exercitationem!</td>
                                    <td>Veniam, saepe!</td>
                                    <td>Itaque, numquam.</td>
                                </tr>
                                <tr data-id="5">
                                    <td></td>
                                    <td class="actions">
                                        <a class="button tiny primary" href="#"><i class="mi">edit</i></a>
                                        <a class="button tiny primary" href="#"><i class="mi">clear</i></a>
                                    </td>
                                    <td>Tenetur, quis!</td>
                                    <td>Culpa, magnam.</td>
                                    <td>Doloremque, itaque?</td>
                                </tr>
                                <tr data-id="6">
                                    <td></td>
                                    <td class="actions">
                                        <a class="button tiny primary" href="#"><i class="mi">edit</i></a>
                                        <a class="button tiny primary" href="#"><i class="mi">clear</i></a>
                                    </td>
                                    <td>Perferendis, dolores.</td>
                                    <td>Dicta, iusto?</td>
                                    <td>Accusamus, sit.</td>
                                </tr>
                                <tr data-id="7">
                                    <td></td>
                                    <td class="actions">
                                        <a class="button tiny primary" href="#"><i class="mi">edit</i></a>
                                        <a class="button tiny primary" href="#"><i class="mi">clear</i></a>
                                    </td>
                                    <td>Odio, nostrum.</td>
                                    <td>Ab, esse.</td>
                                    <td>Deleniti, nulla?</td>
                                </tr>
                                <tr data-id="8">
                                    <td></td>
                                    <td class="actions">
                                        <a class="button tiny primary" href="#"><i class="mi">edit</i></a>
                                        <a class="button tiny primary" href="#"><i class="mi">clear</i></a>
                                    </td>
                                    <td>Perspiciatis, veniam?</td>
                                    <td>Ab, officiis.</td>
                                    <td>Dolor, delectus.</td>
                                </tr>
                                <tr data-id="9">
                                    <td></td>
                                    <td class="actions">
                                        <a class="button tiny primary" href="#"><i class="mi">edit</i></a>
                                        <a class="button tiny primary" href="#"><i class="mi">clear</i></a>
                                    </td>
                                    <td>Tenetur, quisquam.</td>
                                    <td>Quibusdam, laboriosam.</td>
                                    <td>Sapiente, rem.</td>
                                </tr>
                                <tr data-id="10">
                                    <td></td>
                                    <td class="actions">
                                        <a class="button tiny primary" href="#"><i class="mi">edit</i></a>
                                        <a class="button tiny primary" href="#"><i class="mi">clear</i></a>
                                    </td>
                                    <td>Voluptas, doloremque!</td>
                                    <td>Ad, maxime?</td>
                                    <td>Consequatur, saepe?</td>
                                </tr>
                                <tr data-id="11">
                                    <td></td>
                                    <td class="actions">
                                        <a class="button tiny primary" href="#"><i class="mi">edit</i></a>
                                        <a class="button tiny primary" href="#"><i class="mi">clear</i></a>
                                    </td>
                                    <td>Facere, voluptates!</td>
                                    <td>Ab, adipisci.</td>
                                    <td>Animi, molestias.</td>
                                </tr>
                                <tr data-id="12">
                                    <td></td>
                                    <td class="actions">
                                        <a class="button tiny primary" href="#"><i class="mi">edit</i></a>
                                        <a class="button tiny primary" href="#"><i class="mi">clear</i></a>
                                    </td>
                                    <td>Cupiditate, voluptatibus.</td>
                                    <td>Tenetur, dicta.</td>
                                    <td>Optio, assumenda?</td>
                                </tr>
                                <tr data-id="13">
                                    <td></td>
                                    <td class="actions">
                                        <a class="button tiny primary" href="#"><i class="mi">edit</i></a>
                                        <a class="button tiny primary" href="#"><i class="mi">clear</i></a>
                                    </td>
                                    <td>Itaque, deleniti.</td>
                                    <td>Ducimus, laborum.</td>
                                    <td>Velit, nostrum?</td>
                                </tr>
                                <tr data-id="14">
                                    <td></td>
                                    <td class="actions">
                                        <a class="button tiny primary" href="#"><i class="mi">edit</i></a>
                                        <a class="button tiny primary" href="#"><i class="mi">clear</i></a>
                                    </td>
                                    <td>Vitae, possimus.</td>
                                    <td>Veniam, eum.</td>
                                    <td>Aperiam, quod.</td>
                                </tr>
                                <tr data-id="15">
                                    <td></td>
                                    <td class="actions">
                                        <a class="button tiny primary" href="#"><i class="mi">edit</i></a>
                                        <a class="button tiny primary" href="#"><i class="mi">clear</i></a>
                                    </td>
                                    <td>Libero, in?</td>
                                    <td>Quasi, dolor?</td>
                                    <td>Debitis, cupiditate.</td>
                                </tr>
                                <tr data-id="16">
                                    <td></td>
                                    <td class="actions">
                                        <a class="button tiny primary" href="#"><i class="mi">edit</i></a>
                                        <a class="button tiny primary" href="#"><i class="mi">clear</i></a>
                                    </td>
                                    <td>Esse, soluta.</td>
                                    <td>Non, eius?</td>
                                    <td>Veritatis, eaque.</td>
                                </tr>
                                <tr data-id="17">
                                    <td></td>
                                    <td class="actions">
                                        <a class="button tiny primary" href="#"><i class="mi">edit</i></a>
                                        <a class="button tiny primary" href="#"><i class="mi">clear</i></a>
                                    </td>
                                    <td>Eius, quasi.</td>
                                    <td>Laudantium, consequatur?</td>
                                    <td>Eaque, nemo?</td>
                                </tr>
                                <tr data-id="18">
                                    <td></td>
                                    <td class="actions">
                                        <a class="button tiny primary" href="#"><i class="mi">edit</i></a>
                                        <a class="button tiny primary" href="#"><i class="mi">clear</i></a>
                                    </td>
                                    <td>Est, maxime?</td>
                                    <td>Sequi, rerum.</td>
                                    <td>Laboriosam, aut!</td>
                                </tr>
                                <tr data-id="19">
                                    <td></td>
                                    <td class="actions">
                                        <a class="button tiny primary" href="#"><i class="mi">edit</i></a>
                                        <a class="button tiny primary" href="#"><i class="mi">clear</i></a>
                                    </td>
                                    <td>Molestias, ullam.</td>
                                    <td>Asperiores, nam.</td>
                                    <td>Asperiores, ducimus!</td>
                                </tr>
                                <tr data-id="20">
                                    <td></td>
                                    <td class="actions">
                                        <a class="button tiny primary" href="#"><i class="mi">edit</i></a>
                                        <a class="button tiny primary" href="#"><i class="mi">clear</i></a>
                                    </td>
                                    <td>Labore, omnis!</td>
                                    <td>Aspernatur, quaerat!</td>
                                    <td>Dicta, perspiciatis!</td>
                                </tr>
                                <tr data-id="21">
                                    <td></td>
                                    <td class="actions">
                                        <a class="button tiny primary" href="#"><i class="mi">edit</i></a>
                                        <a class="button tiny primary" href="#"><i class="mi">clear</i></a>
                                    </td>
                                    <td>Earum, vel.</td>
                                    <td>Cupiditate, facilis.</td>
                                    <td>Consequatur, rem.</td>
                                </tr>
                                <tr data-id="22">
                                    <td></td>
                                    <td class="actions">
                                        <a class="button tiny primary" href="#"><i class="mi">edit</i></a>
                                        <a class="button tiny primary" href="#"><i class="mi">clear</i></a>
                                    </td>
                                    <td>Vel, consequuntur.</td>
                                    <td>Sed, molestiae.</td>
                                    <td>Culpa, nam?</td>
                                </tr>
                                <tr data-id="23">
                                    <td></td>
                                    <td class="actions">
                                        <a class="button tiny primary" href="#"><i class="mi">edit</i></a>
                                        <a class="button tiny primary" href="#"><i class="mi">clear</i></a>
                                    </td>
                                    <td>Asperiores, sapiente.</td>
                                    <td>Voluptatibus, eligendi.</td>
                                    <td>Deserunt, neque.</td>
                                </tr>
                                <tr data-id="24">
                                    <td></td>
                                    <td class="actions">
                                        <a class="button tiny primary" href="#"><i class="mi">edit</i></a>
                                        <a class="button tiny primary" href="#"><i class="mi">clear</i></a>
                                    </td>
                                    <td>Qui, ex?</td>
                                    <td>Vero, amet?</td>
                                    <td>Mollitia, dicta.</td>
                                </tr>
                                <tr data-id="25">
                                    <td></td>
                                    <td class="actions">
                                        <a class="button tiny primary" href="#"><i class="mi">edit</i></a>
                                        <a class="button tiny primary" href="#"><i class="mi">clear</i></a>
                                    </td>
                                    <td>Aspernatur, assumenda.</td>
                                    <td>Tempora, possimus?</td>
                                    <td>Deserunt, facere!</td>
                                </tr>
                                <tr data-id="26">
                                    <td></td>
                                    <td class="actions">
                                        <a class="button tiny primary" href="#"><i class="mi">edit</i></a>
                                        <a class="button tiny primary" href="#"><i class="mi">clear</i></a>
                                    </td>
                                    <td>Molestiae, laborum?</td>
                                    <td>Doloribus, cumque?</td>
                                    <td>Dignissimos, nostrum.</td>
                                </tr>
                                <tr data-id="27">
                                    <td></td>
                                    <td class="actions">
                                        <a class="button tiny primary" href="#"><i class="mi">edit</i></a>
                                        <a class="button tiny primary" href="#"><i class="mi">clear</i></a>
                                    </td>
                                    <td>Non, eveniet.</td>
                                    <td>A, adipisci.</td>
                                    <td>Quasi, dolore!</td>
                                </tr>
                                <tr data-id="28">
                                    <td></td>
                                    <td class="actions">
                                        <a class="button tiny primary" href="#"><i class="mi">edit</i></a>
                                        <a class="button tiny primary" href="#"><i class="mi">clear</i></a>
                                    </td>
                                    <td>Totam, similique.</td>
                                    <td>Earum, sed.</td>
                                    <td>Corporis, ut!</td>
                                </tr>
                                <tr data-id="29">
                                    <td></td>
                                    <td class="actions">
                                        <a class="button tiny primary" href="#"><i class="mi">edit</i></a>
                                        <a class="button tiny primary" href="#"><i class="mi">clear</i></a>
                                    </td>
                                    <td>Culpa, debitis.</td>
                                    <td>Nemo, alias.</td>
                                    <td>Porro, cupiditate.</td>
                                </tr>
                                <tr data-id="30">
                                    <td></td>
                                    <td class="actions">
                                        <a class="button tiny primary" href="#"><i class="mi">edit</i></a>
                                        <a class="button tiny primary" href="#"><i class="mi">clear</i></a>
                                    </td>
                                    <td>Repellendus, maxime?</td>
                                    <td>Tenetur, modi.</td>
                                    <td>Beatae, deserunt?</td>
                                </tr>
                                <tr data-id="31">
                                    <td></td>
                                    <td class="actions">
                                        <a class="button tiny primary" href="#"><i class="mi">edit</i></a>
                                        <a class="button tiny primary" href="#"><i class="mi">clear</i></a>
                                    </td>
                                    <td>Nisi, dolores.</td>
                                    <td>Animi, at.</td>
                                    <td>Consequuntur, repellendus.</td>
                                </tr>
                                <tr data-id="32">
                                    <td></td>
                                    <td class="actions">
                                        <a class="button tiny primary" href="#"><i class="mi">edit</i></a>
                                        <a class="button tiny primary" href="#"><i class="mi">clear</i></a>
                                    </td>
                                    <td>Error, vitae.</td>
                                    <td>Totam, mollitia!</td>
                                    <td>Fuga, rerum!</td>
                                </tr>
                                <tr data-id="33">
                                    <td></td>
                                    <td class="actions">
                                        <a class="button tiny primary" href="#"><i class="mi">edit</i></a>
                                        <a class="button tiny primary" href="#"><i class="mi">clear</i></a>
                                    </td>
                                    <td>Amet, maiores.</td>
                                    <td>Vero, iure?</td>
                                    <td>Ipsum, rem.</td>
                                </tr>
                                <tr data-id="34">
                                    <td></td>
                                    <td class="actions">
                                        <a class="button tiny primary" href="#"><i class="mi">edit</i></a>
                                        <a class="button tiny primary" href="#"><i class="mi">clear</i></a>
                                    </td>
                                    <td>Porro, dolores.</td>
                                    <td>Voluptatum, laborum.</td>
                                    <td>Aliquid, illum.</td>
                                </tr>
                                <tr data-id="35">
                                    <td></td>
                                    <td class="actions">
                                        <a class="button tiny primary" href="#"><i class="mi">edit</i></a>
                                        <a class="button tiny primary" href="#"><i class="mi">clear</i></a>
                                    </td>
                                    <td>Repellendus, omnis?</td>
                                    <td>Voluptas, dolores.</td>
                                    <td>Labore, saepe!</td>
                                </tr>
                                <tr data-id="36">
                                    <td></td>
                                    <td class="actions">
                                        <a class="button tiny primary" href="#"><i class="mi">edit</i></a>
                                        <a class="button tiny primary" href="#"><i class="mi">clear</i></a>
                                    </td>
                                    <td>Soluta, quam.</td>
                                    <td>Adipisci, cupiditate.</td>
                                    <td>Quaerat, et.</td>
                                </tr>
                                <tr data-id="37">
                                    <td></td>
                                    <td class="actions">
                                        <a class="button tiny primary" href="#"><i class="mi">edit</i></a>
                                        <a class="button tiny primary" href="#"><i class="mi">clear</i></a>
                                    </td>
                                    <td>Tempore, iure!</td>
                                    <td>Praesentium, blanditiis!</td>
                                    <td>Explicabo, deserunt!</td>
                                </tr>
                                <tr data-id="38">
                                    <td></td>
                                    <td class="actions">
                                        <a class="button tiny primary" href="#"><i class="mi">edit</i></a>
                                        <a class="button tiny primary" href="#"><i class="mi">clear</i></a>
                                    </td>
                                    <td>Voluptatum, voluptas.</td>
                                    <td>Recusandae, minima?</td>
                                    <td>Amet, error?</td>
                                </tr>
                                <tr data-id="39">
                                    <td></td>
                                    <td class="actions">
                                        <a class="button tiny primary" href="#"><i class="mi">edit</i></a>
                                        <a class="button tiny primary" href="#"><i class="mi">clear</i></a>
                                    </td>
                                    <td>Accusantium, corrupti?</td>
                                    <td>Neque, corporis.</td>
                                    <td>Animi, earum?</td>
                                </tr>
                                <tr data-id="40">
                                    <td></td>
                                    <td class="actions">
                                        <a class="button tiny primary" href="#"><i class="mi">edit</i></a>
                                        <a class="button tiny primary" href="#"><i class="mi">clear</i></a>
                                    </td>
                                    <td>Et, modi.</td>
                                    <td>Molestias, ullam.</td>
                                    <td>Nisi, officia?</td>
                                </tr>
                                <tr data-id="41">
                                    <td></td>
                                    <td class="actions">
                                        <a class="button tiny primary" href="#"><i class="mi">edit</i></a>
                                        <a class="button tiny primary" href="#"><i class="mi">clear</i></a>
                                    </td>
                                    <td>Voluptas, laudantium.</td>
                                    <td>Quas, porro!</td>
                                    <td>Obcaecati, quaerat?</td>
                                </tr>
                                <tr data-id="42">
                                    <td></td>
                                    <td class="actions">
                                        <a class="button tiny primary" href="#"><i class="mi">edit</i></a>
                                        <a class="button tiny primary" href="#"><i class="mi">clear</i></a>
                                    </td>
                                    <td>Ab, facilis.</td>
                                    <td>Tempora, officiis?</td>
                                    <td>Natus, repudiandae.</td>
                                </tr>
                                <tr data-id="43">
                                    <td></td>
                                    <td class="actions">
                                        <a class="button tiny primary" href="#"><i class="mi">edit</i></a>
                                        <a class="button tiny primary" href="#"><i class="mi">clear</i></a>
                                    </td>
                                    <td>Quidem, iste?</td>
                                    <td>Ipsam, soluta!</td>
                                    <td>Non, perferendis?</td>
                                </tr>
                                <tr data-id="44">
                                    <td></td>
                                    <td class="actions">
                                        <a class="button tiny primary" href="#"><i class="mi">edit</i></a>
                                        <a class="button tiny primary" href="#"><i class="mi">clear</i></a>
                                    </td>
                                    <td>Laboriosam, quis.</td>
                                    <td>Neque, sit.</td>
                                    <td>Eius, assumenda.</td>
                                </tr>
                                <tr data-id="45">
                                    <td></td>
                                    <td class="actions">
                                        <a class="button tiny primary" href="#"><i class="mi">edit</i></a>
                                        <a class="button tiny primary" href="#"><i class="mi">clear</i></a>
                                    </td>
                                    <td>Quidem, laboriosam.</td>
                                    <td>Nihil, eligendi.</td>
                                    <td>Maiores, dolor.</td>
                                </tr>
                                <tr data-id="46">
                                    <td></td>
                                    <td class="actions">
                                        <a class="button tiny primary" href="#"><i class="mi">edit</i></a>
                                        <a class="button tiny primary" href="#"><i class="mi">clear</i></a>
                                    </td>
                                    <td>Et, fuga!</td>
                                    <td>Aliquid, corrupti.</td>
                                    <td>Non, laudantium?</td>
                                </tr>
                                <tr data-id="47">
                                    <td></td>
                                    <td class="actions">
                                        <a class="button tiny primary" href="#"><i class="mi">edit</i></a>
                                        <a class="button tiny primary" href="#"><i class="mi">clear</i></a>
                                    </td>
                                    <td>Repellat, tenetur!</td>
                                    <td>Facere, voluptatibus.</td>
                                    <td>Ducimus, labore.</td>
                                </tr>
                                <tr data-id="48">
                                    <td></td>
                                    <td class="actions">
                                        <a class="button tiny primary" href="#"><i class="mi">edit</i></a>
                                        <a class="button tiny primary" href="#"><i class="mi">clear</i></a>
                                    </td>
                                    <td>Itaque, consequatur?</td>
                                    <td>Sed, ducimus?</td>
                                    <td>Praesentium, debitis?</td>
                                </tr>
                                <tr data-id="49">
                                    <td></td>
                                    <td class="actions">
                                        <a class="button tiny primary" href="#"><i class="mi">edit</i></a>
                                        <a class="button tiny primary" href="#"><i class="mi">clear</i></a>
                                    </td>
                                    <td>Fugiat, quod.</td>
                                    <td>Voluptatum, nostrum!</td>
                                    <td>Quidem, neque!</td>
                                </tr>
                                <tr data-id="50">
                                    <td></td>
                                    <td class="actions">
                                        <a class="button tiny primary" href="#"><i class="mi">edit</i></a>
                                        <a class="button tiny primary" href="#"><i class="mi">clear</i></a>
                                    </td>
                                    <td>Dolorem, dignissimos?</td>
                                    <td>Aliquid, dolor.</td>
                                    <td>Magni, tempora.</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th data-no-filter></th>
                                    <th class="actions" data-no-filter>Ações</th>
                                    <th>Coluna 1</th>
                                    <th>Coluna 2</th>
                                    <th>Coluna 3</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include_once("./includes/script.php") ?>
</body>

</html>