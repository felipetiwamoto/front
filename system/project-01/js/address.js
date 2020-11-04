let cepField = $("[data-cep]");
let stateField = $("select[data-state]");
let cityField = $("select[data-city]");
let districtField = $("[data-district]");
let streetField = $("[data-street]");
let complementField = $("[data-complement]");

let getStates = async () => {
    return fetch(`https://servicodados.ibge.gov.br/api/v1/localidades/estados`)
                .then((res) => (res.json()))
                .then((res) => (res));
}

let getCitiesByState = async (state) => {
    if(state === undefined || state.trim().length <= 0){ return []; }
    return fetch(`https://servicodados.ibge.gov.br/api/v1/localidades/estados/${state}/municipios`)
                .then((res) => (res.json()))
                .then((res) => (res));
}

let getAddressByCEP = async (cep = "") => {
    if(cep === undefined || cep.trim().length < 10){ return false; }
    cep = cep.match(/\d+/g).join([]);
    return fetch(`https://viacep.com.br/ws/${cep}/json/`)
                .then((res) => (res.json()))
                .then((res) => (res));
}

let renderStates = (states) => {
    stateField.html(``);
    stateField.append(`<option value="">Selecione um estado</option>`);
    states.forEach((state, index) => {
        stateField.append(`<option value="${state.sigla}">${state.nome}</option>`);
    });
    
    stateField.select2();
}

let renderCities = (cities) => {
    cityField.html(``);
    cityField.append(`<option value="">Selecione uma cidade</option>`);
    cities.forEach((city) => {
        cityField.append(`<option value="${city.nome}">${city.nome}</option>`);
    });

    cityField.select2();
}

let fillFields = async (address) => {
    renderCities(await getCitiesByState(address.uf), address.localidade);

    if(address.uf.trim().length > 0)
        stateField.val(address.uf).trigger('change');

    if(address.localidade.trim().length > 0)
        cityField.val(address.localidade).trigger('change');

    if(address.bairro.trim().length > 0)
        districtField.val(address.bairro);

    if(address.logradouro.trim().length > 0)
        streetField.val(address.logradouro);
        
    if(address.complemento.trim().length > 0)
        complementField.val(address.complemento);

    setTimeout(() => cityField.val(address.localidade).trigger('change'), 1000);
}

(async () => {
    renderStates(await getStates());
    fillFields(await getAddressByCEP(cepField.val()));

    stateField.on("change", async (e) => {
        renderCities(await getCitiesByState(e.target.value));
    });

    cepField.on("keyup", async (e) =>{
        fillFields(await getAddressByCEP(e.target.value));
    })
})()