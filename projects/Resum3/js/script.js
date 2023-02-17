
const prices = {
    'landing-page': {
        cret: 300,
        adj: 300,
        hell: 200,
        cons: 50,
    },
    'e-shop': {
        cret: 400,
        adj: 600,
        hell: 1000,
        cons: 50,
    },
    'page1c': {
        cret: 100,
        adj: 600,
        hell: 200,
        cons: 50,
    },
    'crypto': {
        cret: 100,
        adj: 2000,
        hell: 150,
        cons: 50,
    }
};

function getformvalue() {
    const websiteelement = document.querySelector(`#projectorder`);

    const CreationEL = document.querySelector(`#Creation`);
    const AdjustmentEL = document.querySelector(`#Adjustment`);
    const heelppEL = document.querySelector(`#heelpp`);
    const ConsultationEL = document.querySelector(`#Consultation`);

    console.log(websiteelement.value);

    

    return {
        websiteTipe: websiteelement.value,
        cret: CreationEL.checked,
        adj: AdjustmentEL.checked,
        hell: heelppEL.checked,
        cons: ConsultationEL.checked,
    }
    
}

function calculatwork() {
    const values = getformvalue();

    let totalPrice = 0;

    const workTypes = prices[values.websiteTipe]

    if (values.cret) {
        totalPrice = workTypes.cret
    }

    if (values.adj) {
        totalPrice = totalPrice + workTypes.adj
    }

    if (values.hell) {
        totalPrice = totalPrice + workTypes.hell
    }

    if (values.cons) {
        totalPrice = totalPrice + workTypes.cons
    }

    const totalpriceEL = document.querySelector(`#totalprice`);

    totalpriceEL.textContent = totalPrice;

    console.log(totalPrice)
}




getformvalue();

const formEl = document.querySelector(`#proectprice-form`);
const emeilmodal = document.querySelector(`#modalidemeil`);
const succesmodal = document.querySelector(`#succesmodal`);

formEl.addEventListener(`change`, calculatwork)


formEl.addEventListener(`submit`, function (event) {
    event.preventDefault();

    emeilmodal.classList.add(`modal-active`);
});



const closebuttons = document.querySelectorAll(`.modelclose-icon`);

closebuttons.forEach(function (closeBTN) {
    closeBTN.addEventListener(`click`, function () {
        emeilmodal.classList.remove(`modal-active`);
        succesmodal.classList.remove(`modal-active`);
    });
});



const modelmailconte = document.querySelectorAll(`#modelcontformid`)

modelmailconte.addEventListener(`submit`, function (event) {
    event.preventDefault();
    
    const usermailin = document.querySelector(`#user-email`);

    if(usermailin.value) {
        emeilmodal.classList.remove(`modal-active`);
        succesmodal.classList.add(`modal-active`);
    }

    
    const inputconte = document.querySelector(`#mailinputconte`);

    inputconte.classList.add(`mailinputconteerorid`);


});