<?php
include "../koneksi.php";
	$kdpekerjaan=addslashes($_GET['kdpekerjaan']);
	$query="delete from pekerjaan where kdpekerjaan='".$kdpekerjaan."'";
	$exec=mysql_query($query);
	if(mysql_query($query))
		header("location:./?p=pekerjaan&code=3");
	else
		header("location:./?p=pekerjaan&code=2");

?>