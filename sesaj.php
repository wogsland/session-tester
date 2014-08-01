<?php
session_start();
echo (time() - $_SESSION['time'])." seconds<br>";
