<!DOCTYPE html>
<html>

<head>
    <title>User List</title>
</head>

<body>
    <div class="container p-3">
    <h1>Users:</h1>

    <?
    if(count($users)>0)
    {?>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Acciones</th>

            </tr>


        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td>
                        <?= htmlspecialchars($user->getId()) ?>
                    </td>
                    <td>
                        <?= htmlspecialchars($user->getName()) ?>
                    </td>
                    <td>
                     <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalUpdate" onclick="updateUser('<?=$user->getId() ?>','<?=$user->getName() ?>')"
                     >Actualizar</button>
                     <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalDelete" onclick="deleteUser('<?=$user->getId() ?>','<?=$user->getName() ?>')"
                     >Borrar</button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <? }else{?>

        <div class="alert alert-info" role="alert">
  Sin resultados
</div>

    <? }?>

     <form action="index.php?action=addUser" method="post">
     <div class="input-group mb-3">
  <input type="text" name="name" class="form-control" placeholder="Enter name" aria-describedby="button-addon2" required>
  <button type="submit"class="btn btn-primary" id="button-addon2">Add User</button>
  </div>
</form> 

</div>
</body>
<link rel="stylesheet" href="styles/css/bootstrap.min.css">
<script src="styles/js/bootstrap.min.js"></script>
<script src="app.js"></script>


<!-- Modal update-->
<div class="modal fade" id="modalUpdate" tabindex="-1" aria-labelledby="modalUpdate" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <form id="form_update" action="index.php?action=updateUser" method="post">
      <div class="modal-header">
        <h5 class="modal-title" id="modalUpdate">Actualizar Usuario</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
      <input type="hidden" id="id" name="id" >
  <input class="form-control" type="text" id="name" name="name" placeholder="Enter name" required>
  

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="modalDelete" tabindex="-1" aria-labelledby="modalDelete" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <form id="form_delete" action="index.php?action=deleteUser" method="post">
      <div class="modal-header">
        <h5 class="modal-title" id="modalDelete">Eliminar Usuario</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
      <input type="hidden" id="id" name="id" >
  ¿Desea eliminar a <label id="lblName"></label>?
  

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger">Delete</button>
      </div>
      </form>
    </div>
  </div>
</div>

</html>