<?php

session_id('u1c3bh9qckki374pm12khcdrec');

require_once("config.php");
session_regenerate_id();

echo session_id();

var_dump($_SESSION);