<?php
// src/AppBundle/Command/GreetCommand.php
namespace AppBundle\Command;

use AppBundle\Entity\J17JigsMonsters;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class makeMonsterCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('Emc23:makeMonster')
            ->setDescription('generate Monster')
            ->addArgument('name', InputArgument::OPTIONAL, 'Enter name of new hobbit?')
            ->addOption('yell', null, InputOption::VALUE_NONE, 'If set, the task will yell in uppercase letters')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $em                 = $this->getContainer()->get('doctrine')->getEntityManager('default');
        $monsterObject      = new J17JigsMonsters();
        $model              = $this->getContainer()->get('monstersModel');
        $monster            = $model->generate();
        echo 'Monster Generated' . PHP_EOL;

        $monstersTypeObject = $em
            ->getRepository("AppBundle:J17JigsMonsterTypes")
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
