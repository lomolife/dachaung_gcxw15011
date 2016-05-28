<?php
	header("Content-type: text/html;charset=utf-8");
  	$sql   = "select longitude,latitude from gcxw_data order by time desc limit 1";
	$sql1 = "select Flongitude,Flatitude from gcxw_data order by time desc limit 1";

	  if($_GET["opt"])
	  {
	    switch($_GET["opt"])
	    {
	     case 2:
		  require_once('connect.php');
		  $getDBData = mysql_query($sql1);//$sql,获取数据库的数据
		  $getDBRow  = mysql_fetch_array($getDBData);
	      $LONG = $getDBRow ['Flongitude'];	 
		  $LAT  = $getDBRow ['Flatitude'];
	     
		  
	      echo "@";
		  echo $LAT;
		  echo "@";
		  echo $LONG;
		  echo "@";
	     
		  break;
	     
		 
		 case 1:
		 
		 //这里访问数据库 ，给$LONG和$LAT赋值
		  require_once('connect.php');
		  $getDBData = mysql_query($sql);//$sql,获取数据库的数据
		  $getDBRow  = mysql_fetch_array($getDBData);
	      $LONG = $getDBRow ['longitude'];	 
		  $LAT  = $getDBRow ['latitude'];
	     // $LONG = 109.30;
	     // $LAT  = 18.15;
		  $nLONG = 0;
		  $nLAT    = 0;
		  $i = 0;
		  $pos = 0;
		  
	      echo "@";
		   
		  $i = 0;
		  for(  ; $LAT[$i] != '/'  && $i<strlen($LAT) ;$i++);
			  
		  $nLAT = (float)substr($LAT , 0 , $i);
		  $i++;
	      $pos = $i;
	      for(  ; $LAT[$i] != '/'  &&$i<strlen($LAT);$i++);
	      $nLAT =  $nLAT + ((float)substr($LAT , $pos , $i))/60 ;
		  $i++;
	     $nLAT =  $nLAT + ((float)substr($LAT ,$i , strlen($LAT)))/3600;
	  
		  echo $nLAT;
		  
	      echo "@";
		  
		  $i = 0;
		  for(  ; $LONG[$i] != '/'  && $i<strlen($LONG) ;$i++);
			  
		  $nLONG = (float)substr($LONG , 0 , $i);
		  $i++;
	      $pos = $i;
	      for(  ; $LONG[$i] != '/'  &&$i<strlen($LONG);$i++);
	      $nLONG =  $nLONG + ((float)substr($LONG , $pos , $i))/60 ;
		  $i++;
	      $nLONG =  $nLONG + ((float)substr($LONG ,$i , strlen($LONG)))/3600;
		
	      echo $nLONG;
		  
	      echo "@";
		  
	      break;
	    }
	  }
?>
