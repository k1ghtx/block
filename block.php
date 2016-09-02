<?php

if ( !file_exists('ip.txt') ) {
 $deny_ips = array( // case if block file doest exist
  '127.0.0.1',
  '192.168.1.1',
  '83.76.27.9',
  '192.168.1.163'
 );
} else {
 $deny_ips = file('ip.txt');
}
// read user ip adress:
$ip = isset($_SERVER['REMOTE_ADDR']) ? trim($_SERVER['REMOTE_ADDR']) : '';
 
// search current IP in $deny_ips array
if ( (array_search($ip, $deny_ips))!== FALSE ) {
 // address is blocked:
 echo 'Your IP adress ('.$ip.') was blocked!';
 exit;
}
?>
