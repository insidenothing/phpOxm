<?PHP
// this file will check for the existance of a runing VM, if it is not running, start it
ob_start();
$last_line = system('xm list', $retval);
$buffer = ob_get_clean();

// Printing additional info
echo '
</pre>
<hr />Last line of the output: ' . $last_line . '
<hr />Return value: ' . $retval;

?>
