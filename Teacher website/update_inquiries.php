<?php
include ("connec.php");
$id=$_GET['id'];
$result = mysql_query(" select * from inquiry where id ='$id' ");
$rows=mysql_fetch_array($result);
echo('
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>الردود على الإستفسارات</title>
<link href="Css/controls.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<div id="inquiry_word"></div>
<div id="header"></div>
<div id="menu">
<a href="control.html"><div id="nav1"></div></a>
</div>
<div id="body2">
<div style=" margin-left:80px; margin-top:40px; position:absolute;">
<table width="600" border="0">
  <tr>
    <td style="background-color:#000; width:150px; height:30px;"><font color="#FFFFFF" size="2" face="Comic Sans MS, cursive"><p align="center">ID</p></font></td>
    <td style="background-color:#060; width:300px; height:30px;"><input name="id" type="text" style="margin-left:10px; margin-top:2px; width:70px; height:28px; border:#000 1px groove; border-radius:4px; value="'); echo $rows['0']; echo('"/ ></td>
  </tr>
  <tr>
    <td style="background-color:#000; width:150px; height:30px;"><font color="#FFFFFF" size="2" face="Comic Sans MS, cursive"><p align="center">Question</p></font></td>
    <td style="background-color:#060; width:300px; height:30px;"><form name="my_form3"><textarea name="" cols="" rows="" wrap="virtual" style="width:403px; max-width:403px; margin-left:9px; border-radius:4px; height:35px; max-height:35px;"></textarea></form></td>
  </tr>
  <tr>
    <td style="background-color:#000; width:150px; height:30px;"><font color="#FFFFFF" size="2" face="Comic Sans MS, cursive"><p align="center">Reply</p></font></td>
    <td style="background-color:#060; width:300px; height:30px;"><form name="my_form3"><textarea name="" cols="" rows="" wrap="virtual" style="width:403px; max-width:403px; margin-left:9px; border-radius:4px; height:35px; max-height:35px;"></textarea></form></td>
  </tr>
  <tr>
    <td style="background-color:#000; width:150px; height:30px;"><font color="#FFFFFF" size="2" face="Comic Sans MS, cursive"><p align="center">حالة الظهور</p></font></td>
    <td style="background-color:#060; width:300px; height:30px;"><form name="my_form1" style="width:70px; margin-left:10px; margin-top:px;"><select name="show_box" style="width:120px; height:25px; border:#000 1px groove">
      <option>إظهـار</option>
      <option>إخفـاء</option>
    </select></form></td>
  </tr>
</table>

</div>
<input name="submit1" type="button" value="submit" style="background-color:#9F0; width:90px; height:26px; margin-left:330px; margin-top:265px; border-radius:3px;" />
</div>
<div id="fotter"></div>
</body>
</html>
');
?>