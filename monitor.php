<?PHP
// this file will check for the existance of a runing VM, if it is not running, start it
ob_start();
$last_line = system('xm list', $retval);
$buffer = ob_get_clean();


function checkNstart($vm,$buffer){

  $pos = strpos($buffer, $vm);
  if ($pos === false) {
      echo "The vm '$vm' was not found in the buffer. ";
      
  } else {
      echo "The vm '$vm' was found in the buffer ";
      echo " and exists at position $pos";
      // do nothing =)
  }

}




checkNstart('qb2013',$buffer);
checkNstart('fileserver2',$buffer);
checkNstart('fileserver',$buffer);
?>
