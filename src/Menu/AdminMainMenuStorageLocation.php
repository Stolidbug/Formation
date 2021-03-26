<?php


namespace App\Menu;


use Sylius\Bundle\UiBundle\Menu\Event\MenuBuilderEvent;

final class AdminMainMenuStorageLocation
{
    public function addStorageLocationMenu(MenuBuilderEvent $event): void
    {
        $configurationMenu = $event->getMenu()->getChild('configuration');

        $configurationMenu
            ->addChild('storagelocations', ['route' => 'app_admin_storagelocation_index'])
            ->setLabel('app.ui.storagelocations')
            ->setLabelAttribute('icon', 'in cart')
        ;
    }
}
