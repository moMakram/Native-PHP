<?php
session_start();
include('connec.php');


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Oxford Academy</title>
<link href="Css/Style2.css" rel="stylesheet" type="text/css" />

<link href="data:image/x-icon;base64,AAABAAEAEBAAAAAAAABoBAAAFgAAACgAAAAQAAAAIAAAAAEAIAAAAAAAAAQAAAAAAAAAAAAAAAAAAAAAAAD///8A////AP///wD///8AAQEB/gAAAP8AAAD/AAAA/wAAAP8AAAD/AAAA/wAAAP////8A////AP///wD///8A////AP///wD///8A////AP///wD///8A4M2+SZBdGP+XXR//uo5qrP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8AZkUm/tKlUf/PoVn/zJxh/8qYaP9/TiX/////AP///wD///8A////AP///wD///8A////AP///wD///8AmGQ64c6XGP/JkB//xYom/8CCLf+7fDX/t3U8/3FJKf////8A////AP///wD///8A////AP///wD///8A////ALZ6Df+0fgj/r3oH/6VwC/+eaBD/m2IV/51fGv+fXCL/8/DuEf///wD///8A////AP///wD///8A////ANfY2P/7+/v/+vj3/8WQZv/7+vn/+ff1//r49//7+vn/5c68/9Ktj/////8A////AP///wD///8A////AP///wDYuKH/8/Py/+7n4P/z8/P/3sKt//T09P/w8fH/8/Pz//Hy8v/T1NX/////AP///wD///8A////AP///wD///8Abmde/6NuJf+Yah7/jWYe/4JhHf97Whz/e1oe/4ZfH/+UZCP/fWhT/////wD///8A////AP///wD///8A////AGBRRf+0bRn//////79+Dv/Dgwf/yY4E/8SFCf++fBD/uHMV/0sxFP////8A////AP///wD///8A////AP///wBDJxH//fv5/9Oocf/+/v7//v79/86bLf/Pmiv/wYIM/7t4Ev9JLw//////AP///wD///8A////AP///wD///8AQCUP/69lHv+1bhn/8ODL/79+Dv/Qn0P/58yR/86cOf/YsHT/STAN/////wD///8A////AP///wD///8A////AEAlDv/bupr/0qd0//7+/v/z6NT/6tSp//379v/+/v3/wYAL/z4oCv////8A////AP///wD///8A////AP///wBBJQ3/r2Qf/7RtGf+6dhT/ypU6/8aJCf/Xpzj/zI8I/82PC/8+Jwj/////AP///wD///8A////AP///wD///8ASC4Y/69kH/+1bhn/3LqH/8ODDv/Mjwj/1ZwD/9mfBv/epAf/QCkJ/////wD///8A////AP///wD///8A////AEYpDv+wZh7/unMY/8OBEv/Njwz/2Z8G/+StAv/qtAP/46kG/0MqCP////8A////AP///wD///8A////AP///wD7+/sE////ANS8p/jZuJn/uXpF/7d2QP/dvpz/1rul9v///wD6+voF////AP///wD///8A8A8AAP4/AAD4HwAA8A8AAPAPAADgBwAA4AcAAOAHAADgBwAA4AcAAOAHAADgBwAA4AcAAOAHAADgBwAA+B8AAA==" rel="icon" type="image/x-icon" />
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationRadio.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationRadio.css" rel="stylesheet" type="text/css" />
    <script src="sliderengine/jquery.js"></script>
    <script src="sliderengine/amazingslider.js"></script>
    <script src="sliderengine/initslider-1.js"></script>
<script src="SpryAssets/SpryCollapsiblePanel.js" type="text/javascript"></script>
<script src="SpryAssets/SpryAccordion.js" type="text/javascript"></script>
<link href="SpryAssets/SpryCollapsiblePanel.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryAccordion.css" rel="stylesheet" type="text/css" />




<link rel="stylesheet" href="Css/global.css">

	<script src="js/jquery.min.js"></script>
	<script src="js/slides.min.jquery.js"></script>
	<script>
		$(function(){
			$('#slides').slides({
				preload: true,
				preloadImage: 'img/loading.gif',
				play: 5000,
				pause: 2500,
				hoverPause: true,
				animationStart: function(current){
					$('.caption').animate({
						bottom:-35
					},100);
					if (window.console && console.log) {
						// example return of current slide number
						console.log('animationStart on slide: ', current);
					};
				},
				animationComplete: function(current){
					$('.caption').animate({
						bottom:0
					},200);
					if (window.console && console.log) {
						// example return of current slide number
						console.log('animationComplete on slide: ', current);
					};
				},
				slidesLoaded: function() {
					$('.caption').animate({
						bottom:0
					},200);
				}
			});
		});
	</script>






<style type="text/css">

.main {
width:216px;
margin-left:19px;
position:absolute;
margin-top:170px;

}

.month {
background-color:#000;
font:bold 12px verdana;
color:white;
}

.daysofweek {
background-color:gray;
font:bold 12px verdana;
color:white;
}

.days {
font-size: 12px;
font-family:verdana;
color:black;
background-color:#CCC;
padding: 2px;
}

.days #today{
font-weight: bold;
color:#F00;
}

</style>


<script type="text/javascript"  src="Javascript/basiccalendar.js">

/***********************************************
* Basic Calendar-By Brian Gosselin at http://scriptasylum.com/bgaudiodr/
* Script featured on Dynamic Drive (http://www.dynamicdrive.com)
* This notice must stay intact for use
* Visit http://www.dynamicdrive.com/ for full source code
***********************************************/

</script> 

<link href="Css/animate.css" rel="stylesheet" type="text/css" />
</head>

<body background="Images/background.png" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<div id="body">
<?php
if (isset($_SESSION['admin_session2']) ) {

echo('
  <div id="header">
<div id="countries">
<a href="index2.php"><div id="box1"><div id="arabic"></div></div></a>
<a href="index.php"><div id="box2"><div id="english"></div></div></a>
<a href="index2.php"><div id="Egypt"></div></a>
<a href="index.php"><div id="England"></div></a>
<div id="column"></div>
<div id="column2"><div id="column3"></div></div>
</div>
<a href="index.php">  <div id="logo" class="animated bounceIn"></div></a>
<div id="word"></div>

');
$id=$_GET['id'];
$result = mysql_query("select * from student where id='$id'");
$row = mysql_fetch_array($result);


echo('
<br/><br/>
<div id="welcome"><font size="30" color="white" ><p align="right"> welcome  </p></font></div>
<div id="stu"><font size="30" color="red" ><p align="right"> '); echo $row['name']; echo('  </p></font></div>


<div id="iconcover">
  <a href="http://www.facebook.com"><div id="facebook"></div></a>
<a href="http://www.twitter.com"><div id="twitter"></div></a>
<a href="http://www.google.com"><div id="google"></div></a>
<a href="http://www.rss.com"><div id="rss"></div></a>
<a href="http://www.wikipedia.com"><div id="wikipedia"></div></a>

</div>

</div>





<br/><br/><br/><br/>



<div style="position:absolute; margin-left:245px; margin-top:30px; width:944px; height:550px; overflow:auto; ">
<!------------------start--------------------->
');
$selecte = mysql_query("select * from product where optione='يظهر' order by id2 ");

  while($rows = mysql_fetch_array($selecte))
  {
echo('


<div id="diary_cont">
<div id="name999"><font color="#FFFFFF" > <center> '); echo $rows['prodname'];  echo('  </center><font></div>
<table width="870" height="129" border="0" style="position:absolute; margin-left:13px; margin-top:38px;">
  <tr> ');
  
  $select = mysql_query("select * from proditem  where place='$rows[1]' order by id2 ");
  $x=1;
  while($row = mysql_fetch_array($select))
  {
  if($x<7){
echo('

<td style="border-radius:4px;">
    <a href="information.php?idpro='); echo $row['id']; echo('&id='); echo $id; echo('">
	<br/><br/><br/><br/>
	<div style="position:absolute; margin-top:-58px; margin-left:2px; border:1px groove #00F; border-radius:4px; width:132px; height:80px;"><center><img src="'.$row['pic'].'" width="126px"  style=" margin-top:2px;  margin-left:0px; " height="74px"/></center></div></a>
        <div style="position:absolute; margin-top:27px; margin-left:2px; border:1px groove #00F; border-radius:4px; width:132px; height:29px;"><center><font color="000000">'); echo $row['name']; echo('</font></center></div>

    </td>');
	$x++;
	}
	}
	echo('
  </tr>
</table>

<div style="position:absolute;width:80px; height:20px; margin-left:100px; margin-top:9px;">
<a href="more_library.php?name='); echo $rows[1]; echo('&id='); echo $id; echo('">
<input name="more" type="button"  style=" background-color:#CCC; border:none; width:75px; height:24px; position:absolute;" value="المزيد" />
</a>
</div>
</div>
<br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br>  
');
}
echo('

<!---------------------------------end------------------------>



</div>





 <a href="logout2.php">
 	<div id="signoutmak">
<div id="Graficwords33"><font color="#FFFFFF" face="Comic Sans MS, cursive"  ><center><b> Sign Out </b></center></font></div>
</div>
 </a>














<div id="fotterhmak">
  <div id="thebest"></div>

<div id="copyrights"></div>


</div>
</div>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1");
var spryradio1 = new Spry.Widget.ValidationRadio("spryradio1");
var CollapsiblePanel1 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel1");
var Accordion1 = new Spry.Widget.Accordion("Accordion1");

</script> ');

}else{

///header("location:index.php");

echo " <font size='3px' ></font> <a href='index.php'><font size='4px'></font> </a> </font>"; 
echo "<meta http-equiv=\"refresh\" content=\"0;URL=index.php\">";


}
echo('
</body>
</html>
');
?>