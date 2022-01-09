<?php

namespace Private;

use pocketmine\plugin\PluginBase;

use pocketmine\command\Command;

use pocketmine\command\CommandSender;

use pocketmine\Player;

class Main extends PluginBase{

  public function onCommand(CommandSender $sender, command $cmd, string $label, array $args): bool{

    switch ($cmd->getname()) {

      case 'pl':

        if($sender instanceof Player){

          $sender->sendMessage("§cYou can't see the plugins !");

        }

        break;

      case 'ver':

        if($sender instanceof Player){

          $sender->sendMessage("§cYou can't see the server version or plugins version !");

        }

        break;

      case 'plugins':

        if($sender instanceof Player){

          $sender->sendMessage("§cYou can't see the plugins !");

        }

        break;

      case 'version':

        if($sender instanceof Player){

          $sender->sendMessage("§cYou can't see the server version or plugins version !");

        }

        break;

      case 'about':

        if($sender instanceof Player){

          $sender->sendMessage("§cYou can't see the plugins or version plugins !");

        }

        break;

    }

    return true;

  }

}

