let formSaver = new FormSaver({
    saveDataOn: "keyup"
});

let get = async (url) => {
    return fetch(url).then((res) => (res.json())).then((res) => (res));
}

let callback = (data, formId = null) => {
    $(".loading").removeClass("loading--active");
    if(data.status !== "success" && data.response !== undefined){
        let res = data.response;
        Object.keys(res).forEach((field) => {
            res[field].forEach((message) => {
                $.toast({
                    text: message,
                    hideAfter: 10000
                });
            })
        })
        return;
    }

    $.toast({
        text: data.message,
        hideAfter: 10000
    });

    if(data.status === "success"){
        formId !== null && formSaver.removeFormById(formId);
    }

    if(data.redirect && data.redirect.trim().length > 0){
        window.location.href = data.redirect;
    }
}

$(document).ready(function () {
    let ids = [];

    $('img[src$=".svg"]').each(function () {
        var $img = jQuery(this);
        var imgURL = $img.attr('src');
        var attributes = $img.prop("attributes");
    
        $.get(imgURL, function (data) {
            var $svg = jQuery(data).find('svg');
            $svg = $svg.removeAttr('xmlns:a');
            $.each(attributes, function () {
                $svg.attr(this.name, this.value);
            });
            $img.replaceWith($svg);
        }, 'xml');
    });

    $("[data-collapse]").on("click", function(){
        $($(this).attr("data-collapse")).toggleClass("opened");
    })

    $("[data-mark-category]").on("click", function(){
        let category = $(this).attr("data-mark-category");

        $(`.card input[type='checkbox'][data-category='${category}']`)
            .prop("checked", !$("#mark-category").prop("checked"));
    })

    $("[data-mark-group]").on("click", function(){
        let category = $(this).attr("data-category");
        let groupName = $(this).attr("data-mark-group");

        $(`.card input[type='checkbox'][data-category='${category}'][data-group='${groupName}']`)
            .prop("checked", !$("#mark-group").prop("checked"));
    })

    if ($.fn.DataTable !== undefined) {

        $('.dt:not(.no-footer) tfoot th').each(function () {
            let hasFilter = !($(this).attr("data-no-filter") !== undefined);

            $(this).html(`
            <div class="field-group tiny">
                <input 
                    type="text" 
                    class="field" 
                    ${!hasFilter ? "disabled readonly" : ""} 
                    placeholder="${hasFilter ? `Filtro (${$(this).text()})` : ""}"
                >
                <label></label>
            </div>
        `);
        });

        // DataTable
        let dt = [];

        dt.push($('.dt').DataTable({
            dom: '<"dt__header"<"dt__header__left"B><"dt__header__right"f>><"dt__body"t><"dt__footer"<"dt__footer__left"i><"dt__footer__right"p>>',
            language: {
                paginate: {
                    'previous': '<i class="mi">navigate_before</i>',
                    'next': '<i class="mi">navigate_next</i>'
                },
                sInfo:"Mostrando _START_ até _END_ de _TOTAL_ resultados",
                sInfoEmpty:"Mostrando 0 até 0 de 0 resultados",
                sInfo: "Mostrando _START_ até _END_ de _TOTAL_ resultados",
                sInfoFiltered:"(Filtrado de _MAX_ resultados)",
                sZeroRecords:"Nenhum resultado encontrado"
            },
            order: [],
            responsive: true,
            buttons: [
                'copy', 'csv', 'excel'
            ],
        }));

        // // Apply the search
        dt.forEach((item) => {
            item.columns().every(function () {
                var that = this;
    
                $('input', this.footer()).on('keyup change clear', function () {
                    if (that.search() !== this.value) {
                        that
                            .search(this.value)
                            .draw();
                    }
                });
            });
        })

        $("[data-trigger]").on("click", (e) => {
            let selector = e.target.dataset.trigger;
            $(selector).trigger("click");
        })

        $('.dt__search').on('keyup click', (e) => {
            dt.forEach((item) => {
                item.search(e.target.value).draw();
            })
        });

        $(document).on("click", ".dt tbody tr[data-id]", function(){

            !$(this).hasClass("active") ?
                ids = [...ids, $(this).attr("data-id")] :
                ids = id.filter((item) => (item !== $(this).attr("data-id")));

            $(".dt tbody tr[data-id]").each((index, row) => {
                ids.includes(row.dataset.id) ?
                    row.classList.add("active") :
                    row.classList.remove("active");
            })

        })

        $("#multiple-delete").on("click", function(e){
            e.preventDefault();

            $.post($(this).attr("href"), { ids: ids || [] }, 
            function(data) {
                callback(data);
            })
        })
    }

    if ($.fn.mask !== undefined) {
        $('[data-cep], [name*="cep"]').mask('00.000-000');
        $('[data-cellphone], [name*="cellphone"]').mask('(00) 0.0000-0000');
        $('[data-telphone], [name*="telphone"]').mask('(00) 0000-0000');
        $('[data-date], [data-mask="date"], [name*="date"], [name*="birthday"]').mask('00/00/0000');
        $('[data-time], [name*="time"], [name*="duration"]').mask('00:00:00');
        $('[data-datetime], [name*="datetime"]').mask('00/00/0000 00:00:00');
        $('[data-money], [name*="price"]').mask("#.##0,00", {reverse: true});
    }

    if ($.fn.select2 !== undefined) {
        $(".select2").select2({
            width: "100%"
        });
    }

    $(".tab .tab__item[data-tab]").on("click", function() {
        let selector = $(this).attr("data-tab");
        $(".tab__item").removeClass("tab__item--active");
        $(".tab-panel").removeClass("tab-panel--active");
        $(this).addClass("tab__item--active");
        $(selector).addClass("tab-panel--active");
    })
});