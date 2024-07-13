<?php
$transport = array('bus','truck','motorcycle','ship');
echo " <pre>";
print_r($transport);
echo " </pre>";
 
$mode = current($transport);
echo $mode."<br>"; // $mode = 'bus';
$mode = next($transport);
echo $mode."<br>"; // $mode = 'truck';
$mode = current($transport);
echo $mode."<br>"; // $mode = 'truck';
$mode = prev($transport);
echo $mode."<br>"; // $mode = 'bus';
$mode = end($transport);
echo $mode."<br>"; // $mode = 'ship';
$mode = current($transport);
echo $mode."<br>"; // $mode = 'ship';
?>