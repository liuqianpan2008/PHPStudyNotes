<?php
    require 'common/db.php';
    $sql="select * from Users";
    if (!$result=mysqli_query($link, $sql)) {
        exit("执行失败，错误信息:".mysqli_error($link));
    }
    $dataUsers=mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_free_result($result);
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>管理员信息</title>
		<link type="text/css" rel="stylesheet" href="css/Users.css"></link>
		<script type="text/javascript" language="javascript">
			function delDialog(n){
				if(confirm('real?')) 
					location.href='UserSave.php?id='+n;
			}
		</script>
	</head>
	<body>
		<div class="inforStyle">
			当前位置：管理员信息列表
			<hr />
			<div class="inforStylea"><a href="UserAdd.php">添加管理员信息</a></div>
		</div>
		<div class="tableBox">
			<table width="100%" height="31" border="0" cellpadding="0" cellspacing="0" class="tableStyle">
		    	<tr class="the1 titleStyle">
		        	<th>用户编号</th><th>登录账号</th><th>登录密码</th><th>管理权限</th><th>注册时间</th><th colspan="2">操作</th>
		        </tr>
		        <?php
                    $num=0;
                     foreach ($dataUsers as $user) {
                         $num++;
                         $trcolor=($num%2==0)? "trf2":"trf7";
                         echo "<tr class=\"$trcolor contentStyle\"><td>".$user["UserID"]."</td>";
                         echo "<td>".$user["UserName"]."</td>";
                         echo "<td>".$user["UserPWD"]."</td>";
                         echo "<td>".$user["UserPower"]."</td>";
                         echo "<td>".$user["RegistDate"]."</td>";
                         echo "<td><a href='UserUpdate.php?id=".$user["UserID"]."'>编辑</a></td>";
                         echo "<td><a href='javascript:delDialog(".$user["UserID"].");'>删除</a></td></tr>";
                     }
                ?>
			</table>
		</div>
	</body>
</html>
