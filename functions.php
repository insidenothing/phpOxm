<?PHP

function checkVM($vm,$buffer){
$pos = strpos($buffer, $vm);
if ($pos === false) {
echo "'$vm' DOWN
";
startVM($vm);
} else {
echo "'$vm' UP
";
// do nothing =)
}
}


function startVM($vm){
  ob_start();
  $last_line = system('/root/phpOxm/start.sh '.$vm, $retval);
  return ob_get_clean();
}
