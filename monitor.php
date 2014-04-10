<?PHP
error_log(date('r').": Begin Monitor \n", 3, 'php.log');
// this file will check for the existance of a runing VM, if it is not running, start it
include 'functions.php';
whoami();
ob_start();
$last_line = system('xm list', $retval);
$buffer = ob_get_clean();
error_log(date('r').": Buffer :: \n\n $buffer \n", 3, 'php.log');
checkVM('qb2013',$buffer);
checkVM('fileserver2 ',$buffer);
checkVM('fileserver ',$buffer);
error_log(date('r').": End Monitor \n", 3, 'php.log');
?>
