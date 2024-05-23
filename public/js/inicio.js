const base_url = "http://localhost/planta/";
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
                console.log(datos.tarjetas);
            }
        }, error: function (jhrx, estado, errorA) {
            console.log(estado);
        },
    });
}