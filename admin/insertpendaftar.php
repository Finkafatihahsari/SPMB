<?php
include "../koneksi.php";
	$kdpendaftar=addslashes($_POST['kdpendaftar']);
	$nama=addslashes($_POST['nama']);
	$query="select * from pendaftar where kdpendaftar='".$kdpendaftar."'";
	$exec=mysql_query($query);
	$r=mysql_fetch_array($exec);
	$kdjabfield=$r[0];
	$nmjabfield=$r[1];
	if(mysql_num_rows($exec)==0)
		$query="update pendaftar set nama='$nama' where kdpendaftar='$kdpendaftar'";
	
	else
		header("location:./?p=pendaftar&code=2");

?>