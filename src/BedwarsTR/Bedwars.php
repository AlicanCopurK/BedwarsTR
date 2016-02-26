<?php

Namespace BedwarsTR;

use pocketmine\plugin\PluginBase;
use pocketmine\implements\Listener;
use pocketmine\scheduler\PluginTask;
use pocketmine\utils\TextFormat;

class Bedwars extends PluginBase implements Listener{

 public $prefix = "§7[§fBed§4Wars§7]";

 public function onEnable(){
  $this->getLogger()->info("BedwarsTR Basariyla Aktif!");
 }
 public function onDisable(){
  $this->getLogger()->info("BedwarsTR Deaktif!");
 }
}
?>
