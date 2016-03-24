
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css"> 
		div{
			text-align: -webkit-center;
			
			/*font-size:15px;*/
		}
		
	</style>
	  <script>
        function add() {
            var a = parseInt(document.getElementById('box1').value);
            var b = parseInt(document.getElementById('box2').value);
            var c = parseInt(document.getElementById('box3').value);
            var d = parseInt(document.getElementById('box4').value);
            document.getElementById('box5').value =  a*10+b*240+c*25+d*300 ;
        }

        function output() {
        	var a = parseInt(document.getElementById('box1').value);
            var b = parseInt(document.getElementById('box2').value);
            var c = parseInt(document.getElementById('box3').value);
            var d = parseInt(document.getElementById('box4').value);
        	var total = parseInt(document.getElementById('box5').value);
            alert("您訂購的是:\n鳳梨酥"+a+"個\n鳳梨酥禮盒"+b+"個\n杏仁酥"+c+"個\n杏仁酥禮盒"+d+"個\n總計"+total+"元");
        }
    </script>
</head>
<body background="background2.jpg">

<div style=text-align:center;>
	<br>
	<br>

	<span style="font-size:50px; font-family:Microsoft JhengHei;color:#123456;">訂購表單</span>
	<br>
	<br>

</div>
<div style="position: relative;" >
	<TABLE  BORDER="1" HEIGHT=auto WIDTH="700">

	<TR height="150" ><TD width=200>
	<?php
		echo "<img src=\"display.php? PicNum=8\"width=200  HEIGHT=150>";
	?>
	</TD><TD>
		<form>
			<font style="padding-left: 20px" size="5" color="red">訂購數量 : </font>
			<input type="int" id="box1" value="0" onchange = "add()"></input>
			<font style="padding-left: 20px" size="5" color="red">*10元/個</font>
		</form>
	</TD></TR>
	
	<TR height="150" ><TD width=200><?php
		echo "<img src=\"display.php? PicNum=9\"width=200  HEIGHT=150>";
	?></TD><TD><form>
			<font style="padding-left: 20px" size="5" color="red">訂購數量 : </font>
			<input type="text" id="box2" value="0" onchange = "add()"></input>
			<font  size="5" color="red">*10元/個</font>
		</form></TD></TR>

	<TR height="150" ><TD width=200><?php
		echo "<img src=\"display.php? PicNum=10\"width=200  HEIGHT=150>";
	?></TD><TD><form name="form3">
			<font style="padding-left: 20px" size="5" color="red">訂購數量 : </font>
			<input type="text" id="box3" value="0" onchange = "add()"></input>
			<font  size="5" color="red">*10元/個</font>
		</form></TD></TR>

	<TR height="150" ><TD width=200><?php
		echo "<img src=\"display.php? PicNum=11\"width=200  HEIGHT=150>";
	?></TD><TD><form>
			<font style="padding-left: 20px" size="5" color="red">訂購數量 : </font>
			<input type="text" id="box4" value="0" onchange = "add()"></input>
			<font  size="5" color="red">*10元/個</font>
		</form></TD></TR>

		<tr><td colspan="2">
			<form name="total" id="total">
			<font style="padding-left: 200px" size="6" color="red">總計 : </font>
			<input type="text" name="box5" id=box5 value="0"></input>
			<input type="button" value="確定購買" onclick="output()"></input>
		</form>
		</td></tr>
	</TABLE>
	


</div>
<div>
		<span style="padding-left:800px; font-size:50px; font-family:Microsoft JhengHei;color:#800000;"><a href="index.php">回首頁→</span>
	</div>
</body>
</html>
