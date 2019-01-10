<html><head>
<meta http-equiv="content-type" content="text/html; charset=windows-1252">
<h2>  <b>plugin list</b>  </h2>   <script>
    


        var l =navigator.plugins.length ;
  document.write("        <table border='1'style='width:100%'  cellpadding='25' cellspacing= '20'>");
    document.write("            <tr>");
    document.write('    <th width=\"25%\" >  name ');
    document.write("                </th>");


    document.write("    <th width=\"25%\">  description ");
    document.write("                </th>");



    document.write("    <th  width=\"25%\">  filename ");
    document.write("                </th>");



    document.write("    <th width=\"25%\" >  version ");
    document.write("                </th>");

    document.write("            </tr>");
//document.write("        </table>");

    var cnt = 0;
    for (var i = 1; i < l; i++) 
    {
        cnt = cnt + 1;
      
    //        document.write("        <table border='1'   style='width:100%'  cellpadding='25' cellspacing= '20'>");
        document.write("            <tr>");
            document.write("                <td width=\"25%\" >");
            document.write("                   " + navigator.plugins[i].name + "");
            document.write("                </td>");


            document.write("                <td width=\"25%\" >");
            document.write("                   " + navigator.plugins[i].description + "");
            document.write("                </td>");



            document.write("                <td  width=\"25%\">");
            document.write("                   " + navigator.plugins[i].filename + "");
            document.write("                </td>");


            document.write("                <td width=\"25%\" >");
            document.write("                   " + navigator.plugins[i].version + "");
            document.write("                </td>");


            document.write("            </tr>");
            //document.write("            </table>");
            document.write("                </td>");
            if (cnt != 4) 
            {
                document.write("            </tr>");
            }
            if (cnt = 4) {
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