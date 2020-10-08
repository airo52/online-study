<?php
if(isset($_POST['action'])){
$action = (isset($_POST['action']) && $_POST['action'] != '') ? $_POST['action'] : '';
$user_id = $_POST['title'];
$fileInfo = PATHINFO($_FILES["image"]["name"]);
	
	if (empty($_FILES["image"]["name"])){
		//$location=$srow['photo'];
		?>
			<script>
				window.alert('Uploaded file empty!');
				//window.history.back();
			</script>
		<?php
	}
	else{
		if ($fileInfo['extension'] == "jpg" OR $fileInfo['extension'] == "pdf") {
			$newFilename = $fileInfo['filename'] . "_" . time() . "." . $fileInfo['extension'];
			move_uploaded_file($_FILES["image"]["tmp_name"], "files/" . $newFilename);
			$location = "files/" . $newFilename;
			
			mysqli_query($con,"update `quiz` set pdf='$location' WHERE title='".$user_id."'");
	
			?>
				<script>
					window.alert('file updated successfully!');
					//window.history.back();
				</script>
			<?php
		}
		else{
			?>
				<script>
					window.alert('Photo not updated. Please upload JPG or PNG files only!');
					window.history.back();
				</script>
			<?php
		}
	}
	
}




 
?>