<?php
include "../con-flight.inc";
if(count($_POST)>0){
	if($_POST['type']==1){
		$acType=$_POST['acType'];
		$acWakeTurb=$_POST['acWakeTurb'];
		$acName=$_POST['acName'];		
		$sql = "INSERT INTO `Aircraft`( `acType`, `acWakeTurb`,`acName`) 
		VALUES ('$acType','$acWakeTurb','$acName')";
		if (mysqli_query($pripoj, $sql)) {
			echo json_encode(array("statusCode"=>200));
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($pripoj);
		}
		mysqli_close($pripoj);
	}
}
if(count($_POST)>0){
	if($_POST['type']==2){
		$id=$_POST['id'];
		$acType=$_POST['acType'];
		$acWakeTurb=$_POST['acWakeTurb'];
		$acName=$_POST['acName'];

		$sql = "UPDATE `Aircraft` SET `acType`='$acType',`acWakeTurb`='$acWakeTurb',`acName`='$acName' WHERE id=$id";
		if (mysqli_query($pripoj, $sql)) {
			echo json_encode(array("statusCode"=>200));
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($pripoj);
		}
		mysqli_close($pripoj);
	}
}
if(count($_POST)>0){
	if($_POST['type']==3){
		$id=$_POST['id'];
		$sql = "DELETE FROM `Aircraft` WHERE id=$id ";
		if (mysqli_query($pripoj, $sql)) {
			echo $id;
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($pripoj);
		}
		mysqli_close($pripoj);
	}
}
if(count($_POST)>0){
	if($_POST['type']==4){
		$id=$_POST['id'];
		$sql = "DELETE FROM Aircraft WHERE id in ($id)";
		if (mysqli_query($pripoj, $sql)) {
			echo $id;
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($pripoj);
		}
		mysqli_close($pripoj);
	}
}

?>