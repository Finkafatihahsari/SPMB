<?php
include "../koneksi.php";
$kdpendaftar= $_GET ['kdpendaftar'];

	mysql_query("update pendaftar set statusdaftar='Ditolak' where kdpendaftar='$kdpendaftar'");
		
if(mysql_query)
		header("location:./?p=seleksi&code=1");
else
	header("location:./?p=seleksi&code=2");

?>