<?PHP
// this file will check for the existance of a runing VM, if it is not running, start it
include 'functions.php';
ob_start();
$last_line = system('xm list', $retval);
$buffer = ob_get_clean();
checkNstart('qb2013',$buffer);
checkNstart('fileserver2 ',$buffer);
checkNstart('fileserver ',$buffer);
?>
