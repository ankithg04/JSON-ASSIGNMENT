<?php
function dprint($value,$key){
echo $key."-".$value;

}
$arr = array('Mon','Tue','Wed' );
array_walk($arr, "dprint");

shuffle($arr);
echo"<br>".$_SERVER["SERVER_NAME"];

?>
<input type="file" name="fileup">