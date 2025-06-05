<?php

$con=mysql_connect("localhost","root","");
$db=mysql_select_db("aadhar_db",$con);

$con1=mysql_connect("localhost","root","");
$db2=mysql_select_db("adhar_master",$con1);

/*$ss="select * from addhar_details";
$rs=mysql_query($ss);
$row=mysql_fetch_array($rs);

$ss1="select * from adhar_links";
$rs1=mysql_query($ss1);
$row1=mysql_fetch_array($rs1);*/

$kk="select a.adhar_no,a.address,b.adhar_link_to from adhar_links b,adhar_details a where a.adhar_no=b.adhar_no";
$kk1=mysql_query($kk,$db,$db1);
$kk2=mysql_fetch_array($kk1);

echo $kk2['address'];

?>