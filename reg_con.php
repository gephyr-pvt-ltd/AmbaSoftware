
<?php
require_once('dbcon.php');

$full_name=$_POST['t1'];
$address=$_POST['t2'];
$email=$_POST['t3'];
$phone_no=$_POST['t4'];
$city=$_POST['t5'];
$college_name=$_POST['t6'];
$dept=$_POST['t7'];


$ss="select * from reg where email='$email'";
$rs=mysql_query($ss);
$row=mysql_fetch_array($rs);

if(empty($row))
{


$sql="insert into reg(full_name,address,email,phone_no,city,college_name,dept) values ('$full_name','$address','$email','$phone_no','$city','$college_name','$dept')";
mysql_query($sql);


$ch = curl_init();
$user="pjmudagal93@gmail.com:363899";
$receipientno="7760143639".","."9986982421"; 
$senderID="TEST SMS"; 
$msgtxt="ambasoftwares.com"."\n Registered user's contact no ".$phone_no;
//$msgtxt="Welcome to Amba Softwares,Dharwad."."\n Thank You For Registration"; 
curl_setopt($ch,CURLOPT_URL,  "http://api.mVaayoo.com/mvaayooapi/MessageCompose");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "user=$user&senderID=$senderID&receipientno=$receipientno&msgtxt=$msgtxt");
$buffer = curl_exec($ch);
if(empty ($buffer))
{ echo " buffer is empty "; }
else
{ echo $buffer; } 
curl_close($ch);

?>

<script>
alert("Thank You For Registration");
document.location="reg.html";
</script>

<?php
}

else
{
?>
<script>
alert("Already Exist! Please Check Your Email");
document.location="reg.html";
</script>
<?php
}
?>


