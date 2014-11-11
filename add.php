<html>
<head>

<link href="image_blob/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<fieldset>
<legend>Upload Form</legend>
<form enctype='multipart/form-data' name='frmupload' action='php/image_upload.php' method='POST'>
<input type="hidden" name="MAX_FILE_SIZE" value="524288" />
<input name='filename' type='file'>
<input type='submit' value='Submit' name='submit'>
</form>
</fieldset>

</body>
</html>