<?php
include("configs/config.php");

$n=1;

$title=$_POST['title'];
$subtitle=$_POST['sub-title'];
 $uploadOk=0;



 /*getimagesize() return an array of seven elements Index 0 and 1 contains respectively the width and the height of the image.

Index 2 is one of the IMAGETYPE_XXX constants indicating the type of the image.

Index 3 is a text string with the correct height="yyy" width="xxx" string that can be used directly in an IMG tag.

mime is the correspondant MIME type of the image. This information can be used to deliver images with the correct HTTP Content-type header: 
*/

echo'<h1><center><font face="Comic Sans" color="#DCDCDC">'.$title.'</font></center></h1>';
echo'<h4><center><font face="Comic Sans" color="#DCDCDC">'.$subtitle.'</font></center></h4>';



//-----------code upload daily_image on server---------START


 foreach($_FILES["image"]["tmp_name"] as $key=>$tmp_name){
$details = getimagesize($_FILES["image"]["tmp_name"][$key]);
$img_name=$_FILES["image"]["name"][$key];
$img_size=$_FILES["image"]["size"][$key];
$img_dimension=$details[3];
$img_type=$_FILES["image"]["type"][$key];
 
 if($n<=2){
try{
	$stmt1=$db->prepare("select img_id from image where img_id='IM".$n."';");
	$stmt1->execute();

  $row = $stmt1->fetchAll(PDO::FETCH_ASSOC);

  foreach($row as $data){ 

try{
	
$stmt2=$db->prepare("update image set img_name='".$img_name."',img_type='".$img_type."',
img_dimension='".$img_dimension."',title='".$title."',sub_title='".$subtitle."',img_category='daily',upload_date=NOW()
 where img_id='".$data['img_id']."' ;");

 $stmt2->execute();

 //--------code to store description in database ---------START
$txt=nl2br($_POST['editor1']); //nl2br converts multiline textarea content to single line content
try{
	$stmt = $db->prepare("update image set description ='".$txt."',img_category='daily' where img_id='".$data['img_id']."'   ;");
	$stmt->execute();    
	header( 'refresh:2;url=view.php' );
}catch(Exception $e)
	{echo $e;}

//--------code to store description in database ---------END
extract($_POST);
    $error=array();
    $extension=array("jpeg","jpg","png","gif");
try{  
 
				if ($_FILES["image"]["size"][$key] > 5000000) {			//5000000 bytes represent 5 MB
				echo "<br>Sorry, your file is too large.";
				$uploadOk = 0;}
				else{
                $file_name=$_FILES["image"]["name"][$key];
                $file_tmp=$_FILES["image"]["tmp_name"][$key];
				//echo $_FILES["image"]["tmp_name"][$key];
                $ext=strtolower(pathinfo($file_name,PATHINFO_EXTENSION));
				//echo $dir.$file_name;
			   if(in_array($ext,$extension))
                {//echo"<br>Extension found";
                    if(file_exists($dir.$file_name))
                    {echo"<br>file already exists";$uploadOk = 0;
                      //  move_uploaded_file($file_tmp,$dir.$file_name);
                    }
                   else
                    {	echo"<br>Uploading file".$file_name;
                        //$filename=basename($file_name,$ext);
                        //$newFileName=$filename.time().".".$ext;
                        move_uploaded_file($file_tmp,$dir.$file_name);$uploadOk = 1;
                    }
                }
                else
                {
                    array_push($error,"$file_name, ");
                }
            }
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {  echo "<br>Sorry, your file was not uploaded.";} else {   echo "<br> file uploaded .";}
}catch(Exception $e){echo $e;}
}catch(Exception $e){echo $e;}
  }// end of  loop
  }catch(Exception $e){echo $e;}
$n++;} }//end of loop
//-----------code upload daily_image on server---------END

echo '<br><a href="client_file_upload.php">Home</a>';

?>