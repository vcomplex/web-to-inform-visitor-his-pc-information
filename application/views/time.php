<body onload=localtime()>

<h2>local time :</h2>

	<div id='h'></div>

<script language="JavaScript" type="text/javascript" >  


//document.write('local time ') ;
function localtime() {
  now=new Date();
  hour=now.getHours();
  min=now.getMinutes();
  sec=now.getSeconds();

if (min<=9) { min="0"+min; }
if (sec<=9) { sec="0"+sec; }
if (hour>12) { hour=hour-12; add="pm"; }
else { hour=hour; add="am"; }
if (hour==12) { add="pm"; }
//document.get
var x=document.getElementById('h');
x.innerHTML=	((hour<=9) ? "0"+hour : hour) + ":" + min + ":" + sec + " " + add;


setTimeout("localtime()", 1000);

}

// -->  doc
</script>

<!-- This goes into the body of the file wherever you want to have the time placed -->
</body>