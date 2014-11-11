<head>
<title>Uploading image to MySQL database</title>
		

</head>


<?php
	include("db_connect.php");
	
	if(isset($_POST['submit'])){
		
		if(is_uploaded_file($_FILES['filename']['tmp_name'])){
			$maxsize=$_POST['MAX_FILE_SIZE'];
			$size=$_FILES['filename']['size'];
			// getting the image info..
			$imgdetails = getimagesize($_FILES['filename']['tmp_name']);
			$mime_type = $imgdetails['mime'];
			//print_r($imgdetails);
			// checking for valid image type
			
			if(($mime_type=='image/jpeg')||($mime_type=='image/gif')){
				// checking for size yet again
				
				if($size<$maxsize){
					$filename=$_FILES['filename']['name'];
					$imgData =addslashes (file_get_contents($_FILES['filename']['tmp_name']));
					$sql="INSERT into images(name,image,type,size) values ('$filename','$imgData','".$mime_type."','".addslashes($imgdetails[3])."')";
					mysql_query($sql,$link) or die(mysql_error());
				} else {
					echo "<font class='error'>Image to be uploaded is too large..Error uploading the image!!</font>";
				}

			} else {
				echo "<font class='error'>Not a valid image file! Please upload jpeg or gif image.</font>";
			}

		} else {
			switch($_FILES['filename']['error']){
				case 0:
					//no error; possible file attack!
					echo "<font class='error'>There was a problem with your upload.</font>";
					break;
				case 1:
					//uploaded file exceeds the upload_max_filesize directive in php.ini
					echo "<font class='error'>The file you are trying to upload is too big.</font>";
					break;
				case 2:
					//uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the html form
					echo "<font class='error'>The file you are trying to upload is too big.</font>";
					break;
				case 3:
					//uploaded file was only partially uploaded
					echo "<font class='error'>The file you are trying upload was only partially uploaded.</font>";
					break;
				case 4:
					//no file was uploaded
					echo "<font class='error'>You must select an image for upload.</font>";
					break;
				default:
					//a default error, just in case! 
					echo "<font class='error'>There was a problem with your upload.</font>";
					break;
				echo "Thank You";
			}

	}

}

?>