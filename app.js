function updateUser(id,name) {
  
    var form = document.getElementById("form_update");
    form.elements["id"].value = id;
    form.elements["name"].value = name;

}

function deleteUser(id,name) {
  
    var form = document.getElementById("form_delete");
    form.elements["id"].value = id;
    document.getElementById("lblName").innerText =name

}