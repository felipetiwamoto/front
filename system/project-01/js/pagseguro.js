// let sessionToken = document.querySelector("#session_token").value;
// let brand = {};

// PagSeguroDirectPayment.setSessionId(sessionToken);

// let getPaymentMethods = (amount) => {
//     let data = {
//         success: (res) => { renderAvailableMethods(res); },
//         error: (res) => { throwError(); },
//     };

//     if(amount){ data.amount = amount; }

//     PagSeguroDirectPayment.getPaymentMethods(data);
// }

// let renderAvailableMethods = (res) => {
//     if(!res.error){
//         let creditCards = res.paymentMethods.CREDIT_CARD.options;
//         let html = ``;
//         Object.keys(creditCards).forEach((card) => {
//             html += `<li class="card__item" data-card="${creditCards[card].name.toLowerCase()}"><img src="https://stc.pagseguro.uol.com.br/${creditCards[card].images.SMALL.path}"></li>`;
//         })
//         document.querySelector(".card-options .card").innerHTML = html;
//     }
// }

// let getBrand = () => {
//     let field = document.querySelector("#card_number");
//     console.log(field);
//     field.addEventListener("keyup", (e) => {
//         if(e.target.value.trim(" ").length >= 6){
//             let data = {
//                 cardBin: e.target.value.substring(0, 6),
//                 success: (res) => { activeBrand(res); },
//                 error: (res) => { throwError(); },
//             };

//             PagSeguroDirectPayment.getBrand(data);
//         }else{
//             activeBrand({ brand: { name: ""}});
//         }
//     })
// }

// let activeBrand = (res) => {
//     let cards = document.querySelectorAll(".card-options .card .card__item");
//     brand = {};

//     cards.forEach((card) => {
//         card.classList.remove("card__item--active");
//         if(card.dataset.card.toLowerCase() == res.brand.name.toLowerCase()){
//             brand = res.brand;
//             card.classList.add("card__item--active");
//         }
//     })
// }

// let throwError = () => {}

// getPaymentMethods();
// getBrand();