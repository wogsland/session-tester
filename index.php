<?php

session_start();

$_SESSION['time'] = time();
?>
<head>
  <title>
    Session Timeout Tester
  </title>
</head>
<body>
  The session has been alive for
  <div id="time"></div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="js/timeout.js"></script>
</body>
