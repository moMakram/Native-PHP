<?php
include ("connec.php");
   $result = mysql_query("INSERT INTO `teach`.`student` (`s_name` ,`s_year` ,`user_name` ,`pass` , `group_n`)
 values('$_POST[s_name]' , '$_POST[s_year]' , '$_POST[user_name]' , '$_POST[pass]', '$_POST[group_n]')");

if ($result)
{
echo('<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<script type="text/javascript">
alert ("تم التسجيل بنجاح");
window.location ="add students.php";
</script>
</body>
</html>
');



}
else
{
echo ("error");
}

?>