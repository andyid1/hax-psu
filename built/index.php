<?php
if (file_exists('/var/IAMCONFIG.php')) {
   include_once '/var/IAMCONFIG.php';
}
if (defined('IAM_HOME_TOP')) { print IAM_HOME_TOP; }
if (defined('IAM_HOME_BUTTONS')) { print IAM_HOME_BUTTONS; }
echo file_get_contents('index.html');
