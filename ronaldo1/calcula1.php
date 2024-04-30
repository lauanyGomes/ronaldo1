<?php
$numero=$_POST['numero'];

if($numero>0){
  echo"valor positivo";
}
else if($numero<0){
    echo "valor negativo";   
}
else{
    echo"iquala zero";   
}

?>