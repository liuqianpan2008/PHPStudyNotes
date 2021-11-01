<?php
    require 'common/db.php';
    if (isset($_GET["id"])) {
        $id=$_GET["id"];
        $sql="select * from Users where UserID=$id";
        $result=mysqli_query($link, $sql);
        if (!$result) {
            exit("执行失败，错误信息:".mysqli_error($link));
        } else {
            $data=mysqli_fetch_assoc($result);
            mysqli_free_result($result);
        }
    } else {
        echo "<script>location.href='UserList.php';</script>";
    }
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>编辑管理员信息</title>
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
			当前位置：编辑管理员信息
			<hr />
		</div>
		<div class="tableBox">
			<form action="UserSave.php?id=<?php echo $id;?>" method="post" onsubmit="return formVertify();">
				<div class="formLine"><label>账号：</label><input type="text" name="txtName" id="txtName" autofocus placeholder="账号" required value=<?php echo $data["UserName"]?>></input><span>*</span></div>
				<div class="formLine"><label>密码：</label><input type="password" name="txtPWD" id="txtPWD" placeholder="密码" required value=<?php echo $data["UserPWD"]?>></input><span>*</span></div>
				<div class="formLine"><label>权限：</label><input type="radio" name="radPower" value="0" <?php if ($data["UserPower"]==0) {
    echo "checked";
}?>>管理员
					<input type="radio" name="radPower" value="1" <?php if ($data["UserPower"]==1) {
    echo "checked";
}?>>超级管理员
				</div>
				<div class="formLine"><input type="submit" name="btnSubmit" value="更新"></input></div>
			</form>
		</div>
	</body>
</html>
