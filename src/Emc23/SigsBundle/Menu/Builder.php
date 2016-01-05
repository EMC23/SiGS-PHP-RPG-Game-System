<?php
// src/emc23/DemoBundle/Menu/Builder.php
namespace Emc23\SigsBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;

class Builder

//class Builder extends ContainerAware
{
    public function mainMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');
        //$menu->setChildrenAttributes(array('id' => 'menu', 'class'=>'nav navbar'));
        $menu->setChildrenAttributes(array('id' => 'menu', 'class'=>'navbar'));


        $menu->addChild('Home', array('route' => 'emc23_sigs_homepage'));

        $menu->addChild('Players', array(
            'route' => 'emc23_sigs_players'
        ));
        
        $menu->addChild('Buildings', array(
            'route' => 'emc23_sigs_buildings'
        ));
        
        $menu->addChild('Characters', array(
            'route' => 'emc23_sigs_characters'
         ));
         
        $menu->addChild('Factions', array(
            'route' => 'emc23_sigs_factions'
         ));

         $menu->addChild('Groups', array(
            'route' => 'emc23_sigs_groups'
         ));
         
         $menu->addChild('Hobbits', array(
            'route' => 'emc23_sigs_hobbits'
         ));

        $menu->addChild('HobbitTypes', array(
            'route' => 'emc23_sigs_hobbit_types'
        ));

        $menu->addChild('Monsters', array(
            'route' => 'emc23_sigs_monsters'
        ));

        $menu->addChild('MonsterTypes', array(
            'route' => 'emc23_sigs_monster_types'
        ));

        return $menu;
    }
}


