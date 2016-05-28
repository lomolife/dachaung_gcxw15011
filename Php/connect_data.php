<?php
	require_once('connect.php');
	//获取通信数据
	$ID=$_GET['ID'];
	$time=date("Y-m-d H:i:s");
	$longitude=$_GET['long'];
	$latitude=$_GET['lat'];
	$tem=$_GET['tem'];
	$distance=$_GET['dis'];
	//5.10
	$Flat=$_GET['Flat'];
	$Flong=$_GET['Flong'];
	//5.25
	$Safe = $_GET['S'];
	//数据进表
	$insertsql="insert into gcxw_data(ID,time,longitude,latitude,tem,distance,Safe,Flatitude,Flongitude) 
	values('$ID','$time','$longitude','$latitude','$tem','$distance','$Safe','$Flat','$Flong')";
	
	//判断数据进表成功与否
	if(!mysql_query($insertsql))
			{
				//echo "<script>alert('储存失败');window.location.href='index.html#c'</script>";
			}
		else
			{
				//echo "<script>alert('储存成功');window.location.href='index.html#c'</script>";
			}
?>
