<?php
session_start();
include ("connec.php");

$reslut=mysql_query("select * from news");
echo('
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>حذف أو تعديل الأخبار</title>
<link href="Css/controls.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

');

if (isset($_SESSION['admin_session']) ) {

$prev = mysql_query("select * from prev where id='$_SESSION[id8]' ");
$go = mysql_fetch_array($prev);
if($go['updatenews']=='1'){

echo('

<div id="remove_news_word"></div>
<div id="header"></div>');
include ("menu.php");
echo('
<div id="body2">
<table width="480" height="150" border="0" bordercolor="#000" style="margin-left:144px; margin-top:30px;">
  <tr>
    <td width="40" height="35"  style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive">الترتيب</font></td>
    <td width="600" height="35"  style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive">الخبر</font></td>
	<td width="600" height="35"  style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive">الحاله</font></td>
    <td width="70" height="35"  style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive">Update</font></td>
    <td width="70" height="35"  style="background:#000" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive">Delete</font></td>
 
  </tr>');
       while ( $rows = mysql_fetch_array($reslut) )
  {
  echo('
  
  <tr>
    <td width="40" height="35"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive">'); echo($rows['ordere']);echo('</font></td>
    <td width="600" height="35"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive">'); echo($rows['descr']);echo('</font></td>
    <td width="70" height="35"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive">'); echo($rows['typee']);echo('</font></td>
    <td width="70" height="35"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font>');echo (' <a href="update_news.php?id= '); echo $rows['id']; echo('">  update </a></td>
	   <td width="70" height="35"  style="background:#090" align="center"><font color="#FFFFFF" face="Comic Sans MS, cursive"></font>');echo('<a href= "delete_news.php?id='); echo $rows['id']; echo('"> del </a></td>

  </tr>
  ');
  }
  echo('

</table>

<br/><br/>
</div>
<div id="fotter"></div>
');

}else{

echo('
<script type="text/javascript">
alert ("غير مسموح لك بالدخول هنا");
window.location ="control.php";
</script>
');

}

}else{

////header("location:login.php");


echo('
<script type="text/javascript">

window.location ="login.php";
</script>
');


}
echo('

</body>
</html>');
?>