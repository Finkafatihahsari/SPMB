<?php
include "../koneksi.php";
	$kdpendidikan=addslashes($_POST['kdpendidikan']);
	$nmpendidikan=addslashes($_POST['nmpendidikan']);
	$query="select * from pendidikan where kdpendidikan='".$kdpendidikan."'";
	$exec=mysql_query($query);
	$r=mysql_fetch_array($exec);
	$kdjabfield=$r[0];
	$nmjabfield=$r[1];
	if(mysql_num_rows($exec)==0)
		$query="insert into pendidikan values('$kdpendidikan','$nmpendidikan')";
	else
		$query="update pendidikan set nmpendidikan='$nmpendidikan' where kdpendidikan='$kdpendidikan'";
	if(mysql_query($query))
		header("location:./?p=pendidikan&code=1");
	else
		header("location:./?p=pendidikan&code=2");

?>