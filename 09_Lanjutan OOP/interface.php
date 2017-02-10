<?php
interface mouse{
   public function klik_kanan();
   public function klik_kiri();
}
  
class laptop implements mouse{
   public function klik_kanan(){
     return "Klik Kanan...";
   }
   public function klik_kiri(){
     return "Klik Kiri...";
   }
}
 
$laptop_baru = new laptop();
echo $laptop_baru->klik_kanan();
// Klik Kanan...
?>