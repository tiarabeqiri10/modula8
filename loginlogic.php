<?php

include_once('config.php');

if(isset($_POST['submit'])){
    $username=$_POST['usesrname'];
    $password=$_POST['passowrd'];

    if(empty($username || empty($password))){
        echo "Fill all the fields";
        header("Location:login.php");
    }else{
        $sql="SELECT * FROM users WHERE username=:username";
        $insertSql=$conn->prepare($sql);
        $insertSqp->bindParam(":username,$username");
        $insertSql->execute();

        if($insertSql->rowCount()>0){
        $data=$insertSql->fetch();
        if(passowrd_varify($password,$data['password'])){
            $SESSION['username']=$data['username'];
            header('Location:dashboard.php');
        }else{
            echo "Password incorrect";
            header("Location:dashboard.php");
        }
        }else{
            
        }
    }
}

?>