<?php 
include("include/konek.php");
$array	= $_POST['arrayorder3'];

if ($_POST['update'] == "update"){
	
	$count = 1;
	foreach ($array as $idval) {
		$query = "UPDATE keputusan SET listorder = " . $count . " WHERE id = " . $idval;
		mysqli_query($conn, $query) or die('Error, insert query failed');
		$count ++;	
	}
	echo 'All saved! refresh the page to see the changes';
}
?>