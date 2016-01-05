<?php

namespace Emc23\SigsBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Emc23\SigsBundle\Entity\J17JigsMonsters;

use Emc23\SigsBundle\JigsFactory;

class makeMonsterCommand extends ContainerAwareCommand
{

    protected function configure()
    {
        $this
            ->setName('Emc23:makeMonster')
            ->setDescription('generate Hobbit')
            ->addArgument('name', InputArgument::OPTIONAL, 'Enter name of new hobbit?')
            ->addOption('yell', null, InputOption::VALUE_NONE, 'If set, the task will yell in uppercase letters')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
         $em                = $this->getContainer()->get('doctrine')->getEntityManager('default');
         $monsterObject     = new J17JigsMonsters();
         //$monstersTypeObject = new J17JigsMonsterType();
         $jigs              = new JigsFactory($em);
         $monster           = $jigs->generateMonster();
         echo 'Monster Generated' . PHP_EOL;

        $monstersTypeObject = $em
            //  ->getRepository('AcmeSigsBundle:J17JigsPlayers')
            ->getRepository("Emc23SigsBundle:J17JigsMonsterTypes")
            ->find($monster['type']);

        $monsterObject->setType( $monstersTypeObject );
        $monsterObject->setHealth($monster['health']);
        $monsterObject->setStrength($monster['strength'] );
        $monsterObject->setIntelligence($monster['intelligence']);
        $monsterObject->setX(rand(10,100));
        $monsterObject->setY(rand(10,100));
        $monsterObject->setGrid($monster['grid']);
        $em->persist($monsterObject);
        $em->flush();
        $text='done';
        $output->writeln($text);
    }
}
