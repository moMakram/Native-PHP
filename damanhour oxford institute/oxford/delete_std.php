<?php

session_start();

include('connec.php');


$id3=$_GET['id3'];
$id=$_GET['id'];


echo(' 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
<title>
updating with makram
</title>

<link href="css/style3.css" rel="stylesheet" type="text/css" />
</head>

<body> ');
if (isset($_SESSION['admin_session']) ) {



echo('






<div id="container">

<br/><br/><br/><br/><br/>');



$result = mysql_query(" delete from student   where id ='$id3' " );
$result2 = mysql_query(" delete from answers   where id2 ='$id3' " );
$result3 = mysql_query(" delete from stucourse   where id2 ='$id3' " );
$result4 = mysql_query(" delete from question   where id2 ='$id3' " );

if($result&&$result2&&$result3&&$result4)
{

echo('
<center> ');


echo("<font size='6px'> تمت العملية بنجاح </font>");

echo('
<br/><br/>
');

///header("location:updatestd_form.php?id=$id");

echo " <font size='5px' color='red'><center> </center></font> <a href='updatestd_form.php?id="; echo $id; echo"'><font size='5px'><center>  </center> </font> </a> </font>"; 
echo "<meta http-equiv=\"refresh\" content=\"0;URL=updatestd_form.php?id=";echo $id;  echo"\">";




  echo('</center> ');
}

else
{

echo("error");
}


echo('

<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<br/><br/><br/><br/><br/><br/><br/>
<br/><br/><br/><br/>
</div>'); 


}else{

///header("location:login.php");

echo " <font size='3px' ></font> <a href='login.php'><font size='4px'></font> </a> </font>"; 
echo "<meta http-equiv=\"refresh\" content=\"0;URL=login.php\">";

}

echo('

</body>
</html> ');

?>




