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

//protected $em;

  //  public function __construct($em)
  //  {
 //       $this->em = $em;
 //   }

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
         //   $name = $input->getArgument('name');
         //$file = (isset($_GET['f']) && !empty($_GET['f'])) ? $_GET['f'] : 'random' ;
         $task              = new J17JigsMonsters();
         $jigs              = new JigsFactory($em);
         $monster           = $jigs->generateMonster();
         $task->setType($monster['type']);
         $task->setHealth($monster['health']);
         $task->setStrength($monster['strength'] );
         $task->setIntelligence($monster['intelligence']);
         $task->setX(rand(10,100));
         $task->setY(rand(10,100));
         $em->persist($task);
         $em->flush();
         $text='done';
         $output->writeln($text);
    }
}
