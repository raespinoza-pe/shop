const templateCard = document.getElementById('template-card').content;
const fragment = document.createDocumentFragment();
const checkout_body = document.getElementById('checkout_body');
const checkout_botton = document.getElementById('checkout_botton');
let total_precio_carrito = 0;
let cantidad_carrito = 0;

document.addEventListener('DOMContentLoaded', () => {

    actualizarCarrito();
    obtenerCarrito();

})

function actualizarCarrito() {
    let total_precio_carrito = 0;
    let cantidad_carrito = 0;
    let monto_total_carrito = 0;
    a = {};
    a = JSON.parse(localStorage.getItem('session')) || [];

    a.forEach(producto => {
        total_precio_carrito = Number(total_precio_carrito) + Number(producto.precio) * Number(producto.cantidad);
        cantidad_carrito = Number(cantidad_carrito) + Number(producto.cantidad);

    });

    document.querySelector('.simpleCart_total_2').textContent = "S/. " + total_precio_carrito + ".00";
    document.querySelector('.simpleCart_quantity_2').textContent = cantidad_carrito;
    checkout_botton.querySelector('h4').textContent =  "S/. " + total_precio_carrito + ".00";
}

cart_box.addEventListener('click', e => {
    
    limpiarCarrito(e);
})

function obtenerCarrito() {

    a = {};
    a = JSON.parse(localStorage.getItem('session')) || [];

    pintarCards(a);

}

const pintarCards = data => {

    
    data.forEach(producto => {

        templateCard.querySelector('h4').textContent = producto.nombre;
        templateCard.querySelector('img').setAttribute('src', producto.imagen);
        templateCard.querySelector('a').setAttribute('href', "single.php?id=" + producto.id);
        templateCard.querySelector('.qty p').dataset.id = producto.id;
        templateCard.querySelector('.qty p').textContent = "Precio unitario : S/. " + producto.precio + ".00";
        templateCard.querySelector('.delivery input').value  = producto.cantidad;
        templateCard.querySelector('.delivery span').textContent  = "Monto total : S/. " + Number(producto.cantidad)*Number(producto.precio)+ ".00";

        const clone = templateCard.cloneNode(true);
        fragment.appendChild(clone);

    })

    
    checkout_body.appendChild(fragment);

}

checkout_body.addEventListener('click', (event) => {

    if (event.target.classList.contains('item_quantity')) {

        actualizar_monto_final(event.target.parentElement.parentElement.parentElement);
    } else if (event.target.classList.contains('alert-close')){

        eliminarElementoCarrito(event.target.parentElement);
       
    }
    event.stopPropagation();
});

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

const actualizar_monto_final = objeto => {

    let precio_mf = Number(objeto.querySelector('.qty p').textContent.split('.')[1]);
    let cantidad_mf = Number(objeto.querySelector('.delivery input').value);
    let id_producto = objeto.querySelector('.qty p').dataset.id;

    objeto.querySelector('span').textContent = "Monto total : S/. "+precio_mf*cantidad_mf+".00";

    a = {};
    a = JSON.parse(localStorage.getItem('session')) || [];

    if (valorRepetido(a, id_producto, 0)) {

        a[valorRepetido(a, id_producto, 1)].cantidad =  Number(cantidad_mf);

    }   

    localStorage.setItem('session', JSON.stringify(a));
    actualizarCarrito() ;


}

const limpiarCarrito = e => {


    document.querySelector('.simpleCart_total_2').textContent = "S/. 0.00";
    document.querySelector('.simpleCart_quantity_2').textContent = "0"; 


    localStorage.removeItem('session');

    location.reload();

}

const eliminarElementoCarrito = objeto => { 

    let contador = 0;
    let indicador = 0;
    let id_producto = objeto.querySelector('.qty p').dataset.id;

    a = {};
    a = JSON.parse(localStorage.getItem('session')) || [];

    a.forEach(producto => {

        if (producto.id == id_producto) {
            indicador = contador;
        }

        contador = contador + 1;
    })

    a.splice(indicador,1);
    localStorage.setItem('session', JSON.stringify(a));
    actualizarCarrito() ;
    location.reload();
}

function formulario(){

    window.location.href = "https://generalservices.jmryasociados.com/form"; 

}