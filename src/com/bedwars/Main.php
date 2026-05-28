<?php

declare(strict_types=1);

namespace com\bedwars;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\player\Player;

class Main extends PluginBase {

    protected function onEnable(): void {
        $this->getLogger()->info("BedWars Plugin Enabled!");
    }

    protected function onDisable(): void {
        $this->getLogger()->info("BedWars Plugin Disabled!");
    }

    public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool {
        if(strtolower($command->getName()) === "bedwars") {
            if($sender instanceof Player) {
                $sender->sendMessage("Setting up BedWars UI...");
                // Open UI for arena setup (to be implemented)
            } else {
                $sender->sendMessage("This command can only be used in-game.");
            }
            return true;
        }
        return false;
    }
}
