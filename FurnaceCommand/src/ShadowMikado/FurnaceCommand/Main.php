<?php

namespace ShadowMikado\FurnaceCommand;

use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use ShadowMikado\FurnaceCommand\Commands\FurnaceCommand;

class Main extends PluginBase implements Listener {
    
    public function onEnable(): void {
        $this->getLogger()->info("FurnaceCommand is Enable");
        $this->getServer()->getCommandMap()->register("", new FurnaceCommand());
    }

    public function onDisable(): void {
        $this->getLogger()->info("FurnaceCommand is Disable");
    }
}