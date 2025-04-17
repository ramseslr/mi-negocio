<!DOCTYPE html>
<html>

<head>
    <title>User List</title>
</head>

<body>
    <h1>Users:</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>

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
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>


    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Occupation</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Alice</td>
                <td>28</td>
                <td>Designer</td>
            </tr>
            <tr>
                <td>Bob</td>
                <td>34</td>
                <td>Developer</td>
            </tr>
            <tr>
                <td>Carol</td>
                <td>25</td>
                <td>Writer</td>
            </tr>
        </tbody>
        <tfoot>



        </tfoot>
    </table>

    <? /*<form action="index.php?action=addUser" method="post">
  <input type="text" name="name" placeholder="Enter name" required>
  <button type="submit">Add User</button>
</form>*/ ?>


</body>

<script src="app.js"></script>

</html>