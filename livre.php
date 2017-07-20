<?php
class Livre {

 private $title;
 private $author;
 private $pages;
 private $price;

 public function __construct(){
   $argusNumbers = func_num_args();
   $argus = func_get_args();

   switch($argusNumbers) {
     case '3':
      $this->priceless($argus[0], $argus[1], $argus[2]);
      break;
    case '4':
      $this->withprice($argus[0], $argus[1], $argus[2], $argus[3]);
    default:
     break;
   }
 }
 private function priceless($argus0,$argus1,$argus2){

   $this->title=$argus0;
   $this->author=$argus1;
   $this->pages=$argus2;
  //  $this->price= -1;

 }
 private function withprice($argus0,$argus1,$argus2,$argus3){

   $this->title=$argus0;
   $this->author=$argus1;
   $this->pages=$argus2;
   $this->price=$argus3;

 }

 public function __toString() {
   if ($this->price == -1) {
     return ($this->title.' - '.$this->author.' - '.$this->pages.' - Prix pas encore donné');
   }
   else {

     return ($this->title.' - '.$this->author.' - '.$this->pages.' - '.$this->price);
   }
 }
  
}
 ?>
