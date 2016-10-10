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
            'route' => 'players',
        ));
        $menu->addChild('Buildings', array(
            'route' => 'buildings',
        ));
        $menu->addChild('Characters', array(
            'route' => 'characters',
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
        $menu->addChild('HobbitTypes', array(
            'route' => 'hobbit_types'
        ));
        $menu->addChild('Monsters', array(
            'route' => 'monsters'
        ));
        $menu->addChild('MonsterTypes', array(
            'route' => 'monster_types'
        ));

        $menu->addChild('Objects', array(
            'route' => 'objects'
        ));
        $menu->addChild('ObjectTypes', array(
            'route' => 'object_types'
        ));

      //  $menu->addChild('Content', array(
    //        'route' => 'content'
     //   ));



        // ... add more children
        return $menu;
    }
}


