<?php

namespace Emc23\SigsBundle\Command;

use Emc23\SigsBundle\Entity\J17JigsHobbitTypes;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Emc23\SigsBundle\Entity\J17JigsHobbits;
use Emc23\SigsBundle\Entity\Mudnames;
use Emc23\SigsBundle\JigsFactory;

class makeHobbitCommand extends ContainerAwareCommand
{

    protected function configure()
    {
        $this
            ->setName('Emc23:makeHobbit')
            ->setDescription('generate Hobbit')
            ->addArgument('name', InputArgument::OPTIONAL, 'Enter name of new hobbit?')
            ->addOption('yell', null, InputOption::VALUE_NONE, 'If set, the task will yell in uppercase letters')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $em                = $this->getContainer()->get('doctrine')->getEntityManager('default');
         //   $name = $input->getArgument('name');
         $file = (isset($_GET['f']) && !empty($_GET['f'])) ? $_GET['f'] : 'random' ;
         $name           = Mudnames::generate_name_from($file);

         $task              = new J17JigsHobbits();
         $jigs              = new JigsFactory($em);
         $hobbit            = $jigs->generateHobbit();
         $task->setName($name);
         echo 'Name:' . $name . PHP_EOL;
         //$halflingType->setType($hobbit['type']);
         $task->setType($hobbit['type']);
         $task->setFaction($hobbit['faction_number']);
         $task->setGid($hobbit['Gid'] );
         $task->setHealth($hobbit['health']);
         $task->setStrength($hobbit['strength'] );
         $task->setIntelligence($hobbit['intelligence']);
         $task->setOwner($hobbit['owner']->id);
         $task->setOwnerType($hobbit['owner']->type);
         $task->setContentment($hobbit['contentment']);

        $task->setX(rand(10,100));
        $task->setY(rand(10,100));

        $em->persist($task);
        //$em->persist($halflingType);
        $em->flush();
         $text='done';
         $output->writeln($text);
    }
}
