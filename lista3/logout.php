<?php
session_start();
session_destroy();
session_unset();
header("Location: /www/lista3/index.php");