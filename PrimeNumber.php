<?php
function prime(){
  $num=8;
  $count=0;
  for($i=1;$i<=$num;$i++){
    if($num%$i==0){
      $count++;
    }
  }
  if($count==2){
    echo "This Is Prime Number ".$num;
  }
  else{
    echo "This is Not Prime Number ".$num;
  }
}
prime();
?>