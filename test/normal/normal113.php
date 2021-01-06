<?php
if(!empty($HTTP_POST_VARS))
   extract($HTTP_POST_VARS);
  
if(!empty($HTTP_GET_VARS))
   extract($HTTP_GET_VARS);

if(!empty($HTTP_SERVER_VARS))
   extract($HTTP_SERVER_VARS);

die();
?>