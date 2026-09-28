<?php
class Perangkat {
  public $merek;
  public $stok;
}

$perangkat01 = new Perangkat();
$perangkat01->merek = "BorneoSistem";    
$perangkat01->stok = 10;  

echo $perangkat01->merek;      // BorneoSistem
echo PHP;
echo $perangkat01->stok;       // 10