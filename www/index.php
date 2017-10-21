<?php
  session_start(); 
  $output['counter'] = $_SESSION['counter']++;
  $output['source_ip'] = $_SERVER['REMOTE_ADDR'];
  $output['time'] = date(DateTime::ISO8601);
  echo json_encode($output);
?>
