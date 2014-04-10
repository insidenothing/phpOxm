<?PHP
// this file will check for the existance of a runing VM, if it is not running, start it
ob_start();
$last_line = system('xm list', $retval);
$buffer = ob_get_clean();

echo $buffer;
?>
