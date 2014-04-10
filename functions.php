<?PHP

function checkVM($vm,$buffer){
$pos = strpos($buffer, $vm);
if ($pos === false) {
echo "'$vm' DOWN
";
} else {
echo "'$vm' UP
";
// do nothing =)
}
}


function startVM(){
  
  
  
}
