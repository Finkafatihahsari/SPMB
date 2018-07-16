<?php
include "../koneksi.php";
	$kdtk=addslashes($_GET['kdtk']);
	$query="delete from tk where kdtk='".$kdtk."'";
	$exec=mysql_query($query);
	if(mysql_query($query))
		header("location:./?p=tk&code=3");
	else
		header("location:./?p=tk&code=2");

?>