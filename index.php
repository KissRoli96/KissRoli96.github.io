<?php
require 'users.php';
include 'partials/header.php';
$users = getUsers();
?>

<body>
<table class="table">
    <thead>
    <tr>
        <th>Name</th>
        <th>Username</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Website</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $user ): ?>
            <tr>
                <td><?= $user['name'] ?></td>
                <td><?= $user['username'] ?></td>
                <td><?= $user['email'] ?></td>
                <td><?= $user['phone'] ?></td>
                <td><?= $user['website'] ?></td>
                <td>
                    <a href="view.php?id=<?= $user['id'] ?>" class="btn btn-sm btn-outline-info">View</a>
                    <a href="update.php?id=<?= $user['id'] ?>" class="btn btn-sm btn-outline-secondary">Update</a>
                    <a href="delete.php?id=<?= $user['id'] ?>" class="btn btn-sm btn-outline-danger">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php include 'partials/footer.php' ?>