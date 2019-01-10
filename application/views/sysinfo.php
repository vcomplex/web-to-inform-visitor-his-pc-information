
<html>
<title>system info</title>

<h2> SYSTEM INFORMATION</h2>

<div id='de'></div>

<script>
var x = "Color Depth: " + screen.colorDepth;
document.getElementById("de").innerHTML=x;
document.write("<br>");

</script>

<script type="text/javascript">
document.write('resoultion =') ;
document.write(screen.width+'x'+screen.height);
document.write("<br>");


</script>


<div id='demo1'></div>

<div id='d'> </div>
<div id='e'></div>
<div id='z'></div>
<script>
var d = new Date();
var x = document.getElementById("d");
var y = document.getElementById("e");
x.innerHTML= 'UTC time ='+d.toUTCString();document.write("<br>");
//y.innerHTML = 	'local time =' +		d.toGMTString();document.write("<br>");
z.innerHTML= 'GMT timezone offset ='+d.getTimezoneOffset();document.write("<br>");
</script>
<script type="text/javascript">var x = "Color Depth: " + screen.colorDepth;
document.getElementById("demo1").innerHTML=x;</script>

<script >


if(navigator.cookieEnabled){

  document.write('cookie is Enabled');
}

else{

document.write(' cookies not enable');
}



</script>

<!--
<script type="text/javascript">


var winW = 630, winH = 460;
if (document.body && document.body.offsetWidth) {
 winW = document.body.offsetWidth;
 winH = document.body.offsetHeight;
}
if (document.compatMode=='CSS1Compat' &&
    document.documentElement &&
    document.documentElement.offsetWidth ) {
 winW = document.documentElement.offsetWidth;
 winH = document.documentElement.offsetHeight;
}
if (window.innerWidth && window.innerHeight) {
 winW = window.innerWidth;
 winH = window.innerHeight;
}

document.writeln('Window width = '+winW);
document.writeln('Window height = '+winH);


</script>

-->

<br>
<script type="text/javascript">


  var myWidth = 0, myHeight = 0;
  if( typeof( window.innerWidth ) == 'number' ) {
    //Non-IE
    myWidth = innerWidth;
    myHeight = innerHeight;
  } 
  document.write( 'browser Width = ' + myWidth );document.write("<br>");
  document.write( 'browser Height = ' + myHeight );document.write("<br>");



</script>

</html>