

var countShot = 0;
// позиція кулі
var bulletPosition = random(1, 6);


// змінна постріл
var btnShot = document.querySelector("#shot");

// ігрок 1
var currentPlayer = 1;

var baraban = document.querySelector("#baraban");


// при натисканні
//
btnShot.onclick = start;

    /*btnShot.innerText = "Стріляй"
    btnShot.style.background = "yellow"
    btnShot.style.color = "red"*/
    
    /*function () {
    countShot = countShot + 1;
    
    if (countShot == bulletPosition) {
        endGame();
    }

    btnShot.innerText = "Стріляй"
    btnShot.style.background = "yellow"
    btnShot.style.color = "red"
}*/

// перший клік
function start() {
    btnShot.className = "off";
    var bullet = document.querySelector("#bullet");
    bullet.style.display = "block";

    var revolver = document.querySelector("#revolver");
    revolver.style.display = "block";

    // додаю затримку в часі
    setTimeout(function () {
    
    }, 500)

    btnShot.onclick = "";


    // додаю інтервал
    var rotate = 0;
    var timer = setInterval(function () {
        rotate = rotate + 18;

        baraban.style.transform = "rotate(" + rotate + "deg)";
        // швидкість обертання
        if (rotate > 300) {
            bullet.style.display = "none";
        }
        if (rotate == 720) {
            clearInterval(timer);
                btnShot.innerText = "Стріляй";
                btnShot.style.background = "yellow";
                btnShot.style.color = "red";

                btnShot.onclick = shot;

                btnShot.className = "";
            
         }
        }, 80 ) ;
}

// задаємо математичну функцію
// щоб виводилося значення потрібно ретурн
random(1, 6);
function random(min, max) {
    return Math.floor(Math.random() * (max - min) + min);
}

var rotatebaraban = 0;
// функція постріл
function shot() {
    countShot = countShot + 1;

    if (bulletPosition == countShot) {
        var blood = document.createElement("div");
        blood.id = "blood";
        var player = document.querySelector("#player" + currentPlayer);
        player.appendChild(blood);
        endGame();
    } else {
        
        if (currentPlayer == 1) {
            rotationRight();
            currentPlayer = 2;
        } else {
            rotationleft();
            currentPlayer = 1;
        }

        var rotate = rotatebaraban;
        var timer = setInterval(function () {
            rotate = rotate + 10;
            baraban.style.transform = "rotate(" + rotate + "deg)";
            if (rotate == rotatebaraban + 60) {
                clearInterval(timer);
                rotatebaraban = rotate;
            }
        }, 10)    
    }
}

// змінна пістолет
var revolver = document.querySelector("#revolver");

// пістолет вправо
function rotationRight() {
    revolver.style.background = 'url("images/revolver-right.png") no-repeat'
}
rotationRight();

// пістолет вліво
function rotationleft() {
    revolver.style.background = 'url("images/revolver-left.png") no-repeat'
}
rotationleft();

//кінець гри
function endGame() {
    btnShot.innerText = "Почати з початку";
    alert("Ти виграв!!!");
    btnShot.onclick = restart;
}

function restart() {
    location.reload();
}