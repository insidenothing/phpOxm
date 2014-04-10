<?PHP

function checkVM($vm,$buffer){
error_log(date('r').": Check $vm \n", 3, 'php.log');  
$pos = strpos($buffer, $vm);
if ($pos === false) {
echo "'$vm' DOWN
";
echo startVM($vm);
echo monitVM($vm);
} else {
echo "'$vm' UP
";
// do nothing =)
}
}


function startVM($vm){
  error_log(date('r').": Start $vm \n", 3, 'php.log'); 
  ob_start();
  $last_line = system('/root/phpOxm/start.sh '.$vm, $retval);
  return ob_get_clean();
}


function monitVM($vm){
  error_log(date('r').": Monit $vm \n", 3, 'php.log'); 
  ob_start();
  $last_line = system('/root/phpOxm/monit.sh '.$vm, $retval);
  return ob_get_clean();
}
