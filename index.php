<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

require_once('_config.php');
require_once(SMARTY_ROOT.'/init.php');

do_me('index', 'default', CURRENT_SITE, CURRENT_THEME);
?>
