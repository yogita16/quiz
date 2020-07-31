<?php
/**
 * File: check_name.php
 * 
 * @author: Muni
 * @site: https://smarttutorials.net/
 */
require_once 'config.php';
require_once 'functions.php';

if (isset($_POST['name']) && !empty($_POST['name'])) {
    $count = checkName($_POST['name']);
    if ($count == 0 ) {
        echo 'true';
    }else{
        echo 'false';
    }
} else {
    echo 'false';
}
exit;