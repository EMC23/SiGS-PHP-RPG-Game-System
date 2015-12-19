<?php

namespace Emc23\SigsBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Emc23\SigsBundle\Entity\J17JigsHobbits;
use Emc23\SigsBundle\Entity\Mudnames;

class GreetCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('Emc23:greet')
            ->setDescription('Greet someone')
            ->addArgument('name', InputArgument::OPTIONAL, 'Who do you want to greet?')
            ->addOption('yell', null, InputOption::VALUE_NONE, 'If set, the task will yell in uppercase letters')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $file              = (isset($_GET['f']) && !empty($_GET['f'])) ? $_GET['f'] : 'random' ;
        $name              = Mudnames::generate_name_from($file);
        $em                = $this->getContainer()->get('doctrine')->getEntityManager('default');
        $task              = new J17JigsHobbits();
        $jigs              = $this->getContainer()->get('my_JigsFactory');
        $hobbit            = $jigs->generateHobbit();
               
        $task->setName($name);

        echo 'Name:' . $name . PHP_EOL;

        $task->setFaction($hobbit['faction_number']);

        echo 'Faction:' . $hobbit['faction_number'] . PHP_EOL;

        $task->setGid($hobbit['Gid'] ); 
        $task->setHealth($hobbit['health']);     
        $task->setStrength($hobbit['strength'] );         
        $task->setIntelligence($hobbit['intelligence']);     
        $task->setOwner($hobbit['owner']->id);
        $task->setOwner_type($hobbit['owner']->type);    
        $task->setContentment($hobbit['contentment']);
        $text = $hobbit['owner']->type;
          
        $output->writeln($text);    

        $em->persist($task);
        $em->flush();
     

        
    }
}
