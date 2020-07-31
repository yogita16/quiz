<?php
session_start();
session_destroy();
require 'config.php';
header( 'Location: '.BASE_PATH ) ;