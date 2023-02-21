/* 
1 вибрати поле
2 заповнити поле карточками (тег лі)
3 зробити клік по карточках
4 зробити перевертання карточок
	1 розміщуємо картинки для кожної карточки
	2 показуємо картинки
5 якщо вибрано дві картинки - перевірка на співпадіння	
	1 якщо картинки співпадають - то видалити карточки
	2 перевернути всі вибрані карточки
6 якщо всі карточки видалині - вивести вікно перезапуску	
7 при кліку на кнопку - перегрузити сторінку
*/

var cardsField = document.querySelector("#cards");

var resetBlock = document.querySelector("#reset");

var resBtn = document.querySelector("#reset-btn");

// кількість карток
var countCards = 24;

// створити змінну з масивом
var images = [1,2,3,4,5,6,7,8,1,2,3,4,5,6,7,8
];
function compareRandom(a, b) {
  return Math.random() - 0.5;
}

images.sort(compareRandom);

// змінна видалені картки
var deletCard = 0;

// пауза
var pause = false;

// масив для коробки
var select = [];

// ітерація 
for (var i = 0; i < countCards; i = i + 1) {
	// створити елемент лі
	var li = document.createElement("li");
	// присвоїти кожній коробці id 
	li.id = i;
	//поставити тег у ігрове поле
	cardsField.appendChild(li);
}

//
cardsField.onclick = function(event){
	if (pause == false) {
		var element = event.target;

		if (element.tagName == "LI" && element.className != "activ") {

			// отримати елемент з коробки
			select.push(element);

			element.className = "activ"

			// отримати номер елементу
			var img = images[element.id];

			// конкантинація
			element.style.backgroundImage = "url(images/" + img + ".png)";

			// 
			if (select.length == 2) {
				pause = true;
				if (images[select[0].id] == images[select[1].id]) {
					// скрити
					select[0].style.visibility = "hidden";
					select[1].style.visibility = "hidden";
					deletCard = deletCard + 2;
				}
				// таймер
				setTimeout(refresh, 600);
				//refresh();
			}
		}
	}

}

// перевернути карточки
function refresh () {
	for (var i = 0; i < countCards; i = i + 1) {
		cardsField.children[i].className = "";
		cardsField.children[i].style.backgroundImage = 'url("images/back.png")';
	}
	if (deletCard == countCards) {
		resetBlock.style.display = "block";
	}
	select = [];
	pause = false;
}

// перезагрузка сторінки
resBtn.onclick = function() {
	location.reload();
}