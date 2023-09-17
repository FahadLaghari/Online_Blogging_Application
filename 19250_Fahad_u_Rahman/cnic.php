<!DOCTYPE html>
<html>
<head>
	<title>Cnic Fething</title>
	<script type="text/javascript">
		function farward(){
		    var responce=document.getElementById('inputdata').value;
		   //alert(responce); 
		var obj;
		if (window.XMLHttpRequest) {
			obj=new XMLHttpRequest();
		}
		else
		{
	    	obj=new ActiveXobject("Microsoft.XMLHTTP")
		}
		obj.onreadystatechange=function(){
		if (obj.readyState == 4 && obj.status == 200) {
           		document.getElementById('head').
           			innerHTML= obj.responseText;
				}
		}
		obj.open("GET","process.php?getdata="+responce);
		obj.send();
		}
	</script>

</head>

<body>
			
</body>
			<center>
				<h1>Enter Cnic Here And Get Data</h1>
				<input type="number" name="cnic" id="inputdata" placeholder="Enter Cnic"  required>
				<input type="submit" name="submit" value="Find" onclick="farward()">
				 <div style="margin-top: 120px" id="head"></div>
		    </center>   			 
</html>