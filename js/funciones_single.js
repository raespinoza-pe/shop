const single_paga_header = document.getElementById('single_page_header');
const single_page_body = document.getElementById('single_page_body');
const single_page_box = document.getElementById('single_page_box');
const templateCard = document.getElementById('template-card').content;
const templateCard2 = document.getElementById('template-card-2').content;
const fragment = document.createDocumentFragment();
const fragment2 = document.createDocumentFragment();
let carrito = {};
let total_precio_carrito = 0;
let cantidad_carrito = 0;

document.addEventListener('DOMContentLoaded', () => {

    fetchData();
    actualizarCarrito();
})

single_page_box.addEventListener('click', e => {
    capturarIamgen(e);
})

cart_box.addEventListener('click', e => {

    limpiarCarrito(e);
})

const fetchData = async () => {

    var queryString = window.location.search;
    var urlParams = new URLSearchParams(queryString);
    var anuncioParam = urlParams.get('id');

    try {
        const res = await fetch('productos.json');
        const data = await res.json();

        data.forEach(producto => {
            if (producto.id == anuncioParam) {
                pintarSinglePage(producto);
            }
        })

    } catch (error) {
        console.log(error);
    }

}

single_page_body.addEventListener('click', e => {

    addCarrito(e);

})

const pintarSinglePage = data => {


    let colores = data.color.split(',');
    let img_color = data.img.split('.');
    let single_html_body = "";
    let single_html_color = "";


    for (let index = 0; index < colores.length; index++) {


        templateCard.querySelector('img').setAttribute('src', img_color[0] + '_' + colores[index] + '.jpg');
        templateCard.querySelector('li').setAttribute('data-thumb', img_color[0] + '_' + colores[index] + '.jpg');

        templateCard2.querySelector('img').setAttribute('src', img_color[0] + '_' + colores[index] + '.jpg');

        if (index == 0) {
            templateCard2.querySelector('img').setAttribute('class', 'flex-active');
            templateCard2.querySelector('img').setAttribute('id', 'img_list_01');
        } else if (index == 1) {
            templateCard2.querySelector('img').setAttribute('class', '');
            templateCard2.querySelector('img').setAttribute('id', 'img_list_02');
        } else {
            templateCard2.querySelector('img').setAttribute('class', '');
            templateCard2.querySelector('img').setAttribute('id', 'img_list_03');

        }

        const clone = templateCard.cloneNode(true);
        fragment.appendChild(clone);

        const clone2 = templateCard2.cloneNode(true);
        fragment2.appendChild(clone2);

        single_html_color = single_html_color + '<li><a class="' + colores[index] + '"></a></li>';

    }



    single_html_body = '<h3>' + data.nombre + '</h3>\
                        <h6 class="item_price">S/. <span>'+ data.precio + '</span></h6>\
                        <p>'+ data.bateria + '  de ' + data.voltaje + ' voltaje , potencia de motor : ' + data.potencia_motor + ' w , velocidad maxima : ' + data.maxima_velocidad + ' KM/H, peso maximo : ' + data.carga_maxima + ' y Control remoto con ' + data.control_remoto + ' </p>\
                        <ul class="color"><h4>Color</h4> '+ single_html_color + ' </ul><div class="clearfix"></div>\
                        <div class="quantity"> <p class="qty"> Qty : </p><input min="1" type="number" value="1" class="item_quantity" id="item_quantity"> </div>\
                        <button class="btn btn-dark">Comprar</button>';


    single_page_body.innerHTML = single_html_body;
    single_paga_header.appendChild(fragment);
    single_page_box.appendChild(fragment2);


}

const addCarrito = e => {

    if (e.target.classList.contains('btn-dark')) {

        setCarrito(e.target.parentElement);

    }
    e.stopPropagation();

}

function valorRepetido(data, id, i) {

    let repetido = false;
    let indicador = 0;
    let contador = 0;

    data.forEach(producto => {

        if (producto.id == id) {
            repetido = true;
            indicador = contador;
        }

        contador = contador + 1;
    })

    if (i == 0) {
        return repetido;
    } else if (i == 1) {
        return indicador;
    }

}

function SaveDataToLocalStorage(data) {

    let a = {};
    // Parse the serialized data back into an aray of objects
    a = JSON.parse(localStorage.getItem('session')) || [];

    if (valorRepetido(a, data.id, 0)) {

        a[valorRepetido(a, data.id, 1)].cantidad = Number(a[valorRepetido(a, data.id, 1)].cantidad) + Number(data.cantidad);


    } else {
        a.push(data);
    }
    // Re-serialize the array back into a string and store it in localStorage
    localStorage.setItem('session', JSON.stringify(a));

}

const setCarrito = async (objeto) => {

    let queryString = window.location.search;
    let urlParams = new URLSearchParams(queryString);
    let anuncioParam = urlParams.get('id');
    let imagen = "";

    try {
        const res = await fetch('productos.json');
        const data = await res.json();

        data.forEach(producto => {
            if (producto.id == anuncioParam) {
                imagen = producto.img;
            }
        })

    } catch (error) {
        console.log(error);
    }

    const producto = {
        id: anuncioParam,
        nombre: objeto.querySelector('h3').textContent,
        precio: objeto.querySelector('span').textContent,
        cantidad: document.getElementById('item_quantity').value,
        imagen: imagen
    }

    total_precio_carrito = total_precio_carrito + Number(objeto.querySelector('span').textContent) * Number(document.getElementById('item_quantity').value);
    cantidad_carrito = cantidad_carrito + Number(document.getElementById('item_quantity').value);
    SaveDataToLocalStorage(producto);

    actualizarCarrito();

}

function actualizarCarrito() {
    let total_precio_carrito = 0;
    let cantidad_carrito = 0;
    a = {};

    a = JSON.parse(localStorage.getItem('session')) || [];
    a.forEach(producto => {
        total_precio_carrito = Number(total_precio_carrito) + Number(producto.precio) * Number(producto.cantidad);
        cantidad_carrito = Number(cantidad_carrito) + Number(producto.cantidad);

    });


    document.querySelector('.simpleCart_total_2').textContent = "S/. " + total_precio_carrito + ".00" ;
    document.querySelector('.simpleCart_quantity_2').textContent = cantidad_carrito;

}

const capturarIamgen = e => {

    let id_img = e.target.id;

    actualizarImagen(single_page_header, id_img);

}

const actualizarImagen = (objeto, id) => {

    let imagen_seleccionada = document.getElementById(id);

    if (id === 'img_list_01') {
        document.getElementById('img_list_01').setAttribute('class', 'flex-active');
        document.getElementById('img_list_02').setAttribute('class', '');
        document.getElementById('img_list_03').setAttribute('class', '');

        document.getElementById("single_page_header").style.transform = "translate3d(-0px, 0px, 0px)";

    } else if (id === 'img_list_02') {
        document.getElementById('img_list_01').setAttribute('class', '');
        document.getElementById('img_list_02').setAttribute('class', 'flex-active');
        document.getElementById('img_list_03').setAttribute('class', '');

        document.getElementById("single_page_header").style.transform = "translate3d(-358px, 0px, 0px)";
    } else if (id === 'img_list_03') {
        document.getElementById('img_list_01').setAttribute('class', '');
        document.getElementById('img_list_02').setAttribute('class', '');
        document.getElementById('img_list_03').setAttribute('class', 'flex-active');

        document.getElementById("single_page_header").style.transform = "translate3d(-716px, 0px, 0px)";
    }



}

const limpiarCarrito = e => {


    document.querySelector('.simpleCart_total_2').textContent = "S/. 0.00";
    document.querySelector('.simpleCart_quantity_2').textContent = "0";

    localStorage.removeItem('session');

}
