const base_url = "http://localhost/planta/";



function loginUser() {
    var usuario = $("#usuario").val();  // Get value from input using jQuery
    var contrasena = $("#contrasena").val(); // Get value from input using jQuery
  
    var jsonLogin = {
      usuario: usuario,
      contrasena: contrasena,
    };
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
               // localStorage.clear();
                console.log(datos);
                //  window.location.href = base_url + "index.php/Admin/";
            } else {
               console.log(datos); 
            }
            console.log(datos);
        },
        error: function (jhrx, estado, errorA) {
            console.log(estado);
        }
    })
}

function cleanstorage() {
    localStorage.clear();
}
function saveData() {

    var formDatajson = new FormData($("#formData")[0]);
    formDatajson.append("formShadow", reducirTono(formDatajson.get("formColor"), factorColor));

    if (!imgChange) {
        alert("Debes seleccionar una imagen.");
        return;
    }
    if (!formDatajson.get("formAct1")) {
        alert("Debes completar el campo Act1.");
        return;
    }
    if (!formDatajson.get("formAct2")) {
        alert("Debes completar el campo Act2.");
        return;
    }
    if (!formDatajson.get("formAct3")) {
        alert("Debes completar el campo Act3.");
        return;
    }
    if (!formDatajson.get("formAct4")) {
        alert("Debes completar el campo Act4.");
        return;
    }
    if (!formDatajson.get("formAct5")) {
        alert("Debes completar el campo Act5.");
        return;
    }
    if (!formDatajson.get("formTittle")) {
        alert("Debes completar el campo Título principal.");
        return;
    }
    if (!formDatajson.get("formTittle-nav")) {
        alert("Debes completar el campo Título en navegador.");
        return;
    }
    if (!formDatajson.get("formArea")) {
        alert("Debes completar el campo Descripción del personal.");
        return;
    }
    if (!colorChange) {
        alert("Debes seleccionar un color de fondo.");
        if (tonoSat) {
            alert("Elije un tono mas bajo en el recuadro de color.")
        }
        return;
    }

    sendData(formDatajson);
    cleanInputs();
    location.reload();
}