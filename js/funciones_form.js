document.addEventListener('DOMContentLoaded', () => {

    actualizarCarrito();
    cargarResumenCompra();
    validar_nombre();
    validar_email();
    validar_telefono();

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
}


function cargarResumenCompra() {

    let nombre_productos = "";
    let header_list = '<ol class="list-group list-group-numbered">';
    let footer_list = '</ol>';

    a = {};
    a = JSON.parse(localStorage.getItem('session')) || [];

    a.forEach(producto => {

        nombre_productos = nombre_productos + '<li class="list-group-item">' + producto.nombre + ' ( ' + producto.cantidad + ' ) : Monto Total = ' + Number(producto.precio) * Number(producto.cantidad) + ' </li>';

    });

    document.getElementById('resumen_compra').innerHTML = "<h3 style='margin:10px;'>Resumen de compra : </h3>" + header_list + nombre_productos + footer_list;
}

function enviar_mensaje() {

    let names = document.getElementById('names').value;
    let emails = document.getElementById('email_adress').value;
    let num_phone = document.getElementById('num_phone').value;


    if (names != "" && emails != "" && num_phone && num_phone != "") {

        if (document.getElementById('correo_electronico').textContent == "") {

            pedidos = {};
            pedidos = JSON.parse(localStorage.getItem('session')) || [];

            $.ajax(
                {
                    type: "POST",
                    url: "mensaje.php",
                    data: {'array': JSON.stringify(pedidos), 'email': emails, 'phone':num_phone, 'names':names},
                    success: function (response) {
                        console.log(response)
                        alert("Su pedido se envio correctamente" + response);
                        window.location.href = "https://generalservices.jmryasociados.com/";
                    }
                }
            )


        }

    }
}

function validar_nombre() {
    let names = document.getElementById('names').value;

    if (names == "") {
        document.getElementById('nombre_apellido').innerHTML = "Por favor, ingrese su nombre y apellido";
    } else {
        document.getElementById('nombre_apellido').innerHTML = "";
    }


}

function validar_email() {

    let emails = document.getElementById('email_adress').value;
    let arroba = document.getElementById('email_adress').value.includes('@');
    let punto = document.getElementById('email_adress').value.includes('.');

    if (emails == "") {
        document.getElementById('correo_electronico').innerHTML = "Por favor, ingrese su correo electronico";
    } else {
        if (!arroba || !punto) {
            document.getElementById('correo_electronico').innerHTML = "El correo electronico debe tener un '@' y un  '.'";
        } else {

            document.getElementById('correo_electronico').innerHTML = "";
        }

    }

}

function validar_telefono() {

    let num_phone = document.getElementById('num_phone').value;

    if (num_phone == "") {
        document.getElementById('numero_telefonico').innerHTML = "Por favor, ingrese su número telfonico";
    } else {
        document.getElementById('numero_telefonico').innerHTML = "";
    }


}