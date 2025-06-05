
<?php
require_once('dbcon.php');

$full_name=$_POST['t1'];
$college=$_POST['t2'];
$qualification=$_POST['t3'];
$sslc=$_POST['t4'];
$puc=$_POST['t5'];
$degree=$_POST['t6'];



$sql="insert into campus_reg(name,college,qualification,sslc,puc,degree) values ('$name','$college','$qualification','$sslc','$puc','$degree')";
mysql_query($sql);




?>

<script>
alert("Thank You For Registration");
document.location="campus_reg.html";
</script>

<?php



