<?php
include_once("conifig.php");
$id=$_GET['id'];

$sql="SELECT * FROM users where id=:id";

$prep=$conn->prepare($sql);
$getUsers->bindParam(":id",$id);
$getUsers->execute();
$data=$prep->getch();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $data['id']?>"><br>
        <input type="text" name="name" value="<?php echo $data['name']?>"><br>
        <input type="text" name="username" value="<?php echo $data['username']?>"><br>
        <input type="email" name="email" value="<?php echo $data['email']?>"><br>

        <button type="submit" name="update">Update</button>
    </form>
    <a href="dashboard.php">dashboard</a>
</body>
</html>