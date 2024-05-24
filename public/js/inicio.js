const base_url = "http://localhost/planta/";

var jsonmain;
loginUser();
function loginUser() {
    var usuario = localStorage.getItem('usuario');
    var contrasena = localStorage.getItem('contrasena');

    var jsonLogin = {
        usuario: usuario,
        contrasena: contrasena
    }
    checkLogin(jsonLogin);
}
function checkLogin(jsonLogin) {
    $.ajax({
        url: base_url + "index.php/Admin/login",
        dataType: "json",
        type: "post",
        data: jsonLogin,
        success: function (datos, estado, jhrx) {
            if (datos.Status == "False") {
                localStorage.clear();
                window.location.href = base_url + "index.php/Admin/";
            } else {
            }
        },
        error: function (jhrx, estado, errorA) {
        }
    })
}
loadData();
function loadData() {
    $.ajax({
        url: base_url + "index.php/Admin/readData",
        dataType: "json",
        type: "post",
        data: {},
        success: function (datos, estado, jhrx) {
            if (datos.status == 'success') {
                console.log(datos);
                loadElements(datos)
                jsonmain = datos;
            }
        }, error: function (jhrx, estado, errorA) {
            console.log(estado);
        },
    });
}

function loadElements(jsonData) {
    pedidos(jsonData.pedidos);
    exportador(jsonData.exportador);
}
function pedidos(jsonPedidos) {
    const listGroup = document.createElement('ul');

    listGroup.classList.add('list-group', 'list-group-flush');

    const parentElement = document.getElementById('list-data');

    parentElement.innerHTML = '';
    for (let i = 0; i < jsonPedidos.length; i++) {
        const elementData = jsonPedidos[i];

        const listItem = document.createElement('li');
        listItem.classList.add('list-group-item', 'list-group-item-action', 'list-group-item-light', 'rounded-3');

        listItem.innerHTML = `
        La central ${elementData.id}/${elementData.id_exp}/${elementData.fecha}
        <button class="float-end btn btn-warning rounded-pill">Previsualizar</button>
      `;

        listGroup.appendChild(listItem);
    }

    parentElement.appendChild(listGroup);
}
function pedidos(jsonPedidos, date, id_exp) {
    const listGroup = document.createElement('ul');

    listGroup.classList.add('list-group', 'list-group-flush');

    const parentElement = document.getElementById('list-data');

    parentElement.innerHTML = '';
    for (let i = 0; i < jsonPedidos.length; i++) {
        if (date != null && id_exp != null) {
            if (jsonPedidos[i].id_exp == id_exp && jsonPedidos[i].fecha == date) {
                const elementData = jsonPedidos[i];

                const listItem = document.createElement('li');
                listItem.classList.add('list-group-item', 'list-group-item-action', 'list-group-item-light', 'rounded-3');

                listItem.innerHTML = `
        La central ${elementData.id}/${elementData.id_exp}/${elementData.fecha}
        <button class="float-end btn btn-warning rounded-pill">Previsualizar</button>
      `;

                listGroup.appendChild(listItem);
            }
        } else {
            if (jsonPedidos[i].id_exp == id_exp || jsonPedidos[i].fecha == date) {
                const elementData = jsonPedidos[i];

                const listItem = document.createElement('li');
                listItem.classList.add('list-group-item', 'list-group-item-action', 'list-group-item-light', 'rounded-3');

                listItem.innerHTML = `
        La central ${elementData.id}/${elementData.id_exp}/${elementData.fecha}
        <button class="float-end btn btn-warning rounded-pill">Previsualizar</button>
      `;

                listGroup.appendChild(listItem);
            }
        }

    }

    parentElement.appendChild(listGroup);
}

function exportador(jsonexportador) {
    // Get the existing select element
    const selectElement = document.getElementById('exp');

    // Clear the existing options (optional)
    selectElement.innerHTML = '';

    // Create the default option
    const defaultOption = document.createElement('option');
    defaultOption.text = 'Todos';
    defaultOption.selected = true; // Set as selected by default
    selectElement.appendChild(defaultOption);

    // Add options for each exporter in the data
    for (let i = 0; i < jsonexportador.length; i++) {
        const elementData = jsonexportador[i];

        const optionElement = document.createElement('option');
        optionElement.text = elementData.nombre;
        optionElement.value = elementData.id;
        selectElement.appendChild(optionElement);
    }
}
const dateInput = document.getElementById('date-input');
const expInput = document.getElementById('exp');


dateInput.addEventListener('change', function () {
    var selectedDate = dateInput.value;
    var selectedExp = expInput.value;
    console.log('Selected date:', selectedDate);
    pedidos(jsonmain, selectedDate, selectedExp)
    // Perform actions based on the selected date
});