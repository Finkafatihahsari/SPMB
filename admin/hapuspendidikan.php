<?php
include "../koneksi.php";
	$kdpendidikan=addslashes($_GET['kdpendidikan']);
	$query="delete from pendidikan where kdpendidikan='".$kdpendidikan."'";
	$exec=mysql_query($query);
	if(mysql_query($query))
		header("location:./?p=pendidikan&code=3");
	else
		header("location:./?p=pendidikan&code=2");

?>