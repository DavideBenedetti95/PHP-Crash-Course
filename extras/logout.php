<?php

session_start();

session_destroy();

header("Location: /PHP_CRASH/session.php");
