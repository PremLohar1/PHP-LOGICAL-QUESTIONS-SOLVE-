<?php
$num=546;
$number=$num;
$rev=0;
while($number>0){
  $rev = $rev*10 + $number%10;
  $number = (int)($number/10);
}
if($rev==$num){
  echo "This is Palindrome Number ";
}
else{
  echo "This is Not Palindrome Number ";
}
?>