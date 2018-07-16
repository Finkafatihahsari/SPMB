<?php
include "../koneksi.php";
	$kdpekerjaan=addslashes($_POST['kdpekerjaan']);
	$nmpekerjaan=addslashes($_POST['nmpekerjaan']);
	$query="select * from pekerjaan where kdpekerjaan='".$kdpekerjaan."'";
	$exec=mysql_query($query);
	$r=mysql_fetch_array($exec);
	$kdjabfield=$r[0];
	$nmjabfield=$r[1];
	if(mysql_num_rows($exec)==0)
		$query="insert into pekerjaan values('$kdpekerjaan','$nmpekerjaan')";
	else
		$query="update pekerjaan set nmpekerjaan='$nmpekerjaan' where kdpekerjaan='$kdpekerjaan'";
	if(mysql_query($query))
		header("location:./?p=pekerjaan&code=1");
	else
		header("location:./?p=pekerjaan&code=2");

?>