<?php
include "../koneksi.php";
	$kdagama=addslashes($_GET['kdagama']);
	$query="delete from agama where kdagama='".$kdagama."'";
	$exec=mysql_query($query);
	if(mysql_query($query))
		header("location:./?p=agama&code=3");
	else
		header("location:./?p=agama&code=2");

?>