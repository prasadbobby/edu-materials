<?php
// $fakeid=$_GET["u"];
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "download";
// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }else{  
// $stmt = $conn->prepare("select test_link,file_name from files where fakeid=?");
// $stmt->bind_param('s',  $fakeid);
// $stmt->execute();
// $stmt->store_result(); 
// $stmt->bind_result($column1, $column2);
// $stmt->fetch();
// $path=$column1;
// $file_name=$column2;
// $mime_type=mime_content_type($path); 
// header("Pragma: public");
// header("Expires: 0");
// header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
// header("Cache-Control: public");
// header("Content-Description: File Transfer");
// header("Content-Type: " . $mime_type);
// header("Content-Length: " .(string)(filesize($path)) );
// header('Content-Disposition: attachment; filename="'.$file_name.'"');
// header("Content-Transfer-Encoding: binary\n");
// readfile($path);
// exit();
// }
?>



<?php
$path = ''; 
if($_GET["id"] === "1"){
$path = 'java.pdf'; 	
}else if($_GET["id"] === "2"){
$path = 'https://drive.google.com/u/0/uc?id=1t9AxADH55b2ElfRzlbppdRzbbfye19o-&export=download'; 

}	

$mime_type=mime_content_type($path); 

header("Pragma: public");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Cache-Control: public");
header("Content-Description: File Transfer");
header("Content-Type: " . $mime_type);
header("Content-Length: " .(string)(filesize($path)) );
header('Content-Disposition: attachment; filename="'.basename($path).'"');
header("Content-Transfer-Encoding: binary\n");

readfile($path); 
exit();
?>