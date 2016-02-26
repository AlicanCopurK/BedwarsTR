
<?php

namespace BedwarsTR;

use pocketmine\plugin\PluginBase;
use pocketmine\events\Listener;

class Bedwars extends PluginBase implements Listener{
    public function onEnable(){
      $this->getLogger()->info("§6[§fBedWarsTR§6]§a Plugin aktifleştirldi")
    }

}
?>
