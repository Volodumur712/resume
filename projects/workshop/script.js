
knopka = document.querySelector("#knopka");
ttt = document.querySelector("#ttt");
qqq = document.querySelector("#qqq");

kvadrat = document.querySelector("#kvadrat");

knopka.onclick = function() {
    if(kvadrat.style.background = "red")
    kvadrat.style.background = "green";
    else {
        kvadrat.style.background = "red"
    }
}

ttt.onclick = function() {
    if(kvadrat.style.background = "red")
    kvadrat.style.background = "yellow";
    else {
        kvadrat.style.background = "red"
    }
}

qqq.onclick = function() {
    if(kvadrat.style.background = "red")
    kvadrat.style.height = "100px";
    else {
        kvadrat.style.height = "200px";
    }
}