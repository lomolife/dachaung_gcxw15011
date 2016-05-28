<?php
	header("Content-type: text/html;charset=utf-8");
	//连库	
	if(!($con=mysql_connect(******))){
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
	echo "<center>
	<table border='1'>
	<tr>
	<th>ID</th>
	<th>time</th>
	<th>Longitude</th>
	<th>Latitude</th>
	<th>tem</th>
	<th>distance</th>
	<th>Safe(Y/N)</th>
	<th>Flatitude</th>
	<th>Flongitude</th>
	</tr>
	</center>";
	$query = mysql_query('select * from gcxw_data order by time desc limit 20');
	while($row = mysql_fetch_array($query)){
		echo "<tr>";
		echo "<td>" . $row['ID'] . "</td>";
		echo "<td>" . $row['time'] . "</td>";
		echo "<td>" . $row['longitude'] . "</td>";
		echo "<td>" . $row['latitude'] . "</td>";
		echo "<td>" . $row['tem'] . "</td>";
		echo "<td>" . $row['distance'] . "</td>";
		echo "<td>" . $row['Safe'] . "</td>";
		echo "<td>" . $row['Flatitude'] . "</td>";
		echo "<td>" . $row['Flongitude'] . "</td>";
		echo "<tr/>";
	}
	echo "</table>";
	?>
