
<h2>browser information</h2>
<script type="text/javascript">


document.write(navigator.userAgent) ;
document.write("<br>");

</script>




<script type="text/javascript"> 

var str =navigator.userAgent;

var res = str.match(/bot|googlebot|crawler|spider|robot|crawling/gi); 

document.write("<br>"+"checking  if the  user is a bot :");

if (res)
  {
document.write('bot was detected');  }
else{

    document.write('no bot present');
}
</script>



<script type="text/javascript">

var value  = navigator.userAgent;

var  pattern=  /Gecko|KHTML|Presto|Trident|Webkit|Blink/i  ;

//new RegExp(/bot|googlebot|crawler|spider|robot|crawling/i);

<!--
//while (matches = pattern.exec( value )){
 
//document.write( matches + "<br />" );
 
//}
-->

matches =pattern.exec(value);

document.write("<br>"+"The browser engine :  " + matches + "<br />");

//document.write('hello') ;

</script>

<!-- script for sys info time  stamps  and all  -->






