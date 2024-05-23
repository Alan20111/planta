const base_url = "http://localhost/planta/";
if (localStorage.getItem('recordar') == "true") {
    window.location.href = base_url + "index.php/Admin/inicio";
};

function loginUser() {
    var usuario = $("#usuario").val();
    var contrasena = $("#contrasena").val();

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
                alert("Datos incorrectos, vuelve a ingresarlos");
            } else {
                // Successful login
                localStorage.setItem("recordar", true);
                localStorage.setItem("usuario", jsonLogin.usuario);
                localStorage.setItem("contrasena", jsonLogin.contrasena);
                window.location.href = base_url + "index.php/Admin/inicio";
            }
        },
        error: function (jhrx, estado, errorA) {
        },
    });
}

function cleanstorage() {
    localStorage.clear();
}
