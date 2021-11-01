<?php
    require 'common/db.php';
    if (isset($_GET["id"]) && isset($_POST["btnSubmit"])) {
        $id=$_GET["id"];
        $name=$_POST["txtName"];
        $pwd=$_POST["txtPWD"];
        $power=$_POST["radPower"];
        $RDate=date('Y-m-d H:i:s');
        $sql="update Users set UserName=?,UserPWD=?,UserPower=?,RegistDate=? where UserID=?";
        $stmt=mysqli_prepare($link, $sql);
        mysqli_stmt_bind_param($stmt, "ssisi", $name, $pwd, $power, $RDate, $id);
        if (mysqli_stmt_execute($stmt)) {
            echo "<script>alert('操作成功！');location.href='UserList.php';</script>";
        } else {
            echo "<script>alert('操作失败！');location.href='UserList.php';</script>";
        }
    } else {
        $id=$_GET["id"];
        $sql="delete from Users where UserID=$id";
        mysqli_query($link, $sql);
        $num=mysqli_affected_rows($link);
        if ($num>0) {
            echo "<script>alert('操作成功！');location.href='UserList.php';</script>";
        } else {
            echo "<script>alert('操作失败！');location.href='UserList.php';</script>";
        }
    }
