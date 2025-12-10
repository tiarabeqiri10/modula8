<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include_once("config.php");
    $sql="SELECT * FROM users";
    $getUsers=$conn->prepare($sql);
    $getUsers->execute();
    $users=$getUsers->fetchALL();

    ?>
    <table>
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Username</th>
            <th>Email</th>
        </thead>
        <tbody>
            <?php
            foreach($users as $users){
                ?>
                <tr>
                    <td><?=$user['id']?></td>
                    <td><?=$user['name']?></td>
                    <td><?=$user['username']?></td>
                    <td><?=$user['email']?></td>
                </tr>
                <?php
            }?>
            
        </tbody>
    </table>
    <form action="add.php" method="POST">
        <input type="text" name="name" placeholder="Name">
        <input type="text" name="username" placeholder="Username">
        <input type="email" name="email" placeholder="email">
    </form>
    <a href="add.php">Add</a>
</body>
</html>