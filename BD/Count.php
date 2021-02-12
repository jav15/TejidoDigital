<?php
include("Connection.php");
$Query="SELECT id FROM datos ORDER BY id DESC" ;
$Result=mysqli_query($Connection, $Query); 
$Row = mysqli_fetch_array($Result);
if ($Row['id'] < 10) {
	echo "0".$Row['id'];
}else{
	echo $Row['id'];
}
?>