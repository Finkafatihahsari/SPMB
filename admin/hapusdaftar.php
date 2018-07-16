<?php
include "../koneksi.php";
	$kdpendaftar=addslashes($_GET['kdpendaftar']);
	$query="delete from pendaftar where kdpendaftar='".$kdpendaftar."'";
	$exec=mysql_query($query);
	if(mysql_query($query))
		header("location:./?p=pendaftar&code=3");
	else
		header("location:./?p=pendaftar&code=2");

?>