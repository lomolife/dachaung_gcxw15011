<?php
	require_once('connect.php');
	//把传递过来的信息入库,在入库之前对所有信息进行校验。
	if(!(isset($_POST['user_name'])&&(!empty($_POST['user_name']))))
		{
			echo "<script>alert('姓名不能为空');window.location.href='index.html#d'</script>";
		}
	else
		{
			$user_name=$_POST['user_name'];
			$user_email=$_POST['user_email'];
			$user_adress=$_POST['user_adress'];
			$contents=$_POST['contents'];
			$dateline= date("Y-m-d H:i:s");
	//sql语言将表单中得到的数据插入数据库中的表
			$insertsql="insert into gcxw(user_name,user_email,user_adress,contents,dateline) values('$user_name','$user_email','$user_adress','$contents','$dateline')";
		if(!mysql_query($insertsql))
			{
				echo "<script>alert('提交失败');window.location.href='index.html#c'</script>";
			}
		else
			{
				echo "<script>alert('提交成功');window.location.href='index.html#c'</script>";
			}
		}
	?>
