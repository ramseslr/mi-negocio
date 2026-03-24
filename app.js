function updateUser(id, name, apellido, nombre_de_usuario) {

    console.log(nombre_de_usuario)
    var form = document.getElementById("form_update");
    form.elements["id"].value = id;
    form.elements["name"].value = name;
    form.elements["apellido"].value = apellido;
    form.elements["nombre_de_usuario"].value = nombre_de_usuario;

}

function deleteUser(id, name) {

    var form = document.getElementById("form_delete");
    form.elements["id"].value = id;
    document.getElementById("lblName").innerText = name

}