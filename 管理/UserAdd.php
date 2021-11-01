<?php
    require 'common/db.php';
    if (isset($_GET["action"]) == 'useradd') {
        $name=$_POST["txtName"];
        $pwd=$_POST["txtPWD"];
        $power=$_POST["radPower"];
        $sql="insert into Users(UserName,UserPWD,UserPower) values(?,?,?)";
        $stmt=mysqli_prepare($link, $sql);
        mysqli_stmt_bind_param($stmt, "ssi", $name, $pwd, $power);
        if (mysqli_stmt_execute($stmt)) {
            echo "<script>alert('成功添加数据！');location.href='UserList.php';</script>";
        }
    }
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>添加管理员信息</title>
		<link type="text/css" rel="stylesheet" href="css/Users.css"></link>
		<script type="text/javascript" language="javascript">
			function formVertify(){
				var name=document.getElementById("txtName");
				var pwd=document.getElementById("txtPWD");
				if(name.value.length==0){
					alert("账号不能为空！");
					name.focus();
					return false;
				}else if(pwd.value.length==0){
					alert("密码不能为空！");
					pwd.focus();
					return false;
				}else{
					return true;
				}
			}
		</script>
	</head>
	<body>
		<div class="inforStyle">
			当前位置：添加管理员信息
			<hr />
		</div>
		<div class="tableBox">
			<form action="UserAdd.php?action=useradd" method="post" onsubmit="return formVertify();">
				<div class="formLine"><label>账号：</label><input type="text" name="txtName" id="txtName" autofocus placeholder="账号" required></input><span>*</span></div>
				<div class="formLine"><label>密码：</label><input type="password" name="txtPWD" id="txtPWD" placeholder="密码" required></input><span>*</span></div>
				<div class="formLine"><label>权限：</label><input type="radio" name="radPower" value="0" checked>管理员
					<input type="radio" name="radPower" value="1">超级管理员
				</div>
				<div class="formLine"><input type="submit" name="btnSubmit" value="提交"></input></div>
			</form>
		</div>
	</body>
</html>

