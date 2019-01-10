<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 error_reporting(0) ;

class  Itool extends CI_Controller {

	public function index()
	{  
     //echo(" local time</br>");
     $this->load->view('time');
		$this->load->view('view') ;echo("</br>");
				$this->load->view('geo') ;echo("</br>");

			//$this->load->view('mime') ;
	//					$this->load->view('pluginlist') ;

		$this->load->view('port') ;echo("</br>");
			$this->load->view('sysinfo') ;echo("</br>");
     
			$this->load->view('language') ;echo("</br>");


$this->networkinfo();
echo("</br>");

$this->browser() ;
echo("</br>");
$this->headers();
echo("</br>");
 //$this->load->view('COOKIE') ;
                 $this->load->view('COOKIE') ;echo("</br>");

echo("</br>");
$this->load->view('mime') ;
echo("</br>");
$this->load->view('PLUGIN') ;
echo("</br>");


}


function browser(){




function getOS() { 

     $user_agent =  $_SERVER['HTTP_USER_AGENT'];

    $os_platform    =   "Unknown OS Platform";

    $os_array       =   array(
                            '/windows nt 6.3/i'     =>  'Windows 8.1',
                            '/windows nt 6.2/i'     =>  'Windows 8',
                            '/windows nt 6.1/i'     =>  'Windows 7',
                            '/windows nt 6.0/i'     =>  'Windows Vista',
                            '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
                            '/windows nt 5.1/i'     =>  'Windows XP',
                            '/windows xp/i'         =>  'Windows XP',
                            '/windows nt 5.0/i'     =>  'Windows 2000',
                            '/windows me/i'         =>  'Windows ME',
                            '/win98/i'              =>  'Windows 98',
                            '/win95/i'              =>  'Windows 95',
                            '/win16/i'              =>  'Windows 3.11',
                            '/macintosh|mac os x/i' =>  'Mac OS X',
                            '/mac_powerpc/i'        =>  'Mac OS 9',
                            '/linux/i'              =>  'Linux',
                            '/ubuntu/i'             =>  'Ubuntu',
                            '/iphone/i'             =>  'iPhone',
                            '/ipod/i'               =>  'iPod',
                            '/ipad/i'               =>  'iPad',
                            '/android/i'            =>  'Android',
                            '/blackberry/i'         =>  'BlackBerry',
                            '/webos/i'              =>  'Mobile'
                        );

    foreach ($os_array as $regex => $value) { 

        if (preg_match($regex, $user_agent)) {
            $os_platform    =   $value;
        }

    }   

    return $os_platform;

}

function getBrowser() {

     $user_agent =  $_SERVER['HTTP_USER_AGENT'];

    $browser        =   "Unknown Browser";

    $browser_array  =   array(
                            '/msie/i'       =>  'Internet Explorer',
                            '/firefox/i'    =>  'Firefox',
                            '/safari/i'     =>  'Safari',
                            '/chrome/i'     =>  'Chrome',
                            '/opera/i'      =>  'Opera',
                            '/netscape/i'   =>  'Netscape',
                            '/maxthon/i'    =>  'Maxthon',
                            '/konqueror/i'  =>  'Konqueror',
                            '/mobile/i'     =>  'Handheld Browser'
                        );

    foreach ($browser_array as $regex => $value) { 

        if (preg_match($regex, $user_agent)) {
            $browser    =   $value;
        }

    }

    return $browser;

}


$user_os        =   getOS();
$user_browser   =   getBrowser();

$device_details =   "<strong>Browser: </strong>".$user_browser."<br /><strong>Operating System: </strong>".$user_os."<br>";

print_r($device_details);
echo("</br>");
//echo("<br /><br /><br />user agent=         ".$_SERVER['HTTP_USER_AGENT']."");


$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
echo("</br>");
echo( "<b>hostname =".$hostname."<br>")   ;







}


function networkinfo(){

    echo" <h2>networkinfo</h2>";

	echo "Host : ".$_SERVER['HTTP_HOST'];
echo "<br>";
echo "Port:".$_SERVER['REMOTE_PORT'];
echo "<br>";
  $user =   $_SERVER['HTTP_HOST'];
 // echo $_SERVER['HTTP_HOST'];




echo "<B> checking  for transparent  proxy" ;

 error_reporting(0) ;

       $proxy_headers = array(
        'HTTP_VIA',
        'HTTP_X_FORWARDED_FOR',
        'HTTP_FORWARDED_FOR',
        'HTTP_X_FORWARDED',
        'HTTP_FORWARDED',
        'HTTP_CLIENT_IP',
        'HTTP_FORWARDED_FOR_IP',
        'VIA',
        'X_FORWARDED_FOR',
        'FORWARDED_FOR',
        'X_FORWARDED',
        'FORWARDED',
        'CLIENT_IP',
        'FORWARDED_FOR_IP',
        'HTTP_PROXY_CONNECTION'
    );
    foreach($proxy_headers as $x){
        if (!isset($_SERVER[$x])) 
{
           // echo "You are using a proxy!";
                                echo " wheater no proxy<br>"; 
                                break  ;
                        }else{
                            echo "you are behind a proxy  <br>";
                        
}












}
        

//<?php




$user = $_SERVER['REMOTE_ADDR'];

   echo ":remote address" ;echo $_SERVER['REMOTE_ADDR'];

    $ports = $_SERVER['REMOTE_ADDR'];
 error_reporting(0); 
echo $ports ;
$conn = fsockopen($user ,80, $errno, $errstr, 0.51);
    if ($conn) {
        fclose($conn);
        return true;
      echo 'ping success';

    }else{
        return false ;
            echo ' no ping you can be behind a firewall or not connected  <br>'; 
    }
    echo "proxy buffer   <br>";        



}




function port(){


function check_port($port) {

        echo "<b> ports scanner ";
       $user= $_SERVER['HTTP_HOST'];

 error_reporting(0) ;

    $conn = @fsockopen($user, $port, $errno, $errstr, 0.2);
    if ($conn) {
        fclose($conn);
        return true;
    }
}

function server() {

    $report = array();
    $svcs = array('21'=>'FTP',
                  '22'=>'SSH',
                  '25'=>'SMTP',
                  '80'=>'HTTP',
                  '110'=>'POP3',
                  '143'=>'IMAP',
                  '3306'=>'MySQL',
                  '3389'=>'RDP'     );
    foreach ($svcs as $port=>$service) {
        $report[$service] = check_port($port);
    }
    return $report;


}
echo "<br><h2> open ports </h2></br>";

$report = server();
 error_reporting(0) ;


}


function time(){


echo "<br>" ;

date_default_timezone_set('UTC');
    echo 'utc timestamp =' ;
        echo strtotime("now");
echo "<br>" ;

date_default_timezone_set("UTC");
echo "<br>" ;

echo 'utc  date and time     '.date("Y-m-d H:i:s", time()); 
echo "<br>" ;




}





function headers(){


echo "<h2> headers<br></h2>";
//<?php
$headers = apache_request_headers();

foreach ($headers as $header => $value) {
    echo "$header: $value <br>";
}

//echo "local time" ;
//$this->load->view('time');


//echo "HTTP_X_FORWARDED_FOR" .$_SERVER['HTTP_X_FORWARDED_FOR'];


}



}
