<?php
// src/Acme/DemoBundle/Menu/Builder.php
namespace AppBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;

class Builder implements ContainerAwareInterface
{
    use ContainerAwareTrait;

    public function mainMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');
$menu->setChildrenAttributes(array('id' => 'menu'));

        $menu->addChild('Home', array('route' => 'homepage'));
        
        $menu->addChild('Players', array(
            'route' => 'list',
            'routeParameters' => array('type' => 'J17JigsPlayers')
        ));
        
        $menu->addChild('Buildings', array(
            'route' => 'list',
            'routeParameters' => array('type' => 'J17JigsBuildings')
        ));       
        
        $menu->addChild('Characters', array(
            'route' => 'list',
            'routeParameters' => array('type' => 'J17JigsCharacters')        
         ));
         
        $menu->addChild('Factions', array(
            'route' => 'factions'
         ));
                  
         $menu->addChild('Groups', array(
            'route' => 'groups'

         ));       
         
         $menu->addChild('Hobbits', array(
            'route' => 'hobbits'

         ));

        $menu->addChild('Monsters', array(
            'route' => 'monsters'
        ));

        // ... add more children

        return $menu;
    }
}


