<?php
// src/Acme/DemoBundle/Menu/Builder.php
namespace Acme\HelloBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;



class Builder

//class Builder extends ContainerAware
{
    public function mainMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');
$menu->setChildrenAttributes(array('id' => 'menu'));
        $menu->addChild('Home', array('route' => 'acme_hello_homepage4'));
        
        $menu->addChild('Players', array(
            'route' => 'acme_hello_homepage5',
            'routeParameters' => array('type' => 'J17JigsPlayers')
        ));
        
        $menu->addChild('Buildings', array(
            'route' => 'acme_hello_homepage5',
            'routeParameters' => array('type' => 'J17JigsBuildings')
        ));       
        
        $menu->addChild('Characters', array(
            'route' => 'acme_hello_homepage5',
            'routeParameters' => array('type' => 'J17JigsCharacters')        
         ));
         
        $menu->addChild('Factions', array(
          //  'route' => 'acme_hello_homepage7'
            'route' => 'acme_hello_homepage5',
            'routeParameters' => array('type' => 'J17JigsFactions')         
         ));
                  
         $menu->addChild('Groups', array(
            'route' => 'acme_hello_homepage8',
            'routeParameters' => array('type' => 'J17JigsGroups')        
         ));       
         
         $menu->addChild('Hobbits', array(
            'route' => 'acme_hello_homepage5',
            'routeParameters' => array('type' => 'J17JigsHobbits')        
         ));        
         
        
        // ... add more children

        return $menu;
    }
}


