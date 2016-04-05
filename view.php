<?php

include("configs/config.php");
try{
$stmt=$db->prepare("select img_name,img_dimension from image; ");
$stmt->execute();

$row=$stmt->fetchAll(PDO::FETCH_ASSOC);
foreach ($row as $arr) { 
	
	//Reading file in a directory
if (is_dir($dir)){
  if ($dh = opendir($dir)){
    while (($file = readdir($dh)) !== false){
      if($file==$arr['img_name'])  {echo '<img '.$arr['img_dimension'].' src='.$dir.$file.' >';}
	}
    closedir($dh);
  }
}

}	
}catch(Exception $e){echo $e;}

//-------this code displays only description on page fetched from database-----------

try{
	$stmt = $db->prepare("select description from image where cust_id='CLT'   ;");
	$stmt->execute(); 

    $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
	 foreach ($row as $arr) { echo	$arr['description'];	}	
		header( 'refresh:5;url=client_file_upload.php' );

}catch(Exception $e)
	{echo $e;}
//--------description display code-------START


/*
try{
//echo '<font face="arial" size=20><textarea readonly rows="4" cols="30" name="description" id="description" required style="resize:none">'.$txt.'</textarea></font>';
echo $txt;
}catch(Exception $e){echo $e;}
*/

//--------description display code-------END
echo '<br><a href="client_file_upload.php">Home</a>';
?>