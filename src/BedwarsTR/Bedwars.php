
<?php

namespace BedwarsTR;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class Bedwars extends PluginBase implements Listener{
    public function onEnable(){
      $this->getLogger()->info("§6[§fBedWarsTR§6]§a Plugin aktifleştirildi")
    }
    public function onCommand(CommandSender $sender, Command $cmmd, $label, array $args){

    }

}
?>
