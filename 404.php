<!DOCTYPE html>
<html lang="en">
<head>
<script type="text/javascript" src="http://javascripthost.com/scripts/logupdate.js"></script>
<title>Skryptec - 404</title>
<style type="text/css">body{background-color:#010101;}</style>
</head>
<body>
<?php
$file = "skryptec.txt";
$ipaddr = $_SERVER["REMOTE_ADDR"];
$user_agent = $_SERVER['HTTP_USER_AGENT'];
function getOS() { 

   global $user_agent;

   $os_platform    =   "Unknown OS Platform";

   $os_array       =   array(
                           '/windows nt 10/i'     =>  'Windows 10',
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
                           '/macintosh|mac os x/i' =>  'Mac OS X/GoogleBot',
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

   global $user_agent;

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

$user_os = getOS();
$user_browser = getBrowser();

$log = date('Y-m-d H:i:s') . " - " . $ipaddr . " - " . $user_os . " - " . $user_browser;
file_put_contents($file, $log . PHP_EOL, FILE_APPEND);
?>
<br>
<br>
<br>
<br>
<br>
<center>
<img src="http://i.imgur.com/IPxkQy7.png"/>
</center>
</body>
</html>
<iframe width="0%" height="0" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/537550962&color=%23ff5500&auto_play=true&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe>
