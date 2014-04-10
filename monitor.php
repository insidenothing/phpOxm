<?PHP
// this file will check for the existance of a runing VM, if it is not running, start it

$last_line = system('ls', $retval);


// Printing additional info
echo '
</pre>
<hr />Last line of the output: ' . $last_line . '
<hr />Return value: ' . $retval;

?>
