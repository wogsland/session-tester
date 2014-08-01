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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.j$
  <script>
    function timeout() {
      setTimeout(function() {
        $.post("sesaj.php",
        {
          get: "active"
        },
	function(data, status) {
          $("#time").append(data);
       	  timeout();
        });
      },
      3000);
    }
    timeout();
  </script>
</body>
