<?php
	header("Content-type: text/html;charset=utf-8");
	//连库	
	if(!($con=mysql_connect(*****))){
		echo mysql_error();
		//echo "连接失败";
	}
	else
	{
		
		//echo "连接成功";
	}
	
	//选库
	if(!mysql_select_db(app_gcxw,$con)){
		echo mysql_error();
		//echo "连接失败";
	}else{
		
		//echo "选择数据库成功";
	}
	
	//字符集
	if(!mysql_query('set names utf8')){
		echo mysql_error();
		//echo "连接失败";
	}else{
		//echo "设定字符集成功";
	}
	
	?>
