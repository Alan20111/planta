const base_url = "http://localhost/Miplaza/";

const cargarcard = (entradas, observador) => {
    entradas.forEach((entrada) => {
        if (entrada.isIntersecting) {
            entrada.target.classList.add('visible');
            entrada.target.classList.remove('opacity-0');
        } else {
        }
    });
};

const observador = new IntersectionObserver(cargarcard, {
    root: null,
    rootMargin: '0px',
    threshold: 0.1
});

const elemento = document.getElementById('declaracion');
if (elemento) {
    observador.observe(elemento);
}
const elemento1 = document.getElementById('ubicacion');
if (elemento1) {
    observador.observe(elemento1);
}
var pop = document.getElementById("pop-card");
var blackground = document.getElementById("blackground");
var body = document.querySelector("body");
var count = 0;
function popCard() {
    count++;
    pop.classList.remove("scale-0");
    pop.classList.toggle("pop-class");
    if (count > 1) {
        pop.classList.toggle("pop-class-end");
        blackground.classList.toggle("opacity-0");
    }
    blackground.classList.toggle("visible");
    body.classList.toggle("overflow-hidden");
    toggleButtonsAndLinks();
}

// Función para desactivar o habilitar todos los botones y enlaces
function toggleButtonsAndLinks() {
    // Obtener todos los botones y enlaces de la página
    var buttonsAndLinks = document.querySelectorAll('button, a');

    // Iterar sobre cada botón y enlace y cambiar su atributo "disabled"
    buttonsAndLinks.forEach(function (element) {
        element.disabled = !element.disabled;
    });
}

/*
Alimentos y Bebidas:
    Semillas y Cereales
    Jugos y Leches
    Carnes Frías
    Pan
Cuidado Personal y Belleza:
    Belleza
    Higiénicos
    Desechables
    Detergentes
    Desinfectantes
Artículos para el Hogar:
    Básicos
Productos para Bebés:
    Bebé
*/
var p_cards = [];

// Declaración de las cartas
for (var i = 1; i <= 6; i++) {
    p_cards.push(document.getElementById("p-grid-" + i));
}

var cards = [];

// Declaración de las cartas
for (var i = 1; i <= 5; i++) {
    cards.push(document.getElementById("card-grid-" + i));
}
var cardis = [];

// Declaración de las cartas
for (var i = 1; i <= 6; i++) {
    cardis.push(document.getElementById("img-grid-" + i));
}
var cardAnimation = document.getElementById("card-animation");
function agrega_cards(categoria) {
    cardAnimation.classList.add("card-animation");

    switch (categoria) {
        case "ArtH":
            cardis[0].src = base_url + "public/img/grid-aromatizante.jpg";
            p_cards[0].textContent = "Aromatizantes";
            cardis[1].src = base_url + "public/img/grid-detergente.jpg";
            p_cards[1].textContent = "Detergentes para Ropa";
            cardis[2].src = base_url + "public/img/grid-suavisantes.jpg";
            p_cards[2].textContent = "Suavisantes";
            cardis[3].src = base_url + "public/img/grid-detercoci.jpg";
            p_cards[3].textContent = "Detergentes para Cocina";
            cardis[4].src = base_url + "public/img/grid-insecticida.jpg";
            p_cards[4].textContent = "Insecticidas";
            cardis[5].src = base_url + "public/img/grid-deterbaño.jpg";
            p_cards[5].textContent = "Limpieza de Baños";
            break;
        case "AliB":
            cardis[0].src = base_url + "public/img/grid-harinas.jpg";
            p_cards[0].textContent = "Harinas y cereales";
            cardis[1].src = base_url + "public/img/grid-lateria.jpg";
            p_cards[1].textContent = "Lateria";
            cardis[2].src = base_url + "public/img/grid-bebidas.jpg";
            p_cards[2].textContent = "Bebidas";
            cardis[3].src = base_url + "public/img/grid-carne.jpg";
            p_cards[3].textContent = "Carnes frias";
            cardis[4].src = base_url + "public/img/grid-basicos.jpg";
            p_cards[4].textContent = "Basicos";
            cardis[5].src = base_url + "public/img/grid-botanas.jpg";
            p_cards[5].textContent = "Botanas";
            break;
        case "CuiB":
            cardis[0].src = base_url + "public/img/grid-cremafacial.jpg";
            p_cards[0].textContent = "Crema facial";
            cardis[1].src = base_url + "public/img/grid-cremacorporal.jpg";
            p_cards[1].textContent = "Crema corporal";
            cardis[2].src = base_url + "public/img/grid-jabon.jpg";
            p_cards[2].textContent = "Jabón corporal";
            cardis[3].src = base_url + "public/img/grid-desodorante.jpg";
            p_cards[3].textContent = "Desodorantes";
            cardis[4].src = base_url + "public/img/grid-shampoo.jpg";
            p_cards[4].textContent = "Shampoo";
            cardis[5].src = base_url + "public/img/grid-dental.jpg";
            p_cards[5].textContent = "Higiene bucal";
            break;
        case "HigD":
            cardis[0].src = base_url + "public/img/grid-bolsasP.jpg";
            p_cards[0].textContent = "Bolsas plasticas";
            cardis[1].src = base_url + "public/img/grid-aluminio.jpg";
            p_cards[1].textContent = "Papel alumínio";
            cardis[2].src = base_url + "public/img/grid-higienico.jpg";
            p_cards[2].textContent = "Papel higienico";
            cardis[3].src = base_url + "public/img/grid-femenina.jpg";
            p_cards[3].textContent = "Higiene Femenina";
            cardis[4].src = base_url + "public/img/grid-desechable.jpg";
            p_cards[4].textContent = "Desechables";
            cardis[5].src = base_url + "public/img/grid-pañaladulto.jpg";
            p_cards[5].textContent = "Pañales Adulto";
            break;
        default:
            break;
    }
    setTimeout(function () { cardAnimation.classList.remove("card-animation"); }, 700); // Ajusta el tiempo según la duración de tu animación
}
agrega_cards("AliB");
cards[0].addEventListener("click", function () {
    agrega_cards("AliB");
});
cards[1].addEventListener("click", function () {
    agrega_cards("CuiB");
});
cards[2].addEventListener("click", function () {
    agrega_cards("ArtH");
});
cards[4].addEventListener("click", function () {
    agrega_cards("HigD");
});