<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">

</form>

<h4>HOBI</h4>
	<input type="checkbox" name="hobi[]"value="olahraga">OLAHRAGA<br/>
	<input type="checkbox" name="hobi[]"value="masak">MASAK<br/>
	<input type="checkbox" name="hobi[]"value="futsal">FUTSAL<br/>	
	<input type="checkbox" name="hobi[]"value="basket">BASKET<br/><br/>
	<input type="reset" name="delete"value="Delete"><br/>
	<input type="submit" name="enter"value="kirim"><br/>


	<?php 
if (isset($post['enter']))
	$data=$post["hobi"];
	foreach ($data as $nilai) {
		echo $nilai."<br/>";
	}


	 ?>

