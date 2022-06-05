<?php

namespace Michelle;


use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\player\Player;
use pocketmine\Server;
use Michelle\Spawn;


class CommandSpawn extends Command
{
    public function __construct()
    {
        parent::__construct("spawn", "Use este comando para teletransportarse al spawn");

    }

    public function execute(CommandSender $sender, string $commandLabel, array $args)
    {
        $config = Spawn::getInstance()->getConfig();

        if ($sender instanceof Player)


        if (!isset($args[0])) {
            $sender->teleport(Server::getInstance()->getWorldManager()->getDefaultWorld()->getSpawnLocation());
            $message = $config->get("SpawnMessage");
            $title = $config->get("Title");
            $sender->sendTitle($title);
        }
    }
}
