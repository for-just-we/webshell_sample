<?php 
$QUERY_STRING = $_SERVER['QUERY_STRING'];
$QS = $QUERY_STRING;

/*pour les forms*********************************/
$tab = explode("&", $QS);
$i=0;
$remf = "";
while( $tab[$i] != "" && $tab[$i-1] != "separateur" )
{
    $temp = str_replace(strchr($tab[$i], "="), "", $tab[$i]);
    eval("\$temp2=\${$temp};");
    $remf .= "<input type=hidden name=" . $temp . " value=" . "'" . $temp2
."'>\n";
    $i++;
}

exit;
?>

