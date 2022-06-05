<?php

namespace Michelle;

use Michelle\CommandSpawn;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\SingletonTrait;

class Spawn extends PluginBase
{
    use SingletonTrait;

    protected function onLoad(): void
    {
        self::setInstance($this);
    }
        
     public function onEnable(): void{
        $this->saveResource("config.yml");
        $this->getLogger()->info("Spawn successfully enabled by Michelle!");
        $this->getServer()->getCommandMap()->register("spawn", new CommandSpawn());
         
    }
}
