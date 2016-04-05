<?php
     


echo'
<html>
<head><title>Image form</title>
  <script src="scripts/ckeditor/ckeditor.js"></script>
  <script src="scripts/jquery.js"></script>
 </head>
<body>
<center>
<h1>Form</h1>
<table>
<form action="Logic.php" method="post" enctype="multipart/form-data" >
<tr>
<td>Enter Title:</td><td><input type="text" placeholder="Enter Title" name="title" id="title" required></td>
</tr>
<tr>
<td>Enter Sub-Title:</td><td><input type="text" placeholder="Enter Sub-Title" name="sub-title" id="title" required></td>
</tr>
<tr>
<td>Select image(5MB Max.)</td><td><input type="file" name="image[]" id="image" accept="image/*" multiple required></td>
</tr>
<tr>
<td>Enter Description(Upto 500 chars.):</td><td> <textarea rows="4" cols="30" placeholder="Write something here..." name="editor1" id="editor1" required style="resize:none" ></textarea> </td>
';?>
<script>
                <!-- CK Editor-->
				// Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
				<!-- CK Editor-->
						
						<!-- Upload File Count-->		 
				 $(document).ready(function() {
				$("#submit").click(function(e) {
			var $fileUpload = $("input[type='file']");
        if (parseInt($fileUpload.get(0).files.length)>2){
         alert("You can only upload a maximum of 2 files");
			e.preventDefault();
			$("#submitdata").empty();
} 
});
});
				<!-- Upload File Count-->	
	</script><?php echo'
</tr>
<tr>
<td  colspan="2" ><center><input type="submit" id="submit" name="submit" value="submit"/></center></td>
</tr>

</form>
</table>
</center>
<a href="view.php">View Uploaded image</a>
</body>
</html>
';


?>