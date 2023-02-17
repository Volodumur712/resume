/* початок калькулятор */

prices = {
    "landing-page": {
        cret: 1200,
        adj: 300,
        hell: 200,
        cons: 50,
    },
    "e-shop": {
        cret: 1000,
        adj: 600,
        hell: 300,
        cons: 50,
    },
    market: {
        cret: 600,
        adj: 250,
        hell: 200,
        cons: 50,
    },
    mobile: {
        cret: 1000,
        adj: 250,
        hell: 150,
        cons: 50,
    },
};

function getformvalue() {
    const websiteelement = document.querySelector(`#projectorder`);
    const CreationEL = document.querySelector(`#Creation`);
    const AdjustmentEL = document.querySelector(`#Adjustment`);
    const heelppEL = document.querySelector(`#heelpp`);
    const ConsultationEL = document.querySelector(`#Consultation`);

    return {
        websiteTipe: websiteelement.value,
        cret: CreationEL.checked,
        adj: AdjustmentEL.checked,
        hell: heelppEL.checked,
        cons: ConsultationEL.checked,
    };
}

function calculatwork() {
    const values = getformvalue();
    let totalPrice = 0;
    const workTypes = prices[values.websiteTipe];

    if (values.cret) {
        totalPrice = workTypes.cret;
    }

    if (values.adj) {
        totalPrice = totalPrice + workTypes.adj;
    }

    if (values.hell) {
        totalPrice = totalPrice + workTypes.hell;
    }

    if (values.cons) {
        totalPrice = totalPrice + workTypes.cons;
    }

    const totalpriceEL = document.querySelector(`#totalprice`);

    totalpriceEL.textContent = totalPrice;
}

getformvalue();

const formEl = document.querySelector(`#proectprice-form`);

formEl.addEventListener(`change`, calculatwork);

// не перезавантажує сторінку при нажиманні кнопки
formEl.addEventListener(`submit`, function (event) {
    event.preventDefault();
});

/* кінець калькулятор */

/*гра котик*/
// 1. оголошуємо змінні що будуть використані
startBlock = document.querySelector("#start");
gameBlock = document.querySelector("#game");
endBlock = document.querySelector("#endBlock");
player = document.querySelector("#player"); // кіт що стрибає
startButton = document.querySelector(".button");
endButton = document.querySelector(".buttonEnd");
ss = document.querySelector("#spanSpeed");
sEndS = document.querySelector("#spanEndSpeed");
goKote = false; // маркер чи можна cтрибати
tank = true;
endGame = false;

// 2. натискаєм кнопку старт
startButton.onclick = function () {
    // console.log("button");
    speed = 1;
    endBlock.style.display = "none";
    startBlock.style.display = "none";
    gameBlock.style.display = "block";
    goKote = true;
    ss.innerHTML = speed;
    createTank();
};

// 3. створюємо танк
function createTank() {
    let tank = document.createElement("div");
    tank.className = "tankStyle";
    tank.style.left = gameBlock.clientWidth + 105 + "px";
    gameBlock.appendChild(tank);
    moveTank(tank);
}

// 4. рухаемо танк
function moveTank(tank) {
    let timerTank = setInterval(function () {
        tank.style.left = tank.offsetLeft - speed + "px";
        if (tank.offsetLeft < -105) {
            tank.remove();
            if ((tank = true)) {
                createTank();
            }
            clearInterval(timerTank);
            // пришвидчуємо рух
            speed = Math.round((speed + 0.5) * 10) / 10;
            ss.innerHTML = speed;
            // console.dir(speed);
        } else {
            isBoom(tank);
            if (endGame == true) {
                clearInterval(timerTank);
            }
        }
    }, 10);
}

// 5. стрибок гравця
// 4.1. рух гравця
document.onkeydown = function (event) {
    // рух вгору клавіша w 87
    if (event.keyCode == 87 && goKote == true) {
        goKote = false;
        // tank = false;
        radius = 140; // на яку висоту стрибок
        deg = 1; // кут чи крок руху
        pi = Math.PI;
        coordinateY = 0;
        // стрибок по навпілколу (180 градусів)
        let jumpKote = setInterval(function () {
            if (endGame == false) {
                if (deg <= 180) {
                    coordinateY = radius * Math.sin(deg * (pi / 180));
                    player.style.top = 384 - coordinateY + "px";
                    player.style.left =
                        player.offsetLeft + (radius * 2) / 180 + "px";
                    deg = deg + 1;
                } else {
                    // повертаємо кота на вихідну позицію
                    if (player.offsetLeft > 20) {
                        player.style.backgroundImage =
                            'url("images/koteGIF.gif")';
                        player.style.left = player.offsetLeft - speed + "px";
                    } else {
                        // як повернули - то скидуємо маркери
                        goKote = true;
                        // tank = true;
                        clearInterval(jumpKote);
                        player.style.backgroundImage = 'url("images/kote.gif")';
                    }
                }
            } else {
                clearInterval(jumpKote);
            }
        }, whatSpeed());
    }
};

function whatSpeed() {
    nowSpeed = (1 / speed) * 15;
    console.dir(nowSpeed);
    return nowSpeed;
}

// перевіряємо чи танк зіткнувся з котом
function isBoom(tank) {
    if (
        player.offsetTop + player.clientHeight - 30 > tank.offsetTop &&
        player.offsetLeft + player.clientWidth - 50 > tank.offsetLeft &&
        player.offsetLeft < tank.offsetLeft + tank.clientWidth - 50
    ) {
        player.style.backgroundImage = 'url("images/koteEND.gif")';
        tank = false;
        endGame = true;
        sEndS.innerHTML = speed;
        // return endGame;
        setTimeout(function () {
            endBlock.style.display = "block";
            gameBlock.style.display = "none";

            endButton.onclick = restart;
        }, 1500);
    }
}

// перезавантаження сторінки
function restart() {
    location.reload();
}
