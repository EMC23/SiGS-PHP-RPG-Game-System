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
          //  'route' => 'acme_hello_homepage7'
            'route' => 'list',
            'routeParameters' => array('type' => 'J17JigsFactions')         
         ));
                  
         $menu->addChild('Groups', array(
            'route' => 'list',
            'routeParameters' => array('type' => 'J17JigsGroups')        
         ));       
         
         $menu->addChild('Hobbits', array(
            'route' => 'list',
            'routeParameters' => array('type' => 'J17JigsHobbits')        
         ));        
         
        
        // ... add more children

        return $menu;
    }
}


