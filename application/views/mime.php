<html><head>
<meta http-equiv="content-type" content="text/html; charset=windows-1252">
<h2>  <b>mime types</b>  </h2><script>

    var mime =navigator.mimeTypes;

var l=navigator.mimeTypes.length ;
    //  var l =navigator.mimeTypes.length ;
  document.write("        <table border='1'style='width:100%'  cellpadding='25' cellspacing= '20'>");
    document.write("            <tr>");
    document.write('    <th width="25%" >  name ');
    document.write("                </th>");


    document.write("    <th width=\"25%\">  description ");
    document.write("                </th>");



    document.write("    <th  width=\"25%\">  type ");
    document.write("                </th>");




    document.write("            </tr>");
//document.write("        </table>");


    var x=0;
    var cnt = 0;
    for (var i = 0; i < l; i++) 
    {
        cnt = cnt + 1;
      
    //        document.write("        <table border='1'   style='width:100%'  cellpadding='25' cellspacing= '20'>");
        document.write("            <tr>");
            document.write("                <td width=\"25%\" >");
     
            if( x  != navigator.mimeTypes[i].enabledPlugin.name){
                                                                    
                            x=  navigator.mimeTypes[i].enabledPlugin.name ;


         document.write("                   " + navigator.mimeTypes[i].enabledPlugin.name + "");
  }

            document.write("                </td>");


            document.write("                <td width=\"25%\" >");
            document.write("                   " + navigator.mimeTypes[i].description + "");
            document.write("                </td>");



            document.write("                <td  width=\"25%\">");
            document.write("                   " + navigator.mimeTypes[i].type + "");
            document.write("                </td>");


            document.write("            </tr>");
            //document.write("            </table>");
            document.write("                </td>");
            if (cnt != 3) 
            {
                document.write("            </tr>");
            }
            if (cnt = 3) {
                cnt = 0;
            }

        }

    document.write("            </table>");





            </script>
 </head>
     <body>     
    
        <div name="id1">
        </div>
    
</body></html>