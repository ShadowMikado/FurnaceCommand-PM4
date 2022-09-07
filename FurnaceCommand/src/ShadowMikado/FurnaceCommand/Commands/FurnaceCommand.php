<?php

namespace ShadowMikado\FurnaceCommand\Commands;

use pocketmine\block\Cake;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\item\ItemFactory;
use pocketmine\item\ItemIds;
use pocketmine\item\VanillaItems;
use pocketmine\player\Player;

class FurnaceCommand extends Command {

    public function __construct()
    {
        parent::__construct("furnace", " ", "/furnace");
        $this->setPermission('furnace.cmd');
    }
    public function execute(CommandSender $sender, string $commandLabel, array $args)
    {
        if($sender instanceof Player) {

            $items = $sender->getInventory()->getItemInHand();
            $count = $sender->getInventory()->getItemInHand()->getCount();

            switch($items->getId()) {
                case 56:
                    $sender->getInventory()->setItemInHand(ItemFactory::getInstance()->get(ItemIds::DIAMOND,0,$count));
                    break;
                case 14:
                    $sender->getInventory()->setItemInHand(ItemFactory::getInstance()->get(ItemIds::GOLD_INGOT,0,$count));
                    break;
                case 15:
                    $sender->getInventory()->setItemInHand(ItemFactory::getInstance()->get(ItemIds::IRON_INGOT,0,$count));
                    break;
                case 73:
                    $sender->getInventory()->setItemInHand(ItemFactory::getInstance()->get(ItemIds::REDSTONE,0,$count));
                    break;         
                case 4:
                    $sender->getInventory()->setItemInHand(ItemFactory::getInstance()->get(ItemIds::STONE,0,$count));
                    break;  
                case 129:
                    $sender->getInventory()->setItemInHand(ItemFactory::getInstance()->get(ItemIds::EMERALD,0,$count));
                    break;   
                case 16:
                    $sender->getInventory()->setItemInHand(ItemFactory::getInstance()->get(ItemIds::COAL,0,$count));
                    break;       
                case 21:
                    $sender->getInventory()->setItemInHand(ItemFactory::getInstance()->get(351,4,$count));
                    break;
                case 365:
                    $sender->getInventory()->setItemInHand(ItemFactory::getInstance()->get(ItemIds::COOKED_CHICKEN,0,$count));
                    break;      
                case 319:
                    $sender->getInventory()->setItemInHand(ItemFactory::getInstance()->get(ItemIds::STEAK,0,$count));
                    break;   
                case 423:
                    $sender->getInventory()->setItemInHand(ItemFactory::getInstance()->get(ItemIds::COOKED_MUTTON,0,$count));
                    break;               
                case 411:
                    $sender->getInventory()->setItemInHand(ItemFactory::getInstance()->get(ItemIds::COOKED_RABBIT,0,$count));
                    break;               
                case 460:
                    $sender->getInventory()->setItemInHand(ItemFactory::getInstance()->get(ItemIds::COOKED_SALMON,0,$count));
                    break;          
                case 349:
                    $sender->getInventory()->setItemInHand(ItemFactory::getInstance()->get(ItemIds::COOKED_FISH,0,$count));
                    break;     
                case 12:
                    $sender->getInventory()->setItemInHand(ItemFactory::getInstance()->get(ItemIds::GLASS,0,$count));
                    break;  
                case 153:
                    $sender->getInventory()->setItemInHand(ItemFactory::getInstance()->get(ItemIds::QUARTZ,0,$count));
                    break;                                                                              
                default:
                    $sender->sendMessage("§cThis item can't be cooked");
                }
        }
    }
}