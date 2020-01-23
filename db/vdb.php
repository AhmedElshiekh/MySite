<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "000web";

$conn = new mysqli($server,$username,$password,$database);
if ($conn->connect_error){die("Connection failed: " . $conn->connect_error); }

$result = "CREATE TABLE track(
`id` int(6) NOT NULL auto_increment,
`tm` varchar(20) NOT NULL default '',
`ref` varchar(250) NOT NULL default '',
`agent` varchar(250) NOT NULL default '',
`ip` varchar(20) NOT NULL default '',
`ip_value` int(11) NOT NULL default '0',
`domain` varchar(20) NOT NULL default '',
`tracking_page_name` varchar(10) NOT NULL default '',
 UNIQUE KEY `id` (`id`)
 ) ENGINE=MyISAM DEFAULT CHARSET=latin1 "; 

$conn->query($result);
// if ($conn->query($result)===TRUE){
//  echo "Success in TABLE creation!......";
// }else echo "Error creating table: " . $conn->error;


$query="SELECT * FROM track";
$rst=mysqli_query($query);
$num=mysqli_num_rows($rst);
mysqli_close();
$i=0;

while ($i < $num) {
$f1=mysqli_result($rst,$i,"id");
$f2=mysqli_result($rst,$i,"tm");
$f3=mysqli_result($rst,$i,"ref");
$f4=mysqli_result($rst,$i,"agent");
$f5=mysqli_result($rst,$i,"ip");
$f6=mysqli_result($rst,$i,"ip_value");
$f7=mysqli_result($rst,$i,"domain");
$f8=mysqli_result($rst,$i,"tracking_page_name");
$f9=mysqli_result($rst,$i,"host_name");
$i++;
}



?>