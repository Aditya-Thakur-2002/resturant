<?php
require("config.php");
@$del = $_GET['idde'];
@$photodel = $_GET['dd'];
if (isset($_POST["submit"])) {
	if (!empty($_FILES['image']['name'])) {

		//call thumbnail creation function and store thumbnail name

	}
	//$dir="doctor/";
	//$dir.="Dr.".$_FILES['dimage']['name'];
	//move_uploaded_file($_FILES['dimage']['tmp_name'],$dir);
	//$dir="Dishes/";
	$dir = $_POST["name"];
	$upload_img = cwUpload('image', '', TRUE, 'Dishes/', '175', '116');
	//move_uploaded_file($_FILES['image']['tmp_name'],$dir);
	// $_POST["description"]=mysql_real_escape_string($_POST["description"]);
	echo "ok";
	$query = mysqli_query($con, "insert into dishes(type,dishname,photo,description,price) values('" . $_POST['type'] . "', '" . $_POST['name'] . "','" . $upload_img . "', '" . $_POST['description'] . "', '" . $_POST['price'] . "')");
	if ($query) {
		header('Location: menuDetail.php?success=true');
	} else {
		echo mysqli_error($con);
	}
} else {
	if ($del > 0) {
		$comm = mysqli_query($con, "delete from dishes where id='$del' ");
		if (!$comm) {
			echo (mysqli_error($con));
		} else {
			$filedel = "Dishes/" . $photodel;
			if (!unlink($filedel)) {
				echo ("Error deleting file");
			} else {
				header("location: menuDetail.php?delete=true");
			}
		}
	}
}


function cwUpload($field_name = '', $file_name = '', $thumb = FALSE, $thumb_folder = '', $thumb_width = '', $thumb_height = '')
{
	//folder path setup
	// $target_folder = ".";
	// $target_path = $target_folder;
	// $thumb_path = $thumb_folder;

	//file name setup
	$filename_err = explode(".", $_FILES[$field_name]['name']);
	$filename_err_count = count($filename_err);

	$file_ext = $filename_err[$filename_err_count - 1];
	if ($file_name != '') {
		$fileName = "Dishes/" . $_POST['name'] . '.' . $file_ext;
	} else {
		echo $fileName = $_POST['name'] . '.' . $file_ext;
	}

	//upload image path
	$upload_image = "Dishes/" . basename($fileName);

	//upload image
	if (move_uploaded_file($_FILES[$field_name]['tmp_name'], $upload_image)) {
		//thumbnail creation
		// if($thumb == TRUE)
		// {
		// 	$thumbnail = $thumb_path.$fileName;
		// 	list($width,$height) = getimagesize($upload_image);
		// 	// $thumb_create = imagecreatetruecolor($thumb_width,$thumb_height);
		// 	switch($file_ext){
		// 		case 'jpg':
		// 			$source = imagecreatefromjpeg($upload_image);
		// 			break;
		// 		case 'jpeg':
		// 			$source = imagecreatefromjpeg($upload_image);
		// 			break;
		// 		case 'png':
		// 			$source = imagecreatefrompng($upload_image);
		// 			break;
		// 		case 'gif':
		// 			$source = imagecreatefromgif($upload_image);
		// 			break;
		// 		default:
		// 			$source = imagecreatefromjpeg($upload_image);
		// 	}
		// 	imagecopyresized($thumb_create,$source,0,0,0,0,$thumb_width,$thumb_height,$width,$height);
		// 	switch($file_ext){
		// 		case 'jpg' || 'jpeg':
		// 			imagejpeg($thumb_create,$thumbnail,100);
		// 			break;
		// 		case 'png':
		// 			imagepng($thumb_create,$thumbnail,100);
		// 			break;
		// 		case 'gif':
		// 			imagegif($thumb_create,$thumbnail,100);
		// 			break;
		// 		default:
		// 			imagejpeg($thumb_create,$thumbnail,100);
		// 	}
		// }

		return $fileName;
	} else {
		return false;
	}
}
