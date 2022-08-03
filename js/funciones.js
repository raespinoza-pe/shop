const items = document.getElementById('items');
const templateCard = document.getElementById('template-card').content;
const fragment = document.createDocumentFragment();
let carrito = {};

document.addEventListener('DOMContentLoaded', () => {

    fetchData();
    actualizarCarrito();

})

items.addEventListener('click', e => {

    addCarrito(e);

})

cart_box.addEventListener('click', e => {
    
    limpiarCarrito(e);
})

const fetchData = async () => {

    try {
        const res = await fetch('productos.json');
        const data = await res.json();
        pintarCards(data);
    } catch (error) {
        console.log(error);
    }

}

const pintarCards = data => {


    data.forEach(producto => {

        templateCard.querySelector('a').textContent = producto.nombre;
        templateCard.querySelector('p').textContent = producto.precio;
        templateCard.querySelector('img').setAttribute('src', producto.img);
        templateCard.querySelector('a').setAttribute('href', "single.php?id=" + producto.id);
        templateCard.querySelector('h4').textContent = "Modelo " + producto.modelo + " " + producto.bateria + " " + producto.voltaje + "Motor: " + producto.potencia_motor + "W";
        templateCard.querySelector('.btn-dark').dataset.id = producto.id;


        const clone = templateCard.cloneNode(true);
        fragment.appendChild(clone);
    })



    items.appendChild(fragment);

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

const setCarrito = objeto => {


    const producto = {
        id: objeto.querySelector('.btn-dark').dataset.id,
        nombre: objeto.querySelector('h5').textContent,
        precio: objeto.querySelector('p').textContent,
        cantidad: 1,
        imagen: objeto.querySelector('img').getAttribute('src')
    }
    
    SaveDataToLocalStorage(producto);

    actualizarCarrito();

}

function actualizarCarrito() {
    let total_precio_carrito = 0;
    let cantidad_carrito = 0;
    a = {};
    a = JSON.parse(localStorage.getItem('session')) || [];

    a.forEach(producto => {
        total_precio_carrito = Number(total_precio_carrito) + Number(producto.precio)*Number(producto.cantidad);
        cantidad_carrito = Number(cantidad_carrito) + Number(producto.cantidad);

    });

    document.querySelector('.simpleCart_total_2').textContent = "S/. " + total_precio_carrito + ".00";
    document.querySelector('.simpleCart_quantity_2').textContent = cantidad_carrito;

}

const limpiarCarrito = e => {


    document.querySelector('.simpleCart_total_2').textContent = "S/. 0.00";
    document.querySelector('.simpleCart_quantity_2').textContent = "0"; 


    localStorage.removeItem('session');

}
