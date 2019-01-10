
<html>
<h1>cookies set:</h1>

<div id='varun'> </div>
<script type="text/javascript" >


	var theCookies = document.cookie.split(';');
    var aString = '';
    for (var i = 1 ; i <= theCookies.length; i++) {
     
    	        document.write('<br>');

        aString +=  ' ' + theCookies[i-1 ]+ '<br/>';
 ;

       // document.write('<br>'+ theCookies.length);
                document.write('<br>');

    }
  var x= document.getElementById("varun");
  x.innerHTML=aString ;

</script>

</html>
